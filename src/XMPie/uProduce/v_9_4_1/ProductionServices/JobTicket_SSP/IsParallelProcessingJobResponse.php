<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class IsParallelProcessingJobResponse
{

    /**
     * @var boolean $IsParallelProcessingJobResult
     */
    protected $IsParallelProcessingJobResult = null;

    /**
     * @param boolean $IsParallelProcessingJobResult
     */
    public function __construct($IsParallelProcessingJobResult = null)
    {
      $this->IsParallelProcessingJobResult = $IsParallelProcessingJobResult;
    }

    /**
     * @return boolean
     */
    public function getIsParallelProcessingJobResult()
    {
      return $this->IsParallelProcessingJobResult;
    }

    /**
     * @param boolean $IsParallelProcessingJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\IsParallelProcessingJobResponse
     */
    public function setIsParallelProcessingJobResult($IsParallelProcessingJobResult)
    {
      $this->IsParallelProcessingJobResult = $IsParallelProcessingJobResult;
      return $this;
    }

}
