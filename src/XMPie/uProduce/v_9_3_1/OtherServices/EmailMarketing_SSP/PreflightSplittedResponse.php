<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP;

class PreflightSplittedResponse
{

    /**
     * @var ArrayOfString $PreflightSplittedResult
     */
    protected $PreflightSplittedResult = null;

    /**
     * @param ArrayOfString $PreflightSplittedResult
     */
    public function __construct($PreflightSplittedResult = null)
    {
      $this->PreflightSplittedResult = $PreflightSplittedResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getPreflightSplittedResult()
    {
      return $this->PreflightSplittedResult;
    }

    /**
     * @param ArrayOfString $PreflightSplittedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreflightSplittedResponse
     */
    public function setPreflightSplittedResult($PreflightSplittedResult)
    {
      $this->PreflightSplittedResult = $PreflightSplittedResult;
      return $this;
    }

}
