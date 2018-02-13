<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class DeleteMeasurementUnits
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var ArrayOfString $inMeasurementUnitIDArray
     */
    protected $inMeasurementUnitIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inMeasurementUnitIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inMeasurementUnitIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMeasurementUnitIDArray = $inMeasurementUnitIDArray;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteMeasurementUnits
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteMeasurementUnits
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInMeasurementUnitIDArray()
    {
      return $this->inMeasurementUnitIDArray;
    }

    /**
     * @param ArrayOfString $inMeasurementUnitIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteMeasurementUnits
     */
    public function setInMeasurementUnitIDArray($inMeasurementUnitIDArray)
    {
      $this->inMeasurementUnitIDArray = $inMeasurementUnitIDArray;
      return $this;
    }

}
