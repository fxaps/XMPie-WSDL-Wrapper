<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP;

class GetCampaignsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetCampaignsXMPTblDataSetResult
     */
    protected $GetCampaignsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetCampaignsXMPTblDataSetResult
     */
    public function __construct($GetCampaignsXMPTblDataSetResult = null)
    {
      $this->GetCampaignsXMPTblDataSetResult = $GetCampaignsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetCampaignsXMPTblDataSetResult()
    {
      return $this->GetCampaignsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetCampaignsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Account_SSP\GetCampaignsXMPTblDataSetResponse
     */
    public function setGetCampaignsXMPTblDataSetResult($GetCampaignsXMPTblDataSetResult)
    {
      $this->GetCampaignsXMPTblDataSetResult = $GetCampaignsXMPTblDataSetResult;
      return $this;
    }

}
