<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Jobs_SSP;

class GetJobTypesResponse
{

    /**
     * @var GetJobTypesResult $GetJobTypesResult
     */
    protected $GetJobTypesResult = null;

    /**
     * @param GetJobTypesResult $GetJobTypesResult
     */
    public function __construct($GetJobTypesResult = null)
    {
      $this->GetJobTypesResult = $GetJobTypesResult;
    }

    /**
     * @return GetJobTypesResult
     */
    public function getGetJobTypesResult()
    {
      return $this->GetJobTypesResult;
    }

    /**
     * @param GetJobTypesResult $GetJobTypesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Jobs_SSP\GetJobTypesResponse
     */
    public function setGetJobTypesResult($GetJobTypesResult)
    {
      $this->GetJobTypesResult = $GetJobTypesResult;
      return $this;
    }

}
