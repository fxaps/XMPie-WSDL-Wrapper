<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class DeletePlanResponse
{

    /**
     * @var boolean $DeletePlanResult
     */
    protected $DeletePlanResult = null;

    /**
     * @param boolean $DeletePlanResult
     */
    public function __construct($DeletePlanResult = null)
    {
      $this->DeletePlanResult = $DeletePlanResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePlanResult()
    {
      return $this->DeletePlanResult;
    }

    /**
     * @param boolean $DeletePlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\DeletePlanResponse
     */
    public function setDeletePlanResult($DeletePlanResult)
    {
      $this->DeletePlanResult = $DeletePlanResult;
      return $this;
    }

}
