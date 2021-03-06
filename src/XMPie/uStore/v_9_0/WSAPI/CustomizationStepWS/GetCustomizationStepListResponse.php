<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS;

class GetCustomizationStepListResponse
{

    /**
     * @var ArrayOfCustomizationStep $GetCustomizationStepListResult
     */
    protected $GetCustomizationStepListResult = null;

    /**
     * @param ArrayOfCustomizationStep $GetCustomizationStepListResult
     */
    public function __construct($GetCustomizationStepListResult = null)
    {
      $this->GetCustomizationStepListResult = $GetCustomizationStepListResult;
    }

    /**
     * @return ArrayOfCustomizationStep
     */
    public function getGetCustomizationStepListResult()
    {
      return $this->GetCustomizationStepListResult;
    }

    /**
     * @param ArrayOfCustomizationStep $GetCustomizationStepListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse
     */
    public function setGetCustomizationStepListResult($GetCustomizationStepListResult)
    {
      $this->GetCustomizationStepListResult = $GetCustomizationStepListResult;
      return $this;
    }

}
