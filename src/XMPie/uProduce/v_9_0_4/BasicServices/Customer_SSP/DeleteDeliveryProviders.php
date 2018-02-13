<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP;

class DeleteDeliveryProviders
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
     * @var ArrayOfString $inDeliveryProviderIDArray
     */
    protected $inDeliveryProviderIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inDeliveryProviderIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderIDArray = $inDeliveryProviderIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\DeleteDeliveryProviders
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\DeleteDeliveryProviders
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDeliveryProviderIDArray()
    {
      return $this->inDeliveryProviderIDArray;
    }

    /**
     * @param ArrayOfString $inDeliveryProviderIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\DeleteDeliveryProviders
     */
    public function setInDeliveryProviderIDArray($inDeliveryProviderIDArray)
    {
      $this->inDeliveryProviderIDArray = $inDeliveryProviderIDArray;
      return $this;
    }

}
