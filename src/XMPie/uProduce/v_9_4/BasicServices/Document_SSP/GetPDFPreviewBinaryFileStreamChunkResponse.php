<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class GetPDFPreviewBinaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetPDFPreviewBinaryFileStreamChunkResult
     */
    protected $GetPDFPreviewBinaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetPDFPreviewBinaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetPDFPreviewBinaryFileStreamChunkResult = null, $inoutCount = null)
    {
      $this->GetPDFPreviewBinaryFileStreamChunkResult = $GetPDFPreviewBinaryFileStreamChunkResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetPDFPreviewBinaryFileStreamChunkResult()
    {
      return $this->GetPDFPreviewBinaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetPDFPreviewBinaryFileStreamChunkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamChunkResponse
     */
    public function setGetPDFPreviewBinaryFileStreamChunkResult($GetPDFPreviewBinaryFileStreamChunkResult)
    {
      $this->GetPDFPreviewBinaryFileStreamChunkResult = $GetPDFPreviewBinaryFileStreamChunkResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
