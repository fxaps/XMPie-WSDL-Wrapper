<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\SystemManager_SSP;

class TestHTTPProxyResponse
{

    /**
     * @var boolean $TestHTTPProxyResult
     */
    protected $TestHTTPProxyResult = null;

    /**
     * @param boolean $TestHTTPProxyResult
     */
    public function __construct($TestHTTPProxyResult = null)
    {
      $this->TestHTTPProxyResult = $TestHTTPProxyResult;
    }

    /**
     * @return boolean
     */
    public function getTestHTTPProxyResult()
    {
      return $this->TestHTTPProxyResult;
    }

    /**
     * @param boolean $TestHTTPProxyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\SystemManager_SSP\TestHTTPProxyResponse
     */
    public function setTestHTTPProxyResult($TestHTTPProxyResult)
    {
      $this->TestHTTPProxyResult = $TestHTTPProxyResult;
      return $this;
    }

}
