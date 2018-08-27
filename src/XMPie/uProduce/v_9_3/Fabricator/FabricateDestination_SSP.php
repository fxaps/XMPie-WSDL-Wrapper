<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetCustomer;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetCustomerResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationType;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetDestinationTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetNetworkPrinterList;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetNetworkPrinterListResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\RefreshQueues;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\RefreshQueuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestFTPConnectivity;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestFTPConnectivityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestNetworkPathConnectivity;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentials;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestNetworkPathConnectivityWithCredentialsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestXeroxFFPMConnectivity;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\TestXeroxFFPMConnectivityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetFFPMQueuesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetFFPMQueuesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetFFPMQueuesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetFFPMQueuesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetFFPMQueuesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\Destination_SSP\IsExistResponse;


class FabricateDestination_SSP
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
    * @return GetDestinationTypes
    */
    public function GetDestinationTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypes = new GetDestinationTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypes, $methodName)) {
                $GetDestinationTypes->$methodName($paramValue);
            }
        }
        return $GetDestinationTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypesResponse
    */
    public function GetDestinationTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypesResponse = new GetDestinationTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypesResponse, $methodName)) {
                $GetDestinationTypesResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypesResult
    */
    public function GetDestinationTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypesResult = new GetDestinationTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypesResult, $methodName)) {
                $GetDestinationTypesResult->$methodName($paramValue);
            }
        }
        return $GetDestinationTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypesXMPTblDataSet
    */
    public function GetDestinationTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypesXMPTblDataSet = new GetDestinationTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypesXMPTblDataSet, $methodName)) {
                $GetDestinationTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDestinationTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypesXMPTblDataSetResponse
    */
    public function GetDestinationTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypesXMPTblDataSetResponse = new GetDestinationTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypesXMPTblDataSetResponse, $methodName)) {
                $GetDestinationTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationTypesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationType
    */
    public function GetDestinationType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationType = new GetDestinationType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationType, $methodName)) {
                $GetDestinationType->$methodName($paramValue);
            }
        }
        return $GetDestinationType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypeResponse
    */
    public function GetDestinationTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypeResponse = new GetDestinationTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypeResponse, $methodName)) {
                $GetDestinationTypeResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypeResult
    */
    public function GetDestinationTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypeResult = new GetDestinationTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypeResult, $methodName)) {
                $GetDestinationTypeResult->$methodName($paramValue);
            }
        }
        return $GetDestinationTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypeXMPTblDataSet
    */
    public function GetDestinationTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypeXMPTblDataSet = new GetDestinationTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypeXMPTblDataSet, $methodName)) {
                $GetDestinationTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDestinationTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationTypeXMPTblDataSetResponse
    */
    public function GetDestinationTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationTypeXMPTblDataSetResponse = new GetDestinationTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationTypeXMPTblDataSetResponse, $methodName)) {
                $GetDestinationTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationTypeXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetNetworkPrinterList
    */
    public function GetNetworkPrinterList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetNetworkPrinterList = new GetNetworkPrinterList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetNetworkPrinterList, $methodName)) {
                $GetNetworkPrinterList->$methodName($paramValue);
            }
        }
        return $GetNetworkPrinterList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetNetworkPrinterListResponse
    */
    public function GetNetworkPrinterListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetNetworkPrinterListResponse = new GetNetworkPrinterListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetNetworkPrinterListResponse, $methodName)) {
                $GetNetworkPrinterListResponse->$methodName($paramValue);
            }
        }
        return $GetNetworkPrinterListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RefreshQueues
    */
    public function RefreshQueues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RefreshQueues = new RefreshQueues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RefreshQueues, $methodName)) {
                $RefreshQueues->$methodName($paramValue);
            }
        }
        return $RefreshQueues;
    }


   /**
    * @param array $paramAutoSet
    * @return RefreshQueuesResponse
    */
    public function RefreshQueuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RefreshQueuesResponse = new RefreshQueuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RefreshQueuesResponse, $methodName)) {
                $RefreshQueuesResponse->$methodName($paramValue);
            }
        }
        return $RefreshQueuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestFTPConnectivity
    */
    public function TestFTPConnectivity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestFTPConnectivity = new TestFTPConnectivity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestFTPConnectivity, $methodName)) {
                $TestFTPConnectivity->$methodName($paramValue);
            }
        }
        return $TestFTPConnectivity;
    }


   /**
    * @param array $paramAutoSet
    * @return TestFTPConnectivityResponse
    */
    public function TestFTPConnectivityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestFTPConnectivityResponse = new TestFTPConnectivityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestFTPConnectivityResponse, $methodName)) {
                $TestFTPConnectivityResponse->$methodName($paramValue);
            }
        }
        return $TestFTPConnectivityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestNetworkPathConnectivity
    */
    public function TestNetworkPathConnectivity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestNetworkPathConnectivity = new TestNetworkPathConnectivity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestNetworkPathConnectivity, $methodName)) {
                $TestNetworkPathConnectivity->$methodName($paramValue);
            }
        }
        return $TestNetworkPathConnectivity;
    }


   /**
    * @param array $paramAutoSet
    * @return TestNetworkPathConnectivityResponse
    */
    public function TestNetworkPathConnectivityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestNetworkPathConnectivityResponse = new TestNetworkPathConnectivityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestNetworkPathConnectivityResponse, $methodName)) {
                $TestNetworkPathConnectivityResponse->$methodName($paramValue);
            }
        }
        return $TestNetworkPathConnectivityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestNetworkPathConnectivityWithCredentials
    */
    public function TestNetworkPathConnectivityWithCredentials($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestNetworkPathConnectivityWithCredentials = new TestNetworkPathConnectivityWithCredentials();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestNetworkPathConnectivityWithCredentials, $methodName)) {
                $TestNetworkPathConnectivityWithCredentials->$methodName($paramValue);
            }
        }
        return $TestNetworkPathConnectivityWithCredentials;
    }


   /**
    * @param array $paramAutoSet
    * @return TestNetworkPathConnectivityWithCredentialsResponse
    */
    public function TestNetworkPathConnectivityWithCredentialsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestNetworkPathConnectivityWithCredentialsResponse = new TestNetworkPathConnectivityWithCredentialsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestNetworkPathConnectivityWithCredentialsResponse, $methodName)) {
                $TestNetworkPathConnectivityWithCredentialsResponse->$methodName($paramValue);
            }
        }
        return $TestNetworkPathConnectivityWithCredentialsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestXeroxFFPMConnectivity
    */
    public function TestXeroxFFPMConnectivity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestXeroxFFPMConnectivity = new TestXeroxFFPMConnectivity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestXeroxFFPMConnectivity, $methodName)) {
                $TestXeroxFFPMConnectivity->$methodName($paramValue);
            }
        }
        return $TestXeroxFFPMConnectivity;
    }


   /**
    * @param array $paramAutoSet
    * @return TestXeroxFFPMConnectivityResponse
    */
    public function TestXeroxFFPMConnectivityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestXeroxFFPMConnectivityResponse = new TestXeroxFFPMConnectivityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestXeroxFFPMConnectivityResponse, $methodName)) {
                $TestXeroxFFPMConnectivityResponse->$methodName($paramValue);
            }
        }
        return $TestXeroxFFPMConnectivityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFFPMQueuesDataSet
    */
    public function GetFFPMQueuesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFFPMQueuesDataSet = new GetFFPMQueuesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFFPMQueuesDataSet, $methodName)) {
                $GetFFPMQueuesDataSet->$methodName($paramValue);
            }
        }
        return $GetFFPMQueuesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFFPMQueuesDataSetResponse
    */
    public function GetFFPMQueuesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFFPMQueuesDataSetResponse = new GetFFPMQueuesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFFPMQueuesDataSetResponse, $methodName)) {
                $GetFFPMQueuesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetFFPMQueuesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFFPMQueuesDataSetResult
    */
    public function GetFFPMQueuesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFFPMQueuesDataSetResult = new GetFFPMQueuesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFFPMQueuesDataSetResult, $methodName)) {
                $GetFFPMQueuesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetFFPMQueuesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFFPMQueuesXMPTblDataSet
    */
    public function GetFFPMQueuesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFFPMQueuesXMPTblDataSet = new GetFFPMQueuesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFFPMQueuesXMPTblDataSet, $methodName)) {
                $GetFFPMQueuesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetFFPMQueuesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFFPMQueuesXMPTblDataSetResponse
    */
    public function GetFFPMQueuesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFFPMQueuesXMPTblDataSetResponse = new GetFFPMQueuesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFFPMQueuesXMPTblDataSetResponse, $methodName)) {
                $GetFFPMQueuesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetFFPMQueuesXMPTblDataSetResponse;
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



}

?>
