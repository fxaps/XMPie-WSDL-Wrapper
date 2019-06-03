<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP;

class AbortAllResponse
{

    /**
     * @var boolean $AbortAllResult
     */
    protected $AbortAllResult = null;

    /**
     * @param boolean $AbortAllResult
     */
    public function __construct($AbortAllResult = null)
    {
      $this->AbortAllResult = $AbortAllResult;
    }

    /**
     * @return boolean
     */
    public function getAbortAllResult()
    {
      return $this->AbortAllResult;
    }

    /**
     * @param boolean $AbortAllResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\AbortAllResponse
     */
    public function setAbortAllResult($AbortAllResult)
    {
      $this->AbortAllResult = $AbortAllResult;
      return $this;
    }

}
