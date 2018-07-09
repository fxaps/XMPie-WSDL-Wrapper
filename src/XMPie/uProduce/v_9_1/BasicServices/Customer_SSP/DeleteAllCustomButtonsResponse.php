<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class DeleteAllCustomButtonsResponse
{

    /**
     * @var boolean $DeleteAllCustomButtonsResult
     */
    protected $DeleteAllCustomButtonsResult = null;

    /**
     * @param boolean $DeleteAllCustomButtonsResult
     */
    public function __construct($DeleteAllCustomButtonsResult = null)
    {
      $this->DeleteAllCustomButtonsResult = $DeleteAllCustomButtonsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllCustomButtonsResult()
    {
      return $this->DeleteAllCustomButtonsResult;
    }

    /**
     * @param boolean $DeleteAllCustomButtonsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\DeleteAllCustomButtonsResponse
     */
    public function setDeleteAllCustomButtonsResult($DeleteAllCustomButtonsResult)
    {
      $this->DeleteAllCustomButtonsResult = $DeleteAllCustomButtonsResult;
      return $this;
    }

}
