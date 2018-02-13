<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class RemoveFieldMappingResponse
{

    /**
     * @var boolean $RemoveFieldMappingResult
     */
    protected $RemoveFieldMappingResult = null;

    /**
     * @param boolean $RemoveFieldMappingResult
     */
    public function __construct($RemoveFieldMappingResult = null)
    {
      $this->RemoveFieldMappingResult = $RemoveFieldMappingResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFieldMappingResult()
    {
      return $this->RemoveFieldMappingResult;
    }

    /**
     * @param boolean $RemoveFieldMappingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\RemoveFieldMappingResponse
     */
    public function setRemoveFieldMappingResult($RemoveFieldMappingResult)
    {
      $this->RemoveFieldMappingResult = $RemoveFieldMappingResult;
      return $this;
    }

}
