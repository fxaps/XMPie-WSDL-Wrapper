<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP;

class DeleteAllPlanPartsProvidersResponse
{

    /**
     * @var boolean $DeleteAllPlanPartsProvidersResult
     */
    protected $DeleteAllPlanPartsProvidersResult = null;

    /**
     * @param boolean $DeleteAllPlanPartsProvidersResult
     */
    public function __construct($DeleteAllPlanPartsProvidersResult = null)
    {
      $this->DeleteAllPlanPartsProvidersResult = $DeleteAllPlanPartsProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllPlanPartsProvidersResult()
    {
      return $this->DeleteAllPlanPartsProvidersResult;
    }

    /**
     * @param boolean $DeleteAllPlanPartsProvidersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP\DeleteAllPlanPartsProvidersResponse
     */
    public function setDeleteAllPlanPartsProvidersResult($DeleteAllPlanPartsProvidersResult)
    {
      $this->DeleteAllPlanPartsProvidersResult = $DeleteAllPlanPartsProvidersResult;
      return $this;
    }

}
