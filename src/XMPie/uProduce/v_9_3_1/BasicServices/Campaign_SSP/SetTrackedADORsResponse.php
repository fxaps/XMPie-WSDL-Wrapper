<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class SetTrackedADORsResponse
{

    /**
     * @var boolean $SetTrackedADORsResult
     */
    protected $SetTrackedADORsResult = null;

    /**
     * @param boolean $SetTrackedADORsResult
     */
    public function __construct($SetTrackedADORsResult = null)
    {
      $this->SetTrackedADORsResult = $SetTrackedADORsResult;
    }

    /**
     * @return boolean
     */
    public function getSetTrackedADORsResult()
    {
      return $this->SetTrackedADORsResult;
    }

    /**
     * @param boolean $SetTrackedADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\SetTrackedADORsResponse
     */
    public function setSetTrackedADORsResult($SetTrackedADORsResult)
    {
      $this->SetTrackedADORsResult = $SetTrackedADORsResult;
      return $this;
    }

}
