<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class GetCustomButtonsDataSetResponse
{

    /**
     * @var GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     */
    protected $GetCustomButtonsDataSetResult = null;

    /**
     * @param GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     */
    public function __construct($GetCustomButtonsDataSetResult = null)
    {
      $this->GetCustomButtonsDataSetResult = $GetCustomButtonsDataSetResult;
    }

    /**
     * @return GetCustomButtonsDataSetResult
     */
    public function getGetCustomButtonsDataSetResult()
    {
      return $this->GetCustomButtonsDataSetResult;
    }

    /**
     * @param GetCustomButtonsDataSetResult $GetCustomButtonsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\GetCustomButtonsDataSetResponse
     */
    public function setGetCustomButtonsDataSetResult($GetCustomButtonsDataSetResult)
    {
      $this->GetCustomButtonsDataSetResult = $GetCustomButtonsDataSetResult;
      return $this;
    }

}
