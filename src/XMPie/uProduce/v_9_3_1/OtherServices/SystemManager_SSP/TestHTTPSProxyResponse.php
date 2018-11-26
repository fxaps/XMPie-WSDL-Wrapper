<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP;

class TestHTTPSProxyResponse
{

    /**
     * @var boolean $TestHTTPSProxyResult
     */
    protected $TestHTTPSProxyResult = null;

    /**
     * @param boolean $TestHTTPSProxyResult
     */
    public function __construct($TestHTTPSProxyResult = null)
    {
      $this->TestHTTPSProxyResult = $TestHTTPSProxyResult;
    }

    /**
     * @return boolean
     */
    public function getTestHTTPSProxyResult()
    {
      return $this->TestHTTPSProxyResult;
    }

    /**
     * @param boolean $TestHTTPSProxyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP\TestHTTPSProxyResponse
     */
    public function setTestHTTPSProxyResult($TestHTTPSProxyResult)
    {
      $this->TestHTTPSProxyResult = $TestHTTPSProxyResult;
      return $this;
    }

}
