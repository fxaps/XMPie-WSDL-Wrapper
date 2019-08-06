<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class IsSubJobResponse
{

    /**
     * @var boolean $IsSubJobResult
     */
    protected $IsSubJobResult = null;

    /**
     * @param boolean $IsSubJobResult
     */
    public function __construct($IsSubJobResult = null)
    {
      $this->IsSubJobResult = $IsSubJobResult;
    }

    /**
     * @return boolean
     */
    public function getIsSubJobResult()
    {
      return $this->IsSubJobResult;
    }

    /**
     * @param boolean $IsSubJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\IsSubJobResponse
     */
    public function setIsSubJobResult($IsSubJobResult)
    {
      $this->IsSubJobResult = $IsSubJobResult;
      return $this;
    }

}
