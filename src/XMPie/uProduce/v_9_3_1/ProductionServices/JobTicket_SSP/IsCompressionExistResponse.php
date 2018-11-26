<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class IsCompressionExistResponse
{

    /**
     * @var boolean $IsCompressionExistResult
     */
    protected $IsCompressionExistResult = null;

    /**
     * @param boolean $IsCompressionExistResult
     */
    public function __construct($IsCompressionExistResult = null)
    {
      $this->IsCompressionExistResult = $IsCompressionExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsCompressionExistResult()
    {
      return $this->IsCompressionExistResult;
    }

    /**
     * @param boolean $IsCompressionExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\IsCompressionExistResponse
     */
    public function setIsCompressionExistResult($IsCompressionExistResult)
    {
      $this->IsCompressionExistResult = $IsCompressionExistResult;
      return $this;
    }

}
