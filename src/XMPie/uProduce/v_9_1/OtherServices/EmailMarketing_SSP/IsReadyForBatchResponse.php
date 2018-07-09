<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP;

class IsReadyForBatchResponse
{

    /**
     * @var string $IsReadyForBatchResult
     */
    protected $IsReadyForBatchResult = null;

    /**
     * @param string $IsReadyForBatchResult
     */
    public function __construct($IsReadyForBatchResult = null)
    {
      $this->IsReadyForBatchResult = $IsReadyForBatchResult;
    }

    /**
     * @return string
     */
    public function getIsReadyForBatchResult()
    {
      return $this->IsReadyForBatchResult;
    }

    /**
     * @param string $IsReadyForBatchResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP\IsReadyForBatchResponse
     */
    public function setIsReadyForBatchResult($IsReadyForBatchResult)
    {
      $this->IsReadyForBatchResult = $IsReadyForBatchResult;
      return $this;
    }

}
