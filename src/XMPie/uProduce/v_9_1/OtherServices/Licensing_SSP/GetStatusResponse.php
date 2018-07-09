<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP;

class GetStatusResponse
{

    /**
     * @var StatusInfo $GetStatusResult
     */
    protected $GetStatusResult = null;

    /**
     * @param StatusInfo $GetStatusResult
     */
    public function __construct($GetStatusResult = null)
    {
      $this->GetStatusResult = $GetStatusResult;
    }

    /**
     * @return StatusInfo
     */
    public function getGetStatusResult()
    {
      return $this->GetStatusResult;
    }

    /**
     * @param StatusInfo $GetStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP\GetStatusResponse
     */
    public function setGetStatusResult($GetStatusResult)
    {
      $this->GetStatusResult = $GetStatusResult;
      return $this;
    }

}
