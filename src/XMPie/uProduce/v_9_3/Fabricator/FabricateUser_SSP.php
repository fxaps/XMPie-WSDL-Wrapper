<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetCustomer;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetCustomerResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\AddUserToken;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\AddUserTokenResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\RemoveUserToken;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\RemoveUserTokenResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\RemoveAllUsersToken;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\RemoveAllUsersTokenResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\IsExistResponse;


class FabricateUser_SSP
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
    * @return AddUserToken
    */
    public function AddUserToken($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserToken = new AddUserToken();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserToken, $methodName)) {
                $AddUserToken->$methodName($paramValue);
            }
        }
        return $AddUserToken;
    }


   /**
    * @param array $paramAutoSet
    * @return AddUserTokenResponse
    */
    public function AddUserTokenResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddUserTokenResponse = new AddUserTokenResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddUserTokenResponse, $methodName)) {
                $AddUserTokenResponse->$methodName($paramValue);
            }
        }
        return $AddUserTokenResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveUserToken
    */
    public function RemoveUserToken($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveUserToken = new RemoveUserToken();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveUserToken, $methodName)) {
                $RemoveUserToken->$methodName($paramValue);
            }
        }
        return $RemoveUserToken;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveUserTokenResponse
    */
    public function RemoveUserTokenResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveUserTokenResponse = new RemoveUserTokenResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveUserTokenResponse, $methodName)) {
                $RemoveUserTokenResponse->$methodName($paramValue);
            }
        }
        return $RemoveUserTokenResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveAllUsersToken
    */
    public function RemoveAllUsersToken($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveAllUsersToken = new RemoveAllUsersToken();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveAllUsersToken, $methodName)) {
                $RemoveAllUsersToken->$methodName($paramValue);
            }
        }
        return $RemoveAllUsersToken;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveAllUsersTokenResponse
    */
    public function RemoveAllUsersTokenResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveAllUsersTokenResponse = new RemoveAllUsersTokenResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveAllUsersTokenResponse, $methodName)) {
                $RemoveAllUsersTokenResponse->$methodName($paramValue);
            }
        }
        return $RemoveAllUsersTokenResponse;
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
