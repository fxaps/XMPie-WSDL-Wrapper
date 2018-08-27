<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSource_SSP;

class ReplaceResponse
{

    /**
     * @var boolean $ReplaceResult
     */
    protected $ReplaceResult = null;

    /**
     * @param boolean $ReplaceResult
     */
    public function __construct($ReplaceResult = null)
    {
      $this->ReplaceResult = $ReplaceResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceResult()
    {
      return $this->ReplaceResult;
    }

    /**
     * @param boolean $ReplaceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSource_SSP\ReplaceResponse
     */
    public function setReplaceResult($ReplaceResult)
    {
      $this->ReplaceResult = $ReplaceResult;
      return $this;
    }

}
