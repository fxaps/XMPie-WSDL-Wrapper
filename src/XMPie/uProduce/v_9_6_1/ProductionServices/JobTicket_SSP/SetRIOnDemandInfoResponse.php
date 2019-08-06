<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetRIOnDemandInfoResponse
{

    /**
     * @var boolean $SetRIOnDemandInfoResult
     */
    protected $SetRIOnDemandInfoResult = null;

    /**
     * @param boolean $SetRIOnDemandInfoResult
     */
    public function __construct($SetRIOnDemandInfoResult = null)
    {
      $this->SetRIOnDemandInfoResult = $SetRIOnDemandInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIOnDemandInfoResult()
    {
      return $this->SetRIOnDemandInfoResult;
    }

    /**
     * @param boolean $SetRIOnDemandInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfoResponse
     */
    public function setSetRIOnDemandInfoResult($SetRIOnDemandInfoResult)
    {
      $this->SetRIOnDemandInfoResult = $SetRIOnDemandInfoResult;
      return $this;
    }

}
