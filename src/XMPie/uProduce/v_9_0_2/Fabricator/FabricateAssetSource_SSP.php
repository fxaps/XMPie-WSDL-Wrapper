<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CreateNewEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfAssetSourceParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\AssetSourceParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CreateNewExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceProviderSupport;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceProviderSupportResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\AssetSourceProviderSupport;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\IsAssetsViewAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\IsAssetsViewAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceType;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceParameters;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceParametersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParameters;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetAssetSourceParametersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\AssetSourceStruct;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceInfoEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetSourceInfoExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\AssetSourceInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetPriority;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetPriorityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetPriority;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetPriorityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetActiveness;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetActivenessResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetActiveness;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetActivenessResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssets;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetAssetsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteAssets;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteAssetsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteAllAssets;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteAllAssetsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CloneCustom;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\CloneResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\AssetSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\AssetSource_SSP\IDMapping;


class FabricateAssetSource_SSP
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
    * @return CreateNew
    */
    public function CreateNew($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNew = new CreateNew();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNew, $methodName)) {
                $CreateNew->$methodName($paramValue);
            }
        }
        return $CreateNew;
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
    * @return CreateNewResponse
    */
    public function CreateNewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewResponse = new CreateNewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewResponse, $methodName)) {
                $CreateNewResponse->$methodName($paramValue);
            }
        }
        return $CreateNewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewEx
    */
    public function CreateNewEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewEx = new CreateNewEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewEx, $methodName)) {
                $CreateNewEx->$methodName($paramValue);
            }
        }
        return $CreateNewEx;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfAssetSourceParameter
    */
    public function ArrayOfAssetSourceParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfAssetSourceParameter = new ArrayOfAssetSourceParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfAssetSourceParameter, $methodName)) {
                $ArrayOfAssetSourceParameter->$methodName($paramValue);
            }
        }
        return $ArrayOfAssetSourceParameter;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceParameter
    */
    public function AssetSourceParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceParameter = new AssetSourceParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceParameter, $methodName)) {
                $AssetSourceParameter->$methodName($paramValue);
            }
        }
        return $AssetSourceParameter;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewExResponse
    */
    public function CreateNewExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewExResponse = new CreateNewExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewExResponse, $methodName)) {
                $CreateNewExResponse->$methodName($paramValue);
            }
        }
        return $CreateNewExResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Delete
    */
    public function Delete($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Delete = new Delete();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Delete, $methodName)) {
                $Delete->$methodName($paramValue);
            }
        }
        return $Delete;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResponse
    */
    public function DeleteResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResponse = new DeleteResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResponse, $methodName)) {
                $DeleteResponse->$methodName($paramValue);
            }
        }
        return $DeleteResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaign
    */
    public function GetCampaign($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaign = new GetCampaign();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaign, $methodName)) {
                $GetCampaign->$methodName($paramValue);
            }
        }
        return $GetCampaign;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignResponse
    */
    public function GetCampaignResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignResponse = new GetCampaignResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignResponse, $methodName)) {
                $GetCampaignResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceProviderSupport
    */
    public function GetAssetSourceProviderSupport($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceProviderSupport = new GetAssetSourceProviderSupport();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceProviderSupport, $methodName)) {
                $GetAssetSourceProviderSupport->$methodName($paramValue);
            }
        }
        return $GetAssetSourceProviderSupport;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceProviderSupportResponse
    */
    public function GetAssetSourceProviderSupportResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceProviderSupportResponse = new GetAssetSourceProviderSupportResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceProviderSupportResponse, $methodName)) {
                $GetAssetSourceProviderSupportResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceProviderSupportResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceProviderSupport
    */
    public function AssetSourceProviderSupport($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceProviderSupport = new AssetSourceProviderSupport();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceProviderSupport, $methodName)) {
                $AssetSourceProviderSupport->$methodName($paramValue);
            }
        }
        return $AssetSourceProviderSupport;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFolderPath
    */
    public function GetFolderPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFolderPath = new GetFolderPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFolderPath, $methodName)) {
                $GetFolderPath->$methodName($paramValue);
            }
        }
        return $GetFolderPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFolderPathResponse
    */
    public function GetFolderPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFolderPathResponse = new GetFolderPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFolderPathResponse, $methodName)) {
                $GetFolderPathResponse->$methodName($paramValue);
            }
        }
        return $GetFolderPathResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProperty
    */
    public function GetProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProperty = new GetProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProperty, $methodName)) {
                $GetProperty->$methodName($paramValue);
            }
        }
        return $GetProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPropertyResponse
    */
    public function GetPropertyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertyResponse = new GetPropertyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertyResponse, $methodName)) {
                $GetPropertyResponse->$methodName($paramValue);
            }
        }
        return $GetPropertyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProperties
    */
    public function GetProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProperties = new GetProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProperties, $methodName)) {
                $GetProperties->$methodName($paramValue);
            }
        }
        return $GetProperties;
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
    * @return GetPropertiesResponse
    */
    public function GetPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertiesResponse = new GetPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertiesResponse, $methodName)) {
                $GetPropertiesResponse->$methodName($paramValue);
            }
        }
        return $GetPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllProperties
    */
    public function GetAllProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllProperties = new GetAllProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllProperties, $methodName)) {
                $GetAllProperties->$methodName($paramValue);
            }
        }
        return $GetAllProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllPropertiesResponse
    */
    public function GetAllPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllPropertiesResponse = new GetAllPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllPropertiesResponse, $methodName)) {
                $GetAllPropertiesResponse->$methodName($paramValue);
            }
        }
        return $GetAllPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSet
    */
    public function GetDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSet = new GetDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSet, $methodName)) {
                $GetDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResponse
    */
    public function GetDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResponse = new GetDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResponse, $methodName)) {
                $GetDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResult
    */
    public function GetDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResult = new GetDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResult, $methodName)) {
                $GetDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSet
    */
    public function GetXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSet = new GetXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSet, $methodName)) {
                $GetXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetResponse
    */
    public function GetXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetResponse = new GetXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetResponse, $methodName)) {
                $GetXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblDataSet
    */
    public function XMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblDataSet = new XMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblDataSet, $methodName)) {
                $XMPTblDataSet->$methodName($paramValue);
            }
        }
        return $XMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTbl
    */
    public function ArrayOfXMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTbl = new ArrayOfXMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTbl, $methodName)) {
                $ArrayOfXMPTbl->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTbl
    */
    public function XMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTbl = new XMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTbl, $methodName)) {
                $XMPTbl->$methodName($paramValue);
            }
        }
        return $XMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblColumn
    */
    public function ArrayOfXMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblColumn = new ArrayOfXMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblColumn, $methodName)) {
                $ArrayOfXMPTblColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblColumn
    */
    public function XMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblColumn = new XMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblColumn, $methodName)) {
                $XMPTblColumn->$methodName($paramValue);
            }
        }
        return $XMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblRow
    */
    public function ArrayOfXMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblRow = new ArrayOfXMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblRow, $methodName)) {
                $ArrayOfXMPTblRow->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblRow
    */
    public function XMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblRow = new XMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblRow, $methodName)) {
                $XMPTblRow->$methodName($paramValue);
            }
        }
        return $XMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPRowField
    */
    public function ArrayOfXMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPRowField = new ArrayOfXMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPRowField, $methodName)) {
                $ArrayOfXMPRowField->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPRowField
    */
    public function XMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPRowField = new XMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPRowField, $methodName)) {
                $XMPRowField->$methodName($paramValue);
            }
        }
        return $XMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProperty
    */
    public function SetProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProperty = new SetProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProperty, $methodName)) {
                $SetProperty->$methodName($paramValue);
            }
        }
        return $SetProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertyResponse
    */
    public function SetPropertyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertyResponse = new SetPropertyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertyResponse, $methodName)) {
                $SetPropertyResponse->$methodName($paramValue);
            }
        }
        return $SetPropertyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProperties
    */
    public function SetProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProperties = new SetProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProperties, $methodName)) {
                $SetProperties->$methodName($paramValue);
            }
        }
        return $SetProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertiesResponse
    */
    public function SetPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertiesResponse = new SetPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertiesResponse, $methodName)) {
                $SetPropertiesResponse->$methodName($paramValue);
            }
        }
        return $SetPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAssetsViewAvailable
    */
    public function IsAssetsViewAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAssetsViewAvailable = new IsAssetsViewAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAssetsViewAvailable, $methodName)) {
                $IsAssetsViewAvailable->$methodName($paramValue);
            }
        }
        return $IsAssetsViewAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAssetsViewAvailableResponse
    */
    public function IsAssetsViewAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAssetsViewAvailableResponse = new IsAssetsViewAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAssetsViewAvailableResponse, $methodName)) {
                $IsAssetsViewAvailableResponse->$methodName($paramValue);
            }
        }
        return $IsAssetsViewAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceType
    */
    public function GetAssetSourceType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceType = new GetAssetSourceType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceType, $methodName)) {
                $GetAssetSourceType->$methodName($paramValue);
            }
        }
        return $GetAssetSourceType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceTypeResponse
    */
    public function GetAssetSourceTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceTypeResponse = new GetAssetSourceTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceTypeResponse, $methodName)) {
                $GetAssetSourceTypeResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceParameters
    */
    public function GetAssetSourceParameters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceParameters = new GetAssetSourceParameters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceParameters, $methodName)) {
                $GetAssetSourceParameters->$methodName($paramValue);
            }
        }
        return $GetAssetSourceParameters;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceParametersResponse
    */
    public function GetAssetSourceParametersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceParametersResponse = new GetAssetSourceParametersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceParametersResponse, $methodName)) {
                $GetAssetSourceParametersResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceParametersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAssetSourceParameters
    */
    public function SetAssetSourceParameters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAssetSourceParameters = new SetAssetSourceParameters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAssetSourceParameters, $methodName)) {
                $SetAssetSourceParameters->$methodName($paramValue);
            }
        }
        return $SetAssetSourceParameters;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAssetSourceParametersResponse
    */
    public function SetAssetSourceParametersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAssetSourceParametersResponse = new SetAssetSourceParametersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAssetSourceParametersResponse, $methodName)) {
                $SetAssetSourceParametersResponse->$methodName($paramValue);
            }
        }
        return $SetAssetSourceParametersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceInfo
    */
    public function GetAssetSourceInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceInfo = new GetAssetSourceInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceInfo, $methodName)) {
                $GetAssetSourceInfo->$methodName($paramValue);
            }
        }
        return $GetAssetSourceInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceInfoResponse
    */
    public function GetAssetSourceInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceInfoResponse = new GetAssetSourceInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceInfoResponse, $methodName)) {
                $GetAssetSourceInfoResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceStruct
    */
    public function AssetSourceStruct($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceStruct = new AssetSourceStruct();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceStruct, $methodName)) {
                $AssetSourceStruct->$methodName($paramValue);
            }
        }
        return $AssetSourceStruct;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceInfoEx
    */
    public function GetAssetSourceInfoEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceInfoEx = new GetAssetSourceInfoEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceInfoEx, $methodName)) {
                $GetAssetSourceInfoEx->$methodName($paramValue);
            }
        }
        return $GetAssetSourceInfoEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceInfoExResponse
    */
    public function GetAssetSourceInfoExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceInfoExResponse = new GetAssetSourceInfoExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceInfoExResponse, $methodName)) {
                $GetAssetSourceInfoExResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceInfoExResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceInfo
    */
    public function AssetSourceInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceInfo = new AssetSourceInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceInfo, $methodName)) {
                $AssetSourceInfo->$methodName($paramValue);
            }
        }
        return $AssetSourceInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetName
    */
    public function GetName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetName = new GetName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetName, $methodName)) {
                $GetName->$methodName($paramValue);
            }
        }
        return $GetName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetNameResponse
    */
    public function GetNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetNameResponse = new GetNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetNameResponse, $methodName)) {
                $GetNameResponse->$methodName($paramValue);
            }
        }
        return $GetNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetName
    */
    public function SetName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetName = new SetName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetName, $methodName)) {
                $SetName->$methodName($paramValue);
            }
        }
        return $SetName;
    }


   /**
    * @param array $paramAutoSet
    * @return SetNameResponse
    */
    public function SetNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetNameResponse = new SetNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetNameResponse, $methodName)) {
                $SetNameResponse->$methodName($paramValue);
            }
        }
        return $SetNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPriority
    */
    public function GetPriority($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPriority = new GetPriority();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPriority, $methodName)) {
                $GetPriority->$methodName($paramValue);
            }
        }
        return $GetPriority;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPriorityResponse
    */
    public function GetPriorityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPriorityResponse = new GetPriorityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPriorityResponse, $methodName)) {
                $GetPriorityResponse->$methodName($paramValue);
            }
        }
        return $GetPriorityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPriority
    */
    public function SetPriority($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPriority = new SetPriority();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPriority, $methodName)) {
                $SetPriority->$methodName($paramValue);
            }
        }
        return $SetPriority;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPriorityResponse
    */
    public function SetPriorityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPriorityResponse = new SetPriorityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPriorityResponse, $methodName)) {
                $SetPriorityResponse->$methodName($paramValue);
            }
        }
        return $SetPriorityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActiveness
    */
    public function GetActiveness($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActiveness = new GetActiveness();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActiveness, $methodName)) {
                $GetActiveness->$methodName($paramValue);
            }
        }
        return $GetActiveness;
    }


   /**
    * @param array $paramAutoSet
    * @return GetActivenessResponse
    */
    public function GetActivenessResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetActivenessResponse = new GetActivenessResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetActivenessResponse, $methodName)) {
                $GetActivenessResponse->$methodName($paramValue);
            }
        }
        return $GetActivenessResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetActiveness
    */
    public function SetActiveness($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetActiveness = new SetActiveness();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetActiveness, $methodName)) {
                $SetActiveness->$methodName($paramValue);
            }
        }
        return $SetActiveness;
    }


   /**
    * @param array $paramAutoSet
    * @return SetActivenessResponse
    */
    public function SetActivenessResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetActivenessResponse = new SetActivenessResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetActivenessResponse, $methodName)) {
                $SetActivenessResponse->$methodName($paramValue);
            }
        }
        return $SetActivenessResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetID
    */
    public function GetAssetID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetID = new GetAssetID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetID, $methodName)) {
                $GetAssetID->$methodName($paramValue);
            }
        }
        return $GetAssetID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetIDResponse
    */
    public function GetAssetIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetIDResponse = new GetAssetIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetIDResponse, $methodName)) {
                $GetAssetIDResponse->$methodName($paramValue);
            }
        }
        return $GetAssetIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssets
    */
    public function GetAssets($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssets = new GetAssets();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssets, $methodName)) {
                $GetAssets->$methodName($paramValue);
            }
        }
        return $GetAssets;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsResponse
    */
    public function GetAssetsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsResponse = new GetAssetsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsResponse, $methodName)) {
                $GetAssetsResponse->$methodName($paramValue);
            }
        }
        return $GetAssetsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsDataSet
    */
    public function GetAssetsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsDataSet = new GetAssetsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsDataSet, $methodName)) {
                $GetAssetsDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsDataSetResponse
    */
    public function GetAssetsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsDataSetResponse = new GetAssetsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsDataSetResponse, $methodName)) {
                $GetAssetsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsDataSetResult
    */
    public function GetAssetsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsDataSetResult = new GetAssetsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsDataSetResult, $methodName)) {
                $GetAssetsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetAssetsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsXMPTblDataSet
    */
    public function GetAssetsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsXMPTblDataSet = new GetAssetsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsXMPTblDataSet, $methodName)) {
                $GetAssetsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetsXMPTblDataSetResponse
    */
    public function GetAssetsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetsXMPTblDataSetResponse = new GetAssetsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetsXMPTblDataSetResponse, $methodName)) {
                $GetAssetsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAssets
    */
    public function DeleteAssets($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAssets = new DeleteAssets();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAssets, $methodName)) {
                $DeleteAssets->$methodName($paramValue);
            }
        }
        return $DeleteAssets;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAssetsResponse
    */
    public function DeleteAssetsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAssetsResponse = new DeleteAssetsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAssetsResponse, $methodName)) {
                $DeleteAssetsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAssetsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAssets
    */
    public function DeleteAllAssets($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAssets = new DeleteAllAssets();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAssets, $methodName)) {
                $DeleteAllAssets->$methodName($paramValue);
            }
        }
        return $DeleteAllAssets;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAssetsResponse
    */
    public function DeleteAllAssetsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAssetsResponse = new DeleteAllAssetsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAssetsResponse, $methodName)) {
                $DeleteAllAssetsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllAssetsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetID
    */
    public function GetID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetID = new GetID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetID, $methodName)) {
                $GetID->$methodName($paramValue);
            }
        }
        return $GetID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetIDResponse
    */
    public function GetIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIDResponse = new GetIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIDResponse, $methodName)) {
                $GetIDResponse->$methodName($paramValue);
            }
        }
        return $GetIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExist
    */
    public function IsExist($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExist = new IsExist();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExist, $methodName)) {
                $IsExist->$methodName($paramValue);
            }
        }
        return $IsExist;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExistResponse
    */
    public function IsExistResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExistResponse = new IsExistResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExistResponse, $methodName)) {
                $IsExistResponse->$methodName($paramValue);
            }
        }
        return $IsExistResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetSettings
    */
    public function SetSettings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetSettings = new SetSettings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetSettings, $methodName)) {
                $SetSettings->$methodName($paramValue);
            }
        }
        return $SetSettings;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfSetting
    */
    public function ArrayOfSetting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfSetting = new ArrayOfSetting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfSetting, $methodName)) {
                $ArrayOfSetting->$methodName($paramValue);
            }
        }
        return $ArrayOfSetting;
    }


   /**
    * @param array $paramAutoSet
    * @return Setting
    */
    public function Setting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Setting = new Setting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Setting, $methodName)) {
                $Setting->$methodName($paramValue);
            }
        }
        return $Setting;
    }


   /**
    * @param array $paramAutoSet
    * @return SetSettingsResponse
    */
    public function SetSettingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetSettingsResponse = new SetSettingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetSettingsResponse, $methodName)) {
                $SetSettingsResponse->$methodName($paramValue);
            }
        }
        return $SetSettingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSettings
    */
    public function GetSettings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSettings = new GetSettings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSettings, $methodName)) {
                $GetSettings->$methodName($paramValue);
            }
        }
        return $GetSettings;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSettingsResponse
    */
    public function GetSettingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSettingsResponse = new GetSettingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSettingsResponse, $methodName)) {
                $GetSettingsResponse->$methodName($paramValue);
            }
        }
        return $GetSettingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSettings
    */
    public function DeleteSettings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSettings = new DeleteSettings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSettings, $methodName)) {
                $DeleteSettings->$methodName($paramValue);
            }
        }
        return $DeleteSettings;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSettingsResponse
    */
    public function DeleteSettingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSettingsResponse = new DeleteSettingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSettingsResponse, $methodName)) {
                $DeleteSettingsResponse->$methodName($paramValue);
            }
        }
        return $DeleteSettingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Clone
    */
    public function Clone($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Clone = new Clone();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Clone, $methodName)) {
                $Clone->$methodName($paramValue);
            }
        }
        return $Clone;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneResponse
    */
    public function CloneResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneResponse = new CloneResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneResponse, $methodName)) {
                $CloneResponse->$methodName($paramValue);
            }
        }
        return $CloneResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceMapping
    */
    public function AssetSourceMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceMapping = new AssetSourceMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceMapping, $methodName)) {
                $AssetSourceMapping->$methodName($paramValue);
            }
        }
        return $AssetSourceMapping;
    }


   /**
    * @param array $paramAutoSet
    * @return IDMapping
    */
    public function IDMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IDMapping = new IDMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IDMapping, $methodName)) {
                $IDMapping->$methodName($paramValue);
            }
        }
        return $IDMapping;
    }



}

?>
