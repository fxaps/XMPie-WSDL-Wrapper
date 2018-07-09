<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamSizeResponse
{

    /**
     * @var int $GetResourceBinaryFileStreamSizeResult
     */
    protected $GetResourceBinaryFileStreamSizeResult = null;

    /**
     * @param int $GetResourceBinaryFileStreamSizeResult
     */
    public function __construct($GetResourceBinaryFileStreamSizeResult = null)
    {
      $this->GetResourceBinaryFileStreamSizeResult = $GetResourceBinaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetResourceBinaryFileStreamSizeResult()
    {
      return $this->GetResourceBinaryFileStreamSizeResult;
    }

    /**
     * @param int $GetResourceBinaryFileStreamSizeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamSizeResponse
     */
    public function setGetResourceBinaryFileStreamSizeResult($GetResourceBinaryFileStreamSizeResult)
    {
      $this->GetResourceBinaryFileStreamSizeResult = $GetResourceBinaryFileStreamSizeResult;
      return $this;
    }

}
