<?php
/**
 * BBC_Service_BambooMock
 *
 * A mock service class
 *
 * @category BBC
 * @package BBC_Service
 * @copyright Copyright (c) 2014 BBC (http://www.bbc.co.uk)
 */

class BBC_Service_BambooMock extends BBC_Service_Bamboo
{

    /**
     * Construct a new BBC_Service_Bamboo
     *
     * @param $text
     * @return void
     */
    public function __construct($params) {
        parent::__construct($params);

        $this->setClient(
            new BBC_Service_Bamboo_Client_HttpMultiMock(
                $this->_configuration->getConfiguration()->httpmulti
            )
        );
    }

}
