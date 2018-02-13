<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP;

class ProviderCustomActionByProviderInfo
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
     * @var EmailProviderInfo $inDeliveryProviderInfo
     */
    protected $inDeliveryProviderInfo = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $actionParams
     */
    protected $actionParams = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param EmailProviderInfo $inDeliveryProviderInfo
     * @param string $action
     * @param string $actionParams
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderInfo = null, $action = null, $actionParams = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
      $this->action = $action;
      $this->actionParams = $actionParams;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return EmailProviderInfo
     */
    public function getInDeliveryProviderInfo()
    {
      return $this->inDeliveryProviderInfo;
    }

    /**
     * @param EmailProviderInfo $inDeliveryProviderInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo
     */
    public function setInDeliveryProviderInfo($inDeliveryProviderInfo)
    {
      $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
      return $this->action;
    }

    /**
     * @param string $action
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo
     */
    public function setAction($action)
    {
      $this->action = $action;
      return $this;
    }

    /**
     * @return string
     */
    public function getActionParams()
    {
      return $this->actionParams;
    }

    /**
     * @param string $actionParams
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo
     */
    public function setActionParams($actionParams)
    {
      $this->actionParams = $actionParams;
      return $this;
    }

}
