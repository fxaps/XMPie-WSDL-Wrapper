<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRecipientsXMPDataSet
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
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

    /**
     * @var boolean $inAsPairs
     */
    protected $inAsPairs = null;

    /**
     * @var boolean $inIncludeTabularAdorsData
     */
    protected $inIncludeTabularAdorsData = null;

    /**
     * @var string $inEventContext
     */
    protected $inEventContext = null;

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
     * @param ArrayOfString $inADORNames
     * @param ArrayOfString $inRecipientIDs
     * @param boolean $inAsPairs
     * @param boolean $inIncludeTabularAdorsData
     * @param string $inEventContext
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inADORNames = null, $inRecipientIDs = null, $inAsPairs = null, $inIncludeTabularAdorsData = null, $inEventContext = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inADORNames = $inADORNames;
      $this->inRecipientIDs = $inRecipientIDs;
      $this->inAsPairs = $inAsPairs;
      $this->inIncludeTabularAdorsData = $inIncludeTabularAdorsData;
      $this->inEventContext = $inEventContext;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInADORNames($inADORNames)
    {
      $this->inADORNames = $inADORNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
      $this->inRecipientIDs = $inRecipientIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInAsPairs()
    {
      return $this->inAsPairs;
    }

    /**
     * @param boolean $inAsPairs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInAsPairs($inAsPairs)
    {
      $this->inAsPairs = $inAsPairs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeTabularAdorsData()
    {
      return $this->inIncludeTabularAdorsData;
    }

    /**
     * @param boolean $inIncludeTabularAdorsData
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInIncludeTabularAdorsData($inIncludeTabularAdorsData)
    {
      $this->inIncludeTabularAdorsData = $inIncludeTabularAdorsData;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInEventContext($inEventContext)
    {
      $this->inEventContext = $inEventContext;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
