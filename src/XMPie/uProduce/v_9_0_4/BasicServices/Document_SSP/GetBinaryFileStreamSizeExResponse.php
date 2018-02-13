<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetBinaryFileStreamSizeExResponse
{

    /**
     * @var int $GetBinaryFileStreamSizeExResult
     */
    protected $GetBinaryFileStreamSizeExResult = null;

    /**
     * @param int $GetBinaryFileStreamSizeExResult
     */
    public function __construct($GetBinaryFileStreamSizeExResult = null)
    {
      $this->GetBinaryFileStreamSizeExResult = $GetBinaryFileStreamSizeExResult;
    }

    /**
     * @return int
     */
    public function getGetBinaryFileStreamSizeExResult()
    {
      return $this->GetBinaryFileStreamSizeExResult;
    }

    /**
     * @param int $GetBinaryFileStreamSizeExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetBinaryFileStreamSizeExResponse
     */
    public function setGetBinaryFileStreamSizeExResult($GetBinaryFileStreamSizeExResult)
    {
      $this->GetBinaryFileStreamSizeExResult = $GetBinaryFileStreamSizeExResult;
      return $this;
    }

}
