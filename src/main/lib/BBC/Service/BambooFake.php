<?php
/**
 * BBC_Service_BambooFake
 *
 * A fail state bamboo
 *
 * @category BBC
 * @package BBC_Service_Bamboo
 * @copyright Copyright (c) 2007 - 2009 BBC (http://www.bbc.co.uk)
 * @author Rich Middleditch <richard.middleditch1@bbc.co.uk>
 */

class BBC_Service_BambooFake extends BBC_Service_BambooFail
{
    /**
     * @BBC_Service_Bamboo_Client_Fail
     */
    protected $_client = null;

    protected static $_paths = array();


    public function __construct(array $parameters = array()) {
        parent::__construct($parameters);
        $this->_client = new BBC_Service_Bamboo_Client_Fake(
            $this->_configuration->getConfiguration()->httpmulti,
            self::$_keywords,
            self::$_paths
        );
    }

    /**
     *  Adds a path on the file system to the fixtures directory
     */
    public static function addPath($path) {
        self::$_paths[] = $path;
    }

    public function fetch($feedName, $params) {
        $params = parent::_prepareParams($params);
        $response = $this->_client->get($feedName, $params);

        return json_decode($response->getBody());
    }
}