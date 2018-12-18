<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class GetUMailTemplateResponse
{

    /**
     * @var string $GetUMailTemplateResult
     */
    protected $GetUMailTemplateResult = null;

    /**
     * @param string $GetUMailTemplateResult
     */
    public function __construct($GetUMailTemplateResult = null)
    {
      $this->GetUMailTemplateResult = $GetUMailTemplateResult;
    }

    /**
     * @return string
     */
    public function getGetUMailTemplateResult()
    {
      return $this->GetUMailTemplateResult;
    }

    /**
     * @param string $GetUMailTemplateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\GetUMailTemplateResponse
     */
    public function setGetUMailTemplateResult($GetUMailTemplateResult)
    {
      $this->GetUMailTemplateResult = $GetUMailTemplateResult;
      return $this;
    }

}
