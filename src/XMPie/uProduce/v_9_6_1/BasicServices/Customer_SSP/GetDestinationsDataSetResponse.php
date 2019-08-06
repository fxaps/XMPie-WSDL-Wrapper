<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class GetDestinationsDataSetResponse
{

    /**
     * @var GetDestinationsDataSetResult $GetDestinationsDataSetResult
     */
    protected $GetDestinationsDataSetResult = null;

    /**
     * @param GetDestinationsDataSetResult $GetDestinationsDataSetResult
     */
    public function __construct($GetDestinationsDataSetResult = null)
    {
      $this->GetDestinationsDataSetResult = $GetDestinationsDataSetResult;
    }

    /**
     * @return GetDestinationsDataSetResult
     */
    public function getGetDestinationsDataSetResult()
    {
      return $this->GetDestinationsDataSetResult;
    }

    /**
     * @param GetDestinationsDataSetResult $GetDestinationsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\GetDestinationsDataSetResponse
     */
    public function setGetDestinationsDataSetResult($GetDestinationsDataSetResult)
    {
      $this->GetDestinationsDataSetResult = $GetDestinationsDataSetResult;
      return $this;
    }

}
