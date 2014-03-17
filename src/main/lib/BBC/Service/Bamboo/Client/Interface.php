<?php

/**
 * BBC_Service_Bamboo_Client_Interface
 *
 * The interface a Bamboo client must conform to
 *
 * @category BBC
 * @package BBC_Service_Bamboo
 * @copyright Copyright (c) 2014 BBC (http://www.bbc.co.uk)
 */
interface BBC_Service_Bamboo_Client_Interface
{
    /**
     * Performs the given requests, returning an array
     * of returns
     *
     * @param array $requests
     * @return array
     */
    public function get($path, array $params = array());
}
