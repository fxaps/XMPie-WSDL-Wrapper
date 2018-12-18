<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetTrackingParameterResponse
{

    /**
     * @var boolean $SetTrackingParameterResult
     */
    protected $SetTrackingParameterResult = null;

    /**
     * @param boolean $SetTrackingParameterResult
     */
    public function __construct($SetTrackingParameterResult = null)
    {
      $this->SetTrackingParameterResult = $SetTrackingParameterResult;
    }

    /**
     * @return boolean
     */
    public function getSetTrackingParameterResult()
    {
      return $this->SetTrackingParameterResult;
    }

    /**
     * @param boolean $SetTrackingParameterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTrackingParameterResponse
     */
    public function setSetTrackingParameterResult($SetTrackingParameterResult)
    {
      $this->SetTrackingParameterResult = $SetTrackingParameterResult;
      return $this;
    }

}
