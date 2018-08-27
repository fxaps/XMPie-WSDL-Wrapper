<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP;

class ReactivateResponse
{

    /**
     * @var Report $ReactivateResult
     */
    protected $ReactivateResult = null;

    /**
     * @param Report $ReactivateResult
     */
    public function __construct($ReactivateResult = null)
    {
      $this->ReactivateResult = $ReactivateResult;
    }

    /**
     * @return Report
     */
    public function getReactivateResult()
    {
      return $this->ReactivateResult;
    }

    /**
     * @param Report $ReactivateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\ReactivateResponse
     */
    public function setReactivateResult($ReactivateResult)
    {
      $this->ReactivateResult = $ReactivateResult;
      return $this;
    }

}
