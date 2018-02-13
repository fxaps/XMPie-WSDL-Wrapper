<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP;

class GetFontIDResponse
{

    /**
     * @var string $GetFontIDResult
     */
    protected $GetFontIDResult = null;

    /**
     * @param string $GetFontIDResult
     */
    public function __construct($GetFontIDResult = null)
    {
      $this->GetFontIDResult = $GetFontIDResult;
    }

    /**
     * @return string
     */
    public function getGetFontIDResult()
    {
      return $this->GetFontIDResult;
    }

    /**
     * @param string $GetFontIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\GetFontIDResponse
     */
    public function setGetFontIDResult($GetFontIDResult)
    {
      $this->GetFontIDResult = $GetFontIDResult;
      return $this;
    }

}
