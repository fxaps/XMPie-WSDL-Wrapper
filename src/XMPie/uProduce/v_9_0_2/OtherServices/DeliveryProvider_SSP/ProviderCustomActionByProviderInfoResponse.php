<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\DeliveryProvider_SSP;

class ProviderCustomActionByProviderInfoResponse
{

    /**
     * @var string $ProviderCustomActionByProviderInfoResult
     */
    protected $ProviderCustomActionByProviderInfoResult = null;

    /**
     * @param string $ProviderCustomActionByProviderInfoResult
     */
    public function __construct($ProviderCustomActionByProviderInfoResult = null)
    {
      $this->ProviderCustomActionByProviderInfoResult = $ProviderCustomActionByProviderInfoResult;
    }

    /**
     * @return string
     */
    public function getProviderCustomActionByProviderInfoResult()
    {
      return $this->ProviderCustomActionByProviderInfoResult;
    }

    /**
     * @param string $ProviderCustomActionByProviderInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfoResponse
     */
    public function setProviderCustomActionByProviderInfoResult($ProviderCustomActionByProviderInfoResult)
    {
      $this->ProviderCustomActionByProviderInfoResult = $ProviderCustomActionByProviderInfoResult;
      return $this;
    }

}
