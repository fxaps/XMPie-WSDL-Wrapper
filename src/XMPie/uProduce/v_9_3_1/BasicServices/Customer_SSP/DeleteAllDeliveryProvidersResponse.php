<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP;

class DeleteAllDeliveryProvidersResponse
{

    /**
     * @var boolean $DeleteAllDeliveryProvidersResult
     */
    protected $DeleteAllDeliveryProvidersResult = null;

    /**
     * @param boolean $DeleteAllDeliveryProvidersResult
     */
    public function __construct($DeleteAllDeliveryProvidersResult = null)
    {
      $this->DeleteAllDeliveryProvidersResult = $DeleteAllDeliveryProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllDeliveryProvidersResult()
    {
      return $this->DeleteAllDeliveryProvidersResult;
    }

    /**
     * @param boolean $DeleteAllDeliveryProvidersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\DeleteAllDeliveryProvidersResponse
     */
    public function setDeleteAllDeliveryProvidersResult($DeleteAllDeliveryProvidersResult)
    {
      $this->DeleteAllDeliveryProvidersResult = $DeleteAllDeliveryProvidersResult;
      return $this;
    }

}
