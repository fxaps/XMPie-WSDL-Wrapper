<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class IsVPCCompressionResponse
{

    /**
     * @var boolean $IsVPCCompressionResult
     */
    protected $IsVPCCompressionResult = null;

    /**
     * @param boolean $IsVPCCompressionResult
     */
    public function __construct($IsVPCCompressionResult = null)
    {
      $this->IsVPCCompressionResult = $IsVPCCompressionResult;
    }

    /**
     * @return boolean
     */
    public function getIsVPCCompressionResult()
    {
      return $this->IsVPCCompressionResult;
    }

    /**
     * @param boolean $IsVPCCompressionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\IsVPCCompressionResponse
     */
    public function setIsVPCCompressionResult($IsVPCCompressionResult)
    {
      $this->IsVPCCompressionResult = $IsVPCCompressionResult;
      return $this;
    }

}
