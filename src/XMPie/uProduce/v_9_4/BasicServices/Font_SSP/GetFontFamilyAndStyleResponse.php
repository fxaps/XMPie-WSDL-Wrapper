<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP;

class GetFontFamilyAndStyleResponse
{

    /**
     * @var string $outFamilyName
     */
    protected $outFamilyName = null;

    /**
     * @var string $outFontStyle
     */
    protected $outFontStyle = null;

    /**
     * @param string $outFamilyName
     * @param string $outFontStyle
     */
    public function __construct($outFamilyName = null, $outFontStyle = null)
    {
      $this->outFamilyName = $outFamilyName;
      $this->outFontStyle = $outFontStyle;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetFontFamilyAndStyleResponse
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetFontFamilyAndStyleResponse
     */
    public function setOutFontStyle($outFontStyle)
    {
      $this->outFontStyle = $outFontStyle;
      return $this;
    }

}
