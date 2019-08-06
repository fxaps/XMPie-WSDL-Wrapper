<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetAccountIDResponse
{

    /**
     * @var string $GetAccountIDResult
     */
    protected $GetAccountIDResult = null;

    /**
     * @param string $GetAccountIDResult
     */
    public function __construct($GetAccountIDResult = null)
    {
      $this->GetAccountIDResult = $GetAccountIDResult;
    }

    /**
     * @return string
     */
    public function getGetAccountIDResult()
    {
      return $this->GetAccountIDResult;
    }

    /**
     * @param string $GetAccountIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetAccountIDResponse
     */
    public function setGetAccountIDResult($GetAccountIDResult)
    {
      $this->GetAccountIDResult = $GetAccountIDResult;
      return $this;
    }

}
