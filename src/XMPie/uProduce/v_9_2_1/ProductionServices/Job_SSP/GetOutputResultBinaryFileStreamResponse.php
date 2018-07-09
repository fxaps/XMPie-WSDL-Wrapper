<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP;

class GetOutputResultBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetOutputResultBinaryFileStreamResult
     */
    protected $GetOutputResultBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetOutputResultBinaryFileStreamResult
     */
    public function __construct($GetOutputResultBinaryFileStreamResult = null)
    {
      $this->GetOutputResultBinaryFileStreamResult = $GetOutputResultBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetOutputResultBinaryFileStreamResult()
    {
      return $this->GetOutputResultBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetOutputResultBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamResponse
     */
    public function setGetOutputResultBinaryFileStreamResult($GetOutputResultBinaryFileStreamResult)
    {
      $this->GetOutputResultBinaryFileStreamResult = $GetOutputResultBinaryFileStreamResult;
      return $this;
    }

}
