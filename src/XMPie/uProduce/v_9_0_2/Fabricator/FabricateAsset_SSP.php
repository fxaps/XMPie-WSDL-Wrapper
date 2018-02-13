<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateNewFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateNewFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetAssetSource;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetAssetSourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateFileToTempStorage;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateFileToTempStorageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetFileName;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetFileNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\IsThumbnailAvailable;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\IsThumbnailAvailableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnail;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateThumbnailToTempStorage;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\CreateThumbnailToTempStorageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetIDResponse;


class FabricateAsset_SSP
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
    * @return GetAssetSource
    */
    public function GetAssetSource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSource = new GetAssetSource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSource, $methodName)) {
                $GetAssetSource->$methodName($paramValue);
            }
        }
        return $GetAssetSource;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceResponse
    */
    public function GetAssetSourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceResponse = new GetAssetSourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceResponse, $methodName)) {
                $GetAssetSourceResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceResponse;
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
    * @return CreateFileToTempStorage
    */
    public function CreateFileToTempStorage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFileToTempStorage = new CreateFileToTempStorage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFileToTempStorage, $methodName)) {
                $CreateFileToTempStorage->$methodName($paramValue);
            }
        }
        return $CreateFileToTempStorage;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFileToTempStorageResponse
    */
    public function CreateFileToTempStorageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFileToTempStorageResponse = new CreateFileToTempStorageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFileToTempStorageResponse, $methodName)) {
                $CreateFileToTempStorageResponse->$methodName($paramValue);
            }
        }
        return $CreateFileToTempStorageResponse;
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
    * @return GetFileName
    */
    public function GetFileName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileName = new GetFileName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileName, $methodName)) {
                $GetFileName->$methodName($paramValue);
            }
        }
        return $GetFileName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFileNameResponse
    */
    public function GetFileNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFileNameResponse = new GetFileNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFileNameResponse, $methodName)) {
                $GetFileNameResponse->$methodName($paramValue);
            }
        }
        return $GetFileNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsThumbnailAvailable
    */
    public function IsThumbnailAvailable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsThumbnailAvailable = new IsThumbnailAvailable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsThumbnailAvailable, $methodName)) {
                $IsThumbnailAvailable->$methodName($paramValue);
            }
        }
        return $IsThumbnailAvailable;
    }


   /**
    * @param array $paramAutoSet
    * @return IsThumbnailAvailableResponse
    */
    public function IsThumbnailAvailableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsThumbnailAvailableResponse = new IsThumbnailAvailableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsThumbnailAvailableResponse, $methodName)) {
                $IsThumbnailAvailableResponse->$methodName($paramValue);
            }
        }
        return $IsThumbnailAvailableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnail
    */
    public function GetThumbnail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnail = new GetThumbnail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnail, $methodName)) {
                $GetThumbnail->$methodName($paramValue);
            }
        }
        return $GetThumbnail;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailResponse
    */
    public function GetThumbnailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailResponse = new GetThumbnailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailResponse, $methodName)) {
                $GetThumbnailResponse->$methodName($paramValue);
            }
        }
        return $GetThumbnailResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailBinaryFileStream
    */
    public function GetThumbnailBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailBinaryFileStream = new GetThumbnailBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailBinaryFileStream, $methodName)) {
                $GetThumbnailBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetThumbnailBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailBinaryFileStreamResponse
    */
    public function GetThumbnailBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailBinaryFileStreamResponse = new GetThumbnailBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailBinaryFileStreamResponse, $methodName)) {
                $GetThumbnailBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetThumbnailBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateThumbnailToTempStorage
    */
    public function CreateThumbnailToTempStorage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateThumbnailToTempStorage = new CreateThumbnailToTempStorage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateThumbnailToTempStorage, $methodName)) {
                $CreateThumbnailToTempStorage->$methodName($paramValue);
            }
        }
        return $CreateThumbnailToTempStorage;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateThumbnailToTempStorageResponse
    */
    public function CreateThumbnailToTempStorageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateThumbnailToTempStorageResponse = new CreateThumbnailToTempStorageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateThumbnailToTempStorageResponse, $methodName)) {
                $CreateThumbnailToTempStorageResponse->$methodName($paramValue);
            }
        }
        return $CreateThumbnailToTempStorageResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailDownloadURL
    */
    public function GetThumbnailDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailDownloadURL = new GetThumbnailDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailDownloadURL, $methodName)) {
                $GetThumbnailDownloadURL->$methodName($paramValue);
            }
        }
        return $GetThumbnailDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailDownloadURLResponse
    */
    public function GetThumbnailDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailDownloadURLResponse = new GetThumbnailDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailDownloadURLResponse, $methodName)) {
                $GetThumbnailDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetThumbnailDownloadURLResponse;
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



}

?>
