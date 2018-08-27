<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Account_SSP;

class DeleteAllCampaignsResponse
{

    /**
     * @var boolean $DeleteAllCampaignsResult
     */
    protected $DeleteAllCampaignsResult = null;

    /**
     * @param boolean $DeleteAllCampaignsResult
     */
    public function __construct($DeleteAllCampaignsResult = null)
    {
      $this->DeleteAllCampaignsResult = $DeleteAllCampaignsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllCampaignsResult()
    {
      return $this->DeleteAllCampaignsResult;
    }

    /**
     * @param boolean $DeleteAllCampaignsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Account_SSP\DeleteAllCampaignsResponse
     */
    public function setDeleteAllCampaignsResult($DeleteAllCampaignsResult)
    {
      $this->DeleteAllCampaignsResult = $DeleteAllCampaignsResult;
      return $this;
    }

}
