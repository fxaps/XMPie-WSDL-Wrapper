<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\TempStorage_SSP;

class GetFileBinaryStreamResponse
{

    /**
     * @var base64Binary $GetFileBinaryStreamResult
     */
    protected $GetFileBinaryStreamResult = null;

    /**
     * @param base64Binary $GetFileBinaryStreamResult
     */
    public function __construct($GetFileBinaryStreamResult = null)
    {
      $this->GetFileBinaryStreamResult = $GetFileBinaryStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetFileBinaryStreamResult()
    {
      return $this->GetFileBinaryStreamResult;
    }

    /**
     * @param base64Binary $GetFileBinaryStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\TempStorage_SSP\GetFileBinaryStreamResponse
     */
    public function setGetFileBinaryStreamResult($GetFileBinaryStreamResult)
    {
      $this->GetFileBinaryStreamResult = $GetFileBinaryStreamResult;
      return $this;
    }

}
