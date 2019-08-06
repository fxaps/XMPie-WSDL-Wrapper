<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Job_SSP;

class GetMessagesDataSetResponse
{

    /**
     * @var GetMessagesDataSetResult $GetMessagesDataSetResult
     */
    protected $GetMessagesDataSetResult = null;

    /**
     * @param GetMessagesDataSetResult $GetMessagesDataSetResult
     */
    public function __construct($GetMessagesDataSetResult = null)
    {
      $this->GetMessagesDataSetResult = $GetMessagesDataSetResult;
    }

    /**
     * @return GetMessagesDataSetResult
     */
    public function getGetMessagesDataSetResult()
    {
      return $this->GetMessagesDataSetResult;
    }

    /**
     * @param GetMessagesDataSetResult $GetMessagesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Job_SSP\GetMessagesDataSetResponse
     */
    public function setGetMessagesDataSetResult($GetMessagesDataSetResult)
    {
      $this->GetMessagesDataSetResult = $GetMessagesDataSetResult;
      return $this;
    }

}
