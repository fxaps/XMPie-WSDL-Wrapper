<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetMeasurementUnitsResponse
{

    /**
     * @var ArrayOfString $GetMeasurementUnitsResult
     */
    protected $GetMeasurementUnitsResult = null;

    /**
     * @param ArrayOfString $GetMeasurementUnitsResult
     */
    public function __construct($GetMeasurementUnitsResult = null)
    {
      $this->GetMeasurementUnitsResult = $GetMeasurementUnitsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetMeasurementUnitsResult()
    {
      return $this->GetMeasurementUnitsResult;
    }

    /**
     * @param ArrayOfString $GetMeasurementUnitsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetMeasurementUnitsResponse
     */
    public function setGetMeasurementUnitsResult($GetMeasurementUnitsResult)
    {
      $this->GetMeasurementUnitsResult = $GetMeasurementUnitsResult;
      return $this;
    }

}
