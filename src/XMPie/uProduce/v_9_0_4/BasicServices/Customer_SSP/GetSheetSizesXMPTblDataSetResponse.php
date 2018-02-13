<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP;

class GetSheetSizesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetSheetSizesXMPTblDataSetResult
     */
    protected $GetSheetSizesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetSheetSizesXMPTblDataSetResult
     */
    public function __construct($GetSheetSizesXMPTblDataSetResult = null)
    {
      $this->GetSheetSizesXMPTblDataSetResult = $GetSheetSizesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetSheetSizesXMPTblDataSetResult()
    {
      return $this->GetSheetSizesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetSheetSizesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\GetSheetSizesXMPTblDataSetResponse
     */
    public function setGetSheetSizesXMPTblDataSetResult($GetSheetSizesXMPTblDataSetResult)
    {
      $this->GetSheetSizesXMPTblDataSetResult = $GetSheetSizesXMPTblDataSetResult;
      return $this;
    }

}
