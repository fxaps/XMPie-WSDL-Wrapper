<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\RecipientTable_SSP;

class SetMappingResponse
{

    /**
     * @var boolean $SetMappingResult
     */
    protected $SetMappingResult = null;

    /**
     * @param boolean $SetMappingResult
     */
    public function __construct($SetMappingResult = null)
    {
      $this->SetMappingResult = $SetMappingResult;
    }

    /**
     * @return boolean
     */
    public function getSetMappingResult()
    {
      return $this->SetMappingResult;
    }

    /**
     * @param boolean $SetMappingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\RecipientTable_SSP\SetMappingResponse
     */
    public function setSetMappingResult($SetMappingResult)
    {
      $this->SetMappingResult = $SetMappingResult;
      return $this;
    }

}
