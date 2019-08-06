<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetRemoteCopyDestinationResponse
{

    /**
     * @var string $GetRemoteCopyDestinationResult
     */
    protected $GetRemoteCopyDestinationResult = null;

    /**
     * @param string $GetRemoteCopyDestinationResult
     */
    public function __construct($GetRemoteCopyDestinationResult = null)
    {
      $this->GetRemoteCopyDestinationResult = $GetRemoteCopyDestinationResult;
    }

    /**
     * @return string
     */
    public function getGetRemoteCopyDestinationResult()
    {
      return $this->GetRemoteCopyDestinationResult;
    }

    /**
     * @param string $GetRemoteCopyDestinationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetRemoteCopyDestinationResponse
     */
    public function setGetRemoteCopyDestinationResult($GetRemoteCopyDestinationResult)
    {
      $this->GetRemoteCopyDestinationResult = $GetRemoteCopyDestinationResult;
      return $this;
    }

}
