<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\SystemManager_SSP;

class IsCircleModeAvailableResponse
{

    /**
     * @var boolean $IsCircleModeAvailableResult
     */
    protected $IsCircleModeAvailableResult = null;

    /**
     * @param boolean $IsCircleModeAvailableResult
     */
    public function __construct($IsCircleModeAvailableResult = null)
    {
      $this->IsCircleModeAvailableResult = $IsCircleModeAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getIsCircleModeAvailableResult()
    {
      return $this->IsCircleModeAvailableResult;
    }

    /**
     * @param boolean $IsCircleModeAvailableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\SystemManager_SSP\IsCircleModeAvailableResponse
     */
    public function setIsCircleModeAvailableResult($IsCircleModeAvailableResult)
    {
      $this->IsCircleModeAvailableResult = $IsCircleModeAvailableResult;
      return $this;
    }

}
