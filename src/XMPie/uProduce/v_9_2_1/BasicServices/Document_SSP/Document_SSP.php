<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;


/**
 * Document Web Service.
 */
class Document_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNewFromDPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromDPKG',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\Property',
  'CreateNewFromDPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromDPKGResponse',
  'CreateNewFromFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromFile',
  'CreateNewFromFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromFileResponse',
  'CreateNewFromURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromURL',
  'CreateNewFromURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromURLResponse',
  'CreateNewFromLocalEmailHosting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromLocalEmailHosting',
  'CreateNewFromLocalEmailHostingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromLocalEmailHostingResponse',
  'CreateNewFromStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromStream',
  'CreateNewFromStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewFromStreamResponse',
  'DeleteResource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeleteResource',
  'DeleteResourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeleteResourceResponse',
  'CreateNewResource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewResource',
  'CreateNewResourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateNewResourceResponse',
  'ReplaceFromDPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromDPKG',
  'ReplaceFromDPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromDPKGResponse',
  'ReplaceFromFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromFile',
  'ReplaceFromFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromFileResponse',
  'ReplaceFromURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromURL',
  'ReplaceFromURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromURLResponse',
  'ReplaceFromLocalEmailHosting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromLocalEmailHosting',
  'ReplaceFromLocalEmailHostingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromLocalEmailHostingResponse',
  'ReplaceFromStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromStream',
  'ReplaceFromStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ReplaceFromStreamResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeleteResponse',
  'CreateDPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateDPKG',
  'CreateDPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateDPKGResponse',
  'CreateDPKGEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateDPKGEx',
  'CreateDPKGExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateDPKGExResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetCampaignResponse',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetFolderPathResponse',
  'GetWebPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetWebPath',
  'GetWebPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetWebPathResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPropertyResponse',
  'GetModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetModificationDate',
  'GetModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetModificationDateResponse',
  'GetResourceModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceModificationDate',
  'GetResourceModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceModificationDateResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetPropertiesResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetNameResponse',
  'GetPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPath',
  'GetPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPathResponse',
  'GetPathEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPathEx',
  'GetPathExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPathExResponse',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamResponse',
  'GetBinaryFileStreamEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamEx',
  'GetBinaryFileStreamExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamExResponse',
  'GetBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamChunk',
  'GetBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamChunkResponse',
  'GetBinaryFileStreamChunkEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamChunkEx',
  'GetBinaryFileStreamChunkExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamChunkExResponse',
  'GetBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamSize',
  'GetBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamSizeResponse',
  'GetBinaryFileStreamSizeEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamSizeEx',
  'GetBinaryFileStreamSizeExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetBinaryFileStreamSizeExResponse',
  'GetDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDownloadURL',
  'GetDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDownloadURLResponse',
  'GetPDFPreview' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreview',
  'GetPDFPreviewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewResponse',
  'GetPDFPreviewBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStream',
  'GetPDFPreviewBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStreamResponse',
  'GetPDFPreviewBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStreamChunk',
  'GetPDFPreviewBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStreamChunkResponse',
  'GetPDFPreviewBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStreamSize',
  'GetPDFPreviewBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewBinaryFileStreamSizeResponse',
  'GetPDFPreviewDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewDownloadURL',
  'GetPDFPreviewDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetPDFPreviewDownloadURLResponse',
  'GetThumbnails' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnails',
  'GetThumbnailsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnailsResponse',
  'GetThumbnailBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnailBinaryFileStream',
  'GetThumbnailBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnailBinaryFileStreamResponse',
  'CreateThumbnailToTempStorage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateThumbnailToTempStorage',
  'CreateThumbnailToTempStorageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateThumbnailToTempStorageResponse',
  'GetThumbnailDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnailDownloadURL',
  'GetThumbnailDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetThumbnailDownloadURLResponse',
  'GetResourcesModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourcesModificationDate',
  'GetResourcesModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourcesModificationDateResponse',
  'GetResources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResources',
  'GetResourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourcesResponse',
  'GetResourceBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStream',
  'GetResourceBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamResponse',
  'GetResourceBinaryFileStreamChunkByFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamChunkByFileName',
  'GetResourceBinaryFileStreamChunkByFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamChunkByFileNameResponse',
  'GetResourceBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamChunk',
  'GetResourceBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamChunkResponse',
  'GetResourceBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamSize',
  'GetResourceBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamSizeResponse',
  'GetResourceBinaryFileStreamSizeByFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamSizeByFileName',
  'GetResourceBinaryFileStreamSizeByFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceBinaryFileStreamSizeByFileNameResponse',
  'GetResourceDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceDownloadURL',
  'GetResourceDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceDownloadURLResponse',
  'GetResourceDownloadURLByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceDownloadURLByID',
  'GetResourceDownloadURLByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceDownloadURLByIDResponse',
  'GetResourceThumbnailBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceThumbnailBinaryFileStream',
  'GetResourceThumbnailBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceThumbnailBinaryFileStreamResponse',
  'CreateResourceThumbnailToTempStorage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateResourceThumbnailToTempStorage',
  'CreateResourceThumbnailToTempStorageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CreateResourceThumbnailToTempStorageResponse',
  'GetResourceThumbnailDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceThumbnailDownloadURL',
  'GetResourceThumbnailDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceThumbnailDownloadURLResponse',
  'GetADORInfoXML' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetADORInfoXML',
  'GetADORInfoXMLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetADORInfoXMLResponse',
  'GetADORInfoXMLResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetADORInfoXMLResult',
  'GetLastJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetLastJob',
  'GetLastJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetLastJobResponse',
  'GetDeploymentURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDeploymentURL',
  'GetDeploymentURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDeploymentURLResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetIDResponse',
  'GetDocumentTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypes',
  'GetDocumentTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypesResponse',
  'GetDocumentTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypesResult',
  'GetDocumentTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypesXMPTblDataSet',
  'GetDocumentTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypesXMPTblDataSetResponse',
  'GetDocumentType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentType',
  'GetDocumentTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypeResponse',
  'GetDocumentTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypeResult',
  'GetDocumentTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypeXMPTblDataSet',
  'GetDocumentTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentTypeXMPTblDataSetResponse',
  'GetDocumentStorageTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypes',
  'GetDocumentStorageTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypesResponse',
  'GetDocumentStorageTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypesResult',
  'GetDocumentStorageTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypesXMPTblDataSet',
  'GetDocumentStorageTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypesXMPTblDataSetResponse',
  'GetDocumentStorageType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageType',
  'GetDocumentStorageTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypeResponse',
  'GetDocumentStorageTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypeResult',
  'GetDocumentStorageTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypeXMPTblDataSet',
  'GetDocumentStorageTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetDocumentStorageTypeXMPTblDataSetResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeleteSettingsResponse',
  'DeployOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeployOnDemandJob',
  'DeployOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DeployOnDemandJobResponse',
  'UnDeployOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\UnDeployOnDemandJob',
  'UnDeployOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\UnDeployOnDemandJobResponse',
  'SuspendOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SuspendOnDemandJob',
  'SuspendOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\SuspendOnDemandJobResponse',
  'ResumeOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ResumeOnDemandJob',
  'ResumeOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\ResumeOnDemandJobResponse',
  'GetUImageSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetUImageSettings',
  'GetUImageSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetUImageSettingsResponse',
  'GetResource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResource',
  'GetResourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\GetResourceResponse',
  'Clone' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CloneCustom',
  'CloneResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\CloneResponse',
  'DocumentMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\DocumentMapping',
  'IDMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\BasicServices\\Document_SSP\\IDMapping',
);

    /**
     * @param string $wsdl The wsdl file to use
     * @param array $options A array of config values
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/Document_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Document from dpkg.
     *
     * @param CreateNewFromDPKG $parameters
     * @return CreateNewFromDPKGResponse
     */
    public function CreateNewFromDPKG(CreateNewFromDPKG $parameters)
    {
      return $this->__soapCall('CreateNewFromDPKG', array($parameters));
    }

    /**
     * Create new Document from file.
     *
     * @param CreateNewFromFile $parameters
     * @return CreateNewFromFileResponse
     */
    public function CreateNewFromFile(CreateNewFromFile $parameters)
    {
      return $this->__soapCall('CreateNewFromFile', array($parameters));
    }

    /**
     * Create new Document from URL.
     *
     * @param CreateNewFromURL $parameters
     * @return CreateNewFromURLResponse
     */
    public function CreateNewFromURL(CreateNewFromURL $parameters)
    {
      return $this->__soapCall('CreateNewFromURL', array($parameters));
    }

    /**
     * Create new Document from Local Email hosting file.
     *
     * @param CreateNewFromLocalEmailHosting $parameters
     * @return CreateNewFromLocalEmailHostingResponse
     */
    public function CreateNewFromLocalEmailHosting(CreateNewFromLocalEmailHosting $parameters)
    {
      return $this->__soapCall('CreateNewFromLocalEmailHosting', array($parameters));
    }

    /**
     * Create new Document from stream.
     *
     * @param CreateNewFromStream $parameters
     * @return CreateNewFromStreamResponse
     */
    public function CreateNewFromStream(CreateNewFromStream $parameters)
    {
      return $this->__soapCall('CreateNewFromStream', array($parameters));
    }

    /**
     * delete a Document's resource.
     *
     * @param DeleteResource $parameters
     * @return DeleteResourceResponse
     */
    public function DeleteResource(DeleteResource $parameters)
    {
      return $this->__soapCall('DeleteResource', array($parameters));
    }

    /**
     * Create new Document's resource.
     *
     * @param CreateNewResource $parameters
     * @return CreateNewResourceResponse
     */
    public function CreateNewResource(CreateNewResource $parameters)
    {
      return $this->__soapCall('CreateNewResource', array($parameters));
    }

    /**
     * Replace from dpkg.
     *
     * @param ReplaceFromDPKG $parameters
     * @return ReplaceFromDPKGResponse
     */
    public function ReplaceFromDPKG(ReplaceFromDPKG $parameters)
    {
      return $this->__soapCall('ReplaceFromDPKG', array($parameters));
    }

    /**
     * Replace from file.
     *
     * @param ReplaceFromFile $parameters
     * @return ReplaceFromFileResponse
     */
    public function ReplaceFromFile(ReplaceFromFile $parameters)
    {
      return $this->__soapCall('ReplaceFromFile', array($parameters));
    }

    /**
     * Replace from URL.
     *
     * @param ReplaceFromURL $parameters
     * @return ReplaceFromURLResponse
     */
    public function ReplaceFromURL(ReplaceFromURL $parameters)
    {
      return $this->__soapCall('ReplaceFromURL', array($parameters));
    }

    /**
     * Replace from Local Email hosting file.
     *
     * @param ReplaceFromLocalEmailHosting $parameters
     * @return ReplaceFromLocalEmailHostingResponse
     */
    public function ReplaceFromLocalEmailHosting(ReplaceFromLocalEmailHosting $parameters)
    {
      return $this->__soapCall('ReplaceFromLocalEmailHosting', array($parameters));
    }

    /**
     * Replace from stream.
     *
     * @param ReplaceFromStream $parameters
     * @return ReplaceFromStreamResponse
     */
    public function ReplaceFromStream(ReplaceFromStream $parameters)
    {
      return $this->__soapCall('ReplaceFromStream', array($parameters));
    }

    /**
     * Delete Document.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Create dpkg.
     *
     * @param CreateDPKG $parameters
     * @return CreateDPKGResponse
     */
    public function CreateDPKG(CreateDPKG $parameters)
    {
      return $this->__soapCall('CreateDPKG', array($parameters));
    }

    /**
     * Create dpkg.
     *
     * @param CreateDPKGEx $parameters
     * @return CreateDPKGExResponse
     */
    public function CreateDPKGEx(CreateDPKGEx $parameters)
    {
      return $this->__soapCall('CreateDPKGEx', array($parameters));
    }

    /**
     * Get Document's Campaign.
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Get Folder Path.
     *
     * @param GetFolderPath $parameters
     * @return GetFolderPathResponse
     */
    public function GetFolderPath(GetFolderPath $parameters)
    {
      return $this->__soapCall('GetFolderPath', array($parameters));
    }

    /**
     * Get Web Path.
     *
     * @param GetWebPath $parameters
     * @return GetWebPathResponse
     */
    public function GetWebPath(GetWebPath $parameters)
    {
      return $this->__soapCall('GetWebPath', array($parameters));
    }

    /**
     * Get property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get modification date.
     *
     * @param GetModificationDate $parameters
     * @return GetModificationDateResponse
     */
    public function GetModificationDate(GetModificationDate $parameters)
    {
      return $this->__soapCall('GetModificationDate', array($parameters));
    }

    /**
     * Get Resource Modification Date as double
     *
     * @param GetResourceModificationDate $parameters
     * @return GetResourceModificationDateResponse
     */
    public function GetResourceModificationDate(GetResourceModificationDate $parameters)
    {
      return $this->__soapCall('GetResourceModificationDate', array($parameters));
    }

    /**
     * Get Document's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all Document's properties.
     *
     * @param GetAllProperties $parameters
     * @return GetAllPropertiesResponse
     */
    public function GetAllProperties(GetAllProperties $parameters)
    {
      return $this->__soapCall('GetAllProperties', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * Set property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set Properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get Document's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get Document's path.
     *
     * @param GetPath $parameters
     * @return GetPathResponse
     */
    public function GetPath(GetPath $parameters)
    {
      return $this->__soapCall('GetPath', array($parameters));
    }

    /**
     * Get Document's path.
     *
     * @param GetPathEx $parameters
     * @return GetPathExResponse
     */
    public function GetPathEx(GetPathEx $parameters)
    {
      return $this->__soapCall('GetPathEx', array($parameters));
    }

    /**
     * return the document file stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * return the document file stream. . in case of xlim document, returns the indx file stream if exists
     *
     * @param GetBinaryFileStreamEx $parameters
     * @return GetBinaryFileStreamExResponse
     */
    public function GetBinaryFileStreamEx(GetBinaryFileStreamEx $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamEx', array($parameters));
    }

    /**
     * Return a document file chunk stream.
     *
     * @param GetBinaryFileStreamChunk $parameters
     * @return GetBinaryFileStreamChunkResponse
     */
    public function GetBinaryFileStreamChunk(GetBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Return a document file chunk stream. in case of xlim document, returns the indx file chunk stream if exists
     *
     * @param GetBinaryFileStreamChunkEx $parameters
     * @return GetBinaryFileStreamChunkExResponse
     */
    public function GetBinaryFileStreamChunkEx(GetBinaryFileStreamChunkEx $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunkEx', array($parameters));
    }

    /**
     * Get document file size.
     *
     * @param GetBinaryFileStreamSize $parameters
     * @return GetBinaryFileStreamSizeResponse
     */
    public function GetBinaryFileStreamSize(GetBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSize', array($parameters));
    }

    /**
     * Get document file size. in case of xlim document, returns the indx file size if exists
     *
     * @param GetBinaryFileStreamSizeEx $parameters
     * @return GetBinaryFileStreamSizeExResponse
     */
    public function GetBinaryFileStreamSizeEx(GetBinaryFileStreamSizeEx $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSizeEx', array($parameters));
    }

    /**
     * return the document file download url.
     *
     * @param GetDownloadURL $parameters
     * @return GetDownloadURLResponse
     */
    public function GetDownloadURL(GetDownloadURL $parameters)
    {
      return $this->__soapCall('GetDownloadURL', array($parameters));
    }

    /**
     * Get PDF Preview.
     *
     * @param GetPDFPreview $parameters
     * @return GetPDFPreviewResponse
     */
    public function GetPDFPreview(GetPDFPreview $parameters)
    {
      return $this->__soapCall('GetPDFPreview', array($parameters));
    }

    /**
     * return the PDF Preview stream.
     *
     * @param GetPDFPreviewBinaryFileStream $parameters
     * @return GetPDFPreviewBinaryFileStreamResponse
     */
    public function GetPDFPreviewBinaryFileStream(GetPDFPreviewBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetPDFPreviewBinaryFileStream', array($parameters));
    }

    /**
     * Return a PDF Preview chunk stream.
     *
     * @param GetPDFPreviewBinaryFileStreamChunk $parameters
     * @return GetPDFPreviewBinaryFileStreamChunkResponse
     */
    public function GetPDFPreviewBinaryFileStreamChunk(GetPDFPreviewBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetPDFPreviewBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get PDF Preview size.
     *
     * @param GetPDFPreviewBinaryFileStreamSize $parameters
     * @return GetPDFPreviewBinaryFileStreamSizeResponse
     */
    public function GetPDFPreviewBinaryFileStreamSize(GetPDFPreviewBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetPDFPreviewBinaryFileStreamSize', array($parameters));
    }

    /**
     * return the PDF Preview download url.
     *
     * @param GetPDFPreviewDownloadURL $parameters
     * @return GetPDFPreviewDownloadURLResponse
     */
    public function GetPDFPreviewDownloadURL(GetPDFPreviewDownloadURL $parameters)
    {
      return $this->__soapCall('GetPDFPreviewDownloadURL', array($parameters));
    }

    /**
     * Get Thumbnails.
     *
     * @param GetThumbnails $parameters
     * @return GetThumbnailsResponse
     */
    public function GetThumbnails(GetThumbnails $parameters)
    {
      return $this->__soapCall('GetThumbnails', array($parameters));
    }

    /**
     * return the thumbnail stream.
     *
     * @param GetThumbnailBinaryFileStream $parameters
     * @return GetThumbnailBinaryFileStreamResponse
     */
    public function GetThumbnailBinaryFileStream(GetThumbnailBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetThumbnailBinaryFileStream', array($parameters));
    }

    /**
     * Creates the document thumbnail into the temp storage and return its token identifier.
     *
     * @param CreateThumbnailToTempStorage $parameters
     * @return CreateThumbnailToTempStorageResponse
     */
    public function CreateThumbnailToTempStorage(CreateThumbnailToTempStorage $parameters)
    {
      return $this->__soapCall('CreateThumbnailToTempStorage', array($parameters));
    }

    /**
     * return the thumbnail download url.
     *
     * @param GetThumbnailDownloadURL $parameters
     * @return GetThumbnailDownloadURLResponse
     */
    public function GetThumbnailDownloadURL(GetThumbnailDownloadURL $parameters)
    {
      return $this->__soapCall('GetThumbnailDownloadURL', array($parameters));
    }

    /**
     * Get all Resources modification date.
     *
     * @param GetResourcesModificationDate $parameters
     * @return GetResourcesModificationDateResponse
     */
    public function GetResourcesModificationDate(GetResourcesModificationDate $parameters)
    {
      return $this->__soapCall('GetResourcesModificationDate', array($parameters));
    }

    /**
     * Get Resources.
     *
     * @param GetResources $parameters
     * @return GetResourcesResponse
     */
    public function GetResources(GetResources $parameters)
    {
      return $this->__soapCall('GetResources', array($parameters));
    }

    /**
     * return the resource stream.
     *
     * @param GetResourceBinaryFileStream $parameters
     * @return GetResourceBinaryFileStreamResponse
     */
    public function GetResourceBinaryFileStream(GetResourceBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetResourceBinaryFileStream', array($parameters));
    }

    /**
     * Return a resource chunk stream.
     *
     * @param GetResourceBinaryFileStreamChunkByFileName $parameters
     * @return GetResourceBinaryFileStreamChunkByFileNameResponse
     */
    public function GetResourceBinaryFileStreamChunkByFileName(GetResourceBinaryFileStreamChunkByFileName $parameters)
    {
      return $this->__soapCall('GetResourceBinaryFileStreamChunkByFileName', array($parameters));
    }

    /**
     * Return a resource chunk stream.
     *
     * @param GetResourceBinaryFileStreamChunk $parameters
     * @return GetResourceBinaryFileStreamChunkResponse
     */
    public function GetResourceBinaryFileStreamChunk(GetResourceBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetResourceBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get resource size.
     *
     * @param GetResourceBinaryFileStreamSize $parameters
     * @return GetResourceBinaryFileStreamSizeResponse
     */
    public function GetResourceBinaryFileStreamSize(GetResourceBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetResourceBinaryFileStreamSize', array($parameters));
    }

    /**
     * Get resource size.
     *
     * @param GetResourceBinaryFileStreamSizeByFileName $parameters
     * @return GetResourceBinaryFileStreamSizeByFileNameResponse
     */
    public function GetResourceBinaryFileStreamSizeByFileName(GetResourceBinaryFileStreamSizeByFileName $parameters)
    {
      return $this->__soapCall('GetResourceBinaryFileStreamSizeByFileName', array($parameters));
    }

    /**
     * return the resource download url.
     *
     * @param GetResourceDownloadURL $parameters
     * @return GetResourceDownloadURLResponse
     */
    public function GetResourceDownloadURL(GetResourceDownloadURL $parameters)
    {
      return $this->__soapCall('GetResourceDownloadURL', array($parameters));
    }

    /**
     * return the resources download url by id.
     *
     * @param GetResourceDownloadURLByID $parameters
     * @return GetResourceDownloadURLByIDResponse
     */
    public function GetResourceDownloadURLByID(GetResourceDownloadURLByID $parameters)
    {
      return $this->__soapCall('GetResourceDownloadURLByID', array($parameters));
    }

    /**
     * return the resource thumbnail stream.
     *
     * @param GetResourceThumbnailBinaryFileStream $parameters
     * @return GetResourceThumbnailBinaryFileStreamResponse
     */
    public function GetResourceThumbnailBinaryFileStream(GetResourceThumbnailBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetResourceThumbnailBinaryFileStream', array($parameters));
    }

    /**
     * Creates the resource thumbnail into the temp storage and return its token identifier.
     *
     * @param CreateResourceThumbnailToTempStorage $parameters
     * @return CreateResourceThumbnailToTempStorageResponse
     */
    public function CreateResourceThumbnailToTempStorage(CreateResourceThumbnailToTempStorage $parameters)
    {
      return $this->__soapCall('CreateResourceThumbnailToTempStorage', array($parameters));
    }

    /**
     * return the resource thumbnail download url.
     *
     * @param GetResourceThumbnailDownloadURL $parameters
     * @return GetResourceThumbnailDownloadURLResponse
     */
    public function GetResourceThumbnailDownloadURL(GetResourceThumbnailDownloadURL $parameters)
    {
      return $this->__soapCall('GetResourceThumbnailDownloadURL', array($parameters));
    }

    /**
     * Get the used ADOR info xml
     *
     * @param GetADORInfoXML $parameters
     * @return GetADORInfoXMLResponse
     */
    public function GetADORInfoXML(GetADORInfoXML $parameters)
    {
      return $this->__soapCall('GetADORInfoXML', array($parameters));
    }

    /**
     * Get Last job id.
     *
     * @param GetLastJob $parameters
     * @return GetLastJobResponse
     */
    public function GetLastJob(GetLastJob $parameters)
    {
      return $this->__soapCall('GetLastJob', array($parameters));
    }

    /**
     * Get OnDemand URL.
     *
     * @param GetDeploymentURL $parameters
     * @return GetDeploymentURLResponse
     */
    public function GetDeploymentURL(GetDeploymentURL $parameters)
    {
      return $this->__soapCall('GetDeploymentURL', array($parameters));
    }

    /**
     * Get document ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get DataSet with Document types.
     *
     * @param GetDocumentTypes $parameters
     * @return GetDocumentTypesResponse
     */
    public function GetDocumentTypes(GetDocumentTypes $parameters)
    {
      return $this->__soapCall('GetDocumentTypes', array($parameters));
    }

    /**
     * Get DataSet with Document types.
     *
     * @param GetDocumentTypesXMPTblDataSet $parameters
     * @return GetDocumentTypesXMPTblDataSetResponse
     */
    public function GetDocumentTypesXMPTblDataSet(GetDocumentTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with Document type information.
     *
     * @param GetDocumentType $parameters
     * @return GetDocumentTypeResponse
     */
    public function GetDocumentType(GetDocumentType $parameters)
    {
      return $this->__soapCall('GetDocumentType', array($parameters));
    }

    /**
     * Get DataSet with Document type information.
     *
     * @param GetDocumentTypeXMPTblDataSet $parameters
     * @return GetDocumentTypeXMPTblDataSetResponse
     */
    public function GetDocumentTypeXMPTblDataSet(GetDocumentTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with Document Storage types.
     *
     * @param GetDocumentStorageTypes $parameters
     * @return GetDocumentStorageTypesResponse
     */
    public function GetDocumentStorageTypes(GetDocumentStorageTypes $parameters)
    {
      return $this->__soapCall('GetDocumentStorageTypes', array($parameters));
    }

    /**
     * Get DataSet with Document Storage types.
     *
     * @param GetDocumentStorageTypesXMPTblDataSet $parameters
     * @return GetDocumentStorageTypesXMPTblDataSetResponse
     */
    public function GetDocumentStorageTypesXMPTblDataSet(GetDocumentStorageTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentStorageTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with Document Storage type information.
     *
     * @param GetDocumentStorageType $parameters
     * @return GetDocumentStorageTypeResponse
     */
    public function GetDocumentStorageType(GetDocumentStorageType $parameters)
    {
      return $this->__soapCall('GetDocumentStorageType', array($parameters));
    }

    /**
     * Get DataSet with Document Storage type information.
     *
     * @param GetDocumentStorageTypeXMPTblDataSet $parameters
     * @return GetDocumentStorageTypeXMPTblDataSetResponse
     */
    public function GetDocumentStorageTypeXMPTblDataSet(GetDocumentStorageTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentStorageTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Is Document exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Defines Setting(s).
     *
     * @param SetSettings $parameters
     * @return SetSettingsResponse
     */
    public function SetSettings(SetSettings $parameters)
    {
      return $this->__soapCall('SetSettings', array($parameters));
    }

    /**
     * Returns Setting(s) for the Document and the user.
     *
     * @param GetSettings $parameters
     * @return GetSettingsResponse
     */
    public function GetSettings(GetSettings $parameters)
    {
      return $this->__soapCall('GetSettings', array($parameters));
    }

    /**
     * Deletes Setting(s).
     *
     * @param DeleteSettings $parameters
     * @return DeleteSettingsResponse
     */
    public function DeleteSettings(DeleteSettings $parameters)
    {
      return $this->__soapCall('DeleteSettings', array($parameters));
    }

    /**
     * Deploy on demand job.
     *
     * @param DeployOnDemandJob $parameters
     * @return DeployOnDemandJobResponse
     */
    public function DeployOnDemandJob(DeployOnDemandJob $parameters)
    {
      return $this->__soapCall('DeployOnDemandJob', array($parameters));
    }

    /**
     * UnDeploy on demand job.
     *
     * @param UnDeployOnDemandJob $parameters
     * @return UnDeployOnDemandJobResponse
     */
    public function UnDeployOnDemandJob(UnDeployOnDemandJob $parameters)
    {
      return $this->__soapCall('UnDeployOnDemandJob', array($parameters));
    }

    /**
     * Suspend on demand job.
     *
     * @param SuspendOnDemandJob $parameters
     * @return SuspendOnDemandJobResponse
     */
    public function SuspendOnDemandJob(SuspendOnDemandJob $parameters)
    {
      return $this->__soapCall('SuspendOnDemandJob', array($parameters));
    }

    /**
     * Resume on demand job.
     *
     * @param ResumeOnDemandJob $parameters
     * @return ResumeOnDemandJobResponse
     */
    public function ResumeOnDemandJob(ResumeOnDemandJob $parameters)
    {
      return $this->__soapCall('ResumeOnDemandJob', array($parameters));
    }

    /**
     * get the uImage settings of a uImage document.
     *
     * @param GetUImageSettings $parameters
     * @return GetUImageSettingsResponse
     */
    public function GetUImageSettings(GetUImageSettings $parameters)
    {
      return $this->__soapCall('GetUImageSettings', array($parameters));
    }

    /**
     * Get resource file path from resource and resource file name
     *
     * @param GetResource $parameters
     * @return GetResourceResponse
     */
    public function GetResource(GetResource $parameters)
    {
      return $this->__soapCall('GetResource', array($parameters));
    }

    /**
     * Duplicates the Document into a campaign.
     *
     * @param CloneCustom $parameters
     * @return CloneResponse
     */
    public function aClone($parameters)
    {
      return $this->__soapCall('Clone', array($parameters));
    }

}
