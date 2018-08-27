<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class CloneCustom
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
     * @var string $inTargetAccountID
     */
    protected $inTargetAccountID = null;

    /**
     * @var string $inTargetName
     */
    protected $inTargetName = null;

    /**
     * @var ArrayOfString $inDocumentIDs
     */
    protected $inDocumentIDs = null;

    /**
     * @var ArrayOfString $inDataSourceIDs
     */
    protected $inDataSourceIDs = null;

    /**
     * @var ArrayOfString $inAssetSourceIDs
     */
    protected $inAssetSourceIDs = null;

    /**
     * @var boolean $inIncludeFonts
     */
    protected $inIncludeFonts = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inTargetAccountID
     * @param string $inTargetName
     * @param ArrayOfString $inDocumentIDs
     * @param ArrayOfString $inDataSourceIDs
     * @param ArrayOfString $inAssetSourceIDs
     * @param boolean $inIncludeFonts
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inTargetAccountID = null, $inTargetName = null, $inDocumentIDs = null, $inDataSourceIDs = null, $inAssetSourceIDs = null, $inIncludeFonts = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inTargetAccountID = $inTargetAccountID;
      $this->inTargetName = $inTargetName;
      $this->inDocumentIDs = $inDocumentIDs;
      $this->inDataSourceIDs = $inDataSourceIDs;
      $this->inAssetSourceIDs = $inAssetSourceIDs;
      $this->inIncludeFonts = $inIncludeFonts;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetAccountID()
    {
      return $this->inTargetAccountID;
    }

    /**
     * @param string $inTargetAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInTargetAccountID($inTargetAccountID)
    {
      $this->inTargetAccountID = $inTargetAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetName()
    {
      return $this->inTargetName;
    }

    /**
     * @param string $inTargetName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInTargetName($inTargetName)
    {
      $this->inTargetName = $inTargetName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDocumentIDs()
    {
      return $this->inDocumentIDs;
    }

    /**
     * @param ArrayOfString $inDocumentIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInDocumentIDs($inDocumentIDs)
    {
      $this->inDocumentIDs = $inDocumentIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDataSourceIDs()
    {
      return $this->inDataSourceIDs;
    }

    /**
     * @param ArrayOfString $inDataSourceIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInDataSourceIDs($inDataSourceIDs)
    {
      $this->inDataSourceIDs = $inDataSourceIDs;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAssetSourceIDs()
    {
      return $this->inAssetSourceIDs;
    }

    /**
     * @param ArrayOfString $inAssetSourceIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInAssetSourceIDs($inAssetSourceIDs)
    {
      $this->inAssetSourceIDs = $inAssetSourceIDs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeFonts()
    {
      return $this->inIncludeFonts;
    }

    /**
     * @param boolean $inIncludeFonts
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInIncludeFonts($inIncludeFonts)
    {
      $this->inIncludeFonts = $inIncludeFonts;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CloneCustom
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
