<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\TempStorage_SSP;

class GetFileBinaryStreamChunkResponse
{

    /**
     * @var base64Binary $GetFileBinaryStreamChunkResult
     */
    protected $GetFileBinaryStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetFileBinaryStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetFileBinaryStreamChunkResult = null, $inoutCount = null)
    {
      $this->GetFileBinaryStreamChunkResult = $GetFileBinaryStreamChunkResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetFileBinaryStreamChunkResult()
    {
      return $this->GetFileBinaryStreamChunkResult;
    }

    /**
     * @param base64Binary $GetFileBinaryStreamChunkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunkResponse
     */
    public function setGetFileBinaryStreamChunkResult($GetFileBinaryStreamChunkResult)
    {
      $this->GetFileBinaryStreamChunkResult = $GetFileBinaryStreamChunkResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\TempStorage_SSP\GetFileBinaryStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
