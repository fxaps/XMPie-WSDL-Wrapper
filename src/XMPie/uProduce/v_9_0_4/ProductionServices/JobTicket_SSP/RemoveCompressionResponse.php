<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class RemoveCompressionResponse
{

    /**
     * @var boolean $RemoveCompressionResult
     */
    protected $RemoveCompressionResult = null;

    /**
     * @param boolean $RemoveCompressionResult
     */
    public function __construct($RemoveCompressionResult = null)
    {
      $this->RemoveCompressionResult = $RemoveCompressionResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveCompressionResult()
    {
      return $this->RemoveCompressionResult;
    }

    /**
     * @param boolean $RemoveCompressionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\RemoveCompressionResponse
     */
    public function setRemoveCompressionResult($RemoveCompressionResult)
    {
      $this->RemoveCompressionResult = $RemoveCompressionResult;
      return $this;
    }

}
