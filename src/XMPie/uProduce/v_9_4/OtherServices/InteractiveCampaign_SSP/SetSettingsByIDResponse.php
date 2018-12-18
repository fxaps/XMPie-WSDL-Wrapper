<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP;

class SetSettingsByIDResponse
{

    /**
     * @var boolean $SetSettingsByIDResult
     */
    protected $SetSettingsByIDResult = null;

    /**
     * @param boolean $SetSettingsByIDResult
     */
    public function __construct($SetSettingsByIDResult = null)
    {
      $this->SetSettingsByIDResult = $SetSettingsByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetSettingsByIDResult()
    {
      return $this->SetSettingsByIDResult;
    }

    /**
     * @param boolean $SetSettingsByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SetSettingsByIDResponse
     */
    public function setSetSettingsByIDResult($SetSettingsByIDResult)
    {
      $this->SetSettingsByIDResult = $SetSettingsByIDResult;
      return $this;
    }

}
