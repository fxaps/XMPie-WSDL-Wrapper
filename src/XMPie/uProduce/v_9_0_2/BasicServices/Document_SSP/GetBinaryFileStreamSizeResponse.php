<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class GetBinaryFileStreamSizeResponse
{

    /**
     * @var int $GetBinaryFileStreamSizeResult
     */
    protected $GetBinaryFileStreamSizeResult = null;

    /**
     * @param int $GetBinaryFileStreamSizeResult
     */
    public function __construct($GetBinaryFileStreamSizeResult = null)
    {
      $this->GetBinaryFileStreamSizeResult = $GetBinaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetBinaryFileStreamSizeResult()
    {
      return $this->GetBinaryFileStreamSizeResult;
    }

    /**
     * @param int $GetBinaryFileStreamSizeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetBinaryFileStreamSizeResponse
     */
    public function setGetBinaryFileStreamSizeResult($GetBinaryFileStreamSizeResult)
    {
      $this->GetBinaryFileStreamSizeResult = $GetBinaryFileStreamSizeResult;
      return $this;
    }

}
