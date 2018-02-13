<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetPopulationsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPopulationsXMPTblDataSetResult
     */
    protected $GetPopulationsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPopulationsXMPTblDataSetResult
     */
    public function __construct($GetPopulationsXMPTblDataSetResult = null)
    {
      $this->GetPopulationsXMPTblDataSetResult = $GetPopulationsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPopulationsXMPTblDataSetResult()
    {
      return $this->GetPopulationsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPopulationsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPopulationsXMPTblDataSetResponse
     */
    public function setGetPopulationsXMPTblDataSetResult($GetPopulationsXMPTblDataSetResult)
    {
      $this->GetPopulationsXMPTblDataSetResult = $GetPopulationsXMPTblDataSetResult;
      return $this;
    }

}
