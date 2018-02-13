<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP;

class GetAvailableOutputFormatsResponse
{

    /**
     * @var ArrayOfString $GetAvailableOutputFormatsResult
     */
    protected $GetAvailableOutputFormatsResult = null;

    /**
     * @param ArrayOfString $GetAvailableOutputFormatsResult
     */
    public function __construct($GetAvailableOutputFormatsResult = null)
    {
      $this->GetAvailableOutputFormatsResult = $GetAvailableOutputFormatsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAvailableOutputFormatsResult()
    {
      return $this->GetAvailableOutputFormatsResult;
    }

    /**
     * @param ArrayOfString $GetAvailableOutputFormatsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP\GetAvailableOutputFormatsResponse
     */
    public function setGetAvailableOutputFormatsResult($GetAvailableOutputFormatsResult)
    {
      $this->GetAvailableOutputFormatsResult = $GetAvailableOutputFormatsResult;
      return $this;
    }

}
