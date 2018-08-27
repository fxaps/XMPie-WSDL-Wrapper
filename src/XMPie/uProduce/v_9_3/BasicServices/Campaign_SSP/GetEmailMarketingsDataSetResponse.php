<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class GetEmailMarketingsDataSetResponse
{

    /**
     * @var GetEmailMarketingsDataSetResult $GetEmailMarketingsDataSetResult
     */
    protected $GetEmailMarketingsDataSetResult = null;

    /**
     * @param GetEmailMarketingsDataSetResult $GetEmailMarketingsDataSetResult
     */
    public function __construct($GetEmailMarketingsDataSetResult = null)
    {
      $this->GetEmailMarketingsDataSetResult = $GetEmailMarketingsDataSetResult;
    }

    /**
     * @return GetEmailMarketingsDataSetResult
     */
    public function getGetEmailMarketingsDataSetResult()
    {
      return $this->GetEmailMarketingsDataSetResult;
    }

    /**
     * @param GetEmailMarketingsDataSetResult $GetEmailMarketingsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\GetEmailMarketingsDataSetResponse
     */
    public function setGetEmailMarketingsDataSetResult($GetEmailMarketingsDataSetResult)
    {
      $this->GetEmailMarketingsDataSetResult = $GetEmailMarketingsDataSetResult;
      return $this;
    }

}
