<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetDefaultCacheEnvResponse
{

    /**
     * @var boolean $GetDefaultCacheEnvResult
     */
    protected $GetDefaultCacheEnvResult = null;

    /**
     * @param boolean $GetDefaultCacheEnvResult
     */
    public function __construct($GetDefaultCacheEnvResult = null)
    {
      $this->GetDefaultCacheEnvResult = $GetDefaultCacheEnvResult;
    }

    /**
     * @return boolean
     */
    public function getGetDefaultCacheEnvResult()
    {
      return $this->GetDefaultCacheEnvResult;
    }

    /**
     * @param boolean $GetDefaultCacheEnvResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetDefaultCacheEnvResponse
     */
    public function setGetDefaultCacheEnvResult($GetDefaultCacheEnvResult)
    {
      $this->GetDefaultCacheEnvResult = $GetDefaultCacheEnvResult;
      return $this;
    }

}
