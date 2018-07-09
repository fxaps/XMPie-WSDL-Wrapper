<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Font_SSP;

class ReplaceResponse
{

    /**
     * @var string $ReplaceResult
     */
    protected $ReplaceResult = null;

    /**
     * @param string $ReplaceResult
     */
    public function __construct($ReplaceResult = null)
    {
      $this->ReplaceResult = $ReplaceResult;
    }

    /**
     * @return string
     */
    public function getReplaceResult()
    {
      return $this->ReplaceResult;
    }

    /**
     * @param string $ReplaceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Font_SSP\ReplaceResponse
     */
    public function setReplaceResult($ReplaceResult)
    {
      $this->ReplaceResult = $ReplaceResult;
      return $this;
    }

}
