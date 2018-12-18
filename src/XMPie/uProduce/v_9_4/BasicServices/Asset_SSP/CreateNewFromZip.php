<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP;

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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

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
     * @param string $inAssetSourceID
     * @param string $inZipPath
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inZipPath = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
      return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Asset_SSP\CreateNewFromZip
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
