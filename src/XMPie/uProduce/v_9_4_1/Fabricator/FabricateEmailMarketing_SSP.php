<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetLastJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetLastJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Send;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMail;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\EmailHeaderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfEmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\EmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfSendEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMailByPopulation;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMailByPopulationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMailByRun;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendMailByRunResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetEmailHeader;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetEmailHeaderResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmail;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulation;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailByRun;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailByRunResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentId;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulation;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByPopulationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByRun;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByRunResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocument;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulation;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRun;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByRunResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetPreviewEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetPreviewEmailResultResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Suspend;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SuspendResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Resume;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ResumeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsTracked;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsTrackedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsReadyForBatch;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsReadyForBatchResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsReadyForOnDemand;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsReadyForOnDemandResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetCorrespondingJobID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetCorrespondingJobIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendSplitted;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SendSplittedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Test;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\TestResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Preflight;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreflightResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreflightSplitted;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\PreflightSplittedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\EmailMarketing_SSP\DeleteSettingsResponse;


class FabricateEmailMarketing_SSP
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
    * @return Send
    */
    public function Send($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Send = new Send();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Send, $methodName)) {
                $Send->$methodName($paramValue);
            }
        }
        return $Send;
    }


   /**
    * @param array $paramAutoSet
    * @return SendResponse
    */
    public function SendResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendResponse = new SendResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendResponse, $methodName)) {
                $SendResponse->$methodName($paramValue);
            }
        }
        return $SendResponse;
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
    * @return ArrayOfSendEmailResult
    */
    public function ArrayOfSendEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfSendEmailResult = new ArrayOfSendEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfSendEmailResult, $methodName)) {
                $ArrayOfSendEmailResult->$methodName($paramValue);
            }
        }
        return $ArrayOfSendEmailResult;
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
    * @return SendMailByPopulation
    */
    public function SendMailByPopulation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByPopulation = new SendMailByPopulation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByPopulation, $methodName)) {
                $SendMailByPopulation->$methodName($paramValue);
            }
        }
        return $SendMailByPopulation;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailByPopulationResponse
    */
    public function SendMailByPopulationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByPopulationResponse = new SendMailByPopulationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByPopulationResponse, $methodName)) {
                $SendMailByPopulationResponse->$methodName($paramValue);
            }
        }
        return $SendMailByPopulationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailByRun
    */
    public function SendMailByRun($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByRun = new SendMailByRun();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByRun, $methodName)) {
                $SendMailByRun->$methodName($paramValue);
            }
        }
        return $SendMailByRun;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailByRunResponse
    */
    public function SendMailByRunResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailByRunResponse = new SendMailByRunResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailByRunResponse, $methodName)) {
                $SendMailByRunResponse->$methodName($paramValue);
            }
        }
        return $SendMailByRunResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailHeader
    */
    public function GetEmailHeader($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailHeader = new GetEmailHeader();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailHeader, $methodName)) {
                $GetEmailHeader->$methodName($paramValue);
            }
        }
        return $GetEmailHeader;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailHeaderResponse
    */
    public function GetEmailHeaderResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailHeaderResponse = new GetEmailHeaderResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailHeaderResponse, $methodName)) {
                $GetEmailHeaderResponse->$methodName($paramValue);
            }
        }
        return $GetEmailHeaderResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmail
    */
    public function PreviewEmail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmail = new PreviewEmail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmail, $methodName)) {
                $PreviewEmail->$methodName($paramValue);
            }
        }
        return $PreviewEmail;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailResponse
    */
    public function PreviewEmailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailResponse = new PreviewEmailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailResponse, $methodName)) {
                $PreviewEmailResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailByPopulation
    */
    public function PreviewEmailByPopulation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailByPopulation = new PreviewEmailByPopulation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailByPopulation, $methodName)) {
                $PreviewEmailByPopulation->$methodName($paramValue);
            }
        }
        return $PreviewEmailByPopulation;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailByPopulationResponse
    */
    public function PreviewEmailByPopulationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailByPopulationResponse = new PreviewEmailByPopulationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailByPopulationResponse, $methodName)) {
                $PreviewEmailByPopulationResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailByPopulationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailByRun
    */
    public function PreviewEmailByRun($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailByRun = new PreviewEmailByRun();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailByRun, $methodName)) {
                $PreviewEmailByRun->$methodName($paramValue);
            }
        }
        return $PreviewEmailByRun;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailByRunResponse
    */
    public function PreviewEmailByRunResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailByRunResponse = new PreviewEmailByRunResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailByRunResponse, $methodName)) {
                $PreviewEmailByRunResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailByRunResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentId
    */
    public function PreviewEmailDocumentId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentId = new PreviewEmailDocumentId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentId, $methodName)) {
                $PreviewEmailDocumentId->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentId;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentIdResponse
    */
    public function PreviewEmailDocumentIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentIdResponse = new PreviewEmailDocumentIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentIdResponse, $methodName)) {
                $PreviewEmailDocumentIdResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailResult
    */
    public function PreviewEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailResult = new PreviewEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailResult, $methodName)) {
                $PreviewEmailResult->$methodName($paramValue);
            }
        }
        return $PreviewEmailResult;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentIdByPopulation
    */
    public function PreviewEmailDocumentIdByPopulation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentIdByPopulation = new PreviewEmailDocumentIdByPopulation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentIdByPopulation, $methodName)) {
                $PreviewEmailDocumentIdByPopulation->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentIdByPopulation;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentIdByPopulationResponse
    */
    public function PreviewEmailDocumentIdByPopulationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentIdByPopulationResponse = new PreviewEmailDocumentIdByPopulationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentIdByPopulationResponse, $methodName)) {
                $PreviewEmailDocumentIdByPopulationResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentIdByPopulationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentIdByRun
    */
    public function PreviewEmailDocumentIdByRun($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentIdByRun = new PreviewEmailDocumentIdByRun();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentIdByRun, $methodName)) {
                $PreviewEmailDocumentIdByRun->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentIdByRun;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentIdByRunResponse
    */
    public function PreviewEmailDocumentIdByRunResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentIdByRunResponse = new PreviewEmailDocumentIdByRunResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentIdByRunResponse, $methodName)) {
                $PreviewEmailDocumentIdByRunResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentIdByRunResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocument
    */
    public function PreviewEmailDocument($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocument = new PreviewEmailDocument();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocument, $methodName)) {
                $PreviewEmailDocument->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocument;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentResponse
    */
    public function PreviewEmailDocumentResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentResponse = new PreviewEmailDocumentResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentResponse, $methodName)) {
                $PreviewEmailDocumentResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentByPopulation
    */
    public function PreviewEmailDocumentByPopulation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentByPopulation = new PreviewEmailDocumentByPopulation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentByPopulation, $methodName)) {
                $PreviewEmailDocumentByPopulation->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentByPopulation;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentByPopulationResponse
    */
    public function PreviewEmailDocumentByPopulationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentByPopulationResponse = new PreviewEmailDocumentByPopulationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentByPopulationResponse, $methodName)) {
                $PreviewEmailDocumentByPopulationResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentByPopulationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentByRun
    */
    public function PreviewEmailDocumentByRun($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentByRun = new PreviewEmailDocumentByRun();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentByRun, $methodName)) {
                $PreviewEmailDocumentByRun->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentByRun;
    }


   /**
    * @param array $paramAutoSet
    * @return PreviewEmailDocumentByRunResponse
    */
    public function PreviewEmailDocumentByRunResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreviewEmailDocumentByRunResponse = new PreviewEmailDocumentByRunResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreviewEmailDocumentByRunResponse, $methodName)) {
                $PreviewEmailDocumentByRunResponse->$methodName($paramValue);
            }
        }
        return $PreviewEmailDocumentByRunResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPreviewEmailResult
    */
    public function GetPreviewEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPreviewEmailResult = new GetPreviewEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPreviewEmailResult, $methodName)) {
                $GetPreviewEmailResult->$methodName($paramValue);
            }
        }
        return $GetPreviewEmailResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPreviewEmailResultResponse
    */
    public function GetPreviewEmailResultResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPreviewEmailResultResponse = new GetPreviewEmailResultResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPreviewEmailResultResponse, $methodName)) {
                $GetPreviewEmailResultResponse->$methodName($paramValue);
            }
        }
        return $GetPreviewEmailResultResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Suspend
    */
    public function Suspend($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Suspend = new Suspend();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Suspend, $methodName)) {
                $Suspend->$methodName($paramValue);
            }
        }
        return $Suspend;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendResponse
    */
    public function SuspendResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendResponse = new SuspendResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendResponse, $methodName)) {
                $SuspendResponse->$methodName($paramValue);
            }
        }
        return $SuspendResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Resume
    */
    public function Resume($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Resume = new Resume();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Resume, $methodName)) {
                $Resume->$methodName($paramValue);
            }
        }
        return $Resume;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeResponse
    */
    public function ResumeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeResponse = new ResumeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeResponse, $methodName)) {
                $ResumeResponse->$methodName($paramValue);
            }
        }
        return $ResumeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTracked
    */
    public function IsTracked($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTracked = new IsTracked();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTracked, $methodName)) {
                $IsTracked->$methodName($paramValue);
            }
        }
        return $IsTracked;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTrackedResponse
    */
    public function IsTrackedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTrackedResponse = new IsTrackedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTrackedResponse, $methodName)) {
                $IsTrackedResponse->$methodName($paramValue);
            }
        }
        return $IsTrackedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsReadyForBatch
    */
    public function IsReadyForBatch($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsReadyForBatch = new IsReadyForBatch();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsReadyForBatch, $methodName)) {
                $IsReadyForBatch->$methodName($paramValue);
            }
        }
        return $IsReadyForBatch;
    }


   /**
    * @param array $paramAutoSet
    * @return IsReadyForBatchResponse
    */
    public function IsReadyForBatchResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsReadyForBatchResponse = new IsReadyForBatchResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsReadyForBatchResponse, $methodName)) {
                $IsReadyForBatchResponse->$methodName($paramValue);
            }
        }
        return $IsReadyForBatchResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsReadyForOnDemand
    */
    public function IsReadyForOnDemand($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsReadyForOnDemand = new IsReadyForOnDemand();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsReadyForOnDemand, $methodName)) {
                $IsReadyForOnDemand->$methodName($paramValue);
            }
        }
        return $IsReadyForOnDemand;
    }


   /**
    * @param array $paramAutoSet
    * @return IsReadyForOnDemandResponse
    */
    public function IsReadyForOnDemandResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsReadyForOnDemandResponse = new IsReadyForOnDemandResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsReadyForOnDemandResponse, $methodName)) {
                $IsReadyForOnDemandResponse->$methodName($paramValue);
            }
        }
        return $IsReadyForOnDemandResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorrespondingJobID
    */
    public function GetCorrespondingJobID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorrespondingJobID = new GetCorrespondingJobID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorrespondingJobID, $methodName)) {
                $GetCorrespondingJobID->$methodName($paramValue);
            }
        }
        return $GetCorrespondingJobID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorrespondingJobIDResponse
    */
    public function GetCorrespondingJobIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorrespondingJobIDResponse = new GetCorrespondingJobIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorrespondingJobIDResponse, $methodName)) {
                $GetCorrespondingJobIDResponse->$methodName($paramValue);
            }
        }
        return $GetCorrespondingJobIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SendSplitted
    */
    public function SendSplitted($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendSplitted = new SendSplitted();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendSplitted, $methodName)) {
                $SendSplitted->$methodName($paramValue);
            }
        }
        return $SendSplitted;
    }


   /**
    * @param array $paramAutoSet
    * @return SendSplittedResponse
    */
    public function SendSplittedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendSplittedResponse = new SendSplittedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendSplittedResponse, $methodName)) {
                $SendSplittedResponse->$methodName($paramValue);
            }
        }
        return $SendSplittedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Test
    */
    public function Test($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Test = new Test();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Test, $methodName)) {
                $Test->$methodName($paramValue);
            }
        }
        return $Test;
    }


   /**
    * @param array $paramAutoSet
    * @return TestResponse
    */
    public function TestResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TestResponse = new TestResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TestResponse, $methodName)) {
                $TestResponse->$methodName($paramValue);
            }
        }
        return $TestResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Preflight
    */
    public function Preflight($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Preflight = new Preflight();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Preflight, $methodName)) {
                $Preflight->$methodName($paramValue);
            }
        }
        return $Preflight;
    }


   /**
    * @param array $paramAutoSet
    * @return PreflightResponse
    */
    public function PreflightResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreflightResponse = new PreflightResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreflightResponse, $methodName)) {
                $PreflightResponse->$methodName($paramValue);
            }
        }
        return $PreflightResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PreflightSplitted
    */
    public function PreflightSplitted($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreflightSplitted = new PreflightSplitted();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreflightSplitted, $methodName)) {
                $PreflightSplitted->$methodName($paramValue);
            }
        }
        return $PreflightSplitted;
    }


   /**
    * @param array $paramAutoSet
    * @return PreflightSplittedResponse
    */
    public function PreflightSplittedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PreflightSplittedResponse = new PreflightSplittedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PreflightSplittedResponse, $methodName)) {
                $PreflightSplittedResponse->$methodName($paramValue);
            }
        }
        return $PreflightSplittedResponse;
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



}

?>
