<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP;

class DeleteCampaignsResponse
{

    /**
     * @var boolean $DeleteCampaignsResult
     */
    protected $DeleteCampaignsResult = null;

    /**
     * @param boolean $DeleteCampaignsResult
     */
    public function __construct($DeleteCampaignsResult = null)
    {
      $this->DeleteCampaignsResult = $DeleteCampaignsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteCampaignsResult()
    {
      return $this->DeleteCampaignsResult;
    }

    /**
     * @param boolean $DeleteCampaignsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Account_SSP\DeleteCampaignsResponse
     */
    public function setDeleteCampaignsResult($DeleteCampaignsResult)
    {
      $this->DeleteCampaignsResult = $DeleteCampaignsResult;
      return $this;
    }

}
