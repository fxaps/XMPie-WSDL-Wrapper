<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP;

class GetMarketingConsoleTypeResponse
{

    /**
     * @var string $GetMarketingConsoleTypeResult
     */
    protected $GetMarketingConsoleTypeResult = null;

    /**
     * @param string $GetMarketingConsoleTypeResult
     */
    public function __construct($GetMarketingConsoleTypeResult = null)
    {
      $this->GetMarketingConsoleTypeResult = $GetMarketingConsoleTypeResult;
    }

    /**
     * @return string
     */
    public function getGetMarketingConsoleTypeResult()
    {
      return $this->GetMarketingConsoleTypeResult;
    }

    /**
     * @param string $GetMarketingConsoleTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP\GetMarketingConsoleTypeResponse
     */
    public function setGetMarketingConsoleTypeResult($GetMarketingConsoleTypeResult)
    {
      $this->GetMarketingConsoleTypeResult = $GetMarketingConsoleTypeResult;
      return $this;
    }

}
