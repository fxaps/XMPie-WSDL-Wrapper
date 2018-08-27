<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class GetMeasurementUnitsDataSetResponse
{

    /**
     * @var GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     */
    protected $GetMeasurementUnitsDataSetResult = null;

    /**
     * @param GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     */
    public function __construct($GetMeasurementUnitsDataSetResult = null)
    {
      $this->GetMeasurementUnitsDataSetResult = $GetMeasurementUnitsDataSetResult;
    }

    /**
     * @return GetMeasurementUnitsDataSetResult
     */
    public function getGetMeasurementUnitsDataSetResult()
    {
      return $this->GetMeasurementUnitsDataSetResult;
    }

    /**
     * @param GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\GetMeasurementUnitsDataSetResponse
     */
    public function setGetMeasurementUnitsDataSetResult($GetMeasurementUnitsDataSetResult)
    {
      $this->GetMeasurementUnitsDataSetResult = $GetMeasurementUnitsDataSetResult;
      return $this;
    }

}
