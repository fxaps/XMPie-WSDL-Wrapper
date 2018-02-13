<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP;

class GetSheetSizesDataSetResponse
{

    /**
     * @var GetSheetSizesDataSetResult $GetSheetSizesDataSetResult
     */
    protected $GetSheetSizesDataSetResult = null;

    /**
     * @param GetSheetSizesDataSetResult $GetSheetSizesDataSetResult
     */
    public function __construct($GetSheetSizesDataSetResult = null)
    {
      $this->GetSheetSizesDataSetResult = $GetSheetSizesDataSetResult;
    }

    /**
     * @return GetSheetSizesDataSetResult
     */
    public function getGetSheetSizesDataSetResult()
    {
      return $this->GetSheetSizesDataSetResult;
    }

    /**
     * @param GetSheetSizesDataSetResult $GetSheetSizesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\GetSheetSizesDataSetResponse
     */
    public function setGetSheetSizesDataSetResult($GetSheetSizesDataSetResult)
    {
      $this->GetSheetSizesDataSetResult = $GetSheetSizesDataSetResult;
      return $this;
    }

}
