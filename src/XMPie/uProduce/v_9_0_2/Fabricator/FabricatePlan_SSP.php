<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetLastJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetLastJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ConvertToWebReady;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ConvertToWebReadyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\Report;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ArrayOfReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\ReportMessage;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\CloneCustom;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\CloneResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\PlanMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Plan_SSP\IDMapping;


class FabricatePlan_SSP
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
    * @return GetModificationDate
    */
    public function GetModificationDate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetModificationDate = new GetModificationDate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetModificationDate, $methodName)) {
                $GetModificationDate->$methodName($paramValue);
            }
        }
        return $GetModificationDate;
    }


   /**
    * @param array $paramAutoSet
    * @return GetModificationDateResponse
    */
    public function GetModificationDateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetModificationDateResponse = new GetModificationDateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetModificationDateResponse, $methodName)) {
                $GetModificationDateResponse->$methodName($paramValue);
            }
        }
        return $GetModificationDateResponse;
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
    * @return GetLastJob
    */
    public function GetLastJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLastJob = new GetLastJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLastJob, $methodName)) {
                $GetLastJob->$methodName($paramValue);
            }
        }
        return $GetLastJob;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLastJobResponse
    */
    public function GetLastJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLastJobResponse = new GetLastJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLastJobResponse, $methodName)) {
                $GetLastJobResponse->$methodName($paramValue);
            }
        }
        return $GetLastJobResponse;
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
    * @return ConvertToWebReady
    */
    public function ConvertToWebReady($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToWebReady = new ConvertToWebReady();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToWebReady, $methodName)) {
                $ConvertToWebReady->$methodName($paramValue);
            }
        }
        return $ConvertToWebReady;
    }


   /**
    * @param array $paramAutoSet
    * @return ConvertToWebReadyResponse
    */
    public function ConvertToWebReadyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ConvertToWebReadyResponse = new ConvertToWebReadyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ConvertToWebReadyResponse, $methodName)) {
                $ConvertToWebReadyResponse->$methodName($paramValue);
            }
        }
        return $ConvertToWebReadyResponse;
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
    * @return PlanMapping
    */
    public function PlanMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanMapping = new PlanMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanMapping, $methodName)) {
                $PlanMapping->$methodName($paramValue);
            }
        }
        return $PlanMapping;
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
