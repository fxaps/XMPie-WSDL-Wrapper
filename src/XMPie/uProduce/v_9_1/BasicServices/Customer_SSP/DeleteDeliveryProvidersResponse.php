<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class DeleteDeliveryProvidersResponse
{

    /**
     * @var boolean $DeleteDeliveryProvidersResult
     */
    protected $DeleteDeliveryProvidersResult = null;

    /**
     * @param boolean $DeleteDeliveryProvidersResult
     */
    public function __construct($DeleteDeliveryProvidersResult = null)
    {
      $this->DeleteDeliveryProvidersResult = $DeleteDeliveryProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDeliveryProvidersResult()
    {
      return $this->DeleteDeliveryProvidersResult;
    }

    /**
     * @param boolean $DeleteDeliveryProvidersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteDeliveryProvidersResponse
     */
    public function setDeleteDeliveryProvidersResult($DeleteDeliveryProvidersResult)
    {
      $this->DeleteDeliveryProvidersResult = $DeleteDeliveryProvidersResult;
      return $this;
    }

}
