<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP;

class GetSWFFullNameFontStreamWithFamilyAndFace
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
     * @var string $outFontFace
     */
    protected $outFontFace = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     * @param string $outFamilyName
     * @param string $outFontFace
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null, $outFamilyName = null, $outFontFace = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFontID = $inFontID;
      $this->outFamilyName = $outFamilyName;
      $this->outFontFace = $outFontFace;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace
     */
    public function setOutFamilyName($outFamilyName)
    {
      $this->outFamilyName = $outFamilyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutFontFace()
    {
      return $this->outFontFace;
    }

    /**
     * @param string $outFontFace
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace
     */
    public function setOutFontFace($outFontFace)
    {
      $this->outFontFace = $outFontFace;
      return $this;
    }

}
