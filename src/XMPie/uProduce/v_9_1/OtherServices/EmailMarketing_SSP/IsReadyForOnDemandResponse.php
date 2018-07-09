<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP;

class IsReadyForOnDemandResponse
{

    /**
     * @var string $IsReadyForOnDemandResult
     */
    protected $IsReadyForOnDemandResult = null;

    /**
     * @param string $IsReadyForOnDemandResult
     */
    public function __construct($IsReadyForOnDemandResult = null)
    {
      $this->IsReadyForOnDemandResult = $IsReadyForOnDemandResult;
    }

    /**
     * @return string
     */
    public function getIsReadyForOnDemandResult()
    {
      return $this->IsReadyForOnDemandResult;
    }

    /**
     * @param string $IsReadyForOnDemandResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP\IsReadyForOnDemandResponse
     */
    public function setIsReadyForOnDemandResult($IsReadyForOnDemandResult)
    {
      $this->IsReadyForOnDemandResult = $IsReadyForOnDemandResult;
      return $this;
    }

}
