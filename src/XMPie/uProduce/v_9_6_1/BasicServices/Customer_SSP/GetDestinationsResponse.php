<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetDestinationsResponse
{

    /**
     * @var ArrayOfString $GetDestinationsResult
     */
    protected $GetDestinationsResult = null;

    /**
     * @param ArrayOfString $GetDestinationsResult
     */
    public function __construct($GetDestinationsResult = null)
    {
      $this->GetDestinationsResult = $GetDestinationsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDestinationsResult()
    {
      return $this->GetDestinationsResult;
    }

    /**
     * @param ArrayOfString $GetDestinationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetDestinationsResponse
     */
    public function setGetDestinationsResult($GetDestinationsResult)
    {
      $this->GetDestinationsResult = $GetDestinationsResult;
      return $this;
    }

}
