<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP;

class GetSWFFontFileStreamResponse
{

    /**
     * @var base64Binary $GetSWFFontFileStreamResult
     */
    protected $GetSWFFontFileStreamResult = null;

    /**
     * @var string $outFamilyName
     */
    protected $outFamilyName = null;

    /**
     * @var string $outFontStyle
     */
    protected $outFontStyle = null;

    /**
     * @param base64Binary $GetSWFFontFileStreamResult
     * @param string $outFamilyName
     * @param string $outFontStyle
     */
    public function __construct($GetSWFFontFileStreamResult = null, $outFamilyName = null, $outFontStyle = null)
    {
      $this->GetSWFFontFileStreamResult = $GetSWFFontFileStreamResult;
      $this->outFamilyName = $outFamilyName;
      $this->outFontStyle = $outFontStyle;
    }

    /**
     * @return base64Binary
     */
    public function getGetSWFFontFileStreamResult()
    {
      return $this->GetSWFFontFileStreamResult;
    }

    /**
     * @param base64Binary $GetSWFFontFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetSWFFontFileStreamResponse
     */
    public function setGetSWFFontFileStreamResult($GetSWFFontFileStreamResult)
    {
      $this->GetSWFFontFileStreamResult = $GetSWFFontFileStreamResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetSWFFontFileStreamResponse
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetSWFFontFileStreamResponse
     */
    public function setOutFontStyle($outFontStyle)
    {
      $this->outFontStyle = $outFontStyle;
      return $this;
    }

}
