<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class RemoveAllCustomizationsResponse
{

    /**
     * @var boolean $RemoveAllCustomizationsResult
     */
    protected $RemoveAllCustomizationsResult = null;

    /**
     * @param boolean $RemoveAllCustomizationsResult
     */
    public function __construct($RemoveAllCustomizationsResult = null)
    {
      $this->RemoveAllCustomizationsResult = $RemoveAllCustomizationsResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllCustomizationsResult()
    {
      return $this->RemoveAllCustomizationsResult;
    }

    /**
     * @param boolean $RemoveAllCustomizationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\RemoveAllCustomizationsResponse
     */
    public function setRemoveAllCustomizationsResult($RemoveAllCustomizationsResult)
    {
      $this->RemoveAllCustomizationsResult = $RemoveAllCustomizationsResult;
      return $this;
    }

}
