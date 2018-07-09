<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProductInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProductInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\ProductInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProductInfoForUser;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProductInfoForUserResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProxyInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetProxyInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\ProxyInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetProxyInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetProxyInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\TestHTTPProxy;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\TestHTTPProxyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\TestHTTPSProxy;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\TestHTTPSProxyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetCloudGatewayConfiguration;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\CloudGatewayConfiguration;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\ArrayOfCloudSubscription;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\CloudSubscription;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetCloudGatewayConfigurationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetCloudGatewayConfiguration;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetCloudGatewayConfigurationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetDistillJobOptionNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\GetDistillJobOptionNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupported;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsFeatureSupportedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsCircleModeAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsCircleModeAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetCircleModeAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SetCircleModeAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsCampaignTypeSupported;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\IsCampaignTypeSupportedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SelectSupportedCampaignType;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\SelectSupportedCampaignTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\UnselectSupportedCampaignType;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\UnselectSupportedCampaignTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\WasCampaignTypeEverSupported;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\SystemManager_SSP\WasCampaignTypeEverSupportedResponse;


class FabricateSystemManager_SSP
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductInfo
    */
    public function GetProductInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductInfo = new GetProductInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductInfo, $methodName)) {
                $GetProductInfo->$methodName($paramValue);
            }
        }
        return $GetProductInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductInfoResponse
    */
    public function GetProductInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductInfoResponse = new GetProductInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductInfoResponse, $methodName)) {
                $GetProductInfoResponse->$methodName($paramValue);
            }
        }
        return $GetProductInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProductInfo
    */
    public function ProductInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProductInfo = new ProductInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProductInfo, $methodName)) {
                $ProductInfo->$methodName($paramValue);
            }
        }
        return $ProductInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductInfoForUser
    */
    public function GetProductInfoForUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductInfoForUser = new GetProductInfoForUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductInfoForUser, $methodName)) {
                $GetProductInfoForUser->$methodName($paramValue);
            }
        }
        return $GetProductInfoForUser;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProductInfoForUserResponse
    */
    public function GetProductInfoForUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProductInfoForUserResponse = new GetProductInfoForUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProductInfoForUserResponse, $methodName)) {
                $GetProductInfoForUserResponse->$methodName($paramValue);
            }
        }
        return $GetProductInfoForUserResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProxyInfo
    */
    public function GetProxyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProxyInfo = new GetProxyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProxyInfo, $methodName)) {
                $GetProxyInfo->$methodName($paramValue);
            }
        }
        return $GetProxyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProxyInfoResponse
    */
    public function GetProxyInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProxyInfoResponse = new GetProxyInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProxyInfoResponse, $methodName)) {
                $GetProxyInfoResponse->$methodName($paramValue);
            }
        }
        return $GetProxyInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProxyInfo
    */
    public function ProxyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProxyInfo = new ProxyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProxyInfo, $methodName)) {
                $ProxyInfo->$methodName($paramValue);
            }
        }
        return $ProxyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProxyInfo
    */
    public function SetProxyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProxyInfo = new SetProxyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProxyInfo, $methodName)) {
                $SetProxyInfo->$methodName($paramValue);
            }
        }
        return $SetProxyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProxyInfoResponse
    */
    public function SetProxyInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProxyInfoResponse = new SetProxyInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProxyInfoResponse, $methodName)) {
                $SetProxyInfoResponse->$methodName($paramValue);
            }
        }
        return $SetProxyInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestHTTPProxy
    */
    public function TestHTTPProxy($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestHTTPProxy = new TestHTTPProxy();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestHTTPProxy, $methodName)) {
                $TestHTTPProxy->$methodName($paramValue);
            }
        }
        return $TestHTTPProxy;
    }


   /**
    * @param array $paramAutoSet
    * @return TestHTTPProxyResponse
    */
    public function TestHTTPProxyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestHTTPProxyResponse = new TestHTTPProxyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestHTTPProxyResponse, $methodName)) {
                $TestHTTPProxyResponse->$methodName($paramValue);
            }
        }
        return $TestHTTPProxyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestHTTPSProxy
    */
    public function TestHTTPSProxy($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestHTTPSProxy = new TestHTTPSProxy();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestHTTPSProxy, $methodName)) {
                $TestHTTPSProxy->$methodName($paramValue);
            }
        }
        return $TestHTTPSProxy;
    }


   /**
    * @param array $paramAutoSet
    * @return TestHTTPSProxyResponse
    */
    public function TestHTTPSProxyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestHTTPSProxyResponse = new TestHTTPSProxyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestHTTPSProxyResponse, $methodName)) {
                $TestHTTPSProxyResponse->$methodName($paramValue);
            }
        }
        return $TestHTTPSProxyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCloudGatewayConfiguration
    */
    public function SetCloudGatewayConfiguration($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCloudGatewayConfiguration = new SetCloudGatewayConfiguration();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCloudGatewayConfiguration, $methodName)) {
                $SetCloudGatewayConfiguration->$methodName($paramValue);
            }
        }
        return $SetCloudGatewayConfiguration;
    }


   /**
    * @param array $paramAutoSet
    * @return CloudGatewayConfiguration
    */
    public function CloudGatewayConfiguration($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloudGatewayConfiguration = new CloudGatewayConfiguration();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloudGatewayConfiguration, $methodName)) {
                $CloudGatewayConfiguration->$methodName($paramValue);
            }
        }
        return $CloudGatewayConfiguration;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProperty
    */
    public function ArrayOfProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProperty = new ArrayOfProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProperty, $methodName)) {
                $ArrayOfProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return Property
    */
    public function Property($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Property = new Property();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Property, $methodName)) {
                $Property->$methodName($paramValue);
            }
        }
        return $Property;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfCloudSubscription
    */
    public function ArrayOfCloudSubscription($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfCloudSubscription = new ArrayOfCloudSubscription();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfCloudSubscription, $methodName)) {
                $ArrayOfCloudSubscription->$methodName($paramValue);
            }
        }
        return $ArrayOfCloudSubscription;
    }


   /**
    * @param array $paramAutoSet
    * @return CloudSubscription
    */
    public function CloudSubscription($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloudSubscription = new CloudSubscription();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloudSubscription, $methodName)) {
                $CloudSubscription->$methodName($paramValue);
            }
        }
        return $CloudSubscription;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCloudGatewayConfigurationResponse
    */
    public function SetCloudGatewayConfigurationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCloudGatewayConfigurationResponse = new SetCloudGatewayConfigurationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCloudGatewayConfigurationResponse, $methodName)) {
                $SetCloudGatewayConfigurationResponse->$methodName($paramValue);
            }
        }
        return $SetCloudGatewayConfigurationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudGatewayConfiguration
    */
    public function GetCloudGatewayConfiguration($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudGatewayConfiguration = new GetCloudGatewayConfiguration();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudGatewayConfiguration, $methodName)) {
                $GetCloudGatewayConfiguration->$methodName($paramValue);
            }
        }
        return $GetCloudGatewayConfiguration;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudGatewayConfigurationResponse
    */
    public function GetCloudGatewayConfigurationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudGatewayConfigurationResponse = new GetCloudGatewayConfigurationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudGatewayConfigurationResponse, $methodName)) {
                $GetCloudGatewayConfigurationResponse->$methodName($paramValue);
            }
        }
        return $GetCloudGatewayConfigurationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDistillJobOptionNames
    */
    public function GetDistillJobOptionNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDistillJobOptionNames = new GetDistillJobOptionNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDistillJobOptionNames, $methodName)) {
                $GetDistillJobOptionNames->$methodName($paramValue);
            }
        }
        return $GetDistillJobOptionNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDistillJobOptionNamesResponse
    */
    public function GetDistillJobOptionNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDistillJobOptionNamesResponse = new GetDistillJobOptionNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDistillJobOptionNamesResponse, $methodName)) {
                $GetDistillJobOptionNamesResponse->$methodName($paramValue);
            }
        }
        return $GetDistillJobOptionNamesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFeatureSupported
    */
    public function IsFeatureSupported($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFeatureSupported = new IsFeatureSupported();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFeatureSupported, $methodName)) {
                $IsFeatureSupported->$methodName($paramValue);
            }
        }
        return $IsFeatureSupported;
    }


   /**
    * @param array $paramAutoSet
    * @return IsFeatureSupportedResponse
    */
    public function IsFeatureSupportedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsFeatureSupportedResponse = new IsFeatureSupportedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsFeatureSupportedResponse, $methodName)) {
                $IsFeatureSupportedResponse->$methodName($paramValue);
            }
        }
        return $IsFeatureSupportedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsCircleModeAvailable
    */
    public function IsCircleModeAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsCircleModeAvailable = new IsCircleModeAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsCircleModeAvailable, $methodName)) {
                $IsCircleModeAvailable->$methodName($paramValue);
            }
        }
        return $IsCircleModeAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsCircleModeAvailableResponse
    */
    public function IsCircleModeAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsCircleModeAvailableResponse = new IsCircleModeAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsCircleModeAvailableResponse, $methodName)) {
                $IsCircleModeAvailableResponse->$methodName($paramValue);
            }
        }
        return $IsCircleModeAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCircleModeAvailable
    */
    public function SetCircleModeAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCircleModeAvailable = new SetCircleModeAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCircleModeAvailable, $methodName)) {
                $SetCircleModeAvailable->$methodName($paramValue);
            }
        }
        return $SetCircleModeAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCircleModeAvailableResponse
    */
    public function SetCircleModeAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCircleModeAvailableResponse = new SetCircleModeAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCircleModeAvailableResponse, $methodName)) {
                $SetCircleModeAvailableResponse->$methodName($paramValue);
            }
        }
        return $SetCircleModeAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsCampaignTypeSupported
    */
    public function IsCampaignTypeSupported($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsCampaignTypeSupported = new IsCampaignTypeSupported();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsCampaignTypeSupported, $methodName)) {
                $IsCampaignTypeSupported->$methodName($paramValue);
            }
        }
        return $IsCampaignTypeSupported;
    }


   /**
    * @param array $paramAutoSet
    * @return IsCampaignTypeSupportedResponse
    */
    public function IsCampaignTypeSupportedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsCampaignTypeSupportedResponse = new IsCampaignTypeSupportedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsCampaignTypeSupportedResponse, $methodName)) {
                $IsCampaignTypeSupportedResponse->$methodName($paramValue);
            }
        }
        return $IsCampaignTypeSupportedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SelectSupportedCampaignType
    */
    public function SelectSupportedCampaignType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SelectSupportedCampaignType = new SelectSupportedCampaignType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SelectSupportedCampaignType, $methodName)) {
                $SelectSupportedCampaignType->$methodName($paramValue);
            }
        }
        return $SelectSupportedCampaignType;
    }


   /**
    * @param array $paramAutoSet
    * @return SelectSupportedCampaignTypeResponse
    */
    public function SelectSupportedCampaignTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SelectSupportedCampaignTypeResponse = new SelectSupportedCampaignTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SelectSupportedCampaignTypeResponse, $methodName)) {
                $SelectSupportedCampaignTypeResponse->$methodName($paramValue);
            }
        }
        return $SelectSupportedCampaignTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UnselectSupportedCampaignType
    */
    public function UnselectSupportedCampaignType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnselectSupportedCampaignType = new UnselectSupportedCampaignType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnselectSupportedCampaignType, $methodName)) {
                $UnselectSupportedCampaignType->$methodName($paramValue);
            }
        }
        return $UnselectSupportedCampaignType;
    }


   /**
    * @param array $paramAutoSet
    * @return UnselectSupportedCampaignTypeResponse
    */
    public function UnselectSupportedCampaignTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnselectSupportedCampaignTypeResponse = new UnselectSupportedCampaignTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnselectSupportedCampaignTypeResponse, $methodName)) {
                $UnselectSupportedCampaignTypeResponse->$methodName($paramValue);
            }
        }
        return $UnselectSupportedCampaignTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return WasCampaignTypeEverSupported
    */
    public function WasCampaignTypeEverSupported($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $WasCampaignTypeEverSupported = new WasCampaignTypeEverSupported();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($WasCampaignTypeEverSupported, $methodName)) {
                $WasCampaignTypeEverSupported->$methodName($paramValue);
            }
        }
        return $WasCampaignTypeEverSupported;
    }


   /**
    * @param array $paramAutoSet
    * @return WasCampaignTypeEverSupportedResponse
    */
    public function WasCampaignTypeEverSupportedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $WasCampaignTypeEverSupportedResponse = new WasCampaignTypeEverSupportedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($WasCampaignTypeEverSupportedResponse, $methodName)) {
                $WasCampaignTypeEverSupportedResponse->$methodName($paramValue);
            }
        }
        return $WasCampaignTypeEverSupportedResponse;
    }



}

?>
