<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetFieldMappingByIDResponse
{

    /**
     * @var boolean $SetFieldMappingByIDResult
     */
    protected $SetFieldMappingByIDResult = null;

    /**
     * @param boolean $SetFieldMappingByIDResult
     */
    public function __construct($SetFieldMappingByIDResult = null)
    {
      $this->SetFieldMappingByIDResult = $SetFieldMappingByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetFieldMappingByIDResult()
    {
      return $this->SetFieldMappingByIDResult;
    }

    /**
     * @param boolean $SetFieldMappingByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetFieldMappingByIDResponse
     */
    public function setSetFieldMappingByIDResult($SetFieldMappingByIDResult)
    {
      $this->SetFieldMappingByIDResult = $SetFieldMappingByIDResult;
      return $this;
    }

}
