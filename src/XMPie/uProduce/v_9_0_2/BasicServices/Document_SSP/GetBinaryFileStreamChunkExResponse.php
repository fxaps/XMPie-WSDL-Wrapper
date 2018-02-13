<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class GetBinaryFileStreamChunkExResponse
{

    /**
     * @var base64Binary $GetBinaryFileStreamChunkExResult
     */
    protected $GetBinaryFileStreamChunkExResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetBinaryFileStreamChunkExResult
     * @param int $inoutCount
     */
    public function __construct($GetBinaryFileStreamChunkExResult = null, $inoutCount = null)
    {
      $this->GetBinaryFileStreamChunkExResult = $GetBinaryFileStreamChunkExResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileStreamChunkExResult()
    {
      return $this->GetBinaryFileStreamChunkExResult;
    }

    /**
     * @param base64Binary $GetBinaryFileStreamChunkExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetBinaryFileStreamChunkExResponse
     */
    public function setGetBinaryFileStreamChunkExResult($GetBinaryFileStreamChunkExResult)
    {
      $this->GetBinaryFileStreamChunkExResult = $GetBinaryFileStreamChunkExResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetBinaryFileStreamChunkExResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
