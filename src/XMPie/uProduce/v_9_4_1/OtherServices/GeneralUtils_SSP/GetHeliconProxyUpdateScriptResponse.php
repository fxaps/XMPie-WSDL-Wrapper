<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP;

class GetHeliconProxyUpdateScriptResponse
{

    /**
     * @var string $GetHeliconProxyUpdateScriptResult
     */
    protected $GetHeliconProxyUpdateScriptResult = null;

    /**
     * @param string $GetHeliconProxyUpdateScriptResult
     */
    public function __construct($GetHeliconProxyUpdateScriptResult = null)
    {
      $this->GetHeliconProxyUpdateScriptResult = $GetHeliconProxyUpdateScriptResult;
    }

    /**
     * @return string
     */
    public function getGetHeliconProxyUpdateScriptResult()
    {
      return $this->GetHeliconProxyUpdateScriptResult;
    }

    /**
     * @param string $GetHeliconProxyUpdateScriptResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\GetHeliconProxyUpdateScriptResponse
     */
    public function setGetHeliconProxyUpdateScriptResult($GetHeliconProxyUpdateScriptResult)
    {
      $this->GetHeliconProxyUpdateScriptResult = $GetHeliconProxyUpdateScriptResult;
      return $this;
    }

}
