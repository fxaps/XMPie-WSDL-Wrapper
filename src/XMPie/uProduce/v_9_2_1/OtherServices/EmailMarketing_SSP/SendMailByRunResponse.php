<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class SendMailByRunResponse
{

    /**
     * @var ArrayOfSendEmailResult $SendMailByRunResult
     */
    protected $SendMailByRunResult = null;

    /**
     * @param ArrayOfSendEmailResult $SendMailByRunResult
     */
    public function __construct($SendMailByRunResult = null)
    {
      $this->SendMailByRunResult = $SendMailByRunResult;
    }

    /**
     * @return ArrayOfSendEmailResult
     */
    public function getSendMailByRunResult()
    {
      return $this->SendMailByRunResult;
    }

    /**
     * @param ArrayOfSendEmailResult $SendMailByRunResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByRunResponse
     */
    public function setSendMailByRunResult($SendMailByRunResult)
    {
      $this->SendMailByRunResult = $SendMailByRunResult;
      return $this;
    }

}
