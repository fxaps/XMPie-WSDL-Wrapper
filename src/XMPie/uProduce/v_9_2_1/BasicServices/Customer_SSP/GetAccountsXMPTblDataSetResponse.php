<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetAccountsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAccountsXMPTblDataSetResult
     */
    protected $GetAccountsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAccountsXMPTblDataSetResult
     */
    public function __construct($GetAccountsXMPTblDataSetResult = null)
    {
      $this->GetAccountsXMPTblDataSetResult = $GetAccountsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAccountsXMPTblDataSetResult()
    {
      return $this->GetAccountsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAccountsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetAccountsXMPTblDataSetResponse
     */
    public function setGetAccountsXMPTblDataSetResult($GetAccountsXMPTblDataSetResult)
    {
      $this->GetAccountsXMPTblDataSetResult = $GetAccountsXMPTblDataSetResult;
      return $this;
    }

}
