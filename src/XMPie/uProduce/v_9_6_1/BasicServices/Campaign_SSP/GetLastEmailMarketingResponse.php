<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class GetLastEmailMarketingResponse
{

    /**
     * @var string $GetLastEmailMarketingResult
     */
    protected $GetLastEmailMarketingResult = null;

    /**
     * @param string $GetLastEmailMarketingResult
     */
    public function __construct($GetLastEmailMarketingResult = null)
    {
      $this->GetLastEmailMarketingResult = $GetLastEmailMarketingResult;
    }

    /**
     * @return string
     */
    public function getGetLastEmailMarketingResult()
    {
      return $this->GetLastEmailMarketingResult;
    }

    /**
     * @param string $GetLastEmailMarketingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\GetLastEmailMarketingResponse
     */
    public function setGetLastEmailMarketingResult($GetLastEmailMarketingResult)
    {
      $this->GetLastEmailMarketingResult = $GetLastEmailMarketingResult;
      return $this;
    }

}
