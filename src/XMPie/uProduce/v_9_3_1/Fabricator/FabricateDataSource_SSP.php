<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CreateNewFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CreateNewFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Connection;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ReplaceFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ReplaceFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPlan;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPlanResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetConnectionInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetConnectionInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsDownloadable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsDownloadableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\HostTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\HostTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\HostAllTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\HostAllTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetTablesNamesForPort;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetTablesNamesForPortResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetTablesNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetTablesNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsPrimaryTable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsPrimaryTableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsPrimaryFieldUnique;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IsPrimaryFieldUniqueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ConvertToPrimaryTable;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ConvertToPrimaryTableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Report;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFieldNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFieldNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ExportHostedTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ExportHostedTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ExportAllHostedTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ExportAllHostedTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTableID;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTableIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTables;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTablesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTablesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTablesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetRecipientTablesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFirstRecipientFields;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\GetFirstRecipientFieldsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CloneResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\DataSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\IDMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP\CloneCustom;


class FabricateDataSource_SSP
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
    * @return CreateNewFromZip
    */
    public function CreateNewFromZip($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromZip = new CreateNewFromZip();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromZip, $methodName)) {
                $CreateNewFromZip->$methodName($paramValue);
            }
        }
        return $CreateNewFromZip;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromZipResponse
    */
    public function CreateNewFromZipResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromZipResponse = new CreateNewFromZipResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromZipResponse, $methodName)) {
                $CreateNewFromZipResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromZipResponse;
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
    * @return ReplaceFromZip
    */
    public function ReplaceFromZip($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromZip = new ReplaceFromZip();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromZip, $methodName)) {
                $ReplaceFromZip->$methodName($paramValue);
            }
        }
        return $ReplaceFromZip;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromZipResponse
    */
    public function ReplaceFromZipResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromZipResponse = new ReplaceFromZipResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromZipResponse, $methodName)) {
                $ReplaceFromZipResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromZipResponse;
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
    * @return GetPlan
    */
    public function GetPlan($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlan = new GetPlan();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlan, $methodName)) {
                $GetPlan->$methodName($paramValue);
            }
        }
        return $GetPlan;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanResponse
    */
    public function GetPlanResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanResponse = new GetPlanResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanResponse, $methodName)) {
                $GetPlanResponse->$methodName($paramValue);
            }
        }
        return $GetPlanResponse;
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
    * @return GetConnectionInfo
    */
    public function GetConnectionInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConnectionInfo = new GetConnectionInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConnectionInfo, $methodName)) {
                $GetConnectionInfo->$methodName($paramValue);
            }
        }
        return $GetConnectionInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConnectionInfoResponse
    */
    public function GetConnectionInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConnectionInfoResponse = new GetConnectionInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConnectionInfoResponse, $methodName)) {
                $GetConnectionInfoResponse->$methodName($paramValue);
            }
        }
        return $GetConnectionInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDownloadable
    */
    public function IsDownloadable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDownloadable = new IsDownloadable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDownloadable, $methodName)) {
                $IsDownloadable->$methodName($paramValue);
            }
        }
        return $IsDownloadable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsDownloadableResponse
    */
    public function IsDownloadableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsDownloadableResponse = new IsDownloadableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsDownloadableResponse, $methodName)) {
                $IsDownloadableResponse->$methodName($paramValue);
            }
        }
        return $IsDownloadableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPath
    */
    public function GetPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPath = new GetPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPath, $methodName)) {
                $GetPath->$methodName($paramValue);
            }
        }
        return $GetPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathResponse
    */
    public function GetPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathResponse = new GetPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathResponse, $methodName)) {
                $GetPathResponse->$methodName($paramValue);
            }
        }
        return $GetPathResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStream
    */
    public function GetBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStream = new GetBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStream, $methodName)) {
                $GetBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamResponse
    */
    public function GetBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamResponse = new GetBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamResponse, $methodName)) {
                $GetBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamChunk
    */
    public function GetBinaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunk = new GetBinaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunk, $methodName)) {
                $GetBinaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamChunkResponse
    */
    public function GetBinaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunkResponse = new GetBinaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunkResponse, $methodName)) {
                $GetBinaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamSize
    */
    public function GetBinaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSize = new GetBinaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSize, $methodName)) {
                $GetBinaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamSizeResponse
    */
    public function GetBinaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSizeResponse = new GetBinaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSizeResponse, $methodName)) {
                $GetBinaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDownloadURL
    */
    public function GetDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDownloadURL = new GetDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDownloadURL, $methodName)) {
                $GetDownloadURL->$methodName($paramValue);
            }
        }
        return $GetDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDownloadURLResponse
    */
    public function GetDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDownloadURLResponse = new GetDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDownloadURLResponse, $methodName)) {
                $GetDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetDownloadURLResponse;
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
    * @return HostTables
    */
    public function HostTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $HostTables = new HostTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($HostTables, $methodName)) {
                $HostTables->$methodName($paramValue);
            }
        }
        return $HostTables;
    }


   /**
    * @param array $paramAutoSet
    * @return HostTablesResponse
    */
    public function HostTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $HostTablesResponse = new HostTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($HostTablesResponse, $methodName)) {
                $HostTablesResponse->$methodName($paramValue);
            }
        }
        return $HostTablesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return HostAllTables
    */
    public function HostAllTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $HostAllTables = new HostAllTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($HostAllTables, $methodName)) {
                $HostAllTables->$methodName($paramValue);
            }
        }
        return $HostAllTables;
    }


   /**
    * @param array $paramAutoSet
    * @return HostAllTablesResponse
    */
    public function HostAllTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $HostAllTablesResponse = new HostAllTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($HostAllTablesResponse, $methodName)) {
                $HostAllTablesResponse->$methodName($paramValue);
            }
        }
        return $HostAllTablesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesNamesForPort
    */
    public function GetTablesNamesForPort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesNamesForPort = new GetTablesNamesForPort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesNamesForPort, $methodName)) {
                $GetTablesNamesForPort->$methodName($paramValue);
            }
        }
        return $GetTablesNamesForPort;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesNamesForPortResponse
    */
    public function GetTablesNamesForPortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesNamesForPortResponse = new GetTablesNamesForPortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesNamesForPortResponse, $methodName)) {
                $GetTablesNamesForPortResponse->$methodName($paramValue);
            }
        }
        return $GetTablesNamesForPortResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesNames
    */
    public function GetTablesNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesNames = new GetTablesNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesNames, $methodName)) {
                $GetTablesNames->$methodName($paramValue);
            }
        }
        return $GetTablesNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesNamesResponse
    */
    public function GetTablesNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesNamesResponse = new GetTablesNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesNamesResponse, $methodName)) {
                $GetTablesNamesResponse->$methodName($paramValue);
            }
        }
        return $GetTablesNamesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPrimaryTable
    */
    public function IsPrimaryTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPrimaryTable = new IsPrimaryTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPrimaryTable, $methodName)) {
                $IsPrimaryTable->$methodName($paramValue);
            }
        }
        return $IsPrimaryTable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPrimaryTableResponse
    */
    public function IsPrimaryTableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPrimaryTableResponse = new IsPrimaryTableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPrimaryTableResponse, $methodName)) {
                $IsPrimaryTableResponse->$methodName($paramValue);
            }
        }
        return $IsPrimaryTableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPrimaryFieldUnique
    */
    public function IsPrimaryFieldUnique($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPrimaryFieldUnique = new IsPrimaryFieldUnique();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPrimaryFieldUnique, $methodName)) {
                $IsPrimaryFieldUnique->$methodName($paramValue);
            }
        }
        return $IsPrimaryFieldUnique;
    }


   /**
    * @param array $paramAutoSet
    * @return IsPrimaryFieldUniqueResponse
    */
    public function IsPrimaryFieldUniqueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsPrimaryFieldUniqueResponse = new IsPrimaryFieldUniqueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsPrimaryFieldUniqueResponse, $methodName)) {
                $IsPrimaryFieldUniqueResponse->$methodName($paramValue);
            }
        }
        return $IsPrimaryFieldUniqueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertToPrimaryTable
    */
    public function ConvertToPrimaryTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToPrimaryTable = new ConvertToPrimaryTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToPrimaryTable, $methodName)) {
                $ConvertToPrimaryTable->$methodName($paramValue);
            }
        }
        return $ConvertToPrimaryTable;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertToPrimaryTableResponse
    */
    public function ConvertToPrimaryTableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToPrimaryTableResponse = new ConvertToPrimaryTableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToPrimaryTableResponse, $methodName)) {
                $ConvertToPrimaryTableResponse->$methodName($paramValue);
            }
        }
        return $ConvertToPrimaryTableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Report
    */
    public function Report($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Report = new Report();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Report, $methodName)) {
                $Report->$methodName($paramValue);
            }
        }
        return $Report;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfReportMessage
    */
    public function ArrayOfReportMessage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfReportMessage = new ArrayOfReportMessage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfReportMessage, $methodName)) {
                $ArrayOfReportMessage->$methodName($paramValue);
            }
        }
        return $ArrayOfReportMessage;
    }


   /**
    * @param array $paramAutoSet
    * @return ReportMessage
    */
    public function ReportMessage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReportMessage = new ReportMessage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReportMessage, $methodName)) {
                $ReportMessage->$methodName($paramValue);
            }
        }
        return $ReportMessage;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFieldNames
    */
    public function GetFieldNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFieldNames = new GetFieldNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFieldNames, $methodName)) {
                $GetFieldNames->$methodName($paramValue);
            }
        }
        return $GetFieldNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFieldNamesResponse
    */
    public function GetFieldNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFieldNamesResponse = new GetFieldNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFieldNamesResponse, $methodName)) {
                $GetFieldNamesResponse->$methodName($paramValue);
            }
        }
        return $GetFieldNamesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportHostedTables
    */
    public function ExportHostedTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportHostedTables = new ExportHostedTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportHostedTables, $methodName)) {
                $ExportHostedTables->$methodName($paramValue);
            }
        }
        return $ExportHostedTables;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportHostedTablesResponse
    */
    public function ExportHostedTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportHostedTablesResponse = new ExportHostedTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportHostedTablesResponse, $methodName)) {
                $ExportHostedTablesResponse->$methodName($paramValue);
            }
        }
        return $ExportHostedTablesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportAllHostedTables
    */
    public function ExportAllHostedTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportAllHostedTables = new ExportAllHostedTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportAllHostedTables, $methodName)) {
                $ExportAllHostedTables->$methodName($paramValue);
            }
        }
        return $ExportAllHostedTables;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportAllHostedTablesResponse
    */
    public function ExportAllHostedTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportAllHostedTablesResponse = new ExportAllHostedTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportAllHostedTablesResponse, $methodName)) {
                $ExportAllHostedTablesResponse->$methodName($paramValue);
            }
        }
        return $ExportAllHostedTablesResponse;
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
    * @return GetRecipientTableID
    */
    public function GetRecipientTableID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTableID = new GetRecipientTableID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTableID, $methodName)) {
                $GetRecipientTableID->$methodName($paramValue);
            }
        }
        return $GetRecipientTableID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTableIDResponse
    */
    public function GetRecipientTableIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTableIDResponse = new GetRecipientTableIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTableIDResponse, $methodName)) {
                $GetRecipientTableIDResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientTableIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTables
    */
    public function GetRecipientTables($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTables = new GetRecipientTables();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTables, $methodName)) {
                $GetRecipientTables->$methodName($paramValue);
            }
        }
        return $GetRecipientTables;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTablesResponse
    */
    public function GetRecipientTablesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTablesResponse = new GetRecipientTablesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTablesResponse, $methodName)) {
                $GetRecipientTablesResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientTablesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTablesDataSet
    */
    public function GetRecipientTablesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTablesDataSet = new GetRecipientTablesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTablesDataSet, $methodName)) {
                $GetRecipientTablesDataSet->$methodName($paramValue);
            }
        }
        return $GetRecipientTablesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTablesDataSetResponse
    */
    public function GetRecipientTablesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTablesDataSetResponse = new GetRecipientTablesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTablesDataSetResponse, $methodName)) {
                $GetRecipientTablesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientTablesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientTablesDataSetResult
    */
    public function GetRecipientTablesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientTablesDataSetResult = new GetRecipientTablesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientTablesDataSetResult, $methodName)) {
                $GetRecipientTablesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetRecipientTablesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstRecipientFields
    */
    public function GetFirstRecipientFields($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstRecipientFields = new GetFirstRecipientFields();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstRecipientFields, $methodName)) {
                $GetFirstRecipientFields->$methodName($paramValue);
            }
        }
        return $GetFirstRecipientFields;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFirstRecipientFieldsResponse
    */
    public function GetFirstRecipientFieldsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFirstRecipientFieldsResponse = new GetFirstRecipientFieldsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFirstRecipientFieldsResponse, $methodName)) {
                $GetFirstRecipientFieldsResponse->$methodName($paramValue);
            }
        }
        return $GetFirstRecipientFieldsResponse;
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
    * @return DataSourceMapping
    */
    public function DataSourceMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DataSourceMapping = new DataSourceMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DataSourceMapping, $methodName)) {
                $DataSourceMapping->$methodName($paramValue);
            }
        }
        return $DataSourceMapping;
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


   /**
    * @param array $paramAutoSet
    * @return CloneDataSource
    */
    public function CloneDataSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneDataSource = new CloneDataSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneDataSource, $methodName)) {
                $CloneDataSource->$methodName($paramValue);
            }
        }
        return $CloneDataSource;
    }



}

?>
