<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class GetFontsDataSetResponse
{

    /**
     * @var GetFontsDataSetResult $GetFontsDataSetResult
     */
    protected $GetFontsDataSetResult = null;

    /**
     * @param GetFontsDataSetResult $GetFontsDataSetResult
     */
    public function __construct($GetFontsDataSetResult = null)
    {
      $this->GetFontsDataSetResult = $GetFontsDataSetResult;
    }

    /**
     * @return GetFontsDataSetResult
     */
    public function getGetFontsDataSetResult()
    {
      return $this->GetFontsDataSetResult;
    }

    /**
     * @param GetFontsDataSetResult $GetFontsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\GetFontsDataSetResponse
     */
    public function setGetFontsDataSetResult($GetFontsDataSetResult)
    {
      $this->GetFontsDataSetResult = $GetFontsDataSetResult;
      return $this;
    }

}
