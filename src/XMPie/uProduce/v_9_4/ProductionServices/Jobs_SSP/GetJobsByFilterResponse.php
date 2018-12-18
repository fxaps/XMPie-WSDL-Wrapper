<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP;

class GetJobsByFilterResponse
{

    /**
     * @var ArrayOfString $GetJobsByFilterResult
     */
    protected $GetJobsByFilterResult = null;

    /**
     * @param ArrayOfString $GetJobsByFilterResult
     */
    public function __construct($GetJobsByFilterResult = null)
    {
      $this->GetJobsByFilterResult = $GetJobsByFilterResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetJobsByFilterResult()
    {
      return $this->GetJobsByFilterResult;
    }

    /**
     * @param ArrayOfString $GetJobsByFilterResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Jobs_SSP\GetJobsByFilterResponse
     */
    public function setGetJobsByFilterResult($GetJobsByFilterResult)
    {
      $this->GetJobsByFilterResult = $GetJobsByFilterResult;
      return $this;
    }

}
