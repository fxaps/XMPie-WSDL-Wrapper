<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetRIOnDemandRecipientIDResponse
{

    /**
     * @var string $GetRIOnDemandRecipientIDResult
     */
    protected $GetRIOnDemandRecipientIDResult = null;

    /**
     * @param string $GetRIOnDemandRecipientIDResult
     */
    public function __construct($GetRIOnDemandRecipientIDResult = null)
    {
      $this->GetRIOnDemandRecipientIDResult = $GetRIOnDemandRecipientIDResult;
    }

    /**
     * @return string
     */
    public function getGetRIOnDemandRecipientIDResult()
    {
      return $this->GetRIOnDemandRecipientIDResult;
    }

    /**
     * @param string $GetRIOnDemandRecipientIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetRIOnDemandRecipientIDResponse
     */
    public function setGetRIOnDemandRecipientIDResult($GetRIOnDemandRecipientIDResult)
    {
      $this->GetRIOnDemandRecipientIDResult = $GetRIOnDemandRecipientIDResult;
      return $this;
    }

}
