<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromDPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromDPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHosting;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromLocalEmailHostingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewFromStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeleteResource;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeleteResourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewResource;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateNewResourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromDPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromDPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromLocalEmailHosting;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromLocalEmailHostingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ReplaceFromStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateDPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateDPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateDPKGEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateDPKGExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetWebPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetWebPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPathEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPathExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamChunkEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamChunkExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamSizeEx;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetBinaryFileStreamSizeExResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreview;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetPDFPreviewDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnails;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnailsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnailBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnailBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateThumbnailToTempStorage;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateThumbnailToTempStorageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnailDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetThumbnailDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourcesModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourcesModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResources;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileName;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkByFileNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunk;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamChunkResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamSize;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamSizeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamSizeByFileName;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceBinaryFileStreamSizeByFileNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceDownloadURLByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceDownloadURLByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceThumbnailBinaryFileStream;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceThumbnailBinaryFileStreamResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorage;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CreateResourceThumbnailToTempStorageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceThumbnailDownloadURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetADORInfoXML;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetADORInfoXMLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetADORInfoXMLResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetLastJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetLastJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDeploymentURL;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDeploymentURLResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentType;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypes;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageType;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeployOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DeployOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\UnDeployOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\UnDeployOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SuspendOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\SuspendOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ResumeOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\ResumeOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetUImageSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetUImageSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResource;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetResourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CloneCustom;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\CloneResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\DocumentMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\IDMapping;


class FabricateDocument_SSP
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
    * @return CreateNewFromDPKG
    */
    public function CreateNewFromDPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromDPKG = new CreateNewFromDPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromDPKG, $methodName)) {
                $CreateNewFromDPKG->$methodName($paramValue);
            }
        }
        return $CreateNewFromDPKG;
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
    * @return CreateNewFromDPKGResponse
    */
    public function CreateNewFromDPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromDPKGResponse = new CreateNewFromDPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromDPKGResponse, $methodName)) {
                $CreateNewFromDPKGResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromDPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromFile
    */
    public function CreateNewFromFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromFile = new CreateNewFromFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromFile, $methodName)) {
                $CreateNewFromFile->$methodName($paramValue);
            }
        }
        return $CreateNewFromFile;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromFileResponse
    */
    public function CreateNewFromFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromFileResponse = new CreateNewFromFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromFileResponse, $methodName)) {
                $CreateNewFromFileResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromURL
    */
    public function CreateNewFromURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromURL = new CreateNewFromURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromURL, $methodName)) {
                $CreateNewFromURL->$methodName($paramValue);
            }
        }
        return $CreateNewFromURL;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromURLResponse
    */
    public function CreateNewFromURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromURLResponse = new CreateNewFromURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromURLResponse, $methodName)) {
                $CreateNewFromURLResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromLocalEmailHosting
    */
    public function CreateNewFromLocalEmailHosting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromLocalEmailHosting = new CreateNewFromLocalEmailHosting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromLocalEmailHosting, $methodName)) {
                $CreateNewFromLocalEmailHosting->$methodName($paramValue);
            }
        }
        return $CreateNewFromLocalEmailHosting;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromLocalEmailHostingResponse
    */
    public function CreateNewFromLocalEmailHostingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromLocalEmailHostingResponse = new CreateNewFromLocalEmailHostingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromLocalEmailHostingResponse, $methodName)) {
                $CreateNewFromLocalEmailHostingResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromLocalEmailHostingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromStream
    */
    public function CreateNewFromStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromStream = new CreateNewFromStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromStream, $methodName)) {
                $CreateNewFromStream->$methodName($paramValue);
            }
        }
        return $CreateNewFromStream;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromStreamResponse
    */
    public function CreateNewFromStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromStreamResponse = new CreateNewFromStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromStreamResponse, $methodName)) {
                $CreateNewFromStreamResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResource
    */
    public function DeleteResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResource = new DeleteResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResource, $methodName)) {
                $DeleteResource->$methodName($paramValue);
            }
        }
        return $DeleteResource;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResourceResponse
    */
    public function DeleteResourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResourceResponse = new DeleteResourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResourceResponse, $methodName)) {
                $DeleteResourceResponse->$methodName($paramValue);
            }
        }
        return $DeleteResourceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewResource
    */
    public function CreateNewResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewResource = new CreateNewResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewResource, $methodName)) {
                $CreateNewResource->$methodName($paramValue);
            }
        }
        return $CreateNewResource;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewResourceResponse
    */
    public function CreateNewResourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewResourceResponse = new CreateNewResourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewResourceResponse, $methodName)) {
                $CreateNewResourceResponse->$methodName($paramValue);
            }
        }
        return $CreateNewResourceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromDPKG
    */
    public function ReplaceFromDPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromDPKG = new ReplaceFromDPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromDPKG, $methodName)) {
                $ReplaceFromDPKG->$methodName($paramValue);
            }
        }
        return $ReplaceFromDPKG;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromDPKGResponse
    */
    public function ReplaceFromDPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromDPKGResponse = new ReplaceFromDPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromDPKGResponse, $methodName)) {
                $ReplaceFromDPKGResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromDPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromFile
    */
    public function ReplaceFromFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromFile = new ReplaceFromFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromFile, $methodName)) {
                $ReplaceFromFile->$methodName($paramValue);
            }
        }
        return $ReplaceFromFile;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromFileResponse
    */
    public function ReplaceFromFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromFileResponse = new ReplaceFromFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromFileResponse, $methodName)) {
                $ReplaceFromFileResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromURL
    */
    public function ReplaceFromURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromURL = new ReplaceFromURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromURL, $methodName)) {
                $ReplaceFromURL->$methodName($paramValue);
            }
        }
        return $ReplaceFromURL;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromURLResponse
    */
    public function ReplaceFromURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromURLResponse = new ReplaceFromURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromURLResponse, $methodName)) {
                $ReplaceFromURLResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromLocalEmailHosting
    */
    public function ReplaceFromLocalEmailHosting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromLocalEmailHosting = new ReplaceFromLocalEmailHosting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromLocalEmailHosting, $methodName)) {
                $ReplaceFromLocalEmailHosting->$methodName($paramValue);
            }
        }
        return $ReplaceFromLocalEmailHosting;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromLocalEmailHostingResponse
    */
    public function ReplaceFromLocalEmailHostingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromLocalEmailHostingResponse = new ReplaceFromLocalEmailHostingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromLocalEmailHostingResponse, $methodName)) {
                $ReplaceFromLocalEmailHostingResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromLocalEmailHostingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromStream
    */
    public function ReplaceFromStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromStream = new ReplaceFromStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromStream, $methodName)) {
                $ReplaceFromStream->$methodName($paramValue);
            }
        }
        return $ReplaceFromStream;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromStreamResponse
    */
    public function ReplaceFromStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromStreamResponse = new ReplaceFromStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromStreamResponse, $methodName)) {
                $ReplaceFromStreamResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromStreamResponse;
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
    * @return CreateDPKG
    */
    public function CreateDPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDPKG = new CreateDPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDPKG, $methodName)) {
                $CreateDPKG->$methodName($paramValue);
            }
        }
        return $CreateDPKG;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDPKGResponse
    */
    public function CreateDPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDPKGResponse = new CreateDPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDPKGResponse, $methodName)) {
                $CreateDPKGResponse->$methodName($paramValue);
            }
        }
        return $CreateDPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDPKGEx
    */
    public function CreateDPKGEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDPKGEx = new CreateDPKGEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDPKGEx, $methodName)) {
                $CreateDPKGEx->$methodName($paramValue);
            }
        }
        return $CreateDPKGEx;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateDPKGExResponse
    */
    public function CreateDPKGExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateDPKGExResponse = new CreateDPKGExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateDPKGExResponse, $methodName)) {
                $CreateDPKGExResponse->$methodName($paramValue);
            }
        }
        return $CreateDPKGExResponse;
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
    * @return GetWebPath
    */
    public function GetWebPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetWebPath = new GetWebPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetWebPath, $methodName)) {
                $GetWebPath->$methodName($paramValue);
            }
        }
        return $GetWebPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetWebPathResponse
    */
    public function GetWebPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetWebPathResponse = new GetWebPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetWebPathResponse, $methodName)) {
                $GetWebPathResponse->$methodName($paramValue);
            }
        }
        return $GetWebPathResponse;
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
    * @return GetResourceModificationDate
    */
    public function GetResourceModificationDate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceModificationDate = new GetResourceModificationDate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceModificationDate, $methodName)) {
                $GetResourceModificationDate->$methodName($paramValue);
            }
        }
        return $GetResourceModificationDate;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceModificationDateResponse
    */
    public function GetResourceModificationDateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceModificationDateResponse = new GetResourceModificationDateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceModificationDateResponse, $methodName)) {
                $GetResourceModificationDateResponse->$methodName($paramValue);
            }
        }
        return $GetResourceModificationDateResponse;
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
    * @return GetPathEx
    */
    public function GetPathEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathEx = new GetPathEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathEx, $methodName)) {
                $GetPathEx->$methodName($paramValue);
            }
        }
        return $GetPathEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPathExResponse
    */
    public function GetPathExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPathExResponse = new GetPathExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPathExResponse, $methodName)) {
                $GetPathExResponse->$methodName($paramValue);
            }
        }
        return $GetPathExResponse;
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
    * @return GetBinaryFileStreamEx
    */
    public function GetBinaryFileStreamEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamEx = new GetBinaryFileStreamEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamEx, $methodName)) {
                $GetBinaryFileStreamEx->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamExResponse
    */
    public function GetBinaryFileStreamExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamExResponse = new GetBinaryFileStreamExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamExResponse, $methodName)) {
                $GetBinaryFileStreamExResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamExResponse;
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
    * @return GetBinaryFileStreamChunkEx
    */
    public function GetBinaryFileStreamChunkEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunkEx = new GetBinaryFileStreamChunkEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunkEx, $methodName)) {
                $GetBinaryFileStreamChunkEx->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunkEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamChunkExResponse
    */
    public function GetBinaryFileStreamChunkExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamChunkExResponse = new GetBinaryFileStreamChunkExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamChunkExResponse, $methodName)) {
                $GetBinaryFileStreamChunkExResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamChunkExResponse;
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
    * @return GetBinaryFileStreamSizeEx
    */
    public function GetBinaryFileStreamSizeEx($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSizeEx = new GetBinaryFileStreamSizeEx();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSizeEx, $methodName)) {
                $GetBinaryFileStreamSizeEx->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSizeEx;
    }


   /**
    * @param array $paramAutoSet
    * @return GetBinaryFileStreamSizeExResponse
    */
    public function GetBinaryFileStreamSizeExResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetBinaryFileStreamSizeExResponse = new GetBinaryFileStreamSizeExResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetBinaryFileStreamSizeExResponse, $methodName)) {
                $GetBinaryFileStreamSizeExResponse->$methodName($paramValue);
            }
        }
        return $GetBinaryFileStreamSizeExResponse;
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
    * @return GetPDFPreview
    */
    public function GetPDFPreview($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreview = new GetPDFPreview();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreview, $methodName)) {
                $GetPDFPreview->$methodName($paramValue);
            }
        }
        return $GetPDFPreview;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewResponse
    */
    public function GetPDFPreviewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewResponse = new GetPDFPreviewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewResponse, $methodName)) {
                $GetPDFPreviewResponse->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStream
    */
    public function GetPDFPreviewBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStream = new GetPDFPreviewBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStream, $methodName)) {
                $GetPDFPreviewBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStreamResponse
    */
    public function GetPDFPreviewBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStreamResponse = new GetPDFPreviewBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStreamResponse, $methodName)) {
                $GetPDFPreviewBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStreamChunk
    */
    public function GetPDFPreviewBinaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStreamChunk = new GetPDFPreviewBinaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStreamChunk, $methodName)) {
                $GetPDFPreviewBinaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStreamChunkResponse
    */
    public function GetPDFPreviewBinaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStreamChunkResponse = new GetPDFPreviewBinaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStreamChunkResponse, $methodName)) {
                $GetPDFPreviewBinaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStreamSize
    */
    public function GetPDFPreviewBinaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStreamSize = new GetPDFPreviewBinaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStreamSize, $methodName)) {
                $GetPDFPreviewBinaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewBinaryFileStreamSizeResponse
    */
    public function GetPDFPreviewBinaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewBinaryFileStreamSizeResponse = new GetPDFPreviewBinaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewBinaryFileStreamSizeResponse, $methodName)) {
                $GetPDFPreviewBinaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewBinaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewDownloadURL
    */
    public function GetPDFPreviewDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewDownloadURL = new GetPDFPreviewDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewDownloadURL, $methodName)) {
                $GetPDFPreviewDownloadURL->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPDFPreviewDownloadURLResponse
    */
    public function GetPDFPreviewDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPDFPreviewDownloadURLResponse = new GetPDFPreviewDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPDFPreviewDownloadURLResponse, $methodName)) {
                $GetPDFPreviewDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetPDFPreviewDownloadURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnails
    */
    public function GetThumbnails($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnails = new GetThumbnails();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnails, $methodName)) {
                $GetThumbnails->$methodName($paramValue);
            }
        }
        return $GetThumbnails;
    }


   /**
    * @param array $paramAutoSet
    * @return GetThumbnailsResponse
    */
    public function GetThumbnailsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetThumbnailsResponse = new GetThumbnailsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetThumbnailsResponse, $methodName)) {
                $GetThumbnailsResponse->$methodName($paramValue);
            }
        }
        return $GetThumbnailsResponse;
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
    * @return GetResourcesModificationDate
    */
    public function GetResourcesModificationDate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourcesModificationDate = new GetResourcesModificationDate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourcesModificationDate, $methodName)) {
                $GetResourcesModificationDate->$methodName($paramValue);
            }
        }
        return $GetResourcesModificationDate;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourcesModificationDateResponse
    */
    public function GetResourcesModificationDateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourcesModificationDateResponse = new GetResourcesModificationDateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourcesModificationDateResponse, $methodName)) {
                $GetResourcesModificationDateResponse->$methodName($paramValue);
            }
        }
        return $GetResourcesModificationDateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResources
    */
    public function GetResources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResources = new GetResources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResources, $methodName)) {
                $GetResources->$methodName($paramValue);
            }
        }
        return $GetResources;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourcesResponse
    */
    public function GetResourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourcesResponse = new GetResourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourcesResponse, $methodName)) {
                $GetResourcesResponse->$methodName($paramValue);
            }
        }
        return $GetResourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStream
    */
    public function GetResourceBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStream = new GetResourceBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStream, $methodName)) {
                $GetResourceBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamResponse
    */
    public function GetResourceBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamResponse = new GetResourceBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamResponse, $methodName)) {
                $GetResourceBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamChunkByFileName
    */
    public function GetResourceBinaryFileStreamChunkByFileName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamChunkByFileName = new GetResourceBinaryFileStreamChunkByFileName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamChunkByFileName, $methodName)) {
                $GetResourceBinaryFileStreamChunkByFileName->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamChunkByFileName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamChunkByFileNameResponse
    */
    public function GetResourceBinaryFileStreamChunkByFileNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamChunkByFileNameResponse = new GetResourceBinaryFileStreamChunkByFileNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamChunkByFileNameResponse, $methodName)) {
                $GetResourceBinaryFileStreamChunkByFileNameResponse->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamChunkByFileNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamChunk
    */
    public function GetResourceBinaryFileStreamChunk($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamChunk = new GetResourceBinaryFileStreamChunk();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamChunk, $methodName)) {
                $GetResourceBinaryFileStreamChunk->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamChunk;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamChunkResponse
    */
    public function GetResourceBinaryFileStreamChunkResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamChunkResponse = new GetResourceBinaryFileStreamChunkResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamChunkResponse, $methodName)) {
                $GetResourceBinaryFileStreamChunkResponse->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamChunkResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamSize
    */
    public function GetResourceBinaryFileStreamSize($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamSize = new GetResourceBinaryFileStreamSize();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamSize, $methodName)) {
                $GetResourceBinaryFileStreamSize->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamSize;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamSizeResponse
    */
    public function GetResourceBinaryFileStreamSizeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamSizeResponse = new GetResourceBinaryFileStreamSizeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamSizeResponse, $methodName)) {
                $GetResourceBinaryFileStreamSizeResponse->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamSizeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamSizeByFileName
    */
    public function GetResourceBinaryFileStreamSizeByFileName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamSizeByFileName = new GetResourceBinaryFileStreamSizeByFileName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamSizeByFileName, $methodName)) {
                $GetResourceBinaryFileStreamSizeByFileName->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamSizeByFileName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceBinaryFileStreamSizeByFileNameResponse
    */
    public function GetResourceBinaryFileStreamSizeByFileNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceBinaryFileStreamSizeByFileNameResponse = new GetResourceBinaryFileStreamSizeByFileNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceBinaryFileStreamSizeByFileNameResponse, $methodName)) {
                $GetResourceBinaryFileStreamSizeByFileNameResponse->$methodName($paramValue);
            }
        }
        return $GetResourceBinaryFileStreamSizeByFileNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceDownloadURL
    */
    public function GetResourceDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceDownloadURL = new GetResourceDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceDownloadURL, $methodName)) {
                $GetResourceDownloadURL->$methodName($paramValue);
            }
        }
        return $GetResourceDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceDownloadURLResponse
    */
    public function GetResourceDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceDownloadURLResponse = new GetResourceDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceDownloadURLResponse, $methodName)) {
                $GetResourceDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetResourceDownloadURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceDownloadURLByID
    */
    public function GetResourceDownloadURLByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceDownloadURLByID = new GetResourceDownloadURLByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceDownloadURLByID, $methodName)) {
                $GetResourceDownloadURLByID->$methodName($paramValue);
            }
        }
        return $GetResourceDownloadURLByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceDownloadURLByIDResponse
    */
    public function GetResourceDownloadURLByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceDownloadURLByIDResponse = new GetResourceDownloadURLByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceDownloadURLByIDResponse, $methodName)) {
                $GetResourceDownloadURLByIDResponse->$methodName($paramValue);
            }
        }
        return $GetResourceDownloadURLByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceThumbnailBinaryFileStream
    */
    public function GetResourceThumbnailBinaryFileStream($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceThumbnailBinaryFileStream = new GetResourceThumbnailBinaryFileStream();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceThumbnailBinaryFileStream, $methodName)) {
                $GetResourceThumbnailBinaryFileStream->$methodName($paramValue);
            }
        }
        return $GetResourceThumbnailBinaryFileStream;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceThumbnailBinaryFileStreamResponse
    */
    public function GetResourceThumbnailBinaryFileStreamResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceThumbnailBinaryFileStreamResponse = new GetResourceThumbnailBinaryFileStreamResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceThumbnailBinaryFileStreamResponse, $methodName)) {
                $GetResourceThumbnailBinaryFileStreamResponse->$methodName($paramValue);
            }
        }
        return $GetResourceThumbnailBinaryFileStreamResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateResourceThumbnailToTempStorage
    */
    public function CreateResourceThumbnailToTempStorage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateResourceThumbnailToTempStorage = new CreateResourceThumbnailToTempStorage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateResourceThumbnailToTempStorage, $methodName)) {
                $CreateResourceThumbnailToTempStorage->$methodName($paramValue);
            }
        }
        return $CreateResourceThumbnailToTempStorage;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateResourceThumbnailToTempStorageResponse
    */
    public function CreateResourceThumbnailToTempStorageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateResourceThumbnailToTempStorageResponse = new CreateResourceThumbnailToTempStorageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateResourceThumbnailToTempStorageResponse, $methodName)) {
                $CreateResourceThumbnailToTempStorageResponse->$methodName($paramValue);
            }
        }
        return $CreateResourceThumbnailToTempStorageResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceThumbnailDownloadURL
    */
    public function GetResourceThumbnailDownloadURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceThumbnailDownloadURL = new GetResourceThumbnailDownloadURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceThumbnailDownloadURL, $methodName)) {
                $GetResourceThumbnailDownloadURL->$methodName($paramValue);
            }
        }
        return $GetResourceThumbnailDownloadURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceThumbnailDownloadURLResponse
    */
    public function GetResourceThumbnailDownloadURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceThumbnailDownloadURLResponse = new GetResourceThumbnailDownloadURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceThumbnailDownloadURLResponse, $methodName)) {
                $GetResourceThumbnailDownloadURLResponse->$methodName($paramValue);
            }
        }
        return $GetResourceThumbnailDownloadURLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORInfoXML
    */
    public function GetADORInfoXML($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORInfoXML = new GetADORInfoXML();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORInfoXML, $methodName)) {
                $GetADORInfoXML->$methodName($paramValue);
            }
        }
        return $GetADORInfoXML;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORInfoXMLResponse
    */
    public function GetADORInfoXMLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORInfoXMLResponse = new GetADORInfoXMLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORInfoXMLResponse, $methodName)) {
                $GetADORInfoXMLResponse->$methodName($paramValue);
            }
        }
        return $GetADORInfoXMLResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORInfoXMLResult
    */
    public function GetADORInfoXMLResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORInfoXMLResult = new GetADORInfoXMLResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORInfoXMLResult, $methodName)) {
                $GetADORInfoXMLResult->$methodName($paramValue);
            }
        }
        return $GetADORInfoXMLResult;
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
    * @return GetDeploymentURL
    */
    public function GetDeploymentURL($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeploymentURL = new GetDeploymentURL();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeploymentURL, $methodName)) {
                $GetDeploymentURL->$methodName($paramValue);
            }
        }
        return $GetDeploymentURL;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeploymentURLResponse
    */
    public function GetDeploymentURLResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeploymentURLResponse = new GetDeploymentURLResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeploymentURLResponse, $methodName)) {
                $GetDeploymentURLResponse->$methodName($paramValue);
            }
        }
        return $GetDeploymentURLResponse;
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
    * @return GetDocumentTypes
    */
    public function GetDocumentTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypes = new GetDocumentTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypes, $methodName)) {
                $GetDocumentTypes->$methodName($paramValue);
            }
        }
        return $GetDocumentTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypesResponse
    */
    public function GetDocumentTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypesResponse = new GetDocumentTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypesResponse, $methodName)) {
                $GetDocumentTypesResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypesResult
    */
    public function GetDocumentTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypesResult = new GetDocumentTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypesResult, $methodName)) {
                $GetDocumentTypesResult->$methodName($paramValue);
            }
        }
        return $GetDocumentTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypesXMPTblDataSet
    */
    public function GetDocumentTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypesXMPTblDataSet = new GetDocumentTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypesXMPTblDataSet, $methodName)) {
                $GetDocumentTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypesXMPTblDataSetResponse
    */
    public function GetDocumentTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypesXMPTblDataSetResponse = new GetDocumentTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypesXMPTblDataSetResponse, $methodName)) {
                $GetDocumentTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentTypesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentType
    */
    public function GetDocumentType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentType = new GetDocumentType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentType, $methodName)) {
                $GetDocumentType->$methodName($paramValue);
            }
        }
        return $GetDocumentType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypeResponse
    */
    public function GetDocumentTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypeResponse = new GetDocumentTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypeResponse, $methodName)) {
                $GetDocumentTypeResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypeResult
    */
    public function GetDocumentTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypeResult = new GetDocumentTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypeResult, $methodName)) {
                $GetDocumentTypeResult->$methodName($paramValue);
            }
        }
        return $GetDocumentTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypeXMPTblDataSet
    */
    public function GetDocumentTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypeXMPTblDataSet = new GetDocumentTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypeXMPTblDataSet, $methodName)) {
                $GetDocumentTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentTypeXMPTblDataSetResponse
    */
    public function GetDocumentTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentTypeXMPTblDataSetResponse = new GetDocumentTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentTypeXMPTblDataSetResponse, $methodName)) {
                $GetDocumentTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentTypeXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypes
    */
    public function GetDocumentStorageTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypes = new GetDocumentStorageTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypes, $methodName)) {
                $GetDocumentStorageTypes->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypesResponse
    */
    public function GetDocumentStorageTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypesResponse = new GetDocumentStorageTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypesResponse, $methodName)) {
                $GetDocumentStorageTypesResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypesResult
    */
    public function GetDocumentStorageTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypesResult = new GetDocumentStorageTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypesResult, $methodName)) {
                $GetDocumentStorageTypesResult->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypesResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypesXMPTblDataSet
    */
    public function GetDocumentStorageTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypesXMPTblDataSet = new GetDocumentStorageTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypesXMPTblDataSet, $methodName)) {
                $GetDocumentStorageTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypesXMPTblDataSetResponse
    */
    public function GetDocumentStorageTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypesXMPTblDataSetResponse = new GetDocumentStorageTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypesXMPTblDataSetResponse, $methodName)) {
                $GetDocumentStorageTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageType
    */
    public function GetDocumentStorageType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageType = new GetDocumentStorageType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageType, $methodName)) {
                $GetDocumentStorageType->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageType;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypeResponse
    */
    public function GetDocumentStorageTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypeResponse = new GetDocumentStorageTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypeResponse, $methodName)) {
                $GetDocumentStorageTypeResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypeResult
    */
    public function GetDocumentStorageTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypeResult = new GetDocumentStorageTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypeResult, $methodName)) {
                $GetDocumentStorageTypeResult->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypeXMPTblDataSet
    */
    public function GetDocumentStorageTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypeXMPTblDataSet = new GetDocumentStorageTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypeXMPTblDataSet, $methodName)) {
                $GetDocumentStorageTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypeXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentStorageTypeXMPTblDataSetResponse
    */
    public function GetDocumentStorageTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentStorageTypeXMPTblDataSetResponse = new GetDocumentStorageTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentStorageTypeXMPTblDataSetResponse, $methodName)) {
                $GetDocumentStorageTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentStorageTypeXMPTblDataSetResponse;
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
    * @return DeployOnDemandJob
    */
    public function DeployOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployOnDemandJob = new DeployOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployOnDemandJob, $methodName)) {
                $DeployOnDemandJob->$methodName($paramValue);
            }
        }
        return $DeployOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return DeployOnDemandJobResponse
    */
    public function DeployOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployOnDemandJobResponse = new DeployOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployOnDemandJobResponse, $methodName)) {
                $DeployOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $DeployOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UnDeployOnDemandJob
    */
    public function UnDeployOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnDeployOnDemandJob = new UnDeployOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnDeployOnDemandJob, $methodName)) {
                $UnDeployOnDemandJob->$methodName($paramValue);
            }
        }
        return $UnDeployOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return UnDeployOnDemandJobResponse
    */
    public function UnDeployOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnDeployOnDemandJobResponse = new UnDeployOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnDeployOnDemandJobResponse, $methodName)) {
                $UnDeployOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $UnDeployOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendOnDemandJob
    */
    public function SuspendOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendOnDemandJob = new SuspendOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendOnDemandJob, $methodName)) {
                $SuspendOnDemandJob->$methodName($paramValue);
            }
        }
        return $SuspendOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendOnDemandJobResponse
    */
    public function SuspendOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendOnDemandJobResponse = new SuspendOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendOnDemandJobResponse, $methodName)) {
                $SuspendOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $SuspendOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeOnDemandJob
    */
    public function ResumeOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeOnDemandJob = new ResumeOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeOnDemandJob, $methodName)) {
                $ResumeOnDemandJob->$methodName($paramValue);
            }
        }
        return $ResumeOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeOnDemandJobResponse
    */
    public function ResumeOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeOnDemandJobResponse = new ResumeOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeOnDemandJobResponse, $methodName)) {
                $ResumeOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $ResumeOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUImageSettings
    */
    public function GetUImageSettings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUImageSettings = new GetUImageSettings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUImageSettings, $methodName)) {
                $GetUImageSettings->$methodName($paramValue);
            }
        }
        return $GetUImageSettings;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUImageSettingsResponse
    */
    public function GetUImageSettingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUImageSettingsResponse = new GetUImageSettingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUImageSettingsResponse, $methodName)) {
                $GetUImageSettingsResponse->$methodName($paramValue);
            }
        }
        return $GetUImageSettingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResource
    */
    public function GetResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResource = new GetResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResource, $methodName)) {
                $GetResource->$methodName($paramValue);
            }
        }
        return $GetResource;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceResponse
    */
    public function GetResourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceResponse = new GetResourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceResponse, $methodName)) {
                $GetResourceResponse->$methodName($paramValue);
            }
        }
        return $GetResourceResponse;
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
    * @return DocumentMapping
    */
    public function DocumentMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DocumentMapping = new DocumentMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DocumentMapping, $methodName)) {
                $DocumentMapping->$methodName($paramValue);
            }
        }
        return $DocumentMapping;
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
