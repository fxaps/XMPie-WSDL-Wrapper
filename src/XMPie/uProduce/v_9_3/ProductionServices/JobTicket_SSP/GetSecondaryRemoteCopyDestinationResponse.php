<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetSecondaryRemoteCopyDestinationResponse
{

    /**
     * @var string $GetSecondaryRemoteCopyDestinationResult
     */
    protected $GetSecondaryRemoteCopyDestinationResult = null;

    /**
     * @param string $GetSecondaryRemoteCopyDestinationResult
     */
    public function __construct($GetSecondaryRemoteCopyDestinationResult = null)
    {
      $this->GetSecondaryRemoteCopyDestinationResult = $GetSecondaryRemoteCopyDestinationResult;
    }

    /**
     * @return string
     */
    public function getGetSecondaryRemoteCopyDestinationResult()
    {
      return $this->GetSecondaryRemoteCopyDestinationResult;
    }

    /**
     * @param string $GetSecondaryRemoteCopyDestinationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetSecondaryRemoteCopyDestinationResponse
     */
    public function setGetSecondaryRemoteCopyDestinationResult($GetSecondaryRemoteCopyDestinationResult)
    {
      $this->GetSecondaryRemoteCopyDestinationResult = $GetSecondaryRemoteCopyDestinationResult;
      return $this;
    }

}
