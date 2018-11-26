<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP;

class GetProxyInfoResponse
{

    /**
     * @var ProxyInfo $GetProxyInfoResult
     */
    protected $GetProxyInfoResult = null;

    /**
     * @param ProxyInfo $GetProxyInfoResult
     */
    public function __construct($GetProxyInfoResult = null)
    {
      $this->GetProxyInfoResult = $GetProxyInfoResult;
    }

    /**
     * @return ProxyInfo
     */
    public function getGetProxyInfoResult()
    {
      return $this->GetProxyInfoResult;
    }

    /**
     * @param ProxyInfo $GetProxyInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\SystemManager_SSP\GetProxyInfoResponse
     */
    public function setGetProxyInfoResult($GetProxyInfoResult)
    {
      $this->GetProxyInfoResult = $GetProxyInfoResult;
      return $this;
    }

}
