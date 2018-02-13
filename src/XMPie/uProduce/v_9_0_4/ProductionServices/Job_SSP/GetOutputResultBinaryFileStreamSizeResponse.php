<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP;

class GetOutputResultBinaryFileStreamSizeResponse
{

    /**
     * @var int $GetOutputResultBinaryFileStreamSizeResult
     */
    protected $GetOutputResultBinaryFileStreamSizeResult = null;

    /**
     * @param int $GetOutputResultBinaryFileStreamSizeResult
     */
    public function __construct($GetOutputResultBinaryFileStreamSizeResult = null)
    {
      $this->GetOutputResultBinaryFileStreamSizeResult = $GetOutputResultBinaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetOutputResultBinaryFileStreamSizeResult()
    {
      return $this->GetOutputResultBinaryFileStreamSizeResult;
    }

    /**
     * @param int $GetOutputResultBinaryFileStreamSizeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamSizeResponse
     */
    public function setGetOutputResultBinaryFileStreamSizeResult($GetOutputResultBinaryFileStreamSizeResult)
    {
      $this->GetOutputResultBinaryFileStreamSizeResult = $GetOutputResultBinaryFileStreamSizeResult;
      return $this;
    }

}
