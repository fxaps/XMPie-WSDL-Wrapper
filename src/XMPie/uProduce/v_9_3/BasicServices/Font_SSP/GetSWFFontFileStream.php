<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP;

class GetSWFFontFileStream
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
     * @var string $outFamilyName
     */
    protected $outFamilyName = null;

    /**
     * @var string $outFontStyle
     */
    protected $outFontStyle = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     * @param string $outFamilyName
     * @param string $outFontStyle
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null, $outFamilyName = null, $outFontStyle = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFontID = $inFontID;
      $this->outFamilyName = $outFamilyName;
      $this->outFontStyle = $outFontStyle;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP\GetSWFFontFileStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP\GetSWFFontFileStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP\GetSWFFontFileStream
     */
    public function setInFontID($inFontID)
    {
      $this->inFontID = $inFontID;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutFamilyName()
    {
      return $this->outFamilyName;
    }

    /**
     * @param string $outFamilyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP\GetSWFFontFileStream
     */
    public function setOutFamilyName($outFamilyName)
    {
      $this->outFamilyName = $outFamilyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutFontStyle()
    {
      return $this->outFontStyle;
    }

    /**
     * @param string $outFontStyle
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Font_SSP\GetSWFFontFileStream
     */
    public function setOutFontStyle($outFontStyle)
    {
      $this->outFontStyle = $outFontStyle;
      return $this;
    }

}
