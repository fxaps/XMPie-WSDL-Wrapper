<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP;

class CreateThumbnailToTempStorage
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
     * @var string $inFilePath
     */
    protected $inFilePath = null;

    /**
     * @var string $inOutputMimeType
     */
    protected $inOutputMimeType = null;

    /**
     * @var int $inMaxPixelWidth
     */
    protected $inMaxPixelWidth = null;

    /**
     * @var int $inMaxPixelHeight
     */
    protected $inMaxPixelHeight = null;

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
     * @param string $inFilePath
     * @param string $inOutputMimeType
     * @param int $inMaxPixelWidth
     * @param int $inMaxPixelHeight
     * @param int $inResolution
     * @param string $inCopyFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilePath = null, $inOutputMimeType = null, $inMaxPixelWidth = null, $inMaxPixelHeight = null, $inResolution = null, $inCopyFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFilePath = $inFilePath;
      $this->inOutputMimeType = $inOutputMimeType;
      $this->inMaxPixelWidth = $inMaxPixelWidth;
      $this->inMaxPixelHeight = $inMaxPixelHeight;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInFilePath($inFilePath)
    {
      $this->inFilePath = $inFilePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOutputMimeType()
    {
      return $this->inOutputMimeType;
    }

    /**
     * @param string $inOutputMimeType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInOutputMimeType($inOutputMimeType)
    {
      $this->inOutputMimeType = $inOutputMimeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getInMaxPixelWidth()
    {
      return $this->inMaxPixelWidth;
    }

    /**
     * @param int $inMaxPixelWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInMaxPixelWidth($inMaxPixelWidth)
    {
      $this->inMaxPixelWidth = $inMaxPixelWidth;
      return $this;
    }

    /**
     * @return int
     */
    public function getInMaxPixelHeight()
    {
      return $this->inMaxPixelHeight;
    }

    /**
     * @param int $inMaxPixelHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInMaxPixelHeight($inMaxPixelHeight)
    {
      $this->inMaxPixelHeight = $inMaxPixelHeight;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorage
     */
    public function setInCopyFileName($inCopyFileName)
    {
      $this->inCopyFileName = $inCopyFileName;
      return $this;
    }

}
