<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP;

class GetMessagesNumResponse
{

    /**
     * @var int $GetMessagesNumResult
     */
    protected $GetMessagesNumResult = null;

    /**
     * @param int $GetMessagesNumResult
     */
    public function __construct($GetMessagesNumResult = null)
    {
      $this->GetMessagesNumResult = $GetMessagesNumResult;
    }

    /**
     * @return int
     */
    public function getGetMessagesNumResult()
    {
      return $this->GetMessagesNumResult;
    }

    /**
     * @param int $GetMessagesNumResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\GetMessagesNumResponse
     */
    public function setGetMessagesNumResult($GetMessagesNumResult)
    {
      $this->GetMessagesNumResult = $GetMessagesNumResult;
      return $this;
    }

}
