<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResults;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AddFileToOutputResults;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AddFileToOutputResultsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AddFilesToOutputResults;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AddFilesToOutputResultsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\DeleteOutputResults;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\DeleteOutputResultsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultsInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultsInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfOutputResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\OutputResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetOutputResultDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\Abort;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AbortResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ReQueue;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\ReQueueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetStatus;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetProgressStatus;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetProgressStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetTicket;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetTicketResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessages;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesNum;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesNumResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesHighestSeverity;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetMessagesHighestSeverityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\DeleteMessages;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\DeleteMessagesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetCampaignShortcutInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetCampaignShortcutInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\CampaignShortcutInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetTouchPoint;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\GetTouchPointResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetTouchPoint;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\SetTouchPointResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\IsExistResponse;


class FabricateJob_SSP
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
    * @return GetOutputResults
    */
    public function GetOutputResults($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResults = new GetOutputResults();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResults, $methodName)) {
                $GetOutputResults->$methodName($paramValue);
            }
        }
        return $GetOutputResults;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultsResponse
    */
    public function GetOutputResultsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultsResponse = new GetOutputResultsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultsResponse, $methodName)) {
                $GetOutputResultsResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultsResponse;
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
    * @return AddFileToOutputResults
    */
    public function AddFileToOutputResults($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFileToOutputResults = new AddFileToOutputResults();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFileToOutputResults, $methodName)) {
                $AddFileToOutputResults->$methodName($paramValue);
            }
        }
        return $AddFileToOutputResults;
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
    * @return AddFileToOutputResultsResponse
    */
    public function AddFileToOutputResultsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFileToOutputResultsResponse = new AddFileToOutputResultsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFileToOutputResultsResponse, $methodName)) {
                $AddFileToOutputResultsResponse->$methodName($paramValue);
            }
        }
        return $AddFileToOutputResultsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddFilesToOutputResults
    */
    public function AddFilesToOutputResults($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFilesToOutputResults = new AddFilesToOutputResults();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFilesToOutputResults, $methodName)) {
                $AddFilesToOutputResults->$methodName($paramValue);
            }
        }
        return $AddFilesToOutputResults;
    }


   /**
    * @param array $paramAutoSet
    * @return AddFilesToOutputResultsResponse
    */
    public function AddFilesToOutputResultsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddFilesToOutputResultsResponse = new AddFilesToOutputResultsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddFilesToOutputResultsResponse, $methodName)) {
                $AddFilesToOutputResultsResponse->$methodName($paramValue);
            }
        }
        return $AddFilesToOutputResultsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteOutputResults
    */
    public function DeleteOutputResults($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOutputResults = new DeleteOutputResults();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOutputResults, $methodName)) {
                $DeleteOutputResults->$methodName($paramValue);
            }
        }
        return $DeleteOutputResults;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteOutputResultsResponse
    */
    public function DeleteOutputResultsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOutputResultsResponse = new DeleteOutputResultsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOutputResultsResponse, $methodName)) {
                $DeleteOutputResultsResponse->$methodName($paramValue);
            }
        }
        return $DeleteOutputResultsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultsInfo
    */
    public function GetOutputResultsInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultsInfo = new GetOutputResultsInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultsInfo, $methodName)) {
                $GetOutputResultsInfo->$methodName($paramValue);
            }
        }
        return $GetOutputResultsInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultsInfoResponse
    */
    public function GetOutputResultsInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultsInfoResponse = new GetOutputResultsInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultsInfoResponse, $methodName)) {
                $GetOutputResultsInfoResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultsInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfOutputResult
    */
    public function ArrayOfOutputResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfOutputResult = new ArrayOfOutputResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfOutputResult, $methodName)) {
                $ArrayOfOutputResult->$methodName($paramValue);
            }
        }
        return $ArrayOfOutputResult;
    }


   /**
    * @param array $paramAutoSet
    * @return OutputResult
    */
    public function OutputResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $OutputResult = new OutputResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($OutputResult, $methodName)) {
                $OutputResult->$methodName($paramValue);
            }
        }
        return $OutputResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStream
    */
    public function GetOutputResultBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStream = new GetOutputResultBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStream, $methodName)) {
                $GetOutputResultBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStreamResponse
    */
    public function GetOutputResultBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStreamResponse = new GetOutputResultBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStreamResponse, $methodName)) {
                $GetOutputResultBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStreamChunk
    */
    public function GetOutputResultBinaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStreamChunk = new GetOutputResultBinaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStreamChunk, $methodName)) {
                $GetOutputResultBinaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStreamChunkResponse
    */
    public function GetOutputResultBinaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStreamChunkResponse = new GetOutputResultBinaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStreamChunkResponse, $methodName)) {
                $GetOutputResultBinaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStreamSize
    */
    public function GetOutputResultBinaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStreamSize = new GetOutputResultBinaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStreamSize, $methodName)) {
                $GetOutputResultBinaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultBinaryFileStreamSizeResponse
    */
    public function GetOutputResultBinaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultBinaryFileStreamSizeResponse = new GetOutputResultBinaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultBinaryFileStreamSizeResponse, $methodName)) {
                $GetOutputResultBinaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultBinaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultDownloadURL
    */
    public function GetOutputResultDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultDownloadURL = new GetOutputResultDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultDownloadURL, $methodName)) {
                $GetOutputResultDownloadURL->$methodName($paramValue);
            }
        }
        return $GetOutputResultDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOutputResultDownloadURLResponse
    */
    public function GetOutputResultDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOutputResultDownloadURLResponse = new GetOutputResultDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOutputResultDownloadURLResponse, $methodName)) {
                $GetOutputResultDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetOutputResultDownloadURLResponse;
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
    * @return Abort
    */
    public function Abort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Abort = new Abort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Abort, $methodName)) {
                $Abort->$methodName($paramValue);
            }
        }
        return $Abort;
    }


   /**
    * @param array $paramAutoSet
    * @return AbortResponse
    */
    public function AbortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortResponse = new AbortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortResponse, $methodName)) {
                $AbortResponse->$methodName($paramValue);
            }
        }
        return $AbortResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReQueue
    */
    public function ReQueue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReQueue = new ReQueue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReQueue, $methodName)) {
                $ReQueue->$methodName($paramValue);
            }
        }
        return $ReQueue;
    }


   /**
    * @param array $paramAutoSet
    * @return ReQueueResponse
    */
    public function ReQueueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReQueueResponse = new ReQueueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReQueueResponse, $methodName)) {
                $ReQueueResponse->$methodName($paramValue);
            }
        }
        return $ReQueueResponse;
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
    * @return SetProgressStatus
    */
    public function SetProgressStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProgressStatus = new SetProgressStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProgressStatus, $methodName)) {
                $SetProgressStatus->$methodName($paramValue);
            }
        }
        return $SetProgressStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProgressStatusResponse
    */
    public function SetProgressStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProgressStatusResponse = new SetProgressStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProgressStatusResponse, $methodName)) {
                $SetProgressStatusResponse->$methodName($paramValue);
            }
        }
        return $SetProgressStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTicket
    */
    public function GetTicket($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTicket = new GetTicket();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTicket, $methodName)) {
                $GetTicket->$methodName($paramValue);
            }
        }
        return $GetTicket;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTicketResponse
    */
    public function GetTicketResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTicketResponse = new GetTicketResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTicketResponse, $methodName)) {
                $GetTicketResponse->$methodName($paramValue);
            }
        }
        return $GetTicketResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessages
    */
    public function GetMessages($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessages = new GetMessages();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessages, $methodName)) {
                $GetMessages->$methodName($paramValue);
            }
        }
        return $GetMessages;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesResponse
    */
    public function GetMessagesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesResponse = new GetMessagesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesResponse, $methodName)) {
                $GetMessagesResponse->$methodName($paramValue);
            }
        }
        return $GetMessagesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesDataSet
    */
    public function GetMessagesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesDataSet = new GetMessagesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesDataSet, $methodName)) {
                $GetMessagesDataSet->$methodName($paramValue);
            }
        }
        return $GetMessagesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesDataSetResponse
    */
    public function GetMessagesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesDataSetResponse = new GetMessagesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesDataSetResponse, $methodName)) {
                $GetMessagesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetMessagesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesDataSetResult
    */
    public function GetMessagesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesDataSetResult = new GetMessagesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesDataSetResult, $methodName)) {
                $GetMessagesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetMessagesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesXMPTblDataSet
    */
    public function GetMessagesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesXMPTblDataSet = new GetMessagesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesXMPTblDataSet, $methodName)) {
                $GetMessagesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetMessagesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesXMPTblDataSetResponse
    */
    public function GetMessagesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesXMPTblDataSetResponse = new GetMessagesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesXMPTblDataSetResponse, $methodName)) {
                $GetMessagesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetMessagesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesNum
    */
    public function GetMessagesNum($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesNum = new GetMessagesNum();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesNum, $methodName)) {
                $GetMessagesNum->$methodName($paramValue);
            }
        }
        return $GetMessagesNum;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesNumResponse
    */
    public function GetMessagesNumResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesNumResponse = new GetMessagesNumResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesNumResponse, $methodName)) {
                $GetMessagesNumResponse->$methodName($paramValue);
            }
        }
        return $GetMessagesNumResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesHighestSeverity
    */
    public function GetMessagesHighestSeverity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesHighestSeverity = new GetMessagesHighestSeverity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesHighestSeverity, $methodName)) {
                $GetMessagesHighestSeverity->$methodName($paramValue);
            }
        }
        return $GetMessagesHighestSeverity;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessagesHighestSeverityResponse
    */
    public function GetMessagesHighestSeverityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessagesHighestSeverityResponse = new GetMessagesHighestSeverityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessagesHighestSeverityResponse, $methodName)) {
                $GetMessagesHighestSeverityResponse->$methodName($paramValue);
            }
        }
        return $GetMessagesHighestSeverityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteMessages
    */
    public function DeleteMessages($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteMessages = new DeleteMessages();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteMessages, $methodName)) {
                $DeleteMessages->$methodName($paramValue);
            }
        }
        return $DeleteMessages;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteMessagesResponse
    */
    public function DeleteMessagesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteMessagesResponse = new DeleteMessagesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteMessagesResponse, $methodName)) {
                $DeleteMessagesResponse->$methodName($paramValue);
            }
        }
        return $DeleteMessagesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignShortcutInfo
    */
    public function GetCampaignShortcutInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignShortcutInfo = new GetCampaignShortcutInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignShortcutInfo, $methodName)) {
                $GetCampaignShortcutInfo->$methodName($paramValue);
            }
        }
        return $GetCampaignShortcutInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignShortcutInfoResponse
    */
    public function GetCampaignShortcutInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignShortcutInfoResponse = new GetCampaignShortcutInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignShortcutInfoResponse, $methodName)) {
                $GetCampaignShortcutInfoResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignShortcutInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CampaignShortcutInfo
    */
    public function CampaignShortcutInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CampaignShortcutInfo = new CampaignShortcutInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CampaignShortcutInfo, $methodName)) {
                $CampaignShortcutInfo->$methodName($paramValue);
            }
        }
        return $CampaignShortcutInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPoint
    */
    public function GetTouchPoint($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPoint = new GetTouchPoint();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPoint, $methodName)) {
                $GetTouchPoint->$methodName($paramValue);
            }
        }
        return $GetTouchPoint;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointResponse
    */
    public function GetTouchPointResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointResponse = new GetTouchPointResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointResponse, $methodName)) {
                $GetTouchPointResponse->$methodName($paramValue);
            }
        }
        return $GetTouchPointResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTouchPoint
    */
    public function SetTouchPoint($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTouchPoint = new SetTouchPoint();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTouchPoint, $methodName)) {
                $SetTouchPoint->$methodName($paramValue);
            }
        }
        return $SetTouchPoint;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTouchPointResponse
    */
    public function SetTouchPointResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTouchPointResponse = new SetTouchPointResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTouchPointResponse, $methodName)) {
                $SetTouchPointResponse->$methodName($paramValue);
            }
        }
        return $SetTouchPointResponse;
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
