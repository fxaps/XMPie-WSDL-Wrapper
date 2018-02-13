<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP;

class AddEvents
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var ArrayOfTrackEvent $inEvents
     */
    protected $inEvents = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inJobID
     * @param ArrayOfTrackEvent $inEvents
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inJobID = null, $inEvents = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inJobID = $inJobID;
      $this->inEvents = $inEvents;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\AddEvents
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\AddEvents
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\AddEvents
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
      return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\AddEvents
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return ArrayOfTrackEvent
     */
    public function getInEvents()
    {
      return $this->inEvents;
    }

    /**
     * @param ArrayOfTrackEvent $inEvents
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Tracker_SSP\AddEvents
     */
    public function setInEvents($inEvents)
    {
      $this->inEvents = $inEvents;
      return $this;
    }

}
