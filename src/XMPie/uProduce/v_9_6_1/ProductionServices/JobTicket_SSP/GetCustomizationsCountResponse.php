<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetCustomizationsCountResponse
{

    /**
     * @var int $GetCustomizationsCountResult
     */
    protected $GetCustomizationsCountResult = null;

    /**
     * @param int $GetCustomizationsCountResult
     */
    public function __construct($GetCustomizationsCountResult = null)
    {
      $this->GetCustomizationsCountResult = $GetCustomizationsCountResult;
    }

    /**
     * @return int
     */
    public function getGetCustomizationsCountResult()
    {
      return $this->GetCustomizationsCountResult;
    }

    /**
     * @param int $GetCustomizationsCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetCustomizationsCountResponse
     */
    public function setGetCustomizationsCountResult($GetCustomizationsCountResult)
    {
      $this->GetCustomizationsCountResult = $GetCustomizationsCountResult;
      return $this;
    }

}
