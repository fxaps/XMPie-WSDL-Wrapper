<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class DeleteAllSheetSizesResponse
{

    /**
     * @var boolean $DeleteAllSheetSizesResult
     */
    protected $DeleteAllSheetSizesResult = null;

    /**
     * @param boolean $DeleteAllSheetSizesResult
     */
    public function __construct($DeleteAllSheetSizesResult = null)
    {
      $this->DeleteAllSheetSizesResult = $DeleteAllSheetSizesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllSheetSizesResult()
    {
      return $this->DeleteAllSheetSizesResult;
    }

    /**
     * @param boolean $DeleteAllSheetSizesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\DeleteAllSheetSizesResponse
     */
    public function setDeleteAllSheetSizesResult($DeleteAllSheetSizesResult)
    {
      $this->DeleteAllSheetSizesResult = $DeleteAllSheetSizesResult;
      return $this;
    }

}
