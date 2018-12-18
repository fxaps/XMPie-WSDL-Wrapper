<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;


/**
 * Campaign Web Service.
 */
class Campaign_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewResponse',
  'CreateNewFromCPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewFromCPKG',
  'CreateNewFromCPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewFromCPKGResponse',
  'CreateNewFromVPC' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewFromVPC',
  'CreateNewFromVPCResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewFromVPCResponse',
  'GetCreateNewFromCPKGResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetCreateNewFromCPKGResult',
  'GetCreateNewFromCPKGResultResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetCreateNewFromCPKGResultResponse',
  'CreateCampaignResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateCampaignResult',
  'GetCreateNewFromVPCResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetCreateNewFromVPCResult',
  'GetCreateNewFromVPCResultResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetCreateNewFromVPCResultResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteResponse',
  'CreateFullCPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateFullCPKG',
  'CreateFullCPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateFullCPKGResponse',
  'CreateCPKG' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateCPKG',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfString',
  'CreateCPKGResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateCPKGResponse',
  'GetAccount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAccount',
  'GetAccountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAccountResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetNameResponse',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFolderPathResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetProperties',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetPropertiesResponse',
  'GetDocumentID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentID',
  'GetDocumentIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentIDResponse',
  'GetDocuments' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocuments',
  'GetDocumentsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsResponse',
  'GetDocumentsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsDataSet',
  'GetDocumentsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsDataSetResponse',
  'GetDocumentsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsDataSetResult',
  'GetDocumentsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsXMPTblDataSet',
  'GetDocumentsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDocumentsXMPTblDataSetResponse',
  'DeleteDocuments' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteDocuments',
  'DeleteDocumentsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteDocumentsResponse',
  'DeleteAllDocuments' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllDocuments',
  'DeleteAllDocumentsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllDocumentsResponse',
  'GetDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourceID',
  'GetDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourceIDResponse',
  'GetDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSources',
  'GetDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesResponse',
  'GetDataSourcesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesDataSet',
  'GetDataSourcesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesDataSetResponse',
  'GetDataSourcesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesDataSetResult',
  'GetDataSourcesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesXMPTblDataSet',
  'GetDataSourcesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetDataSourcesXMPTblDataSetResponse',
  'DeleteDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteDataSources',
  'DeleteDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteDataSourcesResponse',
  'DeleteAllDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllDataSources',
  'DeleteAllDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllDataSourcesResponse',
  'GetAssetSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourceID',
  'GetAssetSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourceIDResponse',
  'GetAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSources',
  'GetAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesResponse',
  'GetAssetSourcesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesDataSet',
  'GetAssetSourcesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesDataSetResponse',
  'GetAssetSourcesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesDataSetResult',
  'GetAssetSourcesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesXMPTblDataSet',
  'GetAssetSourcesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAssetSourcesXMPTblDataSetResponse',
  'DeleteAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAssetSources',
  'DeleteAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAssetSourcesResponse',
  'DeleteAllAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllAssetSources',
  'DeleteAllAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllAssetSourcesResponse',
  'GetTouchPointID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointID',
  'GetTouchPointIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointIDResponse',
  'GetTouchPoints' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPoints',
  'GetTouchPointsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsResponse',
  'GetTouchPointsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsDataSet',
  'GetTouchPointsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsDataSetResponse',
  'GetTouchPointsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsDataSetResult',
  'GetTouchPointsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsXMPTblDataSet',
  'GetTouchPointsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTouchPointsXMPTblDataSetResponse',
  'DeleteTouchPoints' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteTouchPoints',
  'DeleteTouchPointsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteTouchPointsResponse',
  'DeleteAllTouchPoints' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllTouchPoints',
  'DeleteAllTouchPointsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllTouchPointsResponse',
  'GetFontsFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsFolderPath',
  'GetFontsFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsFolderPathResponse',
  'GetFontID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontID',
  'GetFontIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontIDResponse',
  'GetFonts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFonts',
  'GetFontsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsResponse',
  'GetFontsModificationDate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsModificationDate',
  'GetFontsModificationDateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsModificationDateResponse',
  'GetFontsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsDataSet',
  'GetFontsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsDataSetResponse',
  'GetFontsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsDataSetResult',
  'GetFontsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsXMPTblDataSet',
  'GetFontsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetFontsXMPTblDataSetResponse',
  'DeleteFonts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteFonts',
  'DeleteFontsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteFontsResponse',
  'DeleteAllFonts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllFonts',
  'DeleteAllFontsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllFontsResponse',
  'GetPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlan',
  'GetPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanResponse',
  'GetPlanDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanDataSet',
  'GetPlanDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanDataSetResponse',
  'GetPlanDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanDataSetResult',
  'GetPlanXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanXMPTblDataSet',
  'GetPlanXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPlanXMPTblDataSetResponse',
  'DeletePlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePlan',
  'DeletePlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePlanResponse',
  'GetEmailMarketingID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingID',
  'GetEmailMarketingIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingIDResponse',
  'GetEmailMarketings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketings',
  'GetEmailMarketingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsResponse',
  'GetEmailMarketingsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsDataSet',
  'GetEmailMarketingsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsDataSetResponse',
  'GetEmailMarketingsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsDataSetResult',
  'GetEmailMarketingsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsXMPTblDataSet',
  'GetEmailMarketingsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetEmailMarketingsXMPTblDataSetResponse',
  'DeleteEmailMarketings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteEmailMarketings',
  'DeleteEmailMarketingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteEmailMarketingsResponse',
  'DeleteAllEmailMarketings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllEmailMarketings',
  'DeleteAllEmailMarketingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllEmailMarketingsResponse',
  'GetPortID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortID',
  'GetPortIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortIDResponse',
  'GetPorts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPorts',
  'GetPortsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsResponse',
  'GetPortsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsDataSet',
  'GetPortsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsDataSetResponse',
  'GetPortsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsDataSetResult',
  'GetPortsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsXMPTblDataSet',
  'GetPortsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPortsXMPTblDataSetResponse',
  'DeletePorts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePorts',
  'DeletePortsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePortsResponse',
  'DeleteAllPorts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllPorts',
  'DeleteAllPortsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllPortsResponse',
  'GetPopulationGUID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationGUID',
  'GetPopulationGUIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationGUIDResponse',
  'GetPopulations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulations',
  'GetPopulationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsResponse',
  'GetPopulationsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsDataSet',
  'GetPopulationsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsDataSetResponse',
  'GetPopulationsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsDataSetResult',
  'GetPopulationsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsXMPTblDataSet',
  'GetPopulationsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetPopulationsXMPTblDataSetResponse',
  'DeletePopulations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePopulations',
  'DeletePopulationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeletePopulationsResponse',
  'DeleteAllPopulations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllPopulations',
  'DeleteAllPopulationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAllPopulationsResponse',
  'GetLastJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLastJob',
  'GetLastJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLastJobResponse',
  'GetLastEmailMarketing' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLastEmailMarketing',
  'GetLastEmailMarketingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLastEmailMarketingResponse',
  'GetLocalEmailFileNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLocalEmailFileNames',
  'GetLocalEmailFileNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetLocalEmailFileNamesResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetIDResponse',
  'GetUCreateXMSiteDefinitionsPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetUCreateXMSiteDefinitionsPath',
  'GetUCreateXMSiteDefinitionsPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetUCreateXMSiteDefinitionsPathResponse',
  'GetADORsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsDataSet',
  'GetADORsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsDataSetResponse',
  'GetADORsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsDataSetResult',
  'GetADORsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsXMPTblDataSet',
  'GetADORsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsXMPTblDataSetResponse',
  'GetTrackedADORNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTrackedADORNames',
  'GetTrackedADORNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTrackedADORNamesResponse',
  'SetTrackedADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetTrackedADORs',
  'SetTrackedADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetTrackedADORsResponse',
  'SetTrackAllTextADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetTrackAllTextADORs',
  'SetTrackAllTextADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetTrackAllTextADORsResponse',
  'GetTrackAllTextADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTrackAllTextADORs',
  'GetTrackAllTextADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetTrackAllTextADORsResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteSettingsResponse',
  'GetADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORs',
  'GetADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetADORsResponse',
  'ArrayOfPlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfPlanObject',
  'PlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\PlanObject',
  'CloneCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneCustom',
  'CloneResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneResponse',
  'CampaignMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CampaignMapping',
  'IDMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\IDMapping',
  'PlanMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\PlanMapping',
  'ArrayOfDocumentMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfDocumentMapping',
  'DocumentMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DocumentMapping',
  'ArrayOfDataSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfDataSourceMapping',
  'DataSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DataSourceMapping',
  'ArrayOfAssetSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\ArrayOfAssetSourceMapping',
  'AssetSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\AssetSourceMapping',
  'CloneFull' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneFull',
  'CloneFullResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneFullResponse',
  'CloneAllFonts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneAllFonts',
  'CloneAllFontsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CloneAllFontsResponse',
  'CreateNewAdditionalField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewAdditionalField',
  'CreateNewAdditionalFieldResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\CreateNewAdditionalFieldResponse',
  'SetAdditionalFieldDefaultValue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldDefaultValue',
  'SetAdditionalFieldDefaultValueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldDefaultValueResponse',
  'GetAdditionalFieldDefaultValue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAdditionalFieldDefaultValue',
  'GetAdditionalFieldDefaultValueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAdditionalFieldDefaultValueResponse',
  'GetAdditionalFields' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAdditionalFields',
  'GetAdditionalFieldsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\GetAdditionalFieldsResponse',
  'DeleteAdditionalFields' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAdditionalFields',
  'DeleteAdditionalFieldsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAdditionalFieldsResponse',
  'SetAdditionalFieldValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldValues',
  'SetAdditionalFieldValuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldValuesResponse',
  'SetAdditionalFieldValuesForRecipients' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldValuesForRecipients',
  'SetAdditionalFieldValuesForRecipientsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\SetAdditionalFieldValuesForRecipientsResponse',
  'DeleteAdditionalFieldValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAdditionalFieldValues',
  'DeleteAdditionalFieldValuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Campaign_SSP\\DeleteAdditionalFieldValuesResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Campaign_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Campaign.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create new Campaign from CPKG.
     *
     * @param CreateNewFromCPKG $parameters
     * @return CreateNewFromCPKGResponse
     */
    public function CreateNewFromCPKG(CreateNewFromCPKG $parameters)
    {
      return $this->__soapCall('CreateNewFromCPKG', array($parameters));
    }

    /**
     * Create new Campaign from VPC.
     *
     * @param CreateNewFromVPC $parameters
     * @return CreateNewFromVPCResponse
     */
    public function CreateNewFromVPC(CreateNewFromVPC $parameters)
    {
      return $this->__soapCall('CreateNewFromVPC', array($parameters));
    }

    /**
     * Returns result of asynchronic call to CreateNewFromCPKG method.
     *
     * @param GetCreateNewFromCPKGResult $parameters
     * @return GetCreateNewFromCPKGResultResponse
     */
    public function GetCreateNewFromCPKGResult(GetCreateNewFromCPKGResult $parameters)
    {
      return $this->__soapCall('GetCreateNewFromCPKGResult', array($parameters));
    }

    /**
     * Returns result of asynchronic call to CreateNewFromVPC method.
     *
     * @param GetCreateNewFromVPCResult $parameters
     * @return GetCreateNewFromVPCResultResponse
     */
    public function GetCreateNewFromVPCResult(GetCreateNewFromVPCResult $parameters)
    {
      return $this->__soapCall('GetCreateNewFromVPCResult', array($parameters));
    }

    /**
     * Delete Campaign.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Create full CPKG.
     *
     * @param CreateFullCPKG $parameters
     * @return CreateFullCPKGResponse
     */
    public function CreateFullCPKG(CreateFullCPKG $parameters)
    {
      return $this->__soapCall('CreateFullCPKG', array($parameters));
    }

    /**
     * Create CPKG.
     *
     * @param CreateCPKG $parameters
     * @return CreateCPKGResponse
     */
    public function CreateCPKG(CreateCPKG $parameters)
    {
      return $this->__soapCall('CreateCPKG', array($parameters));
    }

    /**
     * Get Campaign's Account.
     *
     * @param GetAccount $parameters
     * @return GetAccountResponse
     */
    public function GetAccount(GetAccount $parameters)
    {
      return $this->__soapCall('GetAccount', array($parameters));
    }

    /**
     * Get Campaign's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
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
     * Get Property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get Campaign's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all Campaign's properties.
     *
     * @param GetAllProperties $parameters
     * @return GetAllPropertiesResponse
     */
    public function GetAllProperties(GetAllProperties $parameters)
    {
      return $this->__soapCall('GetAllProperties', array($parameters));
    }

    /**
     * Get Properties view.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get Properties view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * Set Property.
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
     * Get Document ID by name.
     *
     * @param GetDocumentID $parameters
     * @return GetDocumentIDResponse
     */
    public function GetDocumentID(GetDocumentID $parameters)
    {
      return $this->__soapCall('GetDocumentID', array($parameters));
    }

    /**
     * Get Campaign's Documents.
     *
     * @param GetDocuments $parameters
     * @return GetDocumentsResponse
     */
    public function GetDocuments(GetDocuments $parameters)
    {
      return $this->__soapCall('GetDocuments', array($parameters));
    }

    /**
     * Get Documents view.
     *
     * @param GetDocumentsDataSet $parameters
     * @return GetDocumentsDataSetResponse
     */
    public function GetDocumentsDataSet(GetDocumentsDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentsDataSet', array($parameters));
    }

    /**
     * Get Documents view.
     *
     * @param GetDocumentsXMPTblDataSet $parameters
     * @return GetDocumentsXMPTblDataSetResponse
     */
    public function GetDocumentsXMPTblDataSet(GetDocumentsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDocumentsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Documents.
     *
     * @param DeleteDocuments $parameters
     * @return DeleteDocumentsResponse
     */
    public function DeleteDocuments(DeleteDocuments $parameters)
    {
      return $this->__soapCall('DeleteDocuments', array($parameters));
    }

    /**
     * Delete all Documents.
     *
     * @param DeleteAllDocuments $parameters
     * @return DeleteAllDocumentsResponse
     */
    public function DeleteAllDocuments(DeleteAllDocuments $parameters)
    {
      return $this->__soapCall('DeleteAllDocuments', array($parameters));
    }

    /**
     * Get Data source ID by name.
     *
     * @param GetDataSourceID $parameters
     * @return GetDataSourceIDResponse
     */
    public function GetDataSourceID(GetDataSourceID $parameters)
    {
      return $this->__soapCall('GetDataSourceID', array($parameters));
    }

    /**
     * Get Campaing's Data sources.
     *
     * @param GetDataSources $parameters
     * @return GetDataSourcesResponse
     */
    public function GetDataSources(GetDataSources $parameters)
    {
      return $this->__soapCall('GetDataSources', array($parameters));
    }

    /**
     * Get Data sources view.
     *
     * @param GetDataSourcesDataSet $parameters
     * @return GetDataSourcesDataSetResponse
     */
    public function GetDataSourcesDataSet(GetDataSourcesDataSet $parameters)
    {
      return $this->__soapCall('GetDataSourcesDataSet', array($parameters));
    }

    /**
     * Get Data sources view.
     *
     * @param GetDataSourcesXMPTblDataSet $parameters
     * @return GetDataSourcesXMPTblDataSetResponse
     */
    public function GetDataSourcesXMPTblDataSet(GetDataSourcesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDataSourcesXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Data source.
     *
     * @param DeleteDataSources $parameters
     * @return DeleteDataSourcesResponse
     */
    public function DeleteDataSources(DeleteDataSources $parameters)
    {
      return $this->__soapCall('DeleteDataSources', array($parameters));
    }

    /**
     * Delete all Data source.
     *
     * @param DeleteAllDataSources $parameters
     * @return DeleteAllDataSourcesResponse
     */
    public function DeleteAllDataSources(DeleteAllDataSources $parameters)
    {
      return $this->__soapCall('DeleteAllDataSources', array($parameters));
    }

    /**
     * Get Asset source ID by name.
     *
     * @param GetAssetSourceID $parameters
     * @return GetAssetSourceIDResponse
     */
    public function GetAssetSourceID(GetAssetSourceID $parameters)
    {
      return $this->__soapCall('GetAssetSourceID', array($parameters));
    }

    /**
     * Get Campaign's Asset sources.
     *
     * @param GetAssetSources $parameters
     * @return GetAssetSourcesResponse
     */
    public function GetAssetSources(GetAssetSources $parameters)
    {
      return $this->__soapCall('GetAssetSources', array($parameters));
    }

    /**
     * Get Asset sources view.
     *
     * @param GetAssetSourcesDataSet $parameters
     * @return GetAssetSourcesDataSetResponse
     */
    public function GetAssetSourcesDataSet(GetAssetSourcesDataSet $parameters)
    {
      return $this->__soapCall('GetAssetSourcesDataSet', array($parameters));
    }

    /**
     * Get Asset sources view.
     *
     * @param GetAssetSourcesXMPTblDataSet $parameters
     * @return GetAssetSourcesXMPTblDataSetResponse
     */
    public function GetAssetSourcesXMPTblDataSet(GetAssetSourcesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAssetSourcesXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Asset sources.
     *
     * @param DeleteAssetSources $parameters
     * @return DeleteAssetSourcesResponse
     */
    public function DeleteAssetSources(DeleteAssetSources $parameters)
    {
      return $this->__soapCall('DeleteAssetSources', array($parameters));
    }

    /**
     * Delete all Asset sources.
     *
     * @param DeleteAllAssetSources $parameters
     * @return DeleteAllAssetSourcesResponse
     */
    public function DeleteAllAssetSources(DeleteAllAssetSources $parameters)
    {
      return $this->__soapCall('DeleteAllAssetSources', array($parameters));
    }

    /**
     * Get Touch Point ID by name.
     *
     * @param GetTouchPointID $parameters
     * @return GetTouchPointIDResponse
     */
    public function GetTouchPointID(GetTouchPointID $parameters)
    {
      return $this->__soapCall('GetTouchPointID', array($parameters));
    }

    /**
     * Get Campaign's Touch Points.
     *
     * @param GetTouchPoints $parameters
     * @return GetTouchPointsResponse
     */
    public function GetTouchPoints(GetTouchPoints $parameters)
    {
      return $this->__soapCall('GetTouchPoints', array($parameters));
    }

    /**
     * Get Touch Points view.
     *
     * @param GetTouchPointsDataSet $parameters
     * @return GetTouchPointsDataSetResponse
     */
    public function GetTouchPointsDataSet(GetTouchPointsDataSet $parameters)
    {
      return $this->__soapCall('GetTouchPointsDataSet', array($parameters));
    }

    /**
     * Get Touch Points view.
     *
     * @param GetTouchPointsXMPTblDataSet $parameters
     * @return GetTouchPointsXMPTblDataSetResponse
     */
    public function GetTouchPointsXMPTblDataSet(GetTouchPointsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetTouchPointsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Touch Points.
     *
     * @param DeleteTouchPoints $parameters
     * @return DeleteTouchPointsResponse
     */
    public function DeleteTouchPoints(DeleteTouchPoints $parameters)
    {
      return $this->__soapCall('DeleteTouchPoints', array($parameters));
    }

    /**
     * Delete all Touch Points.
     *
     * @param DeleteAllTouchPoints $parameters
     * @return DeleteAllTouchPointsResponse
     */
    public function DeleteAllTouchPoints(DeleteAllTouchPoints $parameters)
    {
      return $this->__soapCall('DeleteAllTouchPoints', array($parameters));
    }

    /**
     * Get Fonts Folder Path.
     *
     * @param GetFontsFolderPath $parameters
     * @return GetFontsFolderPathResponse
     */
    public function GetFontsFolderPath(GetFontsFolderPath $parameters)
    {
      return $this->__soapCall('GetFontsFolderPath', array($parameters));
    }

    /**
     * Get Font ID by name.
     *
     * @param GetFontID $parameters
     * @return GetFontIDResponse
     */
    public function GetFontID(GetFontID $parameters)
    {
      return $this->__soapCall('GetFontID', array($parameters));
    }

    /**
     * Get Campaign's Fonts.
     *
     * @param GetFonts $parameters
     * @return GetFontsResponse
     */
    public function GetFonts(GetFonts $parameters)
    {
      return $this->__soapCall('GetFonts', array($parameters));
    }

    /**
     * Get Campaign's Fonts modification date.
     *
     * @param GetFontsModificationDate $parameters
     * @return GetFontsModificationDateResponse
     */
    public function GetFontsModificationDate(GetFontsModificationDate $parameters)
    {
      return $this->__soapCall('GetFontsModificationDate', array($parameters));
    }

    /**
     * Get Fonts view.
     *
     * @param GetFontsDataSet $parameters
     * @return GetFontsDataSetResponse
     */
    public function GetFontsDataSet(GetFontsDataSet $parameters)
    {
      return $this->__soapCall('GetFontsDataSet', array($parameters));
    }

    /**
     * Get Fonts view.
     *
     * @param GetFontsXMPTblDataSet $parameters
     * @return GetFontsXMPTblDataSetResponse
     */
    public function GetFontsXMPTblDataSet(GetFontsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetFontsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Fonts.
     *
     * @param DeleteFonts $parameters
     * @return DeleteFontsResponse
     */
    public function DeleteFonts(DeleteFonts $parameters)
    {
      return $this->__soapCall('DeleteFonts', array($parameters));
    }

    /**
     * Delete all Fonts.
     *
     * @param DeleteAllFonts $parameters
     * @return DeleteAllFontsResponse
     */
    public function DeleteAllFonts(DeleteAllFonts $parameters)
    {
      return $this->__soapCall('DeleteAllFonts', array($parameters));
    }

    /**
     * Get Campaign's Plan.
     *
     * @param GetPlan $parameters
     * @return GetPlanResponse
     */
    public function GetPlan(GetPlan $parameters)
    {
      return $this->__soapCall('GetPlan', array($parameters));
    }

    /**
     * Get Plan view.
     *
     * @param GetPlanDataSet $parameters
     * @return GetPlanDataSetResponse
     */
    public function GetPlanDataSet(GetPlanDataSet $parameters)
    {
      return $this->__soapCall('GetPlanDataSet', array($parameters));
    }

    /**
     * Get Plan view.
     *
     * @param GetPlanXMPTblDataSet $parameters
     * @return GetPlanXMPTblDataSetResponse
     */
    public function GetPlanXMPTblDataSet(GetPlanXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPlanXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Plan.
     *
     * @param DeletePlan $parameters
     * @return DeletePlanResponse
     */
    public function DeletePlan(DeletePlan $parameters)
    {
      return $this->__soapCall('DeletePlan', array($parameters));
    }

    /**
     * Get Email Template ID by name.
     *
     * @param GetEmailMarketingID $parameters
     * @return GetEmailMarketingIDResponse
     */
    public function GetEmailMarketingID(GetEmailMarketingID $parameters)
    {
      return $this->__soapCall('GetEmailMarketingID', array($parameters));
    }

    /**
     * Get Campaign's Email Templates.
     *
     * @param GetEmailMarketings $parameters
     * @return GetEmailMarketingsResponse
     */
    public function GetEmailMarketings(GetEmailMarketings $parameters)
    {
      return $this->__soapCall('GetEmailMarketings', array($parameters));
    }

    /**
     * Get Email Templates view.
     *
     * @param GetEmailMarketingsDataSet $parameters
     * @return GetEmailMarketingsDataSetResponse
     */
    public function GetEmailMarketingsDataSet(GetEmailMarketingsDataSet $parameters)
    {
      return $this->__soapCall('GetEmailMarketingsDataSet', array($parameters));
    }

    /**
     * Get Email Templates view.
     *
     * @param GetEmailMarketingsXMPTblDataSet $parameters
     * @return GetEmailMarketingsXMPTblDataSetResponse
     */
    public function GetEmailMarketingsXMPTblDataSet(GetEmailMarketingsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetEmailMarketingsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Email Templates.
     *
     * @param DeleteEmailMarketings $parameters
     * @return DeleteEmailMarketingsResponse
     */
    public function DeleteEmailMarketings(DeleteEmailMarketings $parameters)
    {
      return $this->__soapCall('DeleteEmailMarketings', array($parameters));
    }

    /**
     * Delete all Email Templates.
     *
     * @param DeleteAllEmailMarketings $parameters
     * @return DeleteAllEmailMarketingsResponse
     */
    public function DeleteAllEmailMarketings(DeleteAllEmailMarketings $parameters)
    {
      return $this->__soapCall('DeleteAllEmailMarketings', array($parameters));
    }

    /**
     * Get Port ID by name.
     *
     * @param GetPortID $parameters
     * @return GetPortIDResponse
     */
    public function GetPortID(GetPortID $parameters)
    {
      return $this->__soapCall('GetPortID', array($parameters));
    }

    /**
     * Get Campaign's Ports.
     *
     * @param GetPorts $parameters
     * @return GetPortsResponse
     */
    public function GetPorts(GetPorts $parameters)
    {
      return $this->__soapCall('GetPorts', array($parameters));
    }

    /**
     * Get Ports view.
     *
     * @param GetPortsDataSet $parameters
     * @return GetPortsDataSetResponse
     */
    public function GetPortsDataSet(GetPortsDataSet $parameters)
    {
      return $this->__soapCall('GetPortsDataSet', array($parameters));
    }

    /**
     * Get Ports view.
     *
     * @param GetPortsXMPTblDataSet $parameters
     * @return GetPortsXMPTblDataSetResponse
     */
    public function GetPortsXMPTblDataSet(GetPortsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPortsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Ports.
     *
     * @param DeletePorts $parameters
     * @return DeletePortsResponse
     */
    public function DeletePorts(DeletePorts $parameters)
    {
      return $this->__soapCall('DeletePorts', array($parameters));
    }

    /**
     * Delete all Ports.
     *
     * @param DeleteAllPorts $parameters
     * @return DeleteAllPortsResponse
     */
    public function DeleteAllPorts(DeleteAllPorts $parameters)
    {
      return $this->__soapCall('DeleteAllPorts', array($parameters));
    }

    /**
     * Get Population GUID by name.
     *
     * @param GetPopulationGUID $parameters
     * @return GetPopulationGUIDResponse
     */
    public function GetPopulationGUID(GetPopulationGUID $parameters)
    {
      return $this->__soapCall('GetPopulationGUID', array($parameters));
    }

    /**
     * Get Campaign's Population GUIDs.
     *
     * @param GetPopulations $parameters
     * @return GetPopulationsResponse
     */
    public function GetPopulations(GetPopulations $parameters)
    {
      return $this->__soapCall('GetPopulations', array($parameters));
    }

    /**
     * Get Populations view.
     *
     * @param GetPopulationsDataSet $parameters
     * @return GetPopulationsDataSetResponse
     */
    public function GetPopulationsDataSet(GetPopulationsDataSet $parameters)
    {
      return $this->__soapCall('GetPopulationsDataSet', array($parameters));
    }

    /**
     * Get Populations view.
     *
     * @param GetPopulationsXMPTblDataSet $parameters
     * @return GetPopulationsXMPTblDataSetResponse
     */
    public function GetPopulationsXMPTblDataSet(GetPopulationsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPopulationsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Populations.
     *
     * @param DeletePopulations $parameters
     * @return DeletePopulationsResponse
     */
    public function DeletePopulations(DeletePopulations $parameters)
    {
      return $this->__soapCall('DeletePopulations', array($parameters));
    }

    /**
     * Delete all Populations.
     *
     * @param DeleteAllPopulations $parameters
     * @return DeleteAllPopulationsResponse
     */
    public function DeleteAllPopulations(DeleteAllPopulations $parameters)
    {
      return $this->__soapCall('DeleteAllPopulations', array($parameters));
    }

    /**
     * Get Last Interactive job id.
     *
     * @param GetLastJob $parameters
     * @return GetLastJobResponse
     */
    public function GetLastJob(GetLastJob $parameters)
    {
      return $this->__soapCall('GetLastJob', array($parameters));
    }

    /**
     * Get Last email marketing item id.
     *
     * @param GetLastEmailMarketing $parameters
     * @return GetLastEmailMarketingResponse
     */
    public function GetLastEmailMarketing(GetLastEmailMarketing $parameters)
    {
      return $this->__soapCall('GetLastEmailMarketing', array($parameters));
    }

    /**
     * Get Campaign's Local Email files.
     *
     * @param GetLocalEmailFileNames $parameters
     * @return GetLocalEmailFileNamesResponse
     */
    public function GetLocalEmailFileNames(GetLocalEmailFileNames $parameters)
    {
      return $this->__soapCall('GetLocalEmailFileNames', array($parameters));
    }

    /**
     * Get campaign ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get the campaigns site definitions path.
     *
     * @param GetUCreateXMSiteDefinitionsPath $parameters
     * @return GetUCreateXMSiteDefinitionsPathResponse
     */
    public function GetUCreateXMSiteDefinitionsPath(GetUCreateXMSiteDefinitionsPath $parameters)
    {
      return $this->__soapCall('GetUCreateXMSiteDefinitionsPath', array($parameters));
    }

    /**
     * Get ADORs data set.
     *
     * @param GetADORsDataSet $parameters
     * @return GetADORsDataSetResponse
     */
    public function GetADORsDataSet(GetADORsDataSet $parameters)
    {
      return $this->__soapCall('GetADORsDataSet', array($parameters));
    }

    /**
     * Get ADORs data set.
     *
     * @param GetADORsXMPTblDataSet $parameters
     * @return GetADORsXMPTblDataSetResponse
     */
    public function GetADORsXMPTblDataSet(GetADORsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetADORsXMPTblDataSet', array($parameters));
    }

    /**
     * Get tracked ADOR names.
     *
     * @param GetTrackedADORNames $parameters
     * @return GetTrackedADORNamesResponse
     */
    public function GetTrackedADORNames(GetTrackedADORNames $parameters)
    {
      return $this->__soapCall('GetTrackedADORNames', array($parameters));
    }

    /**
     * Set tracked ADORs.
     *
     * @param SetTrackedADORs $parameters
     * @return SetTrackedADORsResponse
     */
    public function SetTrackedADORs(SetTrackedADORs $parameters)
    {
      return $this->__soapCall('SetTrackedADORs', array($parameters));
    }

    /**
     * Track all text ADORs.
     *
     * @param SetTrackAllTextADORs $parameters
     * @return SetTrackAllTextADORsResponse
     */
    public function SetTrackAllTextADORs(SetTrackAllTextADORs $parameters)
    {
      return $this->__soapCall('SetTrackAllTextADORs', array($parameters));
    }

    /**
     * Returns track all text ADORs property status.
     *
     * @param GetTrackAllTextADORs $parameters
     * @return GetTrackAllTextADORsResponse
     */
    public function GetTrackAllTextADORs(GetTrackAllTextADORs $parameters)
    {
      return $this->__soapCall('GetTrackAllTextADORs', array($parameters));
    }

    /**
     * Is Campaign exist.
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
     * Returns Setting(s) for the Campaign and the user.
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
     * Get ADORs information.
     *
     * @param GetADORs $parameters
     * @return GetADORsResponse
     */
    public function GetADORs(GetADORs $parameters)
    {
      return $this->__soapCall('GetADORs', array($parameters));
    }

    /**
     * Duplicate Campaign.
     *
     * @param CloneCustom $parameters
     * @return CloneResponse
     */
    public function aClone($parameters)
    {
      return $this->__soapCall('Clone', array($parameters));
    }

    /**
     * Completely Duplicate Campaign.
     *
     * @param CloneFull $parameters
     * @return CloneFullResponse
     */
    public function CloneFull(CloneFull $parameters)
    {
      return $this->__soapCall('CloneFull', array($parameters));
    }

    /**
     * Duplicate The Fonts of a campaign to another campaign.
     *
     * @param CloneAllFonts $parameters
     * @return CloneAllFontsResponse
     */
    public function CloneAllFonts(CloneAllFonts $parameters)
    {
      return $this->__soapCall('CloneAllFonts', array($parameters));
    }

    /**
     * Create new additional field.
     *
     * @param CreateNewAdditionalField $parameters
     * @return CreateNewAdditionalFieldResponse
     */
    public function CreateNewAdditionalField(CreateNewAdditionalField $parameters)
    {
      return $this->__soapCall('CreateNewAdditionalField', array($parameters));
    }

    /**
     * Set additional field default value.
     *
     * @param SetAdditionalFieldDefaultValue $parameters
     * @return SetAdditionalFieldDefaultValueResponse
     */
    public function SetAdditionalFieldDefaultValue(SetAdditionalFieldDefaultValue $parameters)
    {
      return $this->__soapCall('SetAdditionalFieldDefaultValue', array($parameters));
    }

    /**
     * Get additional field default value.
     *
     * @param GetAdditionalFieldDefaultValue $parameters
     * @return GetAdditionalFieldDefaultValueResponse
     */
    public function GetAdditionalFieldDefaultValue(GetAdditionalFieldDefaultValue $parameters)
    {
      return $this->__soapCall('GetAdditionalFieldDefaultValue', array($parameters));
    }

    /**
     * Get additional fields.
     *
     * @param GetAdditionalFields $parameters
     * @return GetAdditionalFieldsResponse
     */
    public function GetAdditionalFields(GetAdditionalFields $parameters)
    {
      return $this->__soapCall('GetAdditionalFields', array($parameters));
    }

    /**
     * Delete additional field.
     *
     * @param DeleteAdditionalFields $parameters
     * @return DeleteAdditionalFieldsResponse
     */
    public function DeleteAdditionalFields(DeleteAdditionalFields $parameters)
    {
      return $this->__soapCall('DeleteAdditionalFields', array($parameters));
    }

    /**
     * Set additional field values for all recipients in a CSV file.
     *
     * @param SetAdditionalFieldValues $parameters
     * @return SetAdditionalFieldValuesResponse
     */
    public function SetAdditionalFieldValues(SetAdditionalFieldValues $parameters)
    {
      return $this->__soapCall('SetAdditionalFieldValues', array($parameters));
    }

    /**
     * Set additional field values for a list of recipients.
     *
     * @param SetAdditionalFieldValuesForRecipients $parameters
     * @return SetAdditionalFieldValuesForRecipientsResponse
     */
    public function SetAdditionalFieldValuesForRecipients(SetAdditionalFieldValuesForRecipients $parameters)
    {
      return $this->__soapCall('SetAdditionalFieldValuesForRecipients', array($parameters));
    }

    /**
     * Delete additional field values.
     *
     * @param DeleteAdditionalFieldValues $parameters
     * @return DeleteAdditionalFieldValuesResponse
     */
    public function DeleteAdditionalFieldValues(DeleteAdditionalFieldValues $parameters)
    {
      return $this->__soapCall('DeleteAdditionalFieldValues', array($parameters));
    }

}
