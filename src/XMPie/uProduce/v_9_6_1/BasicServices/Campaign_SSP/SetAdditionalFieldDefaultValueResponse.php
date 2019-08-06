<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class SetAdditionalFieldDefaultValueResponse
{

    /**
     * @var boolean $SetAdditionalFieldDefaultValueResult
     */
    protected $SetAdditionalFieldDefaultValueResult = null;

    /**
     * @param boolean $SetAdditionalFieldDefaultValueResult
     */
    public function __construct($SetAdditionalFieldDefaultValueResult = null)
    {
      $this->SetAdditionalFieldDefaultValueResult = $SetAdditionalFieldDefaultValueResult;
    }

    /**
     * @return boolean
     */
    public function getSetAdditionalFieldDefaultValueResult()
    {
      return $this->SetAdditionalFieldDefaultValueResult;
    }

    /**
     * @param boolean $SetAdditionalFieldDefaultValueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValueResponse
     */
    public function setSetAdditionalFieldDefaultValueResult($SetAdditionalFieldDefaultValueResult)
    {
      $this->SetAdditionalFieldDefaultValueResult = $SetAdditionalFieldDefaultValueResult;
      return $this;
    }

}
