<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP;

class SetDeliveryProviderParameters
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
     * @var ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     */
    protected $inDeliveryProviderParameters = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inDeliveryProviderParameters = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParameters
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParameters
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParameters
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      return $this;
    }

    /**
     * @return ArrayOfEmailProviderParameter
     */
    public function getInDeliveryProviderParameters()
    {
      return $this->inDeliveryProviderParameters;
    }

    /**
     * @param ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParameters
     */
    public function setInDeliveryProviderParameters($inDeliveryProviderParameters)
    {
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
      return $this;
    }

}
