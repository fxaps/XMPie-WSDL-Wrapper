<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetNthRIInfoResponse
{

    /**
     * @var RecipientsInfo $GetNthRIInfoResult
     */
    protected $GetNthRIInfoResult = null;

    /**
     * @param RecipientsInfo $GetNthRIInfoResult
     */
    public function __construct($GetNthRIInfoResult = null)
    {
      $this->GetNthRIInfoResult = $GetNthRIInfoResult;
    }

    /**
     * @return RecipientsInfo
     */
    public function getGetNthRIInfoResult()
    {
      return $this->GetNthRIInfoResult;
    }

    /**
     * @param RecipientsInfo $GetNthRIInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetNthRIInfoResponse
     */
    public function setGetNthRIInfoResult($GetNthRIInfoResult)
    {
      $this->GetNthRIInfoResult = $GetNthRIInfoResult;
      return $this;
    }

}
