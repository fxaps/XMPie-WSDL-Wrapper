<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class GetAccountsResponse
{

    /**
     * @var ArrayOfString $GetAccountsResult
     */
    protected $GetAccountsResult = null;

    /**
     * @param ArrayOfString $GetAccountsResult
     */
    public function __construct($GetAccountsResult = null)
    {
      $this->GetAccountsResult = $GetAccountsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAccountsResult()
    {
      return $this->GetAccountsResult;
    }

    /**
     * @param ArrayOfString $GetAccountsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\GetAccountsResponse
     */
    public function setGetAccountsResult($GetAccountsResult)
    {
      $this->GetAccountsResult = $GetAccountsResult;
      return $this;
    }

}
