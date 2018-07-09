<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ApplicationServices\Destination_SSP;

class GetDestinationTypeResponse
{

    /**
     * @var GetDestinationTypeResult $GetDestinationTypeResult
     */
    protected $GetDestinationTypeResult = null;

    /**
     * @param GetDestinationTypeResult $GetDestinationTypeResult
     */
    public function __construct($GetDestinationTypeResult = null)
    {
      $this->GetDestinationTypeResult = $GetDestinationTypeResult;
    }

    /**
     * @return GetDestinationTypeResult
     */
    public function getGetDestinationTypeResult()
    {
      return $this->GetDestinationTypeResult;
    }

    /**
     * @param GetDestinationTypeResult $GetDestinationTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ApplicationServices\Destination_SSP\GetDestinationTypeResponse
     */
    public function setGetDestinationTypeResult($GetDestinationTypeResult)
    {
      $this->GetDestinationTypeResult = $GetDestinationTypeResult;
      return $this;
    }

}
