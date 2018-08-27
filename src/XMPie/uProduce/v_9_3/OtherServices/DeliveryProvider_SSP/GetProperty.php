<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP;

class GetProperty
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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

    /**
     * @var string $PropertyName
     */
    protected $PropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param string $PropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $PropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      $this->PropertyName = $PropertyName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\GetProperty
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderID()
    {
      return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\GetProperty
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
      return $this->PropertyName;
    }

    /**
     * @param string $PropertyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\GetProperty
     */
    public function setPropertyName($PropertyName)
    {
      $this->PropertyName = $PropertyName;
      return $this;
    }

}
