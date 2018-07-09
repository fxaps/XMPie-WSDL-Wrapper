<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class GetPortsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPortsXMPTblDataSetResult
     */
    protected $GetPortsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPortsXMPTblDataSetResult
     */
    public function __construct($GetPortsXMPTblDataSetResult = null)
    {
      $this->GetPortsXMPTblDataSetResult = $GetPortsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPortsXMPTblDataSetResult()
    {
      return $this->GetPortsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPortsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\GetPortsXMPTblDataSetResponse
     */
    public function setGetPortsXMPTblDataSetResult($GetPortsXMPTblDataSetResult)
    {
      $this->GetPortsXMPTblDataSetResult = $GetPortsXMPTblDataSetResult;
      return $this;
    }

}
