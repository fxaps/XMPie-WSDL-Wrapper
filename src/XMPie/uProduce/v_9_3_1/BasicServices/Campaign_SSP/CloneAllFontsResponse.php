<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class CloneAllFontsResponse
{

    /**
     * @var boolean $CloneAllFontsResult
     */
    protected $CloneAllFontsResult = null;

    /**
     * @param boolean $CloneAllFontsResult
     */
    public function __construct($CloneAllFontsResult = null)
    {
      $this->CloneAllFontsResult = $CloneAllFontsResult;
    }

    /**
     * @return boolean
     */
    public function getCloneAllFontsResult()
    {
      return $this->CloneAllFontsResult;
    }

    /**
     * @param boolean $CloneAllFontsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\CloneAllFontsResponse
     */
    public function setCloneAllFontsResult($CloneAllFontsResult)
    {
      $this->CloneAllFontsResult = $CloneAllFontsResult;
      return $this;
    }

}
