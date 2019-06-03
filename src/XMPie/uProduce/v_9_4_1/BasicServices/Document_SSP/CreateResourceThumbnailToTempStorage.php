<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP;

class CreateResourceThumbnailToTempStorage
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
     * @var string $inCopyFileName
     */
    protected $inCopyFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param int $inResourceIndex
     * @param string $inMimeType
     * @param int $inWidth
     * @param int $inHeight
     * @param int $inResolution
     * @param string $inCopyFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourceIndex = null, $inMimeType = null, $inWidth = null, $inHeight = null, $inResolution = null, $inCopyFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourceIndex = $inResourceIndex;
      $this->inMimeType = $inMimeType;
      $this->inWidth = $inWidth;
      $this->inHeight = $inHeight;
      $this->inResolution = $inResolution;
      $this->inCopyFileName = $inCopyFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
     */
    public function setInResourceIndex($inResourceIndex)
    {
      $this->inResourceIndex = $inResourceIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
     */
    public function setInResolution($inResolution)
    {
      $this->inResolution = $inResolution;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCopyFileName()
    {
      return $this->inCopyFileName;
    }

    /**
     * @param string $inCopyFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage
     */
    public function setInCopyFileName($inCopyFileName)
    {
      $this->inCopyFileName = $inCopyFileName;
      return $this;
    }

}
