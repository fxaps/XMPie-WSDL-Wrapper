<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class IsSplittedJobResponse
{

    /**
     * @var boolean $IsSplittedJobResult
     */
    protected $IsSplittedJobResult = null;

    /**
     * @param boolean $IsSplittedJobResult
     */
    public function __construct($IsSplittedJobResult = null)
    {
      $this->IsSplittedJobResult = $IsSplittedJobResult;
    }

    /**
     * @return boolean
     */
    public function getIsSplittedJobResult()
    {
      return $this->IsSplittedJobResult;
    }

    /**
     * @param boolean $IsSplittedJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\IsSplittedJobResponse
     */
    public function setIsSplittedJobResult($IsSplittedJobResult)
    {
      $this->IsSplittedJobResult = $IsSplittedJobResult;
      return $this;
    }

}
