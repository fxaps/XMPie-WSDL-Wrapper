<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class ReplaceFromStreamResponse
{

    /**
     * @var boolean $ReplaceFromStreamResult
     */
    protected $ReplaceFromStreamResult = null;

    /**
     * @param boolean $ReplaceFromStreamResult
     */
    public function __construct($ReplaceFromStreamResult = null)
    {
      $this->ReplaceFromStreamResult = $ReplaceFromStreamResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromStreamResult()
    {
      return $this->ReplaceFromStreamResult;
    }

    /**
     * @param boolean $ReplaceFromStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\ReplaceFromStreamResponse
     */
    public function setReplaceFromStreamResult($ReplaceFromStreamResult)
    {
      $this->ReplaceFromStreamResult = $ReplaceFromStreamResult;
      return $this;
    }

}
