<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetCustomizationsResponse
{

    /**
     * @var boolean $SetCustomizationsResult
     */
    protected $SetCustomizationsResult = null;

    /**
     * @param boolean $SetCustomizationsResult
     */
    public function __construct($SetCustomizationsResult = null)
    {
      $this->SetCustomizationsResult = $SetCustomizationsResult;
    }

    /**
     * @return boolean
     */
    public function getSetCustomizationsResult()
    {
      return $this->SetCustomizationsResult;
    }

    /**
     * @param boolean $SetCustomizationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetCustomizationsResponse
     */
    public function setSetCustomizationsResult($SetCustomizationsResult)
    {
      $this->SetCustomizationsResult = $SetCustomizationsResult;
      return $this;
    }

}
