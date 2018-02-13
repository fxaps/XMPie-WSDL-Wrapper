<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP;

class ValidateFeatureClient
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
     * @var string $inMachineID
     */
    protected $inMachineID = null;

    /**
     * @var string $inMachineName
     */
    protected $inMachineName = null;

    /**
     * @var int $inFeatureTypeID
     */
    protected $inFeatureTypeID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMachineID
     * @param string $inMachineName
     * @param int $inFeatureTypeID
     */
    public function __construct($inUsername = null, $inPassword = null, $inMachineID = null, $inMachineName = null, $inFeatureTypeID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMachineID = $inMachineID;
      $this->inMachineName = $inMachineName;
      $this->inFeatureTypeID = $inFeatureTypeID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\ValidateFeatureClient
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\ValidateFeatureClient
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMachineID()
    {
      return $this->inMachineID;
    }

    /**
     * @param string $inMachineID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\ValidateFeatureClient
     */
    public function setInMachineID($inMachineID)
    {
      $this->inMachineID = $inMachineID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMachineName()
    {
      return $this->inMachineName;
    }

    /**
     * @param string $inMachineName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\ValidateFeatureClient
     */
    public function setInMachineName($inMachineName)
    {
      $this->inMachineName = $inMachineName;
      return $this;
    }

    /**
     * @return int
     */
    public function getInFeatureTypeID()
    {
      return $this->inFeatureTypeID;
    }

    /**
     * @param int $inFeatureTypeID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\Licensing_SSP\ValidateFeatureClient
     */
    public function setInFeatureTypeID($inFeatureTypeID)
    {
      $this->inFeatureTypeID = $inFeatureTypeID;
      return $this;
    }

}
