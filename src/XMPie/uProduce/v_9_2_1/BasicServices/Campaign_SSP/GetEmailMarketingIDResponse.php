<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class GetEmailMarketingIDResponse
{

    /**
     * @var string $GetEmailMarketingIDResult
     */
    protected $GetEmailMarketingIDResult = null;

    /**
     * @param string $GetEmailMarketingIDResult
     */
    public function __construct($GetEmailMarketingIDResult = null)
    {
      $this->GetEmailMarketingIDResult = $GetEmailMarketingIDResult;
    }

    /**
     * @return string
     */
    public function getGetEmailMarketingIDResult()
    {
      return $this->GetEmailMarketingIDResult;
    }

    /**
     * @param string $GetEmailMarketingIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetEmailMarketingIDResponse
     */
    public function setGetEmailMarketingIDResult($GetEmailMarketingIDResult)
    {
      $this->GetEmailMarketingIDResult = $GetEmailMarketingIDResult;
      return $this;
    }

}
