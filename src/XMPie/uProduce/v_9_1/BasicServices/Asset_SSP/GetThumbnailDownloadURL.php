<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP;

class GetThumbnailDownloadURL
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
     * @var int $inWidth
     */
    protected $inWidth = null;

    /**
     * @var int $inLength
     */
    protected $inLength = null;

    /**
     * @var int $inResolution
     */
    protected $inResolution = null;

    /**
     * @var string $inMimeType
     */
    protected $inMimeType = null;

    /**
     * @var boolean $inIsInline
     */
    protected $inIsInline = null;

    /**
     * @var string $inMacTypeHex
     */
    protected $inMacTypeHex = null;

    /**
     * @var string $inMacCreatorHex
     */
    protected $inMacCreatorHex = null;

    /**
     * @var boolean $inReturnInternalURL
     */
    protected $inReturnInternalURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     * @param int $inWidth
     * @param int $inLength
     * @param int $inResolution
     * @param string $inMimeType
     * @param boolean $inIsInline
     * @param string $inMacTypeHex
     * @param string $inMacCreatorHex
     * @param boolean $inReturnInternalURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inWidth = null, $inLength = null, $inResolution = null, $inMimeType = null, $inIsInline = null, $inMacTypeHex = null, $inMacCreatorHex = null, $inReturnInternalURL = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
      $this->inWidth = $inWidth;
      $this->inLength = $inLength;
      $this->inResolution = $inResolution;
      $this->inMimeType = $inMimeType;
      $this->inIsInline = $inIsInline;
      $this->inMacTypeHex = $inMacTypeHex;
      $this->inMacCreatorHex = $inMacCreatorHex;
      $this->inReturnInternalURL = $inReturnInternalURL;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInAssetID($inAssetID)
    {
      $this->inAssetID = $inAssetID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInWidth($inWidth)
    {
      $this->inWidth = $inWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getInLength()
    {
      return $this->inLength;
    }

    /**
     * @param int $inLength
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInLength($inLength)
    {
      $this->inLength = $inLength;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInResolution($inResolution)
    {
      $this->inResolution = $inResolution;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInMimeType($inMimeType)
    {
      $this->inMimeType = $inMimeType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsInline()
    {
      return $this->inIsInline;
    }

    /**
     * @param boolean $inIsInline
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInIsInline($inIsInline)
    {
      $this->inIsInline = $inIsInline;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMacTypeHex()
    {
      return $this->inMacTypeHex;
    }

    /**
     * @param string $inMacTypeHex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInMacTypeHex($inMacTypeHex)
    {
      $this->inMacTypeHex = $inMacTypeHex;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMacCreatorHex()
    {
      return $this->inMacCreatorHex;
    }

    /**
     * @param string $inMacCreatorHex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInMacCreatorHex($inMacCreatorHex)
    {
      $this->inMacCreatorHex = $inMacCreatorHex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInReturnInternalURL()
    {
      return $this->inReturnInternalURL;
    }

    /**
     * @param boolean $inReturnInternalURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Asset_SSP\GetThumbnailDownloadURL
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
      $this->inReturnInternalURL = $inReturnInternalURL;
      return $this;
    }

}
