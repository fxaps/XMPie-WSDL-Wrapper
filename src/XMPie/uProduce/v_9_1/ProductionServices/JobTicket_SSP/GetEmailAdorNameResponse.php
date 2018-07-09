<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetEmailAdorNameResponse
{

    /**
     * @var string $GetEmailAdorNameResult
     */
    protected $GetEmailAdorNameResult = null;

    /**
     * @param string $GetEmailAdorNameResult
     */
    public function __construct($GetEmailAdorNameResult = null)
    {
      $this->GetEmailAdorNameResult = $GetEmailAdorNameResult;
    }

    /**
     * @return string
     */
    public function getGetEmailAdorNameResult()
    {
      return $this->GetEmailAdorNameResult;
    }

    /**
     * @param string $GetEmailAdorNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetEmailAdorNameResponse
     */
    public function setGetEmailAdorNameResult($GetEmailAdorNameResult)
    {
      $this->GetEmailAdorNameResult = $GetEmailAdorNameResult;
      return $this;
    }

}
