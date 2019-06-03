<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetOnDemandBaseURLResponse
{

    /**
     * @var boolean $SetOnDemandBaseURLResult
     */
    protected $SetOnDemandBaseURLResult = null;

    /**
     * @param boolean $SetOnDemandBaseURLResult
     */
    public function __construct($SetOnDemandBaseURLResult = null)
    {
      $this->SetOnDemandBaseURLResult = $SetOnDemandBaseURLResult;
    }

    /**
     * @return boolean
     */
    public function getSetOnDemandBaseURLResult()
    {
      return $this->SetOnDemandBaseURLResult;
    }

    /**
     * @param boolean $SetOnDemandBaseURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetOnDemandBaseURLResponse
     */
    public function setSetOnDemandBaseURLResult($SetOnDemandBaseURLResult)
    {
      $this->SetOnDemandBaseURLResult = $SetOnDemandBaseURLResult;
      return $this;
    }

}
