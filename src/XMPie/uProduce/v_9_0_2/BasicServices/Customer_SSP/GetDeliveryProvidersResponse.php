<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class GetDeliveryProvidersResponse
{

    /**
     * @var ArrayOfString $GetDeliveryProvidersResult
     */
    protected $GetDeliveryProvidersResult = null;

    /**
     * @param ArrayOfString $GetDeliveryProvidersResult
     */
    public function __construct($GetDeliveryProvidersResult = null)
    {
      $this->GetDeliveryProvidersResult = $GetDeliveryProvidersResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDeliveryProvidersResult()
    {
      return $this->GetDeliveryProvidersResult;
    }

    /**
     * @param ArrayOfString $GetDeliveryProvidersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersResponse
     */
    public function setGetDeliveryProvidersResult($GetDeliveryProvidersResult)
    {
      $this->GetDeliveryProvidersResult = $GetDeliveryProvidersResult;
      return $this;
    }

}
