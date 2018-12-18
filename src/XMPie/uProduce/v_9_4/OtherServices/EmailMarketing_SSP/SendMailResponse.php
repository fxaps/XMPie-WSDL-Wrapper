<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP;

class SendMailResponse
{

    /**
     * @var ArrayOfSendEmailResult $SendMailResult
     */
    protected $SendMailResult = null;

    /**
     * @param ArrayOfSendEmailResult $SendMailResult
     */
    public function __construct($SendMailResult = null)
    {
      $this->SendMailResult = $SendMailResult;
    }

    /**
     * @return ArrayOfSendEmailResult
     */
    public function getSendMailResult()
    {
      return $this->SendMailResult;
    }

    /**
     * @param ArrayOfSendEmailResult $SendMailResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\EmailMarketing_SSP\SendMailResponse
     */
    public function setSendMailResult($SendMailResult)
    {
      $this->SendMailResult = $SendMailResult;
      return $this;
    }

}
