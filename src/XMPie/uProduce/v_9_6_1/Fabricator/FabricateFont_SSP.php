<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\CreateNewFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\CreateNewFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSecondaryPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSecondaryPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetBinarySecondaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFileInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFileInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\FontInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFileSizeInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFileSizeInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\FontSizeInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetUEditCompatibleFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetUEditCompatibleFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFontFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFontFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFamilyAndStyle;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetFontFamilyAndStyleResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontFamilyAndFace;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontFamilyAndFaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFace;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFontVersion;
use XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Font_SSP\GetSWFFontVersionResponse;


class FabricateFont_SSP
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
    * @return GetSecondaryPath
    */
    public function GetSecondaryPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSecondaryPath = new GetSecondaryPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSecondaryPath, $methodName)) {
                $GetSecondaryPath->$methodName($paramValue);
            }
        }
        return $GetSecondaryPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSecondaryPathResponse
    */
    public function GetSecondaryPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSecondaryPathResponse = new GetSecondaryPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSecondaryPathResponse, $methodName)) {
                $GetSecondaryPathResponse->$methodName($paramValue);
            }
        }
        return $GetSecondaryPathResponse;
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
    * @return GetBinarySecondaryFileStream
    */
    public function GetBinarySecondaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStream = new GetBinarySecondaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStream, $methodName)) {
                $GetBinarySecondaryFileStream->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinarySecondaryFileStreamResponse
    */
    public function GetBinarySecondaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStreamResponse = new GetBinarySecondaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStreamResponse, $methodName)) {
                $GetBinarySecondaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStreamResponse;
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
    * @return GetBinarySecondaryFileStreamChunk
    */
    public function GetBinarySecondaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStreamChunk = new GetBinarySecondaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStreamChunk, $methodName)) {
                $GetBinarySecondaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinarySecondaryFileStreamChunkResponse
    */
    public function GetBinarySecondaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStreamChunkResponse = new GetBinarySecondaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStreamChunkResponse, $methodName)) {
                $GetBinarySecondaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStreamChunkResponse;
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
    * @return GetBinarySecondaryFileStreamSize
    */
    public function GetBinarySecondaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStreamSize = new GetBinarySecondaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStreamSize, $methodName)) {
                $GetBinarySecondaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinarySecondaryFileStreamSizeResponse
    */
    public function GetBinarySecondaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinarySecondaryFileStreamSizeResponse = new GetBinarySecondaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinarySecondaryFileStreamSizeResponse, $methodName)) {
                $GetBinarySecondaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetBinarySecondaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFileInfo
    */
    public function GetFontFileInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFileInfo = new GetFontFileInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFileInfo, $methodName)) {
                $GetFontFileInfo->$methodName($paramValue);
            }
        }
        return $GetFontFileInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFileInfoResponse
    */
    public function GetFontFileInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFileInfoResponse = new GetFontFileInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFileInfoResponse, $methodName)) {
                $GetFontFileInfoResponse->$methodName($paramValue);
            }
        }
        return $GetFontFileInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return FontInfo
    */
    public function FontInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $FontInfo = new FontInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($FontInfo, $methodName)) {
                $FontInfo->$methodName($paramValue);
            }
        }
        return $FontInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFileSizeInfo
    */
    public function GetFontFileSizeInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFileSizeInfo = new GetFontFileSizeInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFileSizeInfo, $methodName)) {
                $GetFontFileSizeInfo->$methodName($paramValue);
            }
        }
        return $GetFontFileSizeInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFileSizeInfoResponse
    */
    public function GetFontFileSizeInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFileSizeInfoResponse = new GetFontFileSizeInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFileSizeInfoResponse, $methodName)) {
                $GetFontFileSizeInfoResponse->$methodName($paramValue);
            }
        }
        return $GetFontFileSizeInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return FontSizeInfo
    */
    public function FontSizeInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $FontSizeInfo = new FontSizeInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($FontSizeInfo, $methodName)) {
                $FontSizeInfo->$methodName($paramValue);
            }
        }
        return $FontSizeInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUEditCompatibleFileStream
    */
    public function GetUEditCompatibleFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUEditCompatibleFileStream = new GetUEditCompatibleFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUEditCompatibleFileStream, $methodName)) {
                $GetUEditCompatibleFileStream->$methodName($paramValue);
            }
        }
        return $GetUEditCompatibleFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUEditCompatibleFileStreamResponse
    */
    public function GetUEditCompatibleFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUEditCompatibleFileStreamResponse = new GetUEditCompatibleFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUEditCompatibleFileStreamResponse, $methodName)) {
                $GetUEditCompatibleFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetUEditCompatibleFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFontFileStream
    */
    public function GetSWFFontFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFontFileStream = new GetSWFFontFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFontFileStream, $methodName)) {
                $GetSWFFontFileStream->$methodName($paramValue);
            }
        }
        return $GetSWFFontFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFontFileStreamResponse
    */
    public function GetSWFFontFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFontFileStreamResponse = new GetSWFFontFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFontFileStreamResponse, $methodName)) {
                $GetSWFFontFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFontFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFileStream
    */
    public function GetSWFFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFileStream = new GetSWFFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFileStream, $methodName)) {
                $GetSWFFileStream->$methodName($paramValue);
            }
        }
        return $GetSWFFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFileStreamResponse
    */
    public function GetSWFFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFileStreamResponse = new GetSWFFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFileStreamResponse, $methodName)) {
                $GetSWFFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFamilyAndStyle
    */
    public function GetFontFamilyAndStyle($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFamilyAndStyle = new GetFontFamilyAndStyle();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFamilyAndStyle, $methodName)) {
                $GetFontFamilyAndStyle->$methodName($paramValue);
            }
        }
        return $GetFontFamilyAndStyle;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontFamilyAndStyleResponse
    */
    public function GetFontFamilyAndStyleResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontFamilyAndStyleResponse = new GetFontFamilyAndStyleResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontFamilyAndStyleResponse, $methodName)) {
                $GetFontFamilyAndStyleResponse->$methodName($paramValue);
            }
        }
        return $GetFontFamilyAndStyleResponse;
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
    * @return GetSWFFullNameFontStream
    */
    public function GetSWFFullNameFontStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontStream = new GetSWFFullNameFontStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontStream, $methodName)) {
                $GetSWFFullNameFontStream->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFullNameFontStreamResponse
    */
    public function GetSWFFullNameFontStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontStreamResponse = new GetSWFFullNameFontStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontStreamResponse, $methodName)) {
                $GetSWFFullNameFontStreamResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFullNameFontFamilyAndFace
    */
    public function GetSWFFullNameFontFamilyAndFace($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontFamilyAndFace = new GetSWFFullNameFontFamilyAndFace();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontFamilyAndFace, $methodName)) {
                $GetSWFFullNameFontFamilyAndFace->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontFamilyAndFace;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFullNameFontFamilyAndFaceResponse
    */
    public function GetSWFFullNameFontFamilyAndFaceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontFamilyAndFaceResponse = new GetSWFFullNameFontFamilyAndFaceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontFamilyAndFaceResponse, $methodName)) {
                $GetSWFFullNameFontFamilyAndFaceResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontFamilyAndFaceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFullNameFontStreamWithFamilyAndFace
    */
    public function GetSWFFullNameFontStreamWithFamilyAndFace($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontStreamWithFamilyAndFace = new GetSWFFullNameFontStreamWithFamilyAndFace();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontStreamWithFamilyAndFace, $methodName)) {
                $GetSWFFullNameFontStreamWithFamilyAndFace->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontStreamWithFamilyAndFace;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFullNameFontStreamWithFamilyAndFaceResponse
    */
    public function GetSWFFullNameFontStreamWithFamilyAndFaceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFullNameFontStreamWithFamilyAndFaceResponse = new GetSWFFullNameFontStreamWithFamilyAndFaceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFullNameFontStreamWithFamilyAndFaceResponse, $methodName)) {
                $GetSWFFullNameFontStreamWithFamilyAndFaceResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFullNameFontStreamWithFamilyAndFaceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFontVersion
    */
    public function GetSWFFontVersion($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFontVersion = new GetSWFFontVersion();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFontVersion, $methodName)) {
                $GetSWFFontVersion->$methodName($paramValue);
            }
        }
        return $GetSWFFontVersion;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSWFFontVersionResponse
    */
    public function GetSWFFontVersionResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSWFFontVersionResponse = new GetSWFFontVersionResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSWFFontVersionResponse, $methodName)) {
                $GetSWFFontVersionResponse->$methodName($paramValue);
            }
        }
        return $GetSWFFontVersionResponse;
    }



}

?>
