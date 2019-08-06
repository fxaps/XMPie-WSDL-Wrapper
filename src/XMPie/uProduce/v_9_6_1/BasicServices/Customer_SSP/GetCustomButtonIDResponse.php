<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetCustomButtonIDResponse
{

    /**
     * @var string $GetCustomButtonIDResult
     */
    protected $GetCustomButtonIDResult = null;

    /**
     * @param string $GetCustomButtonIDResult
     */
    public function __construct($GetCustomButtonIDResult = null)
    {
      $this->GetCustomButtonIDResult = $GetCustomButtonIDResult;
    }

    /**
     * @return string
     */
    public function getGetCustomButtonIDResult()
    {
      return $this->GetCustomButtonIDResult;
    }

    /**
     * @param string $GetCustomButtonIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetCustomButtonIDResponse
     */
    public function setGetCustomButtonIDResult($GetCustomButtonIDResult)
    {
      $this->GetCustomButtonIDResult = $GetCustomButtonIDResult;
      return $this;
    }

}
