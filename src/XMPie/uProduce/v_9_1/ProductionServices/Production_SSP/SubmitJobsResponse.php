<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP;

class SubmitJobsResponse
{

    /**
     * @var ArrayOfString $SubmitJobsResult
     */
    protected $SubmitJobsResult = null;

    /**
     * @param ArrayOfString $SubmitJobsResult
     */
    public function __construct($SubmitJobsResult = null)
    {
      $this->SubmitJobsResult = $SubmitJobsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getSubmitJobsResult()
    {
      return $this->SubmitJobsResult;
    }

    /**
     * @param ArrayOfString $SubmitJobsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\SubmitJobsResponse
     */
    public function setSubmitJobsResult($SubmitJobsResult)
    {
      $this->SubmitJobsResult = $SubmitJobsResult;
      return $this;
    }

}
