<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class IsMappingExistsResponse
{

    /**
     * @var boolean $IsMappingExistsResult
     */
    protected $IsMappingExistsResult = null;

    /**
     * @param boolean $IsMappingExistsResult
     */
    public function __construct($IsMappingExistsResult = null)
    {
      $this->IsMappingExistsResult = $IsMappingExistsResult;
    }

    /**
     * @return boolean
     */
    public function getIsMappingExistsResult()
    {
      return $this->IsMappingExistsResult;
    }

    /**
     * @param boolean $IsMappingExistsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\IsMappingExistsResponse
     */
    public function setIsMappingExistsResult($IsMappingExistsResult)
    {
      $this->IsMappingExistsResult = $IsMappingExistsResult;
      return $this;
    }

}
