<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP;

class GetMeasurementUnitsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetMeasurementUnitsXMPTblDataSetResult
     */
    protected $GetMeasurementUnitsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetMeasurementUnitsXMPTblDataSetResult
     */
    public function __construct($GetMeasurementUnitsXMPTblDataSetResult = null)
    {
      $this->GetMeasurementUnitsXMPTblDataSetResult = $GetMeasurementUnitsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetMeasurementUnitsXMPTblDataSetResult()
    {
      return $this->GetMeasurementUnitsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetMeasurementUnitsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Customer_SSP\GetMeasurementUnitsXMPTblDataSetResponse
     */
    public function setGetMeasurementUnitsXMPTblDataSetResult($GetMeasurementUnitsXMPTblDataSetResult)
    {
      $this->GetMeasurementUnitsXMPTblDataSetResult = $GetMeasurementUnitsXMPTblDataSetResult;
      return $this;
    }

}
