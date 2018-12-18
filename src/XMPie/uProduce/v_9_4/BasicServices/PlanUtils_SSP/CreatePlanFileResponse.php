<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP;

class CreatePlanFileResponse
{

    /**
     * @var string $CreatePlanFileResult
     */
    protected $CreatePlanFileResult = null;

    /**
     * @param string $CreatePlanFileResult
     */
    public function __construct($CreatePlanFileResult = null)
    {
      $this->CreatePlanFileResult = $CreatePlanFileResult;
    }

    /**
     * @return string
     */
    public function getCreatePlanFileResult()
    {
      return $this->CreatePlanFileResult;
    }

    /**
     * @param string $CreatePlanFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\CreatePlanFileResponse
     */
    public function setCreatePlanFileResult($CreatePlanFileResult)
    {
      $this->CreatePlanFileResult = $CreatePlanFileResult;
      return $this;
    }

}
