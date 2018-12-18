<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP;

class AbortResponse
{

    /**
     * @var boolean $AbortResult
     */
    protected $AbortResult = null;

    /**
     * @param boolean $AbortResult
     */
    public function __construct($AbortResult = null)
    {
      $this->AbortResult = $AbortResult;
    }

    /**
     * @return boolean
     */
    public function getAbortResult()
    {
      return $this->AbortResult;
    }

    /**
     * @param boolean $AbortResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AbortResponse
     */
    public function setAbortResult($AbortResult)
    {
      $this->AbortResult = $AbortResult;
      return $this;
    }

}
