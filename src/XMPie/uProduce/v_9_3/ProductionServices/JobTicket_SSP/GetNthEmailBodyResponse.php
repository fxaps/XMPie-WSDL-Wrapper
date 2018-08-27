<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetNthEmailBodyResponse
{

    /**
     * @var EmailBodyInfo $GetNthEmailBodyResult
     */
    protected $GetNthEmailBodyResult = null;

    /**
     * @param EmailBodyInfo $GetNthEmailBodyResult
     */
    public function __construct($GetNthEmailBodyResult = null)
    {
      $this->GetNthEmailBodyResult = $GetNthEmailBodyResult;
    }

    /**
     * @return EmailBodyInfo
     */
    public function getGetNthEmailBodyResult()
    {
      return $this->GetNthEmailBodyResult;
    }

    /**
     * @param EmailBodyInfo $GetNthEmailBodyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetNthEmailBodyResponse
     */
    public function setGetNthEmailBodyResult($GetNthEmailBodyResult)
    {
      $this->GetNthEmailBodyResult = $GetNthEmailBodyResult;
      return $this;
    }

}
