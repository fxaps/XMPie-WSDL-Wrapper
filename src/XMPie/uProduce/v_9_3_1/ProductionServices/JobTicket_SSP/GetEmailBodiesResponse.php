<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetEmailBodiesResponse
{

    /**
     * @var ArrayOfEmailBodyInfo $GetEmailBodiesResult
     */
    protected $GetEmailBodiesResult = null;

    /**
     * @param ArrayOfEmailBodyInfo $GetEmailBodiesResult
     */
    public function __construct($GetEmailBodiesResult = null)
    {
      $this->GetEmailBodiesResult = $GetEmailBodiesResult;
    }

    /**
     * @return ArrayOfEmailBodyInfo
     */
    public function getGetEmailBodiesResult()
    {
      return $this->GetEmailBodiesResult;
    }

    /**
     * @param ArrayOfEmailBodyInfo $GetEmailBodiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetEmailBodiesResponse
     */
    public function setGetEmailBodiesResult($GetEmailBodiesResult)
    {
      $this->GetEmailBodiesResult = $GetEmailBodiesResult;
      return $this;
    }

}
