<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP;

class UpdateADORsValuesForRecipient
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
     * @var ArrayOfString $inADORNames
     */
    protected $inADORNames = null;

    /**
     * @var ArrayOfString $inADORValues
     */
    protected $inADORValues = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @var string $inEventContext
     */
    protected $inEventContext = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param ArrayOfString $inADORNames
     * @param ArrayOfString $inADORValues
     * @param string $inRecipientID
     * @param string $inEventContext
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inADORNames = null, $inADORValues = null, $inRecipientID = null, $inEventContext = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inADORNames = $inADORNames;
      $this->inADORValues = $inADORValues;
      $this->inRecipientID = $inRecipientID;
      $this->inEventContext = $inEventContext;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInADORNames()
    {
      return $this->inADORNames;
    }

    /**
     * @param ArrayOfString $inADORNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
     */
    public function setInADORNames($inADORNames)
    {
      $this->inADORNames = $inADORNames;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInADORValues()
    {
      return $this->inADORValues;
    }

    /**
     * @param ArrayOfString $inADORValues
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
     */
    public function setInADORValues($inADORValues)
    {
      $this->inADORValues = $inADORValues;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient
     */
    public function setInEventContext($inEventContext)
    {
      $this->inEventContext = $inEventContext;
      return $this;
    }

}
