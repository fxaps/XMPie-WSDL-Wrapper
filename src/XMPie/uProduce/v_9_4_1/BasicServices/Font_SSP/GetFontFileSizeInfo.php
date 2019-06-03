<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP;

class GetFontFileSizeInfo
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
     * @var string $inFontID
     */
    protected $inFontID = null;

    /**
     * @var float $inSize
     */
    protected $inSize = null;

    /**
     * @var int $inFaceIndex
     */
    protected $inFaceIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     * @param float $inSize
     * @param int $inFaceIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null, $inSize = null, $inFaceIndex = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFontID = $inFontID;
      $this->inSize = $inSize;
      $this->inFaceIndex = $inFaceIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFontID()
    {
      return $this->inFontID;
    }

    /**
     * @param string $inFontID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfo
     */
    public function setInFontID($inFontID)
    {
      $this->inFontID = $inFontID;
      return $this;
    }

    /**
     * @return float
     */
    public function getInSize()
    {
      return $this->inSize;
    }

    /**
     * @param float $inSize
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfo
     */
    public function setInSize($inSize)
    {
      $this->inSize = $inSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getInFaceIndex()
    {
      return $this->inFaceIndex;
    }

    /**
     * @param int $inFaceIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfo
     */
    public function setInFaceIndex($inFaceIndex)
    {
      $this->inFaceIndex = $inFaceIndex;
      return $this;
    }

}
