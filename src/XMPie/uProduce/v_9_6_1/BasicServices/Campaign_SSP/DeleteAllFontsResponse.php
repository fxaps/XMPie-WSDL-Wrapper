<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class DeleteAllFontsResponse
{

    /**
     * @var boolean $DeleteAllFontsResult
     */
    protected $DeleteAllFontsResult = null;

    /**
     * @param boolean $DeleteAllFontsResult
     */
    public function __construct($DeleteAllFontsResult = null)
    {
      $this->DeleteAllFontsResult = $DeleteAllFontsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllFontsResult()
    {
      return $this->DeleteAllFontsResult;
    }

    /**
     * @param boolean $DeleteAllFontsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAllFontsResponse
     */
    public function setDeleteAllFontsResult($DeleteAllFontsResult)
    {
      $this->DeleteAllFontsResult = $DeleteAllFontsResult;
      return $this;
    }

}
