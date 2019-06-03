<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP;

class GetDeliveryProvidersDataSetResponse
{

    /**
     * @var GetDeliveryProvidersDataSetResult $GetDeliveryProvidersDataSetResult
     */
    protected $GetDeliveryProvidersDataSetResult = null;

    /**
     * @param GetDeliveryProvidersDataSetResult $GetDeliveryProvidersDataSetResult
     */
    public function __construct($GetDeliveryProvidersDataSetResult = null)
    {
      $this->GetDeliveryProvidersDataSetResult = $GetDeliveryProvidersDataSetResult;
    }

    /**
     * @return GetDeliveryProvidersDataSetResult
     */
    public function getGetDeliveryProvidersDataSetResult()
    {
      return $this->GetDeliveryProvidersDataSetResult;
    }

    /**
     * @param GetDeliveryProvidersDataSetResult $GetDeliveryProvidersDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP\GetDeliveryProvidersDataSetResponse
     */
    public function setGetDeliveryProvidersDataSetResult($GetDeliveryProvidersDataSetResult)
    {
      $this->GetDeliveryProvidersDataSetResult = $GetDeliveryProvidersDataSetResult;
      return $this;
    }

}
