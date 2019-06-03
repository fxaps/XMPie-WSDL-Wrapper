<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetOnDemandBaseURLResponse
{

    /**
     * @var string $GetOnDemandBaseURLResult
     */
    protected $GetOnDemandBaseURLResult = null;

    /**
     * @param string $GetOnDemandBaseURLResult
     */
    public function __construct($GetOnDemandBaseURLResult = null)
    {
      $this->GetOnDemandBaseURLResult = $GetOnDemandBaseURLResult;
    }

    /**
     * @return string
     */
    public function getGetOnDemandBaseURLResult()
    {
      return $this->GetOnDemandBaseURLResult;
    }

    /**
     * @param string $GetOnDemandBaseURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetOnDemandBaseURLResponse
     */
    public function setGetOnDemandBaseURLResult($GetOnDemandBaseURLResult)
    {
      $this->GetOnDemandBaseURLResult = $GetOnDemandBaseURLResult;
      return $this;
    }

}
