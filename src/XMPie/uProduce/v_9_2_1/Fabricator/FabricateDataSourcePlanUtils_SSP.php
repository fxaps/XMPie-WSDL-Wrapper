<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivity;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\Connection;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCount;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\RecipientsInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetRecipientsCountByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipating;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipatingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipatingByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipatingByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTable;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTableByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTableByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchema;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceType;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesForHosting;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesForHostingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfoForHosting;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfoForHostingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsTableReadyForPort;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsTableReadyForPortResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ConvertTableForPort;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\ConvertTableForPortResponse;


class FabricateDataSourcePlanUtils_SSP
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
    * @return TestDataSourceConnectivity
    */
    public function TestDataSourceConnectivity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestDataSourceConnectivity = new TestDataSourceConnectivity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestDataSourceConnectivity, $methodName)) {
                $TestDataSourceConnectivity->$methodName($paramValue);
            }
        }
        return $TestDataSourceConnectivity;
    }


   /**
    * @param array $paramAutoSet
    * @return TestDataSourceConnectivityResponse
    */
    public function TestDataSourceConnectivityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestDataSourceConnectivityResponse = new TestDataSourceConnectivityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestDataSourceConnectivityResponse, $methodName)) {
                $TestDataSourceConnectivityResponse->$methodName($paramValue);
            }
        }
        return $TestDataSourceConnectivityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return TestDataSourceConnectivityByInfo
    */
    public function TestDataSourceConnectivityByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestDataSourceConnectivityByInfo = new TestDataSourceConnectivityByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestDataSourceConnectivityByInfo, $methodName)) {
                $TestDataSourceConnectivityByInfo->$methodName($paramValue);
            }
        }
        return $TestDataSourceConnectivityByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return Connection
    */
    public function Connection($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Connection = new Connection();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Connection, $methodName)) {
                $Connection->$methodName($paramValue);
            }
        }
        return $Connection;
    }


   /**
    * @param array $paramAutoSet
    * @return TestDataSourceConnectivityByInfoResponse
    */
    public function TestDataSourceConnectivityByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestDataSourceConnectivityByInfoResponse = new TestDataSourceConnectivityByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestDataSourceConnectivityByInfoResponse, $methodName)) {
                $TestDataSourceConnectivityByInfoResponse->$methodName($paramValue);
            }
        }
        return $TestDataSourceConnectivityByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCount
    */
    public function GetRecipientsCount($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCount = new GetRecipientsCount();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCount, $methodName)) {
                $GetRecipientsCount->$methodName($paramValue);
            }
        }
        return $GetRecipientsCount;
    }


   /**
    * @param array $paramAutoSet
    * @return RecipientsInfo
    */
    public function RecipientsInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecipientsInfo = new RecipientsInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecipientsInfo, $methodName)) {
                $RecipientsInfo->$methodName($paramValue);
            }
        }
        return $RecipientsInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCountResponse
    */
    public function GetRecipientsCountResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCountResponse = new GetRecipientsCountResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCountResponse, $methodName)) {
                $GetRecipientsCountResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientsCountResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCountByInfo
    */
    public function GetRecipientsCountByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCountByInfo = new GetRecipientsCountByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCountByInfo, $methodName)) {
                $GetRecipientsCountByInfo->$methodName($paramValue);
            }
        }
        return $GetRecipientsCountByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCountByInfoResponse
    */
    public function GetRecipientsCountByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCountByInfoResponse = new GetRecipientsCountByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCountByInfoResponse, $methodName)) {
                $GetRecipientsCountByInfoResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientsCountByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientParticipating
    */
    public function IsRecipientParticipating($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientParticipating = new IsRecipientParticipating();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientParticipating, $methodName)) {
                $IsRecipientParticipating->$methodName($paramValue);
            }
        }
        return $IsRecipientParticipating;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientParticipatingResponse
    */
    public function IsRecipientParticipatingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientParticipatingResponse = new IsRecipientParticipatingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientParticipatingResponse, $methodName)) {
                $IsRecipientParticipatingResponse->$methodName($paramValue);
            }
        }
        return $IsRecipientParticipatingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientParticipatingByInfo
    */
    public function IsRecipientParticipatingByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientParticipatingByInfo = new IsRecipientParticipatingByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientParticipatingByInfo, $methodName)) {
                $IsRecipientParticipatingByInfo->$methodName($paramValue);
            }
        }
        return $IsRecipientParticipatingByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientParticipatingByInfoResponse
    */
    public function IsRecipientParticipatingByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientParticipatingByInfoResponse = new IsRecipientParticipatingByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientParticipatingByInfoResponse, $methodName)) {
                $IsRecipientParticipatingByInfoResponse->$methodName($paramValue);
            }
        }
        return $IsRecipientParticipatingByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTables
    */
    public function GetCompatibleTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTables = new GetCompatibleTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTables, $methodName)) {
                $GetCompatibleTables->$methodName($paramValue);
            }
        }
        return $GetCompatibleTables;
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
    * @return GetCompatibleTablesResponse
    */
    public function GetCompatibleTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesResponse = new GetCompatibleTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesResponse, $methodName)) {
                $GetCompatibleTablesResponse->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesResponse;
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
    * @return GetCompatibleTablesByInfo
    */
    public function GetCompatibleTablesByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesByInfo = new GetCompatibleTablesByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesByInfo, $methodName)) {
                $GetCompatibleTablesByInfo->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTablesByInfoResponse
    */
    public function GetCompatibleTablesByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesByInfoResponse = new GetCompatibleTablesByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesByInfoResponse, $methodName)) {
                $GetCompatibleTablesByInfoResponse->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstCompatibleTable
    */
    public function GetFirstCompatibleTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstCompatibleTable = new GetFirstCompatibleTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstCompatibleTable, $methodName)) {
                $GetFirstCompatibleTable->$methodName($paramValue);
            }
        }
        return $GetFirstCompatibleTable;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstCompatibleTableResponse
    */
    public function GetFirstCompatibleTableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstCompatibleTableResponse = new GetFirstCompatibleTableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstCompatibleTableResponse, $methodName)) {
                $GetFirstCompatibleTableResponse->$methodName($paramValue);
            }
        }
        return $GetFirstCompatibleTableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstCompatibleTableByInfo
    */
    public function GetFirstCompatibleTableByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstCompatibleTableByInfo = new GetFirstCompatibleTableByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstCompatibleTableByInfo, $methodName)) {
                $GetFirstCompatibleTableByInfo->$methodName($paramValue);
            }
        }
        return $GetFirstCompatibleTableByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstCompatibleTableByInfoResponse
    */
    public function GetFirstCompatibleTableByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstCompatibleTableByInfoResponse = new GetFirstCompatibleTableByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstCompatibleTableByInfoResponse, $methodName)) {
                $GetFirstCompatibleTableByInfoResponse->$methodName($paramValue);
            }
        }
        return $GetFirstCompatibleTableByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDataSourceCompatibleWithSchema
    */
    public function IsDataSourceCompatibleWithSchema($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDataSourceCompatibleWithSchema = new IsDataSourceCompatibleWithSchema();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDataSourceCompatibleWithSchema, $methodName)) {
                $IsDataSourceCompatibleWithSchema->$methodName($paramValue);
            }
        }
        return $IsDataSourceCompatibleWithSchema;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDataSourceCompatibleWithSchemaResponse
    */
    public function IsDataSourceCompatibleWithSchemaResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDataSourceCompatibleWithSchemaResponse = new IsDataSourceCompatibleWithSchemaResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDataSourceCompatibleWithSchemaResponse, $methodName)) {
                $IsDataSourceCompatibleWithSchemaResponse->$methodName($paramValue);
            }
        }
        return $IsDataSourceCompatibleWithSchemaResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDataSourceCompatibleWithSchemaByInfo
    */
    public function IsDataSourceCompatibleWithSchemaByInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDataSourceCompatibleWithSchemaByInfo = new IsDataSourceCompatibleWithSchemaByInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDataSourceCompatibleWithSchemaByInfo, $methodName)) {
                $IsDataSourceCompatibleWithSchemaByInfo->$methodName($paramValue);
            }
        }
        return $IsDataSourceCompatibleWithSchemaByInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDataSourceCompatibleWithSchemaByInfoResponse
    */
    public function IsDataSourceCompatibleWithSchemaByInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDataSourceCompatibleWithSchemaByInfoResponse = new IsDataSourceCompatibleWithSchemaByInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDataSourceCompatibleWithSchemaByInfoResponse, $methodName)) {
                $IsDataSourceCompatibleWithSchemaByInfoResponse->$methodName($paramValue);
            }
        }
        return $IsDataSourceCompatibleWithSchemaByInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypes
    */
    public function GetDataSourceTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypes = new GetDataSourceTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypes, $methodName)) {
                $GetDataSourceTypes->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypesResponse
    */
    public function GetDataSourceTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypesResponse = new GetDataSourceTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypesResponse, $methodName)) {
                $GetDataSourceTypesResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypesResult
    */
    public function GetDataSourceTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypesResult = new GetDataSourceTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypesResult, $methodName)) {
                $GetDataSourceTypesResult->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypesXMPTblDataSet
    */
    public function GetDataSourceTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypesXMPTblDataSet = new GetDataSourceTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypesXMPTblDataSet, $methodName)) {
                $GetDataSourceTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypesXMPTblDataSetResponse
    */
    public function GetDataSourceTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypesXMPTblDataSetResponse = new GetDataSourceTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypesXMPTblDataSetResponse, $methodName)) {
                $GetDataSourceTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypesXMPTblDataSetResponse;
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
    * @return GetDataSourceType
    */
    public function GetDataSourceType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceType = new GetDataSourceType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceType, $methodName)) {
                $GetDataSourceType->$methodName($paramValue);
            }
        }
        return $GetDataSourceType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypeResponse
    */
    public function GetDataSourceTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypeResponse = new GetDataSourceTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypeResponse, $methodName)) {
                $GetDataSourceTypeResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypeResult
    */
    public function GetDataSourceTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypeResult = new GetDataSourceTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypeResult, $methodName)) {
                $GetDataSourceTypeResult->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypeXMPTblDataSet
    */
    public function GetDataSourceTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypeXMPTblDataSet = new GetDataSourceTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypeXMPTblDataSet, $methodName)) {
                $GetDataSourceTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceTypeXMPTblDataSetResponse
    */
    public function GetDataSourceTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceTypeXMPTblDataSetResponse = new GetDataSourceTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceTypeXMPTblDataSetResponse, $methodName)) {
                $GetDataSourceTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourceTypeXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTablesForHosting
    */
    public function GetCompatibleTablesForHosting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesForHosting = new GetCompatibleTablesForHosting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesForHosting, $methodName)) {
                $GetCompatibleTablesForHosting->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesForHosting;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTablesForHostingResponse
    */
    public function GetCompatibleTablesForHostingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesForHostingResponse = new GetCompatibleTablesForHostingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesForHostingResponse, $methodName)) {
                $GetCompatibleTablesForHostingResponse->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesForHostingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTablesByInfoForHosting
    */
    public function GetCompatibleTablesByInfoForHosting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesByInfoForHosting = new GetCompatibleTablesByInfoForHosting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesByInfoForHosting, $methodName)) {
                $GetCompatibleTablesByInfoForHosting->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesByInfoForHosting;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCompatibleTablesByInfoForHostingResponse
    */
    public function GetCompatibleTablesByInfoForHostingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCompatibleTablesByInfoForHostingResponse = new GetCompatibleTablesByInfoForHostingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCompatibleTablesByInfoForHostingResponse, $methodName)) {
                $GetCompatibleTablesByInfoForHostingResponse->$methodName($paramValue);
            }
        }
        return $GetCompatibleTablesByInfoForHostingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTableReadyForPort
    */
    public function IsTableReadyForPort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTableReadyForPort = new IsTableReadyForPort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTableReadyForPort, $methodName)) {
                $IsTableReadyForPort->$methodName($paramValue);
            }
        }
        return $IsTableReadyForPort;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTableReadyForPortResponse
    */
    public function IsTableReadyForPortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTableReadyForPortResponse = new IsTableReadyForPortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTableReadyForPortResponse, $methodName)) {
                $IsTableReadyForPortResponse->$methodName($paramValue);
            }
        }
        return $IsTableReadyForPortResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertTableForPort
    */
    public function ConvertTableForPort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertTableForPort = new ConvertTableForPort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertTableForPort, $methodName)) {
                $ConvertTableForPort->$methodName($paramValue);
            }
        }
        return $ConvertTableForPort;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertTableForPortResponse
    */
    public function ConvertTableForPortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertTableForPortResponse = new ConvertTableForPortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertTableForPortResponse, $methodName)) {
                $ConvertTableForPortResponse->$methodName($paramValue);
            }
        }
        return $ConvertTableForPortResponse;
    }



}

?>
