<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP;

class SendMailByProviderInfoResponse
{

    /**
     * @var SendEmailResult $SendMailByProviderInfoResult
     */
    protected $SendMailByProviderInfoResult = null;

    /**
     * @param SendEmailResult $SendMailByProviderInfoResult
     */
    public function __construct($SendMailByProviderInfoResult = null)
    {
      $this->SendMailByProviderInfoResult = $SendMailByProviderInfoResult;
    }

    /**
     * @return SendEmailResult
     */
    public function getSendMailByProviderInfoResult()
    {
      return $this->SendMailByProviderInfoResult;
    }

    /**
     * @param SendEmailResult $SendMailByProviderInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP\SendMailByProviderInfoResponse
     */
    public function setSendMailByProviderInfoResult($SendMailByProviderInfoResult)
    {
      $this->SendMailByProviderInfoResult = $SendMailByProviderInfoResult;
      return $this;
    }

}
