<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP;

class GetDestinationTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDestinationTypesXMPTblDataSetResult
     */
    protected $GetDestinationTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDestinationTypesXMPTblDataSetResult
     */
    public function __construct($GetDestinationTypesXMPTblDataSetResult = null)
    {
      $this->GetDestinationTypesXMPTblDataSetResult = $GetDestinationTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDestinationTypesXMPTblDataSetResult()
    {
      return $this->GetDestinationTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDestinationTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetDestinationTypesXMPTblDataSetResponse
     */
    public function setGetDestinationTypesXMPTblDataSetResult($GetDestinationTypesXMPTblDataSetResult)
    {
      $this->GetDestinationTypesXMPTblDataSetResult = $GetDestinationTypesXMPTblDataSetResult;
      return $this;
    }

}
