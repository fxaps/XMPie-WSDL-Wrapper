<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP;

class CloudGatewayConfiguration
{

    /**
     * @var string $Configuration
     */
    protected $Configuration = null;

    /**
     * @var ArrayOfProperty $Settings
     */
    protected $Settings = null;

    /**
     * @var ArrayOfCloudSubscription $Subscriptions
     */
    protected $Subscriptions = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param string $Configuration
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\CloudGatewayConfiguration
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getSettings()
    {
      return $this->Settings;
    }

    /**
     * @param ArrayOfProperty $Settings
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\CloudGatewayConfiguration
     */
    public function setSettings($Settings)
    {
      $this->Settings = $Settings;
      return $this;
    }

    /**
     * @return ArrayOfCloudSubscription
     */
    public function getSubscriptions()
    {
      return $this->Subscriptions;
    }

    /**
     * @param ArrayOfCloudSubscription $Subscriptions
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\CloudGatewayConfiguration
     */
    public function setSubscriptions($Subscriptions)
    {
      $this->Subscriptions = $Subscriptions;
      return $this;
    }

}
