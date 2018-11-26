<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderTypeResponse
{

    /**
     * @var GetDeliveryProviderTypeResult $GetDeliveryProviderTypeResult
     */
    protected $GetDeliveryProviderTypeResult = null;

    /**
     * @param GetDeliveryProviderTypeResult $GetDeliveryProviderTypeResult
     */
    public function __construct($GetDeliveryProviderTypeResult = null)
    {
      $this->GetDeliveryProviderTypeResult = $GetDeliveryProviderTypeResult;
    }

    /**
     * @return GetDeliveryProviderTypeResult
     */
    public function getGetDeliveryProviderTypeResult()
    {
      return $this->GetDeliveryProviderTypeResult;
    }

    /**
     * @param GetDeliveryProviderTypeResult $GetDeliveryProviderTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypeResponse
     */
    public function setGetDeliveryProviderTypeResult($GetDeliveryProviderTypeResult)
    {
      $this->GetDeliveryProviderTypeResult = $GetDeliveryProviderTypeResult;
      return $this;
    }

}
