<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP;

class ActivateResponse
{

    /**
     * @var Report $ActivateResult
     */
    protected $ActivateResult = null;

    /**
     * @param Report $ActivateResult
     */
    public function __construct($ActivateResult = null)
    {
      $this->ActivateResult = $ActivateResult;
    }

    /**
     * @return Report
     */
    public function getActivateResult()
    {
      return $this->ActivateResult;
    }

    /**
     * @param Report $ActivateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP\ActivateResponse
     */
    public function setActivateResult($ActivateResult)
    {
      $this->ActivateResult = $ActivateResult;
      return $this;
    }

}
