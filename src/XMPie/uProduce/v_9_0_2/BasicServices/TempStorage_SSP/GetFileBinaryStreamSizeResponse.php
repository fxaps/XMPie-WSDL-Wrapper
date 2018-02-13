<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\TempStorage_SSP;

class GetFileBinaryStreamSizeResponse
{

    /**
     * @var int $GetFileBinaryStreamSizeResult
     */
    protected $GetFileBinaryStreamSizeResult = null;

    /**
     * @param int $GetFileBinaryStreamSizeResult
     */
    public function __construct($GetFileBinaryStreamSizeResult = null)
    {
      $this->GetFileBinaryStreamSizeResult = $GetFileBinaryStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetFileBinaryStreamSizeResult()
    {
      return $this->GetFileBinaryStreamSizeResult;
    }

    /**
     * @param int $GetFileBinaryStreamSizeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\TempStorage_SSP\GetFileBinaryStreamSizeResponse
     */
    public function setGetFileBinaryStreamSizeResult($GetFileBinaryStreamSizeResult)
    {
      $this->GetFileBinaryStreamSizeResult = $GetFileBinaryStreamSizeResult;
      return $this;
    }

}
