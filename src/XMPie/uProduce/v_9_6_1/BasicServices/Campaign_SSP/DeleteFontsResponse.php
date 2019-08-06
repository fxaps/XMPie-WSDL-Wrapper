<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class DeleteFontsResponse
{

    /**
     * @var boolean $DeleteFontsResult
     */
    protected $DeleteFontsResult = null;

    /**
     * @param boolean $DeleteFontsResult
     */
    public function __construct($DeleteFontsResult = null)
    {
      $this->DeleteFontsResult = $DeleteFontsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteFontsResult()
    {
      return $this->DeleteFontsResult;
    }

    /**
     * @param boolean $DeleteFontsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteFontsResponse
     */
    public function setDeleteFontsResult($DeleteFontsResult)
    {
      $this->DeleteFontsResult = $DeleteFontsResult;
      return $this;
    }

}
