<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP;

class AddEvent
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
     * @var string $inEventType
     */
    protected $inEventType = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @var string $inEventContext
     */
    protected $inEventContext = null;

    /**
     * @var XMPDateTime $inHitDate
     */
    protected $inHitDate = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inJobID
     * @param string $inEventType
     * @param string $inRecipientID
     * @param string $inEventContext
     * @param XMPDateTime $inHitDate
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inJobID = null, $inEventType = null, $inRecipientID = null, $inEventContext = null, $inHitDate = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inJobID = $inJobID;
      $this->inEventType = $inEventType;
      $this->inRecipientID = $inRecipientID;
      $this->inEventContext = $inEventContext;
      $this->inHitDate = $inHitDate;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEventType()
    {
      return $this->inEventType;
    }

    /**
     * @param string $inEventType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInEventType($inEventType)
    {
      $this->inEventType = $inEventType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEventContext()
    {
      return $this->inEventContext;
    }

    /**
     * @param string $inEventContext
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInEventContext($inEventContext)
    {
      $this->inEventContext = $inEventContext;
      return $this;
    }

    /**
     * @return XMPDateTime
     */
    public function getInHitDate()
    {
      return $this->inHitDate;
    }

    /**
     * @param XMPDateTime $inHitDate
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInHitDate($inHitDate)
    {
      $this->inHitDate = $inHitDate;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Tracker_SSP\AddEvent
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
