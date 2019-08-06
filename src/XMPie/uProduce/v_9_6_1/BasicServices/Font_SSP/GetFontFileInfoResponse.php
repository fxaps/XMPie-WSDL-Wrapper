<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP;

class GetFontFileInfoResponse
{

    /**
     * @var FontInfo $GetFontFileInfoResult
     */
    protected $GetFontFileInfoResult = null;

    /**
     * @param FontInfo $GetFontFileInfoResult
     */
    public function __construct($GetFontFileInfoResult = null)
    {
      $this->GetFontFileInfoResult = $GetFontFileInfoResult;
    }

    /**
     * @return FontInfo
     */
    public function getGetFontFileInfoResult()
    {
      return $this->GetFontFileInfoResult;
    }

    /**
     * @param FontInfo $GetFontFileInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFileInfoResponse
     */
    public function setGetFontFileInfoResult($GetFontFileInfoResult)
    {
      $this->GetFontFileInfoResult = $GetFontFileInfoResult;
      return $this;
    }

}
