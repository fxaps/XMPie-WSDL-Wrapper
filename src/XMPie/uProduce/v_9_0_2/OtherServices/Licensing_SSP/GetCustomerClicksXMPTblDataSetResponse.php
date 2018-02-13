<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP;

class GetCustomerClicksXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetCustomerClicksXMPTblDataSetResult
     */
    protected $GetCustomerClicksXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetCustomerClicksXMPTblDataSetResult
     */
    public function __construct($GetCustomerClicksXMPTblDataSetResult = null)
    {
      $this->GetCustomerClicksXMPTblDataSetResult = $GetCustomerClicksXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetCustomerClicksXMPTblDataSetResult()
    {
      return $this->GetCustomerClicksXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetCustomerClicksXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP\GetCustomerClicksXMPTblDataSetResponse
     */
    public function setGetCustomerClicksXMPTblDataSetResult($GetCustomerClicksXMPTblDataSetResult)
    {
      $this->GetCustomerClicksXMPTblDataSetResult = $GetCustomerClicksXMPTblDataSetResult;
      return $this;
    }

}
