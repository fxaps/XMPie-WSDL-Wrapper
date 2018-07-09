<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP;

class GetBinarySecondaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetBinarySecondaryFileStreamChunkResult
     */
    protected $GetBinarySecondaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetBinarySecondaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetBinarySecondaryFileStreamChunkResult = null, $inoutCount = null)
    {
      $this->GetBinarySecondaryFileStreamChunkResult = $GetBinarySecondaryFileStreamChunkResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinarySecondaryFileStreamChunkResult()
    {
      return $this->GetBinarySecondaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetBinarySecondaryFileStreamChunkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamChunkResponse
     */
    public function setGetBinarySecondaryFileStreamChunkResult($GetBinarySecondaryFileStreamChunkResult)
    {
      $this->GetBinarySecondaryFileStreamChunkResult = $GetBinarySecondaryFileStreamChunkResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
