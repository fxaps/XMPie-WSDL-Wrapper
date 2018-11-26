<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP;

class AddEventForRecipients
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
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

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
     * @param ArrayOfString $inRecipientIDs
     * @param string $inEventContext
     * @param XMPDateTime $inHitDate
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inJobID = null, $inEventType = null, $inRecipientIDs = null, $inEventContext = null, $inHitDate = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inJobID = $inJobID;
      $this->inEventType = $inEventType;
      $this->inRecipientIDs = $inRecipientIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
     */
    public function setInEventType($inEventType)
    {
      $this->inEventType = $inEventType;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInRecipientIDs()
    {
      return $this->inRecipientIDs;
    }

    /**
     * @param ArrayOfString $inRecipientIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
      $this->inRecipientIDs = $inRecipientIDs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Tracker_SSP\AddEventForRecipients
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
