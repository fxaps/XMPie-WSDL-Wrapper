<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\GeneralUtils_SSP;

class GetPathLocatorXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPathLocatorXMPTblDataSetResult
     */
    protected $GetPathLocatorXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPathLocatorXMPTblDataSetResult
     */
    public function __construct($GetPathLocatorXMPTblDataSetResult = null)
    {
      $this->GetPathLocatorXMPTblDataSetResult = $GetPathLocatorXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPathLocatorXMPTblDataSetResult()
    {
      return $this->GetPathLocatorXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPathLocatorXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\GeneralUtils_SSP\GetPathLocatorXMPTblDataSetResponse
     */
    public function setGetPathLocatorXMPTblDataSetResult($GetPathLocatorXMPTblDataSetResult)
    {
      $this->GetPathLocatorXMPTblDataSetResult = $GetPathLocatorXMPTblDataSetResult;
      return $this;
    }

}
