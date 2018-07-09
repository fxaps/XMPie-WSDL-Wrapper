<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP;

class SetProxyInfoResponse
{

    /**
     * @var boolean $SetProxyInfoResult
     */
    protected $SetProxyInfoResult = null;

    /**
     * @param boolean $SetProxyInfoResult
     */
    public function __construct($SetProxyInfoResult = null)
    {
      $this->SetProxyInfoResult = $SetProxyInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetProxyInfoResult()
    {
      return $this->SetProxyInfoResult;
    }

    /**
     * @param boolean $SetProxyInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetProxyInfoResponse
     */
    public function setSetProxyInfoResult($SetProxyInfoResult)
    {
      $this->SetProxyInfoResult = $SetProxyInfoResult;
      return $this;
    }

}
