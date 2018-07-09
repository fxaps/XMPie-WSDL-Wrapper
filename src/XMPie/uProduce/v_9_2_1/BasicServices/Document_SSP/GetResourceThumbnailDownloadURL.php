<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class GetResourceThumbnailDownloadURL
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var int $inResourceIndex
     */
    protected $inResourceIndex = null;

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
     * @param string $inDocumentID
     * @param int $inResourceIndex
     * @param int $inWidth
     * @param int $inHeight
     * @param int $inResolution
     * @param string $inMimeType
     * @param boolean $inIsInline
     * @param string $inMacTypeHex
     * @param string $inMacCreatorHex
     * @param boolean $inReturnInternalURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourceIndex = null, $inWidth = null, $inHeight = null, $inResolution = null, $inMimeType = null, $inIsInline = null, $inMacTypeHex = null, $inMacCreatorHex = null, $inReturnInternalURL = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourceIndex = $inResourceIndex;
      $this->inWidth = $inWidth;
      $this->inHeight = $inHeight;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInResourceIndex()
    {
      return $this->inResourceIndex;
    }

    /**
     * @param int $inResourceIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
     */
    public function setInResourceIndex($inResourceIndex)
    {
      $this->inResourceIndex = $inResourceIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
      $this->inReturnInternalURL = $inReturnInternalURL;
      return $this;
    }

}
