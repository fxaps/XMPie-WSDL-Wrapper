<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\TouchPoint_SSP;

class SetPropertyResponse
{

    /**
     * @var boolean $SetPropertyResult
     */
    protected $SetPropertyResult = null;

    /**
     * @param boolean $SetPropertyResult
     */
    public function __construct($SetPropertyResult = null)
    {
      $this->SetPropertyResult = $SetPropertyResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertyResult()
    {
      return $this->SetPropertyResult;
    }

    /**
     * @param boolean $SetPropertyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\TouchPoint_SSP\SetPropertyResponse
     */
    public function setSetPropertyResult($SetPropertyResult)
    {
      $this->SetPropertyResult = $SetPropertyResult;
      return $this;
    }

}
