<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class GetEmailMarketingsResponse
{

    /**
     * @var ArrayOfString $GetEmailMarketingsResult
     */
    protected $GetEmailMarketingsResult = null;

    /**
     * @param ArrayOfString $GetEmailMarketingsResult
     */
    public function __construct($GetEmailMarketingsResult = null)
    {
      $this->GetEmailMarketingsResult = $GetEmailMarketingsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetEmailMarketingsResult()
    {
      return $this->GetEmailMarketingsResult;
    }

    /**
     * @param ArrayOfString $GetEmailMarketingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsResponse
     */
    public function setGetEmailMarketingsResult($GetEmailMarketingsResult)
    {
      $this->GetEmailMarketingsResult = $GetEmailMarketingsResult;
      return $this;
    }

}
