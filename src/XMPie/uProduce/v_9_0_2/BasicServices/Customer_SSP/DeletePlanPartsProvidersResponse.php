<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class DeletePlanPartsProvidersResponse
{

    /**
     * @var boolean $DeletePlanPartsProvidersResult
     */
    protected $DeletePlanPartsProvidersResult = null;

    /**
     * @param boolean $DeletePlanPartsProvidersResult
     */
    public function __construct($DeletePlanPartsProvidersResult = null)
    {
      $this->DeletePlanPartsProvidersResult = $DeletePlanPartsProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePlanPartsProvidersResult()
    {
      return $this->DeletePlanPartsProvidersResult;
    }

    /**
     * @param boolean $DeletePlanPartsProvidersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeletePlanPartsProvidersResponse
     */
    public function setDeletePlanPartsProvidersResult($DeletePlanPartsProvidersResult)
    {
      $this->DeletePlanPartsProvidersResult = $DeletePlanPartsProvidersResult;
      return $this;
    }

}
