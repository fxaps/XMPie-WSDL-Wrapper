<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetFieldMappingResponse
{

    /**
     * @var boolean $SetFieldMappingResult
     */
    protected $SetFieldMappingResult = null;

    /**
     * @param boolean $SetFieldMappingResult
     */
    public function __construct($SetFieldMappingResult = null)
    {
      $this->SetFieldMappingResult = $SetFieldMappingResult;
    }

    /**
     * @return boolean
     */
    public function getSetFieldMappingResult()
    {
      return $this->SetFieldMappingResult;
    }

    /**
     * @param boolean $SetFieldMappingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetFieldMappingResponse
     */
    public function setSetFieldMappingResult($SetFieldMappingResult)
    {
      $this->SetFieldMappingResult = $SetFieldMappingResult;
      return $this;
    }

}
