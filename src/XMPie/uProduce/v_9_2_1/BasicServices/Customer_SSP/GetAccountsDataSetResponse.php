<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetAccountsDataSetResponse
{

    /**
     * @var GetAccountsDataSetResult $GetAccountsDataSetResult
     */
    protected $GetAccountsDataSetResult = null;

    /**
     * @param GetAccountsDataSetResult $GetAccountsDataSetResult
     */
    public function __construct($GetAccountsDataSetResult = null)
    {
      $this->GetAccountsDataSetResult = $GetAccountsDataSetResult;
    }

    /**
     * @return GetAccountsDataSetResult
     */
    public function getGetAccountsDataSetResult()
    {
      return $this->GetAccountsDataSetResult;
    }

    /**
     * @param GetAccountsDataSetResult $GetAccountsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetAccountsDataSetResponse
     */
    public function setGetAccountsDataSetResult($GetAccountsDataSetResult)
    {
      $this->GetAccountsDataSetResult = $GetAccountsDataSetResult;
      return $this;
    }

}
