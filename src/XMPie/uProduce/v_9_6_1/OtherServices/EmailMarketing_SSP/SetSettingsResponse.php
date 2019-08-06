<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP;

class SetSettingsResponse
{

    /**
     * @var boolean $SetSettingsResult
     */
    protected $SetSettingsResult = null;

    /**
     * @param boolean $SetSettingsResult
     */
    public function __construct($SetSettingsResult = null)
    {
      $this->SetSettingsResult = $SetSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getSetSettingsResult()
    {
      return $this->SetSettingsResult;
    }

    /**
     * @param boolean $SetSettingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\EmailMarketing_SSP\SetSettingsResponse
     */
    public function setSetSettingsResult($SetSettingsResult)
    {
      $this->SetSettingsResult = $SetSettingsResult;
      return $this;
    }

}
