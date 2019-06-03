<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP;

class SendMailResponse
{

    /**
     * @var SendEmailResult $SendMailResult
     */
    protected $SendMailResult = null;

    /**
     * @param SendEmailResult $SendMailResult
     */
    public function __construct($SendMailResult = null)
    {
      $this->SendMailResult = $SendMailResult;
    }

    /**
     * @return SendEmailResult
     */
    public function getSendMailResult()
    {
      return $this->SendMailResult;
    }

    /**
     * @param SendEmailResult $SendMailResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\SendMailResponse
     */
    public function setSendMailResult($SendMailResult)
    {
      $this->SendMailResult = $SendMailResult;
      return $this;
    }

}
