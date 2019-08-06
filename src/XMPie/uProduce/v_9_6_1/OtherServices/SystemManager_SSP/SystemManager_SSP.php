<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\SystemManager_SSP;


/**
 * SystemManager Web Service.
 */
class SystemManager_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetProductInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProductInfo',
  'GetProductInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProductInfoResponse',
  'ProductInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\ProductInfo',
  'GetProductInfoForUser' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProductInfoForUser',
  'GetProductInfoForUserResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProductInfoForUserResponse',
  'GetProxyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProxyInfo',
  'GetProxyInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetProxyInfoResponse',
  'ProxyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\ProxyInfo',
  'SetProxyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetProxyInfo',
  'SetProxyInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetProxyInfoResponse',
  'TestHTTPProxy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\TestHTTPProxy',
  'TestHTTPProxyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\TestHTTPProxyResponse',
  'TestHTTPSProxy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\TestHTTPSProxy',
  'TestHTTPSProxyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\TestHTTPSProxyResponse',
  'SetCloudGatewayConfiguration' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetCloudGatewayConfiguration',
  'CloudGatewayConfiguration' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\CloudGatewayConfiguration',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\Property',
  'ArrayOfCloudSubscription' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\ArrayOfCloudSubscription',
  'CloudSubscription' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\CloudSubscription',
  'SetCloudGatewayConfigurationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetCloudGatewayConfigurationResponse',
  'GetCloudGatewayConfiguration' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetCloudGatewayConfiguration',
  'GetCloudGatewayConfigurationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetCloudGatewayConfigurationResponse',
  'GetDistillJobOptionNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetDistillJobOptionNames',
  'GetDistillJobOptionNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\GetDistillJobOptionNamesResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\ArrayOfString',
  'IsFeatureSupported' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsFeatureSupported',
  'IsFeatureSupportedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsFeatureSupportedResponse',
  'IsCircleModeAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsCircleModeAvailable',
  'IsCircleModeAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsCircleModeAvailableResponse',
  'SetCircleModeAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetCircleModeAvailable',
  'SetCircleModeAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SetCircleModeAvailableResponse',
  'IsCampaignTypeSupported' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsCampaignTypeSupported',
  'IsCampaignTypeSupportedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\IsCampaignTypeSupportedResponse',
  'SelectSupportedCampaignType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SelectSupportedCampaignType',
  'SelectSupportedCampaignTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\SelectSupportedCampaignTypeResponse',
  'UnselectSupportedCampaignType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\UnselectSupportedCampaignType',
  'UnselectSupportedCampaignTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\UnselectSupportedCampaignTypeResponse',
  'WasCampaignTypeEverSupported' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\WasCampaignTypeEverSupported',
  'WasCampaignTypeEverSupportedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_6_1\\OtherServices\\SystemManager_SSP\\WasCampaignTypeEverSupportedResponse',
);

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/SystemManager_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets the product type and version info.
     *
     * @param GetProductInfo $parameters
     * @return GetProductInfoResponse
     */
    public function GetProductInfo(GetProductInfo $parameters)
    {
      return $this->__soapCall('GetProductInfo', array($parameters));
    }

    /**
     * Gets the product type and version info for user.
     *
     * @param GetProductInfoForUser $parameters
     * @return GetProductInfoForUserResponse
     */
    public function GetProductInfoForUser(GetProductInfoForUser $parameters)
    {
      return $this->__soapCall('GetProductInfoForUser', array($parameters));
    }

    /**
     * Gets the proxy info
     *
     * @param GetProxyInfo $parameters
     * @return GetProxyInfoResponse
     */
    public function GetProxyInfo(GetProxyInfo $parameters)
    {
      return $this->__soapCall('GetProxyInfo', array($parameters));
    }

    /**
     * Sets the proxy info
     *
     * @param SetProxyInfo $parameters
     * @return SetProxyInfoResponse
     */
    public function SetProxyInfo(SetProxyInfo $parameters)
    {
      return $this->__soapCall('SetProxyInfo', array($parameters));
    }

    /**
     * Tests whether an HTTP proxy is functioning (tries to access google.com)
     *
     * @param TestHTTPProxy $parameters
     * @return TestHTTPProxyResponse
     */
    public function TestHTTPProxy(TestHTTPProxy $parameters)
    {
      return $this->__soapCall('TestHTTPProxy', array($parameters));
    }

    /**
     * Tests whether an HTTPS proxy is functioning (tries to access google.com
     *
     * @param TestHTTPSProxy $parameters
     * @return TestHTTPSProxyResponse
     */
    public function TestHTTPSProxy(TestHTTPSProxy $parameters)
    {
      return $this->__soapCall('TestHTTPSProxy', array($parameters));
    }

    /**
     * Configures Cloud Gateway of uProduce.
     *
     * @param SetCloudGatewayConfiguration $parameters
     * @return SetCloudGatewayConfigurationResponse
     */
    public function SetCloudGatewayConfiguration(SetCloudGatewayConfiguration $parameters)
    {
      return $this->__soapCall('SetCloudGatewayConfiguration', array($parameters));
    }

    /**
     * Returns uProduce Cloud Gateway's configuration.
     *
     * @param GetCloudGatewayConfiguration $parameters
     * @return GetCloudGatewayConfigurationResponse
     */
    public function GetCloudGatewayConfiguration(GetCloudGatewayConfiguration $parameters)
    {
      return $this->__soapCall('GetCloudGatewayConfiguration', array($parameters));
    }

    /**
     * Get distilling job option names
     *
     * @param GetDistillJobOptionNames $parameters
     * @return GetDistillJobOptionNamesResponse
     */
    public function GetDistillJobOptionNames(GetDistillJobOptionNames $parameters)
    {
      return $this->__soapCall('GetDistillJobOptionNames', array($parameters));
    }

    /**
     * Checks whether a feature is supported or not
     *
     * @param IsFeatureSupported $parameters
     * @return IsFeatureSupportedResponse
     */
    public function IsFeatureSupported(IsFeatureSupported $parameters)
    {
      return $this->__soapCall('IsFeatureSupported', array($parameters));
    }

    /**
     * Checks whether Circle mode is available in the Cloud
     *
     * @param IsCircleModeAvailable $parameters
     * @return IsCircleModeAvailableResponse
     */
    public function IsCircleModeAvailable(IsCircleModeAvailable $parameters)
    {
      return $this->__soapCall('IsCircleModeAvailable', array($parameters));
    }

    /**
     * Sets whether Circle mode is available in the Cloud
     *
     * @param SetCircleModeAvailable $parameters
     * @return SetCircleModeAvailableResponse
     */
    public function SetCircleModeAvailable(SetCircleModeAvailable $parameters)
    {
      return $this->__soapCall('SetCircleModeAvailable', array($parameters));
    }

    /**
     * Checks whether a specified campaign type support was selected (0 = Unknown, 1 = Legacy, 2 = Circle)
     *
     * @param IsCampaignTypeSupported $parameters
     * @return IsCampaignTypeSupportedResponse
     */
    public function IsCampaignTypeSupported(IsCampaignTypeSupported $parameters)
    {
      return $this->__soapCall('IsCampaignTypeSupported', array($parameters));
    }

    /**
     * Enables a specified Campaign Type support (0 = Unknown, 1 = Legacy, 2 = Circle)
     *
     * @param SelectSupportedCampaignType $parameters
     * @return SelectSupportedCampaignTypeResponse
     */
    public function SelectSupportedCampaignType(SelectSupportedCampaignType $parameters)
    {
      return $this->__soapCall('SelectSupportedCampaignType', array($parameters));
    }

    /**
     * Disables a specified Campaign Type support (0 = Unknown, 1 = Legacy, 2 = Circle)
     *
     * @param UnselectSupportedCampaignType $parameters
     * @return UnselectSupportedCampaignTypeResponse
     */
    public function UnselectSupportedCampaignType(UnselectSupportedCampaignType $parameters)
    {
      return $this->__soapCall('UnselectSupportedCampaignType', array($parameters));
    }

    /**
     * Checks whether a specified Campaign Type was ever supported (0 = Unknown, 1 = Legacy, 2 = Circle)
     *
     * @param WasCampaignTypeEverSupported $parameters
     * @return WasCampaignTypeEverSupportedResponse
     */
    public function WasCampaignTypeEverSupported(WasCampaignTypeEverSupported $parameters)
    {
      return $this->__soapCall('WasCampaignTypeEverSupported', array($parameters));
    }

}
