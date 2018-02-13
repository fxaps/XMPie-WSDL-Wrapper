<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP;

class PreflightResponse
{

    /**
     * @var string $PreflightResult
     */
    protected $PreflightResult = null;

    /**
     * @param string $PreflightResult
     */
    public function __construct($PreflightResult = null)
    {
      $this->PreflightResult = $PreflightResult;
    }

    /**
     * @return string
     */
    public function getPreflightResult()
    {
      return $this->PreflightResult;
    }

    /**
     * @param string $PreflightResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreflightResponse
     */
    public function setPreflightResult($PreflightResult)
    {
      $this->PreflightResult = $PreflightResult;
      return $this;
    }

}
