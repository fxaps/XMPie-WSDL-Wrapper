<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP;

class GetOutputResultsResponse
{

    /**
     * @var ArrayOfString $GetOutputResultsResult
     */
    protected $GetOutputResultsResult = null;

    /**
     * @param ArrayOfString $GetOutputResultsResult
     */
    public function __construct($GetOutputResultsResult = null)
    {
      $this->GetOutputResultsResult = $GetOutputResultsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetOutputResultsResult()
    {
      return $this->GetOutputResultsResult;
    }

    /**
     * @param ArrayOfString $GetOutputResultsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultsResponse
     */
    public function setGetOutputResultsResult($GetOutputResultsResult)
    {
      $this->GetOutputResultsResult = $GetOutputResultsResult;
      return $this;
    }

}
