<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class CreateCPKG
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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var ArrayOfString $inDocumentIDArray
     */
    protected $inDocumentIDArray = null;

    /**
     * @var ArrayOfString $inDataSourceIDArray
     */
    protected $inDataSourceIDArray = null;

    /**
     * @var ArrayOfString $inAssetSourceIDArray
     */
    protected $inAssetSourceIDArray = null;

    /**
     * @var boolean $includeFonts
     */
    protected $includeFonts = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inName
     * @param ArrayOfString $inDocumentIDArray
     * @param ArrayOfString $inDataSourceIDArray
     * @param ArrayOfString $inAssetSourceIDArray
     * @param boolean $includeFonts
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inName = null, $inDocumentIDArray = null, $inDataSourceIDArray = null, $inAssetSourceIDArray = null, $includeFonts = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inName = $inName;
      $this->inDocumentIDArray = $inDocumentIDArray;
      $this->inDataSourceIDArray = $inDataSourceIDArray;
      $this->inAssetSourceIDArray = $inAssetSourceIDArray;
      $this->includeFonts = $includeFonts;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDocumentIDArray()
    {
      return $this->inDocumentIDArray;
    }

    /**
     * @param ArrayOfString $inDocumentIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setInDocumentIDArray($inDocumentIDArray)
    {
      $this->inDocumentIDArray = $inDocumentIDArray;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDataSourceIDArray()
    {
      return $this->inDataSourceIDArray;
    }

    /**
     * @param ArrayOfString $inDataSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setInDataSourceIDArray($inDataSourceIDArray)
    {
      $this->inDataSourceIDArray = $inDataSourceIDArray;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAssetSourceIDArray()
    {
      return $this->inAssetSourceIDArray;
    }

    /**
     * @param ArrayOfString $inAssetSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setInAssetSourceIDArray($inAssetSourceIDArray)
    {
      $this->inAssetSourceIDArray = $inAssetSourceIDArray;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeFonts()
    {
      return $this->includeFonts;
    }

    /**
     * @param boolean $includeFonts
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateCPKG
     */
    public function setIncludeFonts($includeFonts)
    {
      $this->includeFonts = $includeFonts;
      return $this;
    }

}
