<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP;

class GetMessagesResponse
{

    /**
     * @var ArrayOfString $GetMessagesResult
     */
    protected $GetMessagesResult = null;

    /**
     * @param ArrayOfString $GetMessagesResult
     */
    public function __construct($GetMessagesResult = null)
    {
      $this->GetMessagesResult = $GetMessagesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetMessagesResult()
    {
      return $this->GetMessagesResult;
    }

    /**
     * @param ArrayOfString $GetMessagesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesResponse
     */
    public function setGetMessagesResult($GetMessagesResult)
    {
      $this->GetMessagesResult = $GetMessagesResult;
      return $this;
    }

}
