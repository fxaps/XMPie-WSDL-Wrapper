<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP;

class SendMail
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
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

    /**
     * @var string $inEmailProviderID
     */
    protected $inEmailProviderID = null;

    /**
     * @var EmailHeaderInfo $inEmailHeaderInfo
     */
    protected $inEmailHeaderInfo = null;

    /**
     * @var ArrayOfString $inEmailBodyDocumentIDs
     */
    protected $inEmailBodyDocumentIDs = null;

    /**
     * @var ArrayOfEmailBodyOptions $inEmailBodyOptionsArray
     */
    protected $inEmailBodyOptionsArray = null;

    /**
     * @var int $inErrorPolicy
     */
    protected $inErrorPolicy = null;

    /**
     * @var string $inXSLTemplatePath
     */
    protected $inXSLTemplatePath = null;

    /**
     * @var string $inSkipCondition
     */
    protected $inSkipCondition = null;

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
     * @param ArrayOfString $inRecipientIDs
     * @param string $inEmailProviderID
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @param ArrayOfString $inEmailBodyDocumentIDs
     * @param ArrayOfEmailBodyOptions $inEmailBodyOptionsArray
     * @param int $inErrorPolicy
     * @param string $inXSLTemplatePath
     * @param string $inSkipCondition
     * @param string $inEventContext
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inRecipientIDs = null, $inEmailProviderID = null, $inEmailHeaderInfo = null, $inEmailBodyDocumentIDs = null, $inEmailBodyOptionsArray = null, $inErrorPolicy = null, $inXSLTemplatePath = null, $inSkipCondition = null, $inEventContext = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inRecipientIDs = $inRecipientIDs;
      $this->inEmailProviderID = $inEmailProviderID;
      $this->inEmailHeaderInfo = $inEmailHeaderInfo;
      $this->inEmailBodyDocumentIDs = $inEmailBodyDocumentIDs;
      $this->inEmailBodyOptionsArray = $inEmailBodyOptionsArray;
      $this->inErrorPolicy = $inErrorPolicy;
      $this->inXSLTemplatePath = $inXSLTemplatePath;
      $this->inSkipCondition = $inSkipCondition;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
      $this->inRecipientIDs = $inRecipientIDs;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailProviderID()
    {
      return $this->inEmailProviderID;
    }

    /**
     * @param string $inEmailProviderID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInEmailProviderID($inEmailProviderID)
    {
      $this->inEmailProviderID = $inEmailProviderID;
      return $this;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getInEmailHeaderInfo()
    {
      return $this->inEmailHeaderInfo;
    }

    /**
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInEmailHeaderInfo($inEmailHeaderInfo)
    {
      $this->inEmailHeaderInfo = $inEmailHeaderInfo;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInEmailBodyDocumentIDs()
    {
      return $this->inEmailBodyDocumentIDs;
    }

    /**
     * @param ArrayOfString $inEmailBodyDocumentIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInEmailBodyDocumentIDs($inEmailBodyDocumentIDs)
    {
      $this->inEmailBodyDocumentIDs = $inEmailBodyDocumentIDs;
      return $this;
    }

    /**
     * @return ArrayOfEmailBodyOptions
     */
    public function getInEmailBodyOptionsArray()
    {
      return $this->inEmailBodyOptionsArray;
    }

    /**
     * @param ArrayOfEmailBodyOptions $inEmailBodyOptionsArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInEmailBodyOptionsArray($inEmailBodyOptionsArray)
    {
      $this->inEmailBodyOptionsArray = $inEmailBodyOptionsArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getInErrorPolicy()
    {
      return $this->inErrorPolicy;
    }

    /**
     * @param int $inErrorPolicy
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInErrorPolicy($inErrorPolicy)
    {
      $this->inErrorPolicy = $inErrorPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getInXSLTemplatePath()
    {
      return $this->inXSLTemplatePath;
    }

    /**
     * @param string $inXSLTemplatePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInXSLTemplatePath($inXSLTemplatePath)
    {
      $this->inXSLTemplatePath = $inXSLTemplatePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSkipCondition()
    {
      return $this->inSkipCondition;
    }

    /**
     * @param string $inSkipCondition
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInSkipCondition($inSkipCondition)
    {
      $this->inSkipCondition = $inSkipCondition;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\SendMail
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
