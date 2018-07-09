<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetNthEmailBodyIDResponse
{

    /**
     * @var string $GetNthEmailBodyIDResult
     */
    protected $GetNthEmailBodyIDResult = null;

    /**
     * @param string $GetNthEmailBodyIDResult
     */
    public function __construct($GetNthEmailBodyIDResult = null)
    {
      $this->GetNthEmailBodyIDResult = $GetNthEmailBodyIDResult;
    }

    /**
     * @return string
     */
    public function getGetNthEmailBodyIDResult()
    {
      return $this->GetNthEmailBodyIDResult;
    }

    /**
     * @param string $GetNthEmailBodyIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetNthEmailBodyIDResponse
     */
    public function setGetNthEmailBodyIDResult($GetNthEmailBodyIDResult)
    {
      $this->GetNthEmailBodyIDResult = $GetNthEmailBodyIDResult;
      return $this;
    }

}
