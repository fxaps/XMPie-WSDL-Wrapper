<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class DeleteAllTouchPointsResponse
{

    /**
     * @var boolean $DeleteAllTouchPointsResult
     */
    protected $DeleteAllTouchPointsResult = null;

    /**
     * @param boolean $DeleteAllTouchPointsResult
     */
    public function __construct($DeleteAllTouchPointsResult = null)
    {
      $this->DeleteAllTouchPointsResult = $DeleteAllTouchPointsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllTouchPointsResult()
    {
      return $this->DeleteAllTouchPointsResult;
    }

    /**
     * @param boolean $DeleteAllTouchPointsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\DeleteAllTouchPointsResponse
     */
    public function setDeleteAllTouchPointsResult($DeleteAllTouchPointsResult)
    {
      $this->DeleteAllTouchPointsResult = $DeleteAllTouchPointsResult;
      return $this;
    }

}
