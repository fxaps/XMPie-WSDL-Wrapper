<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP;

class ReplaceFromURLResponse
{

    /**
     * @var boolean $ReplaceFromURLResult
     */
    protected $ReplaceFromURLResult = null;

    /**
     * @param boolean $ReplaceFromURLResult
     */
    public function __construct($ReplaceFromURLResult = null)
    {
      $this->ReplaceFromURLResult = $ReplaceFromURLResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromURLResult()
    {
      return $this->ReplaceFromURLResult;
    }

    /**
     * @param boolean $ReplaceFromURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\ReplaceFromURLResponse
     */
    public function setReplaceFromURLResult($ReplaceFromURLResult)
    {
      $this->ReplaceFromURLResult = $ReplaceFromURLResult;
      return $this;
    }

}
