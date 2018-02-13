<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetTrackingParametersResponse
{

    /**
     * @var boolean $SetTrackingParametersResult
     */
    protected $SetTrackingParametersResult = null;

    /**
     * @param boolean $SetTrackingParametersResult
     */
    public function __construct($SetTrackingParametersResult = null)
    {
      $this->SetTrackingParametersResult = $SetTrackingParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetTrackingParametersResult()
    {
      return $this->SetTrackingParametersResult;
    }

    /**
     * @param boolean $SetTrackingParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetTrackingParametersResponse
     */
    public function setSetTrackingParametersResult($SetTrackingParametersResult)
    {
      $this->SetTrackingParametersResult = $SetTrackingParametersResult;
      return $this;
    }

}
