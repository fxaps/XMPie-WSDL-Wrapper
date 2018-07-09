<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetResourceBinaryFileStreamChunkResult
     */
    protected $GetResourceBinaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetResourceBinaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetResourceBinaryFileStreamChunkResult = null, $inoutCount = null)
    {
      $this->GetResourceBinaryFileStreamChunkResult = $GetResourceBinaryFileStreamChunkResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetResourceBinaryFileStreamChunkResult()
    {
      return $this->GetResourceBinaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetResourceBinaryFileStreamChunkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkResponse
     */
    public function setGetResourceBinaryFileStreamChunkResult($GetResourceBinaryFileStreamChunkResult)
    {
      $this->GetResourceBinaryFileStreamChunkResult = $GetResourceBinaryFileStreamChunkResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
      return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
