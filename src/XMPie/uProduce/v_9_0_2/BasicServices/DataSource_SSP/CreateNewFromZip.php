<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP;

class CreateNewFromZip
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inConnectionString
     */
    protected $inConnectionString = null;

    /**
     * @var string $inAdditionalInfo
     */
    protected $inAdditionalInfo = null;

    /**
     * @var string $inZipPath
     */
    protected $inZipPath = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @var boolean $inDeleteEmptySourceFolder
     */
    protected $inDeleteEmptySourceFolder = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inType
     * @param string $inName
     * @param string $inConnectionString
     * @param string $inAdditionalInfo
     * @param string $inZipPath
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inType = null, $inName = null, $inConnectionString = null, $inAdditionalInfo = null, $inZipPath = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inType = $inType;
      $this->inName = $inName;
      $this->inConnectionString = $inConnectionString;
      $this->inAdditionalInfo = $inAdditionalInfo;
      $this->inZipPath = $inZipPath;
      $this->inDeleteSource = $inDeleteSource;
      $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInConnectionString()
    {
      return $this->inConnectionString;
    }

    /**
     * @param string $inConnectionString
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInConnectionString($inConnectionString)
    {
      $this->inConnectionString = $inConnectionString;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAdditionalInfo()
    {
      return $this->inAdditionalInfo;
    }

    /**
     * @param string $inAdditionalInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInAdditionalInfo($inAdditionalInfo)
    {
      $this->inAdditionalInfo = $inAdditionalInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInZipPath()
    {
      return $this->inZipPath;
    }

    /**
     * @param string $inZipPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInZipPath($inZipPath)
    {
      $this->inZipPath = $inZipPath;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
      return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteEmptySourceFolder()
    {
      return $this->inDeleteEmptySourceFolder;
    }

    /**
     * @param boolean $inDeleteEmptySourceFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInDeleteEmptySourceFolder($inDeleteEmptySourceFolder)
    {
      $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\CreateNewFromZip
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
