<?php
/**
 * BBC_Service_Bamboo_Models_Broadcast
 *
 *
 * @category BBC
 * @package BBC_Service_Bamboo_Models
 * @author Craig Taub <craig.taub@bbc.co.uk>
 * @copyright Copyright (c) 2013 BBC (http://www.bbc.co.uk)
 */
class BBC_Service_Bamboo_Models_Broadcast extends BBC_Service_Bamboo_Models_Base
{
    protected $_type = "";
    // @codingStandardsIgnoreStart
    protected $_start_time = "";
    protected $_end_time = "";
    // @codingStandardsIgnoreEnd
    protected $_duration = array();
    protected $_episode = "";

    /**
     * Get type 
     * 
     * @return string
     */
    public function getType() {
        // @codingStandardsIgnoreStart
        return $this->_type;
        // @codingStandardsIgnoreEnd
    }

    /**
     * Get start time from episode
     * 
     * @return string
     */
    public function getStartTime() {
        // @codingStandardsIgnoreStart
        return $this->_start_time;
        // @codingStandardsIgnoreEnd
    }

    /**
     * Get end time from episode
     * 
     * @return string
     */
    public function getEndTime() {
        // @codingStandardsIgnoreStart
        return $this->_end_time;
        // @codingStandardsIgnoreEnd
    }

    /**
     * Get episode inside Broadcast
     * 
     * @return BBC_Service_Bamboo_Models_Episode
     */
    public function getEpisode() {
        // @codingStandardsIgnoreStart
        return $this->_episode;
        // @codingStandardsIgnoreEnd
    }


    /**
     * Get episode image inside Broadcast
     * 
     * @return string
     */
    public function getStandardImage() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getStandardImage();
        // @codingStandardsIgnoreEnd
    }


    /**
     * Get episode image inside Broadcast
     * 
     * @return string
     */
    public function getTitle() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getTitle();
        // @codingStandardsIgnoreEnd
    }

    /**
     * Get episode slug inside Broadcast
     * 
     * @return string
     */
    public function getSlug() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getSlug();
        // @codingStandardsIgnoreEnd
    }


    /**
     * Get episode priority version slug inside Broadcast
     * 
     * @return string
     */
    public function getPriorityVersionSlug() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getPriorityVersionSlug();
        // @codingStandardsIgnoreEnd
    }

    /**
     * Get episode image inside Broadcast
     * 
     * @return string
     */
    public function getSubtitle() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getSubtitle();
        // @codingStandardsIgnoreEnd
    }

    /**
     * 
     * @return string
     */
    public function getShortSynopsis() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getShortSynopsis();
        // @codingStandardsIgnoreEnd
    }


    /**
     * 
     * @return string
     */
    public function getReleaseDate() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getReleaseDate();
        // @codingStandardsIgnoreEnd
    }

    /**
     * 
     * @return string
     */
    public function getDuration() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getDuration();
        // @codingStandardsIgnoreEnd
    }

    /**
     * 
     * @return string
     */
    public function getMasterBrand() {
        // @codingStandardsIgnoreStart
        return $this->getEpisode()->getMasterBrand();
        // @codingStandardsIgnoreEnd
    }

}
