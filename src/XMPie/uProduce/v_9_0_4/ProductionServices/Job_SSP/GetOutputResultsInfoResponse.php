<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP;

class GetOutputResultsInfoResponse
{

    /**
     * @var ArrayOfOutputResult $GetOutputResultsInfoResult
     */
    protected $GetOutputResultsInfoResult = null;

    /**
     * @param ArrayOfOutputResult $GetOutputResultsInfoResult
     */
    public function __construct($GetOutputResultsInfoResult = null)
    {
      $this->GetOutputResultsInfoResult = $GetOutputResultsInfoResult;
    }

    /**
     * @return ArrayOfOutputResult
     */
    public function getGetOutputResultsInfoResult()
    {
      return $this->GetOutputResultsInfoResult;
    }

    /**
     * @param ArrayOfOutputResult $GetOutputResultsInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP\GetOutputResultsInfoResponse
     */
    public function setGetOutputResultsInfoResult($GetOutputResultsInfoResult)
    {
      $this->GetOutputResultsInfoResult = $GetOutputResultsInfoResult;
      return $this;
    }

}
