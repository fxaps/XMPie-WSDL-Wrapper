<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfEmailProviderParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailProviderParameter;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetCustomer;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetCustomerResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderParameters;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderParametersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParameters;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParametersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailProviderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderType;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SendMail;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailHeaderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfEmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfEmailBodyInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailBodyInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\EmailBodyOptions;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\URLInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SendMailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SendEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SendMailByProviderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SendMailByProviderInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ProviderCustomActionByProviderInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ProviderCustomAction;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ProviderCustomActionResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetStatus;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\StatusInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\DeliveryProvider_SSP\DeleteSettingsResponse;


class FabricateDeliveryProvider_SSP
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
    * @return ArrayOfEmailProviderParameter
    */
    public function ArrayOfEmailProviderParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEmailProviderParameter = new ArrayOfEmailProviderParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEmailProviderParameter, $methodName)) {
                $ArrayOfEmailProviderParameter->$methodName($paramValue);
            }
        }
        return $ArrayOfEmailProviderParameter;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailProviderParameter
    */
    public function EmailProviderParameter($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailProviderParameter = new EmailProviderParameter();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailProviderParameter, $methodName)) {
                $EmailProviderParameter->$methodName($paramValue);
            }
        }
        return $EmailProviderParameter;
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
    * @return Replace
    */
    public function Replace($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Replace = new Replace();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Replace, $methodName)) {
                $Replace->$methodName($paramValue);
            }
        }
        return $Replace;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceResponse
    */
    public function ReplaceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceResponse = new ReplaceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceResponse, $methodName)) {
                $ReplaceResponse->$methodName($paramValue);
            }
        }
        return $ReplaceResponse;
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
    * @return GetDeliveryProviderParameters
    */
    public function GetDeliveryProviderParameters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderParameters = new GetDeliveryProviderParameters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderParameters, $methodName)) {
                $GetDeliveryProviderParameters->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderParameters;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderParametersResponse
    */
    public function GetDeliveryProviderParametersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderParametersResponse = new GetDeliveryProviderParametersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderParametersResponse, $methodName)) {
                $GetDeliveryProviderParametersResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderParametersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetDeliveryProviderParameters
    */
    public function SetDeliveryProviderParameters($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetDeliveryProviderParameters = new SetDeliveryProviderParameters();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetDeliveryProviderParameters, $methodName)) {
                $SetDeliveryProviderParameters->$methodName($paramValue);
            }
        }
        return $SetDeliveryProviderParameters;
    }


   /**
    * @param array $paramAutoSet
    * @return SetDeliveryProviderParametersResponse
    */
    public function SetDeliveryProviderParametersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetDeliveryProviderParametersResponse = new SetDeliveryProviderParametersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetDeliveryProviderParametersResponse, $methodName)) {
                $SetDeliveryProviderParametersResponse->$methodName($paramValue);
            }
        }
        return $SetDeliveryProviderParametersResponse;
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
    * @return GetDeliveryProviderInfo
    */
    public function GetDeliveryProviderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderInfo = new GetDeliveryProviderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderInfo, $methodName)) {
                $GetDeliveryProviderInfo->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderInfoResponse
    */
    public function GetDeliveryProviderInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderInfoResponse = new GetDeliveryProviderInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderInfoResponse, $methodName)) {
                $GetDeliveryProviderInfoResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailProviderInfo
    */
    public function EmailProviderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailProviderInfo = new EmailProviderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailProviderInfo, $methodName)) {
                $EmailProviderInfo->$methodName($paramValue);
            }
        }
        return $EmailProviderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypes
    */
    public function GetDeliveryProviderTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypes = new GetDeliveryProviderTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypes, $methodName)) {
                $GetDeliveryProviderTypes->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypesResponse
    */
    public function GetDeliveryProviderTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypesResponse = new GetDeliveryProviderTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypesResponse, $methodName)) {
                $GetDeliveryProviderTypesResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypesResult
    */
    public function GetDeliveryProviderTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypesResult = new GetDeliveryProviderTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypesResult, $methodName)) {
                $GetDeliveryProviderTypesResult->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypesXMPTblDataSet
    */
    public function GetDeliveryProviderTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypesXMPTblDataSet = new GetDeliveryProviderTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypesXMPTblDataSet, $methodName)) {
                $GetDeliveryProviderTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypesXMPTblDataSetResponse
    */
    public function GetDeliveryProviderTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypesXMPTblDataSetResponse = new GetDeliveryProviderTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypesXMPTblDataSetResponse, $methodName)) {
                $GetDeliveryProviderTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderType
    */
    public function GetDeliveryProviderType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderType = new GetDeliveryProviderType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderType, $methodName)) {
                $GetDeliveryProviderType->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypeResponse
    */
    public function GetDeliveryProviderTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypeResponse = new GetDeliveryProviderTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypeResponse, $methodName)) {
                $GetDeliveryProviderTypeResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypeResult
    */
    public function GetDeliveryProviderTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypeResult = new GetDeliveryProviderTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypeResult, $methodName)) {
                $GetDeliveryProviderTypeResult->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypeXMPTblDataSet
    */
    public function GetDeliveryProviderTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypeXMPTblDataSet = new GetDeliveryProviderTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypeXMPTblDataSet, $methodName)) {
                $GetDeliveryProviderTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderTypeXMPTblDataSetResponse
    */
    public function GetDeliveryProviderTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderTypeXMPTblDataSetResponse = new GetDeliveryProviderTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderTypeXMPTblDataSetResponse, $methodName)) {
                $GetDeliveryProviderTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderTypeXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMail
    */
    public function SendMail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMail = new SendMail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMail, $methodName)) {
                $SendMail->$methodName($paramValue);
            }
        }
        return $SendMail;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailHeaderInfo
    */
    public function EmailHeaderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailHeaderInfo = new EmailHeaderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailHeaderInfo, $methodName)) {
                $EmailHeaderInfo->$methodName($paramValue);
            }
        }
        return $EmailHeaderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfEmailAddress
    */
    public function ArrayOfEmailAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEmailAddress = new ArrayOfEmailAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEmailAddress, $methodName)) {
                $ArrayOfEmailAddress->$methodName($paramValue);
            }
        }
        return $ArrayOfEmailAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailAddress
    */
    public function EmailAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailAddress = new EmailAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailAddress, $methodName)) {
                $EmailAddress->$methodName($paramValue);
            }
        }
        return $EmailAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfEmailBodyInfo
    */
    public function ArrayOfEmailBodyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEmailBodyInfo = new ArrayOfEmailBodyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEmailBodyInfo, $methodName)) {
                $ArrayOfEmailBodyInfo->$methodName($paramValue);
            }
        }
        return $ArrayOfEmailBodyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailBodyInfo
    */
    public function EmailBodyInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailBodyInfo = new EmailBodyInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailBodyInfo, $methodName)) {
                $EmailBodyInfo->$methodName($paramValue);
            }
        }
        return $EmailBodyInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailBodyOptions
    */
    public function EmailBodyOptions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailBodyOptions = new EmailBodyOptions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailBodyOptions, $methodName)) {
                $EmailBodyOptions->$methodName($paramValue);
            }
        }
        return $EmailBodyOptions;
    }


   /**
    * @param array $paramAutoSet
    * @return URLInfo
    */
    public function URLInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $URLInfo = new URLInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($URLInfo, $methodName)) {
                $URLInfo->$methodName($paramValue);
            }
        }
        return $URLInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailResponse
    */
    public function SendMailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailResponse = new SendMailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailResponse, $methodName)) {
                $SendMailResponse->$methodName($paramValue);
            }
        }
        return $SendMailResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SendEmailResult
    */
    public function SendEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendEmailResult = new SendEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendEmailResult, $methodName)) {
                $SendEmailResult->$methodName($paramValue);
            }
        }
        return $SendEmailResult;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailByProviderInfo
    */
    public function SendMailByProviderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByProviderInfo = new SendMailByProviderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByProviderInfo, $methodName)) {
                $SendMailByProviderInfo->$methodName($paramValue);
            }
        }
        return $SendMailByProviderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailByProviderInfoResponse
    */
    public function SendMailByProviderInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByProviderInfoResponse = new SendMailByProviderInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByProviderInfoResponse, $methodName)) {
                $SendMailByProviderInfoResponse->$methodName($paramValue);
            }
        }
        return $SendMailByProviderInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProviderCustomActionByProviderInfo
    */
    public function ProviderCustomActionByProviderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProviderCustomActionByProviderInfo = new ProviderCustomActionByProviderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProviderCustomActionByProviderInfo, $methodName)) {
                $ProviderCustomActionByProviderInfo->$methodName($paramValue);
            }
        }
        return $ProviderCustomActionByProviderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return ProviderCustomActionByProviderInfoResponse
    */
    public function ProviderCustomActionByProviderInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProviderCustomActionByProviderInfoResponse = new ProviderCustomActionByProviderInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProviderCustomActionByProviderInfoResponse, $methodName)) {
                $ProviderCustomActionByProviderInfoResponse->$methodName($paramValue);
            }
        }
        return $ProviderCustomActionByProviderInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ProviderCustomAction
    */
    public function ProviderCustomAction($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProviderCustomAction = new ProviderCustomAction();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProviderCustomAction, $methodName)) {
                $ProviderCustomAction->$methodName($paramValue);
            }
        }
        return $ProviderCustomAction;
    }


   /**
    * @param array $paramAutoSet
    * @return ProviderCustomActionResponse
    */
    public function ProviderCustomActionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ProviderCustomActionResponse = new ProviderCustomActionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ProviderCustomActionResponse, $methodName)) {
                $ProviderCustomActionResponse->$methodName($paramValue);
            }
        }
        return $ProviderCustomActionResponse;
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
    * @return GetStatus
    */
    public function GetStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatus = new GetStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatus, $methodName)) {
                $GetStatus->$methodName($paramValue);
            }
        }
        return $GetStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatusResponse
    */
    public function GetStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatusResponse = new GetStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatusResponse, $methodName)) {
                $GetStatusResponse->$methodName($paramValue);
            }
        }
        return $GetStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StatusInfo
    */
    public function StatusInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StatusInfo = new StatusInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StatusInfo, $methodName)) {
                $StatusInfo->$methodName($paramValue);
            }
        }
        return $StatusInfo;
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



}

?>
