<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class GetHeliconSupportedVersionResponse
{

    /**
     * @var string $GetHeliconSupportedVersionResult
     */
    protected $GetHeliconSupportedVersionResult = null;

    /**
     * @param string $GetHeliconSupportedVersionResult
     */
    public function __construct($GetHeliconSupportedVersionResult = null)
    {
      $this->GetHeliconSupportedVersionResult = $GetHeliconSupportedVersionResult;
    }

    /**
     * @return string
     */
    public function getGetHeliconSupportedVersionResult()
    {
      return $this->GetHeliconSupportedVersionResult;
    }

    /**
     * @param string $GetHeliconSupportedVersionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetHeliconSupportedVersionResponse
     */
    public function setGetHeliconSupportedVersionResult($GetHeliconSupportedVersionResult)
    {
      $this->GetHeliconSupportedVersionResult = $GetHeliconSupportedVersionResult;
      return $this;
    }

}
