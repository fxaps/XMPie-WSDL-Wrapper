<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP;

class DeleteSheetSizesResponse
{

    /**
     * @var boolean $DeleteSheetSizesResult
     */
    protected $DeleteSheetSizesResult = null;

    /**
     * @param boolean $DeleteSheetSizesResult
     */
    public function __construct($DeleteSheetSizesResult = null)
    {
      $this->DeleteSheetSizesResult = $DeleteSheetSizesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSheetSizesResult()
    {
      return $this->DeleteSheetSizesResult;
    }

    /**
     * @param boolean $DeleteSheetSizesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP\DeleteSheetSizesResponse
     */
    public function setDeleteSheetSizesResult($DeleteSheetSizesResult)
    {
      $this->DeleteSheetSizesResult = $DeleteSheetSizesResult;
      return $this;
    }

}
