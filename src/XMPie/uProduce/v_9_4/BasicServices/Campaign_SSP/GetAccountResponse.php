<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class GetAccountResponse
{

    /**
     * @var string $GetAccountResult
     */
    protected $GetAccountResult = null;

    /**
     * @param string $GetAccountResult
     */
    public function __construct($GetAccountResult = null)
    {
      $this->GetAccountResult = $GetAccountResult;
    }

    /**
     * @return string
     */
    public function getGetAccountResult()
    {
      return $this->GetAccountResult;
    }

    /**
     * @param string $GetAccountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\GetAccountResponse
     */
    public function setGetAccountResult($GetAccountResult)
    {
      $this->GetAccountResult = $GetAccountResult;
      return $this;
    }

}
