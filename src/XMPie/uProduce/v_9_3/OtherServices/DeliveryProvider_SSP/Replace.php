<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP;

class Replace
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     */
    protected $inDeliveryProviderParameters = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param string $inType
     * @param string $inName
     * @param ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inType = null, $inName = null, $inDeliveryProviderParameters = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      $this->inType = $inType;
      $this->inName = $inName;
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
      $this->inDeliveryProviderID = $inDeliveryProviderID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
     */
    public function setInDeliveryProviderParameters($inDeliveryProviderParameters)
    {
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\DeliveryProvider_SSP\Replace
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
