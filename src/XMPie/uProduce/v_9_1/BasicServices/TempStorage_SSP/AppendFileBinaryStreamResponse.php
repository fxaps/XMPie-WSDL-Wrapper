<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP;

class AppendFileBinaryStreamResponse
{

    /**
     * @var boolean $AppendFileBinaryStreamResult
     */
    protected $AppendFileBinaryStreamResult = null;

    /**
     * @param boolean $AppendFileBinaryStreamResult
     */
    public function __construct($AppendFileBinaryStreamResult = null)
    {
      $this->AppendFileBinaryStreamResult = $AppendFileBinaryStreamResult;
    }

    /**
     * @return boolean
     */
    public function getAppendFileBinaryStreamResult()
    {
      return $this->AppendFileBinaryStreamResult;
    }

    /**
     * @param boolean $AppendFileBinaryStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\TempStorage_SSP\AppendFileBinaryStreamResponse
     */
    public function setAppendFileBinaryStreamResult($AppendFileBinaryStreamResult)
    {
      $this->AppendFileBinaryStreamResult = $AppendFileBinaryStreamResult;
      return $this;
    }

}
