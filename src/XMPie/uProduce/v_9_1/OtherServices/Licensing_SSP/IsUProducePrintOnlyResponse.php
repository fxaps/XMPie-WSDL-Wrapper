<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP;

class IsUProducePrintOnlyResponse
{

    /**
     * @var boolean $IsUProducePrintOnlyResult
     */
    protected $IsUProducePrintOnlyResult = null;

    /**
     * @param boolean $IsUProducePrintOnlyResult
     */
    public function __construct($IsUProducePrintOnlyResult = null)
    {
      $this->IsUProducePrintOnlyResult = $IsUProducePrintOnlyResult;
    }

    /**
     * @return boolean
     */
    public function getIsUProducePrintOnlyResult()
    {
      return $this->IsUProducePrintOnlyResult;
    }

    /**
     * @param boolean $IsUProducePrintOnlyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP\IsUProducePrintOnlyResponse
     */
    public function setIsUProducePrintOnlyResult($IsUProducePrintOnlyResult)
    {
      $this->IsUProducePrintOnlyResult = $IsUProducePrintOnlyResult;
      return $this;
    }

}
