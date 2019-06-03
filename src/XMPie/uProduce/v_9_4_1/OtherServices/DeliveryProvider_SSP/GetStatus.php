<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP;

class GetStatus
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
     * @var boolean $inExtended
     */
    protected $inExtended = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param boolean $inExtended
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inExtended = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      $this->inExtended = $inExtended;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\GetStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\GetStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\GetStatus
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInExtended()
    {
      return $this->inExtended;
    }

    /**
     * @param boolean $inExtended
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\GetStatus
     */
    public function setInExtended($inExtended)
    {
      $this->inExtended = $inExtended;
      return $this;
    }

}
