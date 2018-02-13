<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP;

class GetFontsResponse
{

    /**
     * @var ArrayOfString $GetFontsResult
     */
    protected $GetFontsResult = null;

    /**
     * @param ArrayOfString $GetFontsResult
     */
    public function __construct($GetFontsResult = null)
    {
      $this->GetFontsResult = $GetFontsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFontsResult()
    {
      return $this->GetFontsResult;
    }

    /**
     * @param ArrayOfString $GetFontsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\GetFontsResponse
     */
    public function setGetFontsResult($GetFontsResult)
    {
      $this->GetFontsResult = $GetFontsResult;
      return $this;
    }

}
