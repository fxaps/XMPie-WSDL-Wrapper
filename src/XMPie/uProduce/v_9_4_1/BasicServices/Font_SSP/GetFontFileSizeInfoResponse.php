<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP;

class GetFontFileSizeInfoResponse
{

    /**
     * @var FontSizeInfo $GetFontFileSizeInfoResult
     */
    protected $GetFontFileSizeInfoResult = null;

    /**
     * @param FontSizeInfo $GetFontFileSizeInfoResult
     */
    public function __construct($GetFontFileSizeInfoResult = null)
    {
      $this->GetFontFileSizeInfoResult = $GetFontFileSizeInfoResult;
    }

    /**
     * @return FontSizeInfo
     */
    public function getGetFontFileSizeInfoResult()
    {
      return $this->GetFontFileSizeInfoResult;
    }

    /**
     * @param FontSizeInfo $GetFontFileSizeInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\GetFontFileSizeInfoResponse
     */
    public function setGetFontFileSizeInfoResult($GetFontFileSizeInfoResult)
    {
      $this->GetFontFileSizeInfoResult = $GetFontFileSizeInfoResult;
      return $this;
    }

}
