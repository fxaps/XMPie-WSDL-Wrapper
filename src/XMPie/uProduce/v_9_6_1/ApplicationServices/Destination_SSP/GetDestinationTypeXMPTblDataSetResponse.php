<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP;

class GetDestinationTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDestinationTypeXMPTblDataSetResult
     */
    protected $GetDestinationTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDestinationTypeXMPTblDataSetResult
     */
    public function __construct($GetDestinationTypeXMPTblDataSetResult = null)
    {
      $this->GetDestinationTypeXMPTblDataSetResult = $GetDestinationTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDestinationTypeXMPTblDataSetResult()
    {
      return $this->GetDestinationTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDestinationTypeXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ApplicationServices\Destination_SSP\GetDestinationTypeXMPTblDataSetResponse
     */
    public function setGetDestinationTypeXMPTblDataSetResult($GetDestinationTypeXMPTblDataSetResult)
    {
      $this->GetDestinationTypeXMPTblDataSetResult = $GetDestinationTypeXMPTblDataSetResult;
      return $this;
    }

}
