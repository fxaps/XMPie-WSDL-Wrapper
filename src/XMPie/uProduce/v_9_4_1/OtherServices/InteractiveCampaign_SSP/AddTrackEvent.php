<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP;

class AddTrackEvent
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

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
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param string $inEventType
     * @param string $inRecipientID
     * @param string $inEventContext
     * @param XMPDateTime $inHitDate
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inEventType = null, $inRecipientID = null, $inEventContext = null, $inHitDate = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
      return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
      return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\AddTrackEvent
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
