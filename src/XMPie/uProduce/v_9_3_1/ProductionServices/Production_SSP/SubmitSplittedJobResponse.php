<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Production_SSP;

class SubmitSplittedJobResponse
{

    /**
     * @var ArrayOfString $SubmitSplittedJobResult
     */
    protected $SubmitSplittedJobResult = null;

    /**
     * @param ArrayOfString $SubmitSplittedJobResult
     */
    public function __construct($SubmitSplittedJobResult = null)
    {
      $this->SubmitSplittedJobResult = $SubmitSplittedJobResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getSubmitSplittedJobResult()
    {
      return $this->SubmitSplittedJobResult;
    }

    /**
     * @param ArrayOfString $SubmitSplittedJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Production_SSP\SubmitSplittedJobResponse
     */
    public function setSubmitSplittedJobResult($SubmitSplittedJobResult)
    {
      $this->SubmitSplittedJobResult = $SubmitSplittedJobResult;
      return $this;
    }

}
