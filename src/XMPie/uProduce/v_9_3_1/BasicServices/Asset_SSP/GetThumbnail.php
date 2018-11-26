<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP;

class GetThumbnail
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     * @param int $inWidth
     * @param int $inLength
     * @param int $inResolution
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inWidth = null, $inLength = null, $inResolution = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetID = $inAssetID;
      $this->inWidth = $inWidth;
      $this->inLength = $inLength;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Asset_SSP\GetThumbnail
     */
    public function setInResolution($inResolution)
    {
      $this->inResolution = $inResolution;
      return $this;
    }

}
