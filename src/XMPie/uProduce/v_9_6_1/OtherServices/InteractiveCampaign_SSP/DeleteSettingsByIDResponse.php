<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class DeleteSettingsByIDResponse
{

    /**
     * @var boolean $DeleteSettingsByIDResult
     */
    protected $DeleteSettingsByIDResult = null;

    /**
     * @param boolean $DeleteSettingsByIDResult
     */
    public function __construct($DeleteSettingsByIDResult = null)
    {
      $this->DeleteSettingsByIDResult = $DeleteSettingsByIDResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSettingsByIDResult()
    {
      return $this->DeleteSettingsByIDResult;
    }

    /**
     * @param boolean $DeleteSettingsByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\DeleteSettingsByIDResponse
     */
    public function setDeleteSettingsByIDResult($DeleteSettingsByIDResult)
    {
      $this->DeleteSettingsByIDResult = $DeleteSettingsByIDResult;
      return $this;
    }

}
