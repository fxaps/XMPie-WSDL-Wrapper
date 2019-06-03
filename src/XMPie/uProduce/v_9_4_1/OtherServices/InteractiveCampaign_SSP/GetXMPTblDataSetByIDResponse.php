<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP;

class GetXMPTblDataSetByIDResponse
{

    /**
     * @var XMPTblDataSet $GetXMPTblDataSetByIDResult
     */
    protected $GetXMPTblDataSetByIDResult = null;

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetByIDResult
     */
    public function __construct($GetXMPTblDataSetByIDResult = null)
    {
      $this->GetXMPTblDataSetByIDResult = $GetXMPTblDataSetByIDResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetXMPTblDataSetByIDResult()
    {
      return $this->GetXMPTblDataSetByIDResult;
    }

    /**
     * @param XMPTblDataSet $GetXMPTblDataSetByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSetByIDResponse
     */
    public function setGetXMPTblDataSetByIDResult($GetXMPTblDataSetByIDResult)
    {
      $this->GetXMPTblDataSetByIDResult = $GetXMPTblDataSetByIDResult;
      return $this;
    }

}
