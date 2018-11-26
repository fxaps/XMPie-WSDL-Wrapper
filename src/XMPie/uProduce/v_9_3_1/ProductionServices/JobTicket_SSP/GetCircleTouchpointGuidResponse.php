<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetCircleTouchpointGuidResponse
{

    /**
     * @var string $GetCircleTouchpointGuidResult
     */
    protected $GetCircleTouchpointGuidResult = null;

    /**
     * @param string $GetCircleTouchpointGuidResult
     */
    public function __construct($GetCircleTouchpointGuidResult = null)
    {
      $this->GetCircleTouchpointGuidResult = $GetCircleTouchpointGuidResult;
    }

    /**
     * @return string
     */
    public function getGetCircleTouchpointGuidResult()
    {
      return $this->GetCircleTouchpointGuidResult;
    }

    /**
     * @param string $GetCircleTouchpointGuidResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetCircleTouchpointGuidResponse
     */
    public function setGetCircleTouchpointGuidResult($GetCircleTouchpointGuidResult)
    {
      $this->GetCircleTouchpointGuidResult = $GetCircleTouchpointGuidResult;
      return $this;
    }

}
