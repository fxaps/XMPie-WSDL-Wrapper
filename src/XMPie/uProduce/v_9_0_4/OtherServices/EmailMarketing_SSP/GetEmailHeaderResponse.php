<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP;

class GetEmailHeaderResponse
{

    /**
     * @var EmailHeaderInfo $GetEmailHeaderResult
     */
    protected $GetEmailHeaderResult = null;

    /**
     * @param EmailHeaderInfo $GetEmailHeaderResult
     */
    public function __construct($GetEmailHeaderResult = null)
    {
      $this->GetEmailHeaderResult = $GetEmailHeaderResult;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getGetEmailHeaderResult()
    {
      return $this->GetEmailHeaderResult;
    }

    /**
     * @param EmailHeaderInfo $GetEmailHeaderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\GetEmailHeaderResponse
     */
    public function setGetEmailHeaderResult($GetEmailHeaderResult)
    {
      $this->GetEmailHeaderResult = $GetEmailHeaderResult;
      return $this;
    }

}
