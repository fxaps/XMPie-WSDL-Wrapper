<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class SendMailByPopulationResponse
{

    /**
     * @var ArrayOfSendEmailResult $SendMailByPopulationResult
     */
    protected $SendMailByPopulationResult = null;

    /**
     * @param ArrayOfSendEmailResult $SendMailByPopulationResult
     */
    public function __construct($SendMailByPopulationResult = null)
    {
      $this->SendMailByPopulationResult = $SendMailByPopulationResult;
    }

    /**
     * @return ArrayOfSendEmailResult
     */
    public function getSendMailByPopulationResult()
    {
      return $this->SendMailByPopulationResult;
    }

    /**
     * @param ArrayOfSendEmailResult $SendMailByPopulationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\SendMailByPopulationResponse
     */
    public function setSendMailByPopulationResult($SendMailByPopulationResult)
    {
      $this->SendMailByPopulationResult = $SendMailByPopulationResult;
      return $this;
    }

}
