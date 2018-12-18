<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetCircleRunGuidResponse
{

    /**
     * @var boolean $SetCircleRunGuidResult
     */
    protected $SetCircleRunGuidResult = null;

    /**
     * @param boolean $SetCircleRunGuidResult
     */
    public function __construct($SetCircleRunGuidResult = null)
    {
      $this->SetCircleRunGuidResult = $SetCircleRunGuidResult;
    }

    /**
     * @return boolean
     */
    public function getSetCircleRunGuidResult()
    {
      return $this->SetCircleRunGuidResult;
    }

    /**
     * @param boolean $SetCircleRunGuidResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCircleRunGuidResponse
     */
    public function setSetCircleRunGuidResult($SetCircleRunGuidResult)
    {
      $this->SetCircleRunGuidResult = $SetCircleRunGuidResult;
      return $this;
    }

}
