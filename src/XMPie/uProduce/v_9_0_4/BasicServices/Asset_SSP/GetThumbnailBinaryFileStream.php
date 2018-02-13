<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP;

class GetThumbnailBinaryFileStream
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
     * @var string $inMimeType
     */
    protected $inMimeType = null;

    /**
     * @var int $inWidth
     */
    protected $inWidth = null;

    /**
     * @var int $inHeight
     */
    protected $inHeight = null;

    /**
     * @var int $inResolution
     */
    protected $inResolution = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     * @param string $inMimeType
     * @param int $inWidth
     * @param int $inHeight
     * @param int $inResolution
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inMimeType = null, $inWidth = null, $inHeight = null, $inResolution = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
      $this->inMimeType = $inMimeType;
      $this->inWidth = $inWidth;
      $this->inHeight = $inHeight;
      $this->inResolution = $inResolution;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
     */
    public function setInAssetID($inAssetID)
    {
      $this->inAssetID = $inAssetID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMimeType()
    {
      return $this->inMimeType;
    }

    /**
     * @param string $inMimeType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
     */
    public function setInMimeType($inMimeType)
    {
      $this->inMimeType = $inMimeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getInWidth()
    {
      return $this->inWidth;
    }

    /**
     * @param int $inWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
     */
    public function setInWidth($inWidth)
    {
      $this->inWidth = $inWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getInHeight()
    {
      return $this->inHeight;
    }

    /**
     * @param int $inHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
     */
    public function setInHeight($inHeight)
    {
      $this->inHeight = $inHeight;
      return $this;
    }

    /**
     * @return int
     */
    public function getInResolution()
    {
      return $this->inResolution;
    }

    /**
     * @param int $inResolution
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream
     */
    public function setInResolution($inResolution)
    {
      $this->inResolution = $inResolution;
      return $this;
    }

}
