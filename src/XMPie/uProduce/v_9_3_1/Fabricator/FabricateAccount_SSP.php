<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCustomer;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCustomerResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaigns;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetCampaignsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteCampaigns;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteCampaignsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAllCampaigns;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAllCampaignsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\ArrayOfPlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\PlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourceID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourceIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\GetAccountDataSourcesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAccountDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAccountDataSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAllAccountDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Account_SSP\DeleteAllAccountDataSourcesResponse;


class FabricateAccount_SSP
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
    * @return GetCustomer
    */
    public function GetCustomer($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomer = new GetCustomer();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomer, $methodName)) {
                $GetCustomer->$methodName($paramValue);
            }
        }
        return $GetCustomer;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomerResponse
    */
    public function GetCustomerResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomerResponse = new GetCustomerResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomerResponse, $methodName)) {
                $GetCustomerResponse->$methodName($paramValue);
            }
        }
        return $GetCustomerResponse;
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
    * @return GetCampaignID
    */
    public function GetCampaignID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignID = new GetCampaignID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignID, $methodName)) {
                $GetCampaignID->$methodName($paramValue);
            }
        }
        return $GetCampaignID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignIDResponse
    */
    public function GetCampaignIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignIDResponse = new GetCampaignIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignIDResponse, $methodName)) {
                $GetCampaignIDResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaigns
    */
    public function GetCampaigns($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaigns = new GetCampaigns();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaigns, $methodName)) {
                $GetCampaigns->$methodName($paramValue);
            }
        }
        return $GetCampaigns;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsResponse
    */
    public function GetCampaignsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsResponse = new GetCampaignsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsResponse, $methodName)) {
                $GetCampaignsResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsDataSet
    */
    public function GetCampaignsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsDataSet = new GetCampaignsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsDataSet, $methodName)) {
                $GetCampaignsDataSet->$methodName($paramValue);
            }
        }
        return $GetCampaignsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsDataSetResponse
    */
    public function GetCampaignsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsDataSetResponse = new GetCampaignsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsDataSetResponse, $methodName)) {
                $GetCampaignsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsDataSetResult
    */
    public function GetCampaignsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsDataSetResult = new GetCampaignsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsDataSetResult, $methodName)) {
                $GetCampaignsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetCampaignsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsXMPTblDataSet
    */
    public function GetCampaignsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsXMPTblDataSet = new GetCampaignsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsXMPTblDataSet, $methodName)) {
                $GetCampaignsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetCampaignsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignsXMPTblDataSetResponse
    */
    public function GetCampaignsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignsXMPTblDataSetResponse = new GetCampaignsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignsXMPTblDataSetResponse, $methodName)) {
                $GetCampaignsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteCampaigns
    */
    public function DeleteCampaigns($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteCampaigns = new DeleteCampaigns();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteCampaigns, $methodName)) {
                $DeleteCampaigns->$methodName($paramValue);
            }
        }
        return $DeleteCampaigns;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteCampaignsResponse
    */
    public function DeleteCampaignsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteCampaignsResponse = new DeleteCampaignsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteCampaignsResponse, $methodName)) {
                $DeleteCampaignsResponse->$methodName($paramValue);
            }
        }
        return $DeleteCampaignsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllCampaigns
    */
    public function DeleteAllCampaigns($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllCampaigns = new DeleteAllCampaigns();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllCampaigns, $methodName)) {
                $DeleteAllCampaigns->$methodName($paramValue);
            }
        }
        return $DeleteAllCampaigns;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllCampaignsResponse
    */
    public function DeleteAllCampaignsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllCampaignsResponse = new DeleteAllCampaignsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllCampaignsResponse, $methodName)) {
                $DeleteAllCampaignsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllCampaignsResponse;
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
    * @return GetADORs
    */
    public function GetADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORs = new GetADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORs, $methodName)) {
                $GetADORs->$methodName($paramValue);
            }
        }
        return $GetADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsResponse
    */
    public function GetADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsResponse = new GetADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsResponse, $methodName)) {
                $GetADORsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanObject
    */
    public function ArrayOfPlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanObject = new ArrayOfPlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanObject, $methodName)) {
                $ArrayOfPlanObject->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanObject
    */
    public function PlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanObject = new PlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanObject, $methodName)) {
                $PlanObject->$methodName($paramValue);
            }
        }
        return $PlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourceID
    */
    public function GetAccountDataSourceID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourceID = new GetAccountDataSourceID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourceID, $methodName)) {
                $GetAccountDataSourceID->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourceID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourceIDResponse
    */
    public function GetAccountDataSourceIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourceIDResponse = new GetAccountDataSourceIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourceIDResponse, $methodName)) {
                $GetAccountDataSourceIDResponse->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourceIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSources
    */
    public function GetAccountDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSources = new GetAccountDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSources, $methodName)) {
                $GetAccountDataSources->$methodName($paramValue);
            }
        }
        return $GetAccountDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesResponse
    */
    public function GetAccountDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesResponse = new GetAccountDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesResponse, $methodName)) {
                $GetAccountDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesDataSet
    */
    public function GetAccountDataSourcesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesDataSet = new GetAccountDataSourcesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesDataSet, $methodName)) {
                $GetAccountDataSourcesDataSet->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesDataSetResponse
    */
    public function GetAccountDataSourcesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesDataSetResponse = new GetAccountDataSourcesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesDataSetResponse, $methodName)) {
                $GetAccountDataSourcesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesDataSetResult
    */
    public function GetAccountDataSourcesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesDataSetResult = new GetAccountDataSourcesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesDataSetResult, $methodName)) {
                $GetAccountDataSourcesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesXMPTblDataSet
    */
    public function GetAccountDataSourcesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesXMPTblDataSet = new GetAccountDataSourcesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesXMPTblDataSet, $methodName)) {
                $GetAccountDataSourcesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountDataSourcesXMPTblDataSetResponse
    */
    public function GetAccountDataSourcesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountDataSourcesXMPTblDataSetResponse = new GetAccountDataSourcesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountDataSourcesXMPTblDataSetResponse, $methodName)) {
                $GetAccountDataSourcesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAccountDataSourcesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAccountDataSources
    */
    public function DeleteAccountDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAccountDataSources = new DeleteAccountDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAccountDataSources, $methodName)) {
                $DeleteAccountDataSources->$methodName($paramValue);
            }
        }
        return $DeleteAccountDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAccountDataSourcesResponse
    */
    public function DeleteAccountDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAccountDataSourcesResponse = new DeleteAccountDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAccountDataSourcesResponse, $methodName)) {
                $DeleteAccountDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAccountDataSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAccountDataSources
    */
    public function DeleteAllAccountDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAccountDataSources = new DeleteAllAccountDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAccountDataSources, $methodName)) {
                $DeleteAllAccountDataSources->$methodName($paramValue);
            }
        }
        return $DeleteAllAccountDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAccountDataSourcesResponse
    */
    public function DeleteAllAccountDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAccountDataSourcesResponse = new DeleteAllAccountDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAccountDataSourcesResponse, $methodName)) {
                $DeleteAllAccountDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllAccountDataSourcesResponse;
    }



}

?>
