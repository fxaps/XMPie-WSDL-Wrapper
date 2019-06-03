<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetJDFCopyDestinationResponse
{

    /**
     * @var string $GetJDFCopyDestinationResult
     */
    protected $GetJDFCopyDestinationResult = null;

    /**
     * @param string $GetJDFCopyDestinationResult
     */
    public function __construct($GetJDFCopyDestinationResult = null)
    {
      $this->GetJDFCopyDestinationResult = $GetJDFCopyDestinationResult;
    }

    /**
     * @return string
     */
    public function getGetJDFCopyDestinationResult()
    {
      return $this->GetJDFCopyDestinationResult;
    }

    /**
     * @param string $GetJDFCopyDestinationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetJDFCopyDestinationResponse
     */
    public function setGetJDFCopyDestinationResult($GetJDFCopyDestinationResult)
    {
      $this->GetJDFCopyDestinationResult = $GetJDFCopyDestinationResult;
      return $this;
    }

}
