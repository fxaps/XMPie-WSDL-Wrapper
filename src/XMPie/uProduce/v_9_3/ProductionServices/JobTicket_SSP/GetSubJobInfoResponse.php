<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetSubJobInfoResponse
{

    /**
     * @var SubJobInfo $GetSubJobInfoResult
     */
    protected $GetSubJobInfoResult = null;

    /**
     * @param SubJobInfo $GetSubJobInfoResult
     */
    public function __construct($GetSubJobInfoResult = null)
    {
      $this->GetSubJobInfoResult = $GetSubJobInfoResult;
    }

    /**
     * @return SubJobInfo
     */
    public function getGetSubJobInfoResult()
    {
      return $this->GetSubJobInfoResult;
    }

    /**
     * @param SubJobInfo $GetSubJobInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetSubJobInfoResponse
     */
    public function setGetSubJobInfoResult($GetSubJobInfoResult)
    {
      $this->GetSubJobInfoResult = $GetSubJobInfoResult;
      return $this;
    }

}
