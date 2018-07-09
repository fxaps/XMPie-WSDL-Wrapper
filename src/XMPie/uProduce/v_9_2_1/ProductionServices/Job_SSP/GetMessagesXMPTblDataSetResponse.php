<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP;

class GetMessagesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetMessagesXMPTblDataSetResult
     */
    protected $GetMessagesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetMessagesXMPTblDataSetResult
     */
    public function __construct($GetMessagesXMPTblDataSetResult = null)
    {
      $this->GetMessagesXMPTblDataSetResult = $GetMessagesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetMessagesXMPTblDataSetResult()
    {
      return $this->GetMessagesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetMessagesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP\GetMessagesXMPTblDataSetResponse
     */
    public function setGetMessagesXMPTblDataSetResult($GetMessagesXMPTblDataSetResult)
    {
      $this->GetMessagesXMPTblDataSetResult = $GetMessagesXMPTblDataSetResult;
      return $this;
    }

}
