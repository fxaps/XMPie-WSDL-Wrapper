<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetSenderAdorNameResponse
{

    /**
     * @var string $GetSenderAdorNameResult
     */
    protected $GetSenderAdorNameResult = null;

    /**
     * @param string $GetSenderAdorNameResult
     */
    public function __construct($GetSenderAdorNameResult = null)
    {
      $this->GetSenderAdorNameResult = $GetSenderAdorNameResult;
    }

    /**
     * @return string
     */
    public function getGetSenderAdorNameResult()
    {
      return $this->GetSenderAdorNameResult;
    }

    /**
     * @param string $GetSenderAdorNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetSenderAdorNameResponse
     */
    public function setGetSenderAdorNameResult($GetSenderAdorNameResult)
    {
      $this->GetSenderAdorNameResult = $GetSenderAdorNameResult;
      return $this;
    }

}
