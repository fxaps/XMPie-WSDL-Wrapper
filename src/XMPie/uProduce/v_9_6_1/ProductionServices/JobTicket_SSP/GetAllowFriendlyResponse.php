<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetAllowFriendlyResponse
{

    /**
     * @var boolean $GetAllowFriendlyResult
     */
    protected $GetAllowFriendlyResult = null;

    /**
     * @param boolean $GetAllowFriendlyResult
     */
    public function __construct($GetAllowFriendlyResult = null)
    {
      $this->GetAllowFriendlyResult = $GetAllowFriendlyResult;
    }

    /**
     * @return boolean
     */
    public function getGetAllowFriendlyResult()
    {
      return $this->GetAllowFriendlyResult;
    }

    /**
     * @param boolean $GetAllowFriendlyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetAllowFriendlyResponse
     */
    public function setGetAllowFriendlyResult($GetAllowFriendlyResult)
    {
      $this->GetAllowFriendlyResult = $GetAllowFriendlyResult;
      return $this;
    }

}
