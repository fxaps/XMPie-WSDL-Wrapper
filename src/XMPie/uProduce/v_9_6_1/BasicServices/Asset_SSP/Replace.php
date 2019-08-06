<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP;

class Replace
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
     * @var string $inAssetID
     */
    protected $inAssetID = null;

    /**
     * @var string $inFilePath
     */
    protected $inFilePath = null;

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
     * @param string $inAssetID
     * @param string $inFilePath
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inFilePath = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
      $this->inFilePath = $inFilePath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetID()
    {
      return $this->inAssetID;
    }

    /**
     * @param string $inAssetID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
     */
    public function setInAssetID($inAssetID)
    {
      $this->inAssetID = $inAssetID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFilePath()
    {
      return $this->inFilePath;
    }

    /**
     * @param string $inFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
     */
    public function setInFilePath($inFilePath)
    {
      $this->inFilePath = $inFilePath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\Replace
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
