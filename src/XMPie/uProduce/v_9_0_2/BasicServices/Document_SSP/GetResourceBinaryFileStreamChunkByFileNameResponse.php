<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class GetResourceBinaryFileStreamChunkByFileNameResponse
{

    /**
     * @var base64Binary $GetResourceBinaryFileStreamChunkByFileNameResult
     */
    protected $GetResourceBinaryFileStreamChunkByFileNameResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetResourceBinaryFileStreamChunkByFileNameResult
     * @param int $inoutCount
     */
    public function __construct($GetResourceBinaryFileStreamChunkByFileNameResult = null, $inoutCount = null)
    {
      $this->GetResourceBinaryFileStreamChunkByFileNameResult = $GetResourceBinaryFileStreamChunkByFileNameResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetResourceBinaryFileStreamChunkByFileNameResult()
    {
      return $this->GetResourceBinaryFileStreamChunkByFileNameResult;
    }

    /**
     * @param base64Binary $GetResourceBinaryFileStreamChunkByFileNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileNameResponse
     */
    public function setGetResourceBinaryFileStreamChunkByFileNameResult($GetResourceBinaryFileStreamChunkByFileNameResult)
    {
      $this->GetResourceBinaryFileStreamChunkByFileNameResult = $GetResourceBinaryFileStreamChunkByFileNameResult;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileNameResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
