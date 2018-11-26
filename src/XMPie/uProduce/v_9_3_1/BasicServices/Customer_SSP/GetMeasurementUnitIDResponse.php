<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP;

class GetMeasurementUnitIDResponse
{

    /**
     * @var string $GetMeasurementUnitIDResult
     */
    protected $GetMeasurementUnitIDResult = null;

    /**
     * @param string $GetMeasurementUnitIDResult
     */
    public function __construct($GetMeasurementUnitIDResult = null)
    {
      $this->GetMeasurementUnitIDResult = $GetMeasurementUnitIDResult;
    }

    /**
     * @return string
     */
    public function getGetMeasurementUnitIDResult()
    {
      return $this->GetMeasurementUnitIDResult;
    }

    /**
     * @param string $GetMeasurementUnitIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP\GetMeasurementUnitIDResponse
     */
    public function setGetMeasurementUnitIDResult($GetMeasurementUnitIDResult)
    {
      $this->GetMeasurementUnitIDResult = $GetMeasurementUnitIDResult;
      return $this;
    }

}
