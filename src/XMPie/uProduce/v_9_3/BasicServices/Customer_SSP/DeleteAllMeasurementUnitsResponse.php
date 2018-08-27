<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP;

class DeleteAllMeasurementUnitsResponse
{

    /**
     * @var boolean $DeleteAllMeasurementUnitsResult
     */
    protected $DeleteAllMeasurementUnitsResult = null;

    /**
     * @param boolean $DeleteAllMeasurementUnitsResult
     */
    public function __construct($DeleteAllMeasurementUnitsResult = null)
    {
      $this->DeleteAllMeasurementUnitsResult = $DeleteAllMeasurementUnitsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllMeasurementUnitsResult()
    {
      return $this->DeleteAllMeasurementUnitsResult;
    }

    /**
     * @param boolean $DeleteAllMeasurementUnitsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Customer_SSP\DeleteAllMeasurementUnitsResponse
     */
    public function setDeleteAllMeasurementUnitsResult($DeleteAllMeasurementUnitsResult)
    {
      $this->DeleteAllMeasurementUnitsResult = $DeleteAllMeasurementUnitsResult;
      return $this;
    }

}
