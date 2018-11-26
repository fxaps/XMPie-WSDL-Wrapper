<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP;

class GetCustomerClicksViewResponse
{

    /**
     * @var GetCustomerClicksViewResult $GetCustomerClicksViewResult
     */
    protected $GetCustomerClicksViewResult = null;

    /**
     * @param GetCustomerClicksViewResult $GetCustomerClicksViewResult
     */
    public function __construct($GetCustomerClicksViewResult = null)
    {
      $this->GetCustomerClicksViewResult = $GetCustomerClicksViewResult;
    }

    /**
     * @return GetCustomerClicksViewResult
     */
    public function getGetCustomerClicksViewResult()
    {
      return $this->GetCustomerClicksViewResult;
    }

    /**
     * @param GetCustomerClicksViewResult $GetCustomerClicksViewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP\GetCustomerClicksViewResponse
     */
    public function setGetCustomerClicksViewResult($GetCustomerClicksViewResult)
    {
      $this->GetCustomerClicksViewResult = $GetCustomerClicksViewResult;
      return $this;
    }

}
