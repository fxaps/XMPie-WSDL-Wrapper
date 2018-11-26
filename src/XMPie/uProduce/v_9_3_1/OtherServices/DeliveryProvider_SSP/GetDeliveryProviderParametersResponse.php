<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderParametersResponse
{

    /**
     * @var ArrayOfEmailProviderParameter $GetDeliveryProviderParametersResult
     */
    protected $GetDeliveryProviderParametersResult = null;

    /**
     * @param ArrayOfEmailProviderParameter $GetDeliveryProviderParametersResult
     */
    public function __construct($GetDeliveryProviderParametersResult = null)
    {
      $this->GetDeliveryProviderParametersResult = $GetDeliveryProviderParametersResult;
    }

    /**
     * @return ArrayOfEmailProviderParameter
     */
    public function getGetDeliveryProviderParametersResult()
    {
      return $this->GetDeliveryProviderParametersResult;
    }

    /**
     * @param ArrayOfEmailProviderParameter $GetDeliveryProviderParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderParametersResponse
     */
    public function setGetDeliveryProviderParametersResult($GetDeliveryProviderParametersResult)
    {
      $this->GetDeliveryProviderParametersResult = $GetDeliveryProviderParametersResult;
      return $this;
    }

}
