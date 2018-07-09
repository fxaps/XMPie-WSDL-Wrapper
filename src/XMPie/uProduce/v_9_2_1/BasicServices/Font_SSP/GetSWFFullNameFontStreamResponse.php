<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Font_SSP;

class GetSWFFullNameFontStreamResponse
{

    /**
     * @var base64Binary $GetSWFFullNameFontStreamResult
     */
    protected $GetSWFFullNameFontStreamResult = null;

    /**
     * @param base64Binary $GetSWFFullNameFontStreamResult
     */
    public function __construct($GetSWFFullNameFontStreamResult = null)
    {
      $this->GetSWFFullNameFontStreamResult = $GetSWFFullNameFontStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetSWFFullNameFontStreamResult()
    {
      return $this->GetSWFFullNameFontStreamResult;
    }

    /**
     * @param base64Binary $GetSWFFullNameFontStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Font_SSP\GetSWFFullNameFontStreamResponse
     */
    public function setGetSWFFullNameFontStreamResult($GetSWFFullNameFontStreamResult)
    {
      $this->GetSWFFullNameFontStreamResult = $GetSWFFullNameFontStreamResult;
      return $this;
    }

}
