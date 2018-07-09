<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class TestResponse
{

    /**
     * @var string $TestResult
     */
    protected $TestResult = null;

    /**
     * @param string $TestResult
     */
    public function __construct($TestResult = null)
    {
      $this->TestResult = $TestResult;
    }

    /**
     * @return string
     */
    public function getTestResult()
    {
      return $this->TestResult;
    }

    /**
     * @param string $TestResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\TestResponse
     */
    public function setTestResult($TestResult)
    {
      $this->TestResult = $TestResult;
      return $this;
    }

}
