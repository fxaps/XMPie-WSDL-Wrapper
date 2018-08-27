<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class GetCustomButtonsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetCustomButtonsXMPTblDataSetResult
     */
    protected $GetCustomButtonsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetCustomButtonsXMPTblDataSetResult
     */
    public function __construct($GetCustomButtonsXMPTblDataSetResult = null)
    {
      $this->GetCustomButtonsXMPTblDataSetResult = $GetCustomButtonsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetCustomButtonsXMPTblDataSetResult()
    {
      return $this->GetCustomButtonsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetCustomButtonsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\GetCustomButtonsXMPTblDataSetResponse
     */
    public function setGetCustomButtonsXMPTblDataSetResult($GetCustomButtonsXMPTblDataSetResult)
    {
      $this->GetCustomButtonsXMPTblDataSetResult = $GetCustomButtonsXMPTblDataSetResult;
      return $this;
    }

}
