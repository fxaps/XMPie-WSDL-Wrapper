<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewFromCPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewFromCPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewFromVPC;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewFromVPCResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetCreateNewFromCPKGResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetCreateNewFromCPKGResultResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCampaignResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetCreateNewFromVPCResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetCreateNewFromVPCResultResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateFullCPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateFullCPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCPKG;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateCPKGResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAccount;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAccountResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocuments;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDocumentsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteDocuments;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteDocumentsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllDocuments;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllDocumentsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourceID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourceIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetDataSourcesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteDataSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllDataSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllDataSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourceID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourceIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAssetSourcesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAssetSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAssetSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllAssetSources;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllAssetSourcesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPoints;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTouchPointsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteTouchPoints;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteTouchPointsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllTouchPoints;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllTouchPointsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsFolderPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsFolderPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFonts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsModificationDate;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsModificationDateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetFontsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteFonts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteFontsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllFonts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllFontsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlan;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPlanXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePlan;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePlanResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetEmailMarketingsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteEmailMarketings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteEmailMarketingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllEmailMarketings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllEmailMarketingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPorts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPortsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePorts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePortsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllPorts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllPortsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationGUID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationGUIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulations;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetPopulationsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePopulations;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeletePopulationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllPopulations;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllPopulationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLastJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLastJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLastEmailMarketing;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLastEmailMarketingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLocalEmailFileNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetLocalEmailFileNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetUCreateXMSiteDefinitionsPath;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetUCreateXMSiteDefinitionsPathResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTrackedADORNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTrackedADORNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetTrackedADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetTrackedADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetTrackAllTextADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetTrackAllTextADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTrackAllTextADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetTrackAllTextADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfPlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\PlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CampaignMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\IDMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\PlanMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfDocumentMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DocumentMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfDataSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DataSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\ArrayOfAssetSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\AssetSourceMapping;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneFull;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneFullResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneAllFonts;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneAllFontsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewAdditionalField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CreateNewAdditionalFieldResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValue;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldDefaultValueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAdditionalFieldDefaultValue;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAdditionalFieldDefaultValueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAdditionalFields;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\GetAdditionalFieldsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAdditionalFields;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAdditionalFieldsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipients;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipientsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAdditionalFieldValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAdditionalFieldValuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\CloneCustom;


class FabricateCampaign_SSP
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
    * @return CreateNewFromCPKG
    */
    public function CreateNewFromCPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromCPKG = new CreateNewFromCPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromCPKG, $methodName)) {
                $CreateNewFromCPKG->$methodName($paramValue);
            }
        }
        return $CreateNewFromCPKG;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromCPKGResponse
    */
    public function CreateNewFromCPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromCPKGResponse = new CreateNewFromCPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromCPKGResponse, $methodName)) {
                $CreateNewFromCPKGResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromCPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromVPC
    */
    public function CreateNewFromVPC($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromVPC = new CreateNewFromVPC();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromVPC, $methodName)) {
                $CreateNewFromVPC->$methodName($paramValue);
            }
        }
        return $CreateNewFromVPC;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromVPCResponse
    */
    public function CreateNewFromVPCResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromVPCResponse = new CreateNewFromVPCResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromVPCResponse, $methodName)) {
                $CreateNewFromVPCResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromVPCResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCreateNewFromCPKGResult
    */
    public function GetCreateNewFromCPKGResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCreateNewFromCPKGResult = new GetCreateNewFromCPKGResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCreateNewFromCPKGResult, $methodName)) {
                $GetCreateNewFromCPKGResult->$methodName($paramValue);
            }
        }
        return $GetCreateNewFromCPKGResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCreateNewFromCPKGResultResponse
    */
    public function GetCreateNewFromCPKGResultResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCreateNewFromCPKGResultResponse = new GetCreateNewFromCPKGResultResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCreateNewFromCPKGResultResponse, $methodName)) {
                $GetCreateNewFromCPKGResultResponse->$methodName($paramValue);
            }
        }
        return $GetCreateNewFromCPKGResultResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateCampaignResult
    */
    public function CreateCampaignResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateCampaignResult = new CreateCampaignResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateCampaignResult, $methodName)) {
                $CreateCampaignResult->$methodName($paramValue);
            }
        }
        return $CreateCampaignResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCreateNewFromVPCResult
    */
    public function GetCreateNewFromVPCResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCreateNewFromVPCResult = new GetCreateNewFromVPCResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCreateNewFromVPCResult, $methodName)) {
                $GetCreateNewFromVPCResult->$methodName($paramValue);
            }
        }
        return $GetCreateNewFromVPCResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCreateNewFromVPCResultResponse
    */
    public function GetCreateNewFromVPCResultResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCreateNewFromVPCResultResponse = new GetCreateNewFromVPCResultResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCreateNewFromVPCResultResponse, $methodName)) {
                $GetCreateNewFromVPCResultResponse->$methodName($paramValue);
            }
        }
        return $GetCreateNewFromVPCResultResponse;
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
    * @return CreateFullCPKG
    */
    public function CreateFullCPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFullCPKG = new CreateFullCPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFullCPKG, $methodName)) {
                $CreateFullCPKG->$methodName($paramValue);
            }
        }
        return $CreateFullCPKG;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateFullCPKGResponse
    */
    public function CreateFullCPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateFullCPKGResponse = new CreateFullCPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateFullCPKGResponse, $methodName)) {
                $CreateFullCPKGResponse->$methodName($paramValue);
            }
        }
        return $CreateFullCPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateCPKG
    */
    public function CreateCPKG($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateCPKG = new CreateCPKG();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateCPKG, $methodName)) {
                $CreateCPKG->$methodName($paramValue);
            }
        }
        return $CreateCPKG;
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
    * @return CreateCPKGResponse
    */
    public function CreateCPKGResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateCPKGResponse = new CreateCPKGResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateCPKGResponse, $methodName)) {
                $CreateCPKGResponse->$methodName($paramValue);
            }
        }
        return $CreateCPKGResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccount
    */
    public function GetAccount($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccount = new GetAccount();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccount, $methodName)) {
                $GetAccount->$methodName($paramValue);
            }
        }
        return $GetAccount;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountResponse
    */
    public function GetAccountResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountResponse = new GetAccountResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountResponse, $methodName)) {
                $GetAccountResponse->$methodName($paramValue);
            }
        }
        return $GetAccountResponse;
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
    * @return GetDocumentID
    */
    public function GetDocumentID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentID = new GetDocumentID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentID, $methodName)) {
                $GetDocumentID->$methodName($paramValue);
            }
        }
        return $GetDocumentID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentIDResponse
    */
    public function GetDocumentIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentIDResponse = new GetDocumentIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentIDResponse, $methodName)) {
                $GetDocumentIDResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocuments
    */
    public function GetDocuments($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocuments = new GetDocuments();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocuments, $methodName)) {
                $GetDocuments->$methodName($paramValue);
            }
        }
        return $GetDocuments;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsResponse
    */
    public function GetDocumentsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsResponse = new GetDocumentsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsResponse, $methodName)) {
                $GetDocumentsResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsDataSet
    */
    public function GetDocumentsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsDataSet = new GetDocumentsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsDataSet, $methodName)) {
                $GetDocumentsDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsDataSetResponse
    */
    public function GetDocumentsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsDataSetResponse = new GetDocumentsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsDataSetResponse, $methodName)) {
                $GetDocumentsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsDataSetResult
    */
    public function GetDocumentsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsDataSetResult = new GetDocumentsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsDataSetResult, $methodName)) {
                $GetDocumentsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDocumentsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsXMPTblDataSet
    */
    public function GetDocumentsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsXMPTblDataSet = new GetDocumentsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsXMPTblDataSet, $methodName)) {
                $GetDocumentsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDocumentsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDocumentsXMPTblDataSetResponse
    */
    public function GetDocumentsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDocumentsXMPTblDataSetResponse = new GetDocumentsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDocumentsXMPTblDataSetResponse, $methodName)) {
                $GetDocumentsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDocumentsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDocuments
    */
    public function DeleteDocuments($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDocuments = new DeleteDocuments();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDocuments, $methodName)) {
                $DeleteDocuments->$methodName($paramValue);
            }
        }
        return $DeleteDocuments;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDocumentsResponse
    */
    public function DeleteDocumentsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDocumentsResponse = new DeleteDocumentsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDocumentsResponse, $methodName)) {
                $DeleteDocumentsResponse->$methodName($paramValue);
            }
        }
        return $DeleteDocumentsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDocuments
    */
    public function DeleteAllDocuments($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDocuments = new DeleteAllDocuments();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDocuments, $methodName)) {
                $DeleteAllDocuments->$methodName($paramValue);
            }
        }
        return $DeleteAllDocuments;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDocumentsResponse
    */
    public function DeleteAllDocumentsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDocumentsResponse = new DeleteAllDocumentsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDocumentsResponse, $methodName)) {
                $DeleteAllDocumentsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllDocumentsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceID
    */
    public function GetDataSourceID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceID = new GetDataSourceID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceID, $methodName)) {
                $GetDataSourceID->$methodName($paramValue);
            }
        }
        return $GetDataSourceID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourceIDResponse
    */
    public function GetDataSourceIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourceIDResponse = new GetDataSourceIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourceIDResponse, $methodName)) {
                $GetDataSourceIDResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourceIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSources
    */
    public function GetDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSources = new GetDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSources, $methodName)) {
                $GetDataSources->$methodName($paramValue);
            }
        }
        return $GetDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesResponse
    */
    public function GetDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesResponse = new GetDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesResponse, $methodName)) {
                $GetDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesDataSet
    */
    public function GetDataSourcesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesDataSet = new GetDataSourcesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesDataSet, $methodName)) {
                $GetDataSourcesDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSourcesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesDataSetResponse
    */
    public function GetDataSourcesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesDataSetResponse = new GetDataSourcesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesDataSetResponse, $methodName)) {
                $GetDataSourcesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourcesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesDataSetResult
    */
    public function GetDataSourcesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesDataSetResult = new GetDataSourcesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesDataSetResult, $methodName)) {
                $GetDataSourcesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDataSourcesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesXMPTblDataSet
    */
    public function GetDataSourcesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesXMPTblDataSet = new GetDataSourcesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesXMPTblDataSet, $methodName)) {
                $GetDataSourcesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSourcesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSourcesXMPTblDataSetResponse
    */
    public function GetDataSourcesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSourcesXMPTblDataSetResponse = new GetDataSourcesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSourcesXMPTblDataSetResponse, $methodName)) {
                $GetDataSourcesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSourcesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDataSources
    */
    public function DeleteDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDataSources = new DeleteDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDataSources, $methodName)) {
                $DeleteDataSources->$methodName($paramValue);
            }
        }
        return $DeleteDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDataSourcesResponse
    */
    public function DeleteDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDataSourcesResponse = new DeleteDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDataSourcesResponse, $methodName)) {
                $DeleteDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteDataSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDataSources
    */
    public function DeleteAllDataSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDataSources = new DeleteAllDataSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDataSources, $methodName)) {
                $DeleteAllDataSources->$methodName($paramValue);
            }
        }
        return $DeleteAllDataSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDataSourcesResponse
    */
    public function DeleteAllDataSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDataSourcesResponse = new DeleteAllDataSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDataSourcesResponse, $methodName)) {
                $DeleteAllDataSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllDataSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceID
    */
    public function GetAssetSourceID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceID = new GetAssetSourceID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceID, $methodName)) {
                $GetAssetSourceID->$methodName($paramValue);
            }
        }
        return $GetAssetSourceID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourceIDResponse
    */
    public function GetAssetSourceIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourceIDResponse = new GetAssetSourceIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourceIDResponse, $methodName)) {
                $GetAssetSourceIDResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourceIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSources
    */
    public function GetAssetSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSources = new GetAssetSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSources, $methodName)) {
                $GetAssetSources->$methodName($paramValue);
            }
        }
        return $GetAssetSources;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesResponse
    */
    public function GetAssetSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesResponse = new GetAssetSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesResponse, $methodName)) {
                $GetAssetSourcesResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesDataSet
    */
    public function GetAssetSourcesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesDataSet = new GetAssetSourcesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesDataSet, $methodName)) {
                $GetAssetSourcesDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesDataSetResponse
    */
    public function GetAssetSourcesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesDataSetResponse = new GetAssetSourcesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesDataSetResponse, $methodName)) {
                $GetAssetSourcesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesDataSetResult
    */
    public function GetAssetSourcesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesDataSetResult = new GetAssetSourcesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesDataSetResult, $methodName)) {
                $GetAssetSourcesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesXMPTblDataSet
    */
    public function GetAssetSourcesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesXMPTblDataSet = new GetAssetSourcesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesXMPTblDataSet, $methodName)) {
                $GetAssetSourcesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAssetSourcesXMPTblDataSetResponse
    */
    public function GetAssetSourcesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAssetSourcesXMPTblDataSetResponse = new GetAssetSourcesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAssetSourcesXMPTblDataSetResponse, $methodName)) {
                $GetAssetSourcesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAssetSourcesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAssetSources
    */
    public function DeleteAssetSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAssetSources = new DeleteAssetSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAssetSources, $methodName)) {
                $DeleteAssetSources->$methodName($paramValue);
            }
        }
        return $DeleteAssetSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAssetSourcesResponse
    */
    public function DeleteAssetSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAssetSourcesResponse = new DeleteAssetSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAssetSourcesResponse, $methodName)) {
                $DeleteAssetSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAssetSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAssetSources
    */
    public function DeleteAllAssetSources($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAssetSources = new DeleteAllAssetSources();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAssetSources, $methodName)) {
                $DeleteAllAssetSources->$methodName($paramValue);
            }
        }
        return $DeleteAllAssetSources;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAssetSourcesResponse
    */
    public function DeleteAllAssetSourcesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAssetSourcesResponse = new DeleteAllAssetSourcesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAssetSourcesResponse, $methodName)) {
                $DeleteAllAssetSourcesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllAssetSourcesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointID
    */
    public function GetTouchPointID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointID = new GetTouchPointID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointID, $methodName)) {
                $GetTouchPointID->$methodName($paramValue);
            }
        }
        return $GetTouchPointID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointIDResponse
    */
    public function GetTouchPointIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointIDResponse = new GetTouchPointIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointIDResponse, $methodName)) {
                $GetTouchPointIDResponse->$methodName($paramValue);
            }
        }
        return $GetTouchPointIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPoints
    */
    public function GetTouchPoints($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPoints = new GetTouchPoints();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPoints, $methodName)) {
                $GetTouchPoints->$methodName($paramValue);
            }
        }
        return $GetTouchPoints;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsResponse
    */
    public function GetTouchPointsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsResponse = new GetTouchPointsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsResponse, $methodName)) {
                $GetTouchPointsResponse->$methodName($paramValue);
            }
        }
        return $GetTouchPointsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsDataSet
    */
    public function GetTouchPointsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsDataSet = new GetTouchPointsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsDataSet, $methodName)) {
                $GetTouchPointsDataSet->$methodName($paramValue);
            }
        }
        return $GetTouchPointsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsDataSetResponse
    */
    public function GetTouchPointsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsDataSetResponse = new GetTouchPointsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsDataSetResponse, $methodName)) {
                $GetTouchPointsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetTouchPointsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsDataSetResult
    */
    public function GetTouchPointsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsDataSetResult = new GetTouchPointsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsDataSetResult, $methodName)) {
                $GetTouchPointsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetTouchPointsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsXMPTblDataSet
    */
    public function GetTouchPointsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsXMPTblDataSet = new GetTouchPointsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsXMPTblDataSet, $methodName)) {
                $GetTouchPointsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetTouchPointsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTouchPointsXMPTblDataSetResponse
    */
    public function GetTouchPointsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTouchPointsXMPTblDataSetResponse = new GetTouchPointsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTouchPointsXMPTblDataSetResponse, $methodName)) {
                $GetTouchPointsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetTouchPointsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteTouchPoints
    */
    public function DeleteTouchPoints($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteTouchPoints = new DeleteTouchPoints();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteTouchPoints, $methodName)) {
                $DeleteTouchPoints->$methodName($paramValue);
            }
        }
        return $DeleteTouchPoints;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteTouchPointsResponse
    */
    public function DeleteTouchPointsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteTouchPointsResponse = new DeleteTouchPointsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteTouchPointsResponse, $methodName)) {
                $DeleteTouchPointsResponse->$methodName($paramValue);
            }
        }
        return $DeleteTouchPointsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllTouchPoints
    */
    public function DeleteAllTouchPoints($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllTouchPoints = new DeleteAllTouchPoints();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllTouchPoints, $methodName)) {
                $DeleteAllTouchPoints->$methodName($paramValue);
            }
        }
        return $DeleteAllTouchPoints;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllTouchPointsResponse
    */
    public function DeleteAllTouchPointsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllTouchPointsResponse = new DeleteAllTouchPointsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllTouchPointsResponse, $methodName)) {
                $DeleteAllTouchPointsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllTouchPointsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsFolderPath
    */
    public function GetFontsFolderPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsFolderPath = new GetFontsFolderPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsFolderPath, $methodName)) {
                $GetFontsFolderPath->$methodName($paramValue);
            }
        }
        return $GetFontsFolderPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsFolderPathResponse
    */
    public function GetFontsFolderPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsFolderPathResponse = new GetFontsFolderPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsFolderPathResponse, $methodName)) {
                $GetFontsFolderPathResponse->$methodName($paramValue);
            }
        }
        return $GetFontsFolderPathResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontID
    */
    public function GetFontID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontID = new GetFontID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontID, $methodName)) {
                $GetFontID->$methodName($paramValue);
            }
        }
        return $GetFontID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontIDResponse
    */
    public function GetFontIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontIDResponse = new GetFontIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontIDResponse, $methodName)) {
                $GetFontIDResponse->$methodName($paramValue);
            }
        }
        return $GetFontIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFonts
    */
    public function GetFonts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFonts = new GetFonts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFonts, $methodName)) {
                $GetFonts->$methodName($paramValue);
            }
        }
        return $GetFonts;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsResponse
    */
    public function GetFontsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsResponse = new GetFontsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsResponse, $methodName)) {
                $GetFontsResponse->$methodName($paramValue);
            }
        }
        return $GetFontsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsModificationDate
    */
    public function GetFontsModificationDate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsModificationDate = new GetFontsModificationDate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsModificationDate, $methodName)) {
                $GetFontsModificationDate->$methodName($paramValue);
            }
        }
        return $GetFontsModificationDate;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsModificationDateResponse
    */
    public function GetFontsModificationDateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsModificationDateResponse = new GetFontsModificationDateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsModificationDateResponse, $methodName)) {
                $GetFontsModificationDateResponse->$methodName($paramValue);
            }
        }
        return $GetFontsModificationDateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsDataSet
    */
    public function GetFontsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsDataSet = new GetFontsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsDataSet, $methodName)) {
                $GetFontsDataSet->$methodName($paramValue);
            }
        }
        return $GetFontsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsDataSetResponse
    */
    public function GetFontsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsDataSetResponse = new GetFontsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsDataSetResponse, $methodName)) {
                $GetFontsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetFontsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsDataSetResult
    */
    public function GetFontsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsDataSetResult = new GetFontsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsDataSetResult, $methodName)) {
                $GetFontsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetFontsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsXMPTblDataSet
    */
    public function GetFontsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsXMPTblDataSet = new GetFontsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsXMPTblDataSet, $methodName)) {
                $GetFontsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetFontsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetFontsXMPTblDataSetResponse
    */
    public function GetFontsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetFontsXMPTblDataSetResponse = new GetFontsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetFontsXMPTblDataSetResponse, $methodName)) {
                $GetFontsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetFontsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFonts
    */
    public function DeleteFonts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFonts = new DeleteFonts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFonts, $methodName)) {
                $DeleteFonts->$methodName($paramValue);
            }
        }
        return $DeleteFonts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteFontsResponse
    */
    public function DeleteFontsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteFontsResponse = new DeleteFontsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteFontsResponse, $methodName)) {
                $DeleteFontsResponse->$methodName($paramValue);
            }
        }
        return $DeleteFontsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllFonts
    */
    public function DeleteAllFonts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllFonts = new DeleteAllFonts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllFonts, $methodName)) {
                $DeleteAllFonts->$methodName($paramValue);
            }
        }
        return $DeleteAllFonts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllFontsResponse
    */
    public function DeleteAllFontsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllFontsResponse = new DeleteAllFontsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllFontsResponse, $methodName)) {
                $DeleteAllFontsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllFontsResponse;
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
    * @return GetPlanDataSet
    */
    public function GetPlanDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanDataSet = new GetPlanDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanDataSet, $methodName)) {
                $GetPlanDataSet->$methodName($paramValue);
            }
        }
        return $GetPlanDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanDataSetResponse
    */
    public function GetPlanDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanDataSetResponse = new GetPlanDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanDataSetResponse, $methodName)) {
                $GetPlanDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPlanDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanDataSetResult
    */
    public function GetPlanDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanDataSetResult = new GetPlanDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanDataSetResult, $methodName)) {
                $GetPlanDataSetResult->$methodName($paramValue);
            }
        }
        return $GetPlanDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanXMPTblDataSet
    */
    public function GetPlanXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanXMPTblDataSet = new GetPlanXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanXMPTblDataSet, $methodName)) {
                $GetPlanXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPlanXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanXMPTblDataSetResponse
    */
    public function GetPlanXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanXMPTblDataSetResponse = new GetPlanXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanXMPTblDataSetResponse, $methodName)) {
                $GetPlanXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPlanXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePlan
    */
    public function DeletePlan($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePlan = new DeletePlan();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePlan, $methodName)) {
                $DeletePlan->$methodName($paramValue);
            }
        }
        return $DeletePlan;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePlanResponse
    */
    public function DeletePlanResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePlanResponse = new DeletePlanResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePlanResponse, $methodName)) {
                $DeletePlanResponse->$methodName($paramValue);
            }
        }
        return $DeletePlanResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingID
    */
    public function GetEmailMarketingID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingID = new GetEmailMarketingID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingID, $methodName)) {
                $GetEmailMarketingID->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingIDResponse
    */
    public function GetEmailMarketingIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingIDResponse = new GetEmailMarketingIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingIDResponse, $methodName)) {
                $GetEmailMarketingIDResponse->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketings
    */
    public function GetEmailMarketings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketings = new GetEmailMarketings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketings, $methodName)) {
                $GetEmailMarketings->$methodName($paramValue);
            }
        }
        return $GetEmailMarketings;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsResponse
    */
    public function GetEmailMarketingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsResponse = new GetEmailMarketingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsResponse, $methodName)) {
                $GetEmailMarketingsResponse->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsDataSet
    */
    public function GetEmailMarketingsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsDataSet = new GetEmailMarketingsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsDataSet, $methodName)) {
                $GetEmailMarketingsDataSet->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsDataSetResponse
    */
    public function GetEmailMarketingsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsDataSetResponse = new GetEmailMarketingsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsDataSetResponse, $methodName)) {
                $GetEmailMarketingsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsDataSetResult
    */
    public function GetEmailMarketingsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsDataSetResult = new GetEmailMarketingsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsDataSetResult, $methodName)) {
                $GetEmailMarketingsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsXMPTblDataSet
    */
    public function GetEmailMarketingsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsXMPTblDataSet = new GetEmailMarketingsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsXMPTblDataSet, $methodName)) {
                $GetEmailMarketingsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetEmailMarketingsXMPTblDataSetResponse
    */
    public function GetEmailMarketingsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailMarketingsXMPTblDataSetResponse = new GetEmailMarketingsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailMarketingsXMPTblDataSetResponse, $methodName)) {
                $GetEmailMarketingsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetEmailMarketingsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteEmailMarketings
    */
    public function DeleteEmailMarketings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteEmailMarketings = new DeleteEmailMarketings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteEmailMarketings, $methodName)) {
                $DeleteEmailMarketings->$methodName($paramValue);
            }
        }
        return $DeleteEmailMarketings;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteEmailMarketingsResponse
    */
    public function DeleteEmailMarketingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteEmailMarketingsResponse = new DeleteEmailMarketingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteEmailMarketingsResponse, $methodName)) {
                $DeleteEmailMarketingsResponse->$methodName($paramValue);
            }
        }
        return $DeleteEmailMarketingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllEmailMarketings
    */
    public function DeleteAllEmailMarketings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllEmailMarketings = new DeleteAllEmailMarketings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllEmailMarketings, $methodName)) {
                $DeleteAllEmailMarketings->$methodName($paramValue);
            }
        }
        return $DeleteAllEmailMarketings;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllEmailMarketingsResponse
    */
    public function DeleteAllEmailMarketingsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllEmailMarketingsResponse = new DeleteAllEmailMarketingsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllEmailMarketingsResponse, $methodName)) {
                $DeleteAllEmailMarketingsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllEmailMarketingsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortID
    */
    public function GetPortID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortID = new GetPortID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortID, $methodName)) {
                $GetPortID->$methodName($paramValue);
            }
        }
        return $GetPortID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortIDResponse
    */
    public function GetPortIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortIDResponse = new GetPortIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortIDResponse, $methodName)) {
                $GetPortIDResponse->$methodName($paramValue);
            }
        }
        return $GetPortIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPorts
    */
    public function GetPorts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPorts = new GetPorts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPorts, $methodName)) {
                $GetPorts->$methodName($paramValue);
            }
        }
        return $GetPorts;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsResponse
    */
    public function GetPortsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsResponse = new GetPortsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsResponse, $methodName)) {
                $GetPortsResponse->$methodName($paramValue);
            }
        }
        return $GetPortsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsDataSet
    */
    public function GetPortsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsDataSet = new GetPortsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsDataSet, $methodName)) {
                $GetPortsDataSet->$methodName($paramValue);
            }
        }
        return $GetPortsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsDataSetResponse
    */
    public function GetPortsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsDataSetResponse = new GetPortsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsDataSetResponse, $methodName)) {
                $GetPortsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPortsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsDataSetResult
    */
    public function GetPortsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsDataSetResult = new GetPortsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsDataSetResult, $methodName)) {
                $GetPortsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetPortsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsXMPTblDataSet
    */
    public function GetPortsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsXMPTblDataSet = new GetPortsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsXMPTblDataSet, $methodName)) {
                $GetPortsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPortsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortsXMPTblDataSetResponse
    */
    public function GetPortsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortsXMPTblDataSetResponse = new GetPortsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortsXMPTblDataSetResponse, $methodName)) {
                $GetPortsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPortsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePorts
    */
    public function DeletePorts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePorts = new DeletePorts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePorts, $methodName)) {
                $DeletePorts->$methodName($paramValue);
            }
        }
        return $DeletePorts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePortsResponse
    */
    public function DeletePortsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePortsResponse = new DeletePortsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePortsResponse, $methodName)) {
                $DeletePortsResponse->$methodName($paramValue);
            }
        }
        return $DeletePortsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPorts
    */
    public function DeleteAllPorts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPorts = new DeleteAllPorts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPorts, $methodName)) {
                $DeleteAllPorts->$methodName($paramValue);
            }
        }
        return $DeleteAllPorts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPortsResponse
    */
    public function DeleteAllPortsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPortsResponse = new DeleteAllPortsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPortsResponse, $methodName)) {
                $DeleteAllPortsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllPortsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationGUID
    */
    public function GetPopulationGUID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationGUID = new GetPopulationGUID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationGUID, $methodName)) {
                $GetPopulationGUID->$methodName($paramValue);
            }
        }
        return $GetPopulationGUID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationGUIDResponse
    */
    public function GetPopulationGUIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationGUIDResponse = new GetPopulationGUIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationGUIDResponse, $methodName)) {
                $GetPopulationGUIDResponse->$methodName($paramValue);
            }
        }
        return $GetPopulationGUIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulations
    */
    public function GetPopulations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulations = new GetPopulations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulations, $methodName)) {
                $GetPopulations->$methodName($paramValue);
            }
        }
        return $GetPopulations;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsResponse
    */
    public function GetPopulationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsResponse = new GetPopulationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsResponse, $methodName)) {
                $GetPopulationsResponse->$methodName($paramValue);
            }
        }
        return $GetPopulationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsDataSet
    */
    public function GetPopulationsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsDataSet = new GetPopulationsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsDataSet, $methodName)) {
                $GetPopulationsDataSet->$methodName($paramValue);
            }
        }
        return $GetPopulationsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsDataSetResponse
    */
    public function GetPopulationsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsDataSetResponse = new GetPopulationsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsDataSetResponse, $methodName)) {
                $GetPopulationsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPopulationsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsDataSetResult
    */
    public function GetPopulationsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsDataSetResult = new GetPopulationsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsDataSetResult, $methodName)) {
                $GetPopulationsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetPopulationsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsXMPTblDataSet
    */
    public function GetPopulationsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsXMPTblDataSet = new GetPopulationsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsXMPTblDataSet, $methodName)) {
                $GetPopulationsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPopulationsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationsXMPTblDataSetResponse
    */
    public function GetPopulationsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationsXMPTblDataSetResponse = new GetPopulationsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationsXMPTblDataSetResponse, $methodName)) {
                $GetPopulationsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPopulationsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePopulations
    */
    public function DeletePopulations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePopulations = new DeletePopulations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePopulations, $methodName)) {
                $DeletePopulations->$methodName($paramValue);
            }
        }
        return $DeletePopulations;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePopulationsResponse
    */
    public function DeletePopulationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePopulationsResponse = new DeletePopulationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePopulationsResponse, $methodName)) {
                $DeletePopulationsResponse->$methodName($paramValue);
            }
        }
        return $DeletePopulationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPopulations
    */
    public function DeleteAllPopulations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPopulations = new DeleteAllPopulations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPopulations, $methodName)) {
                $DeleteAllPopulations->$methodName($paramValue);
            }
        }
        return $DeleteAllPopulations;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPopulationsResponse
    */
    public function DeleteAllPopulationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPopulationsResponse = new DeleteAllPopulationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPopulationsResponse, $methodName)) {
                $DeleteAllPopulationsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllPopulationsResponse;
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
    * @return GetLastEmailMarketing
    */
    public function GetLastEmailMarketing($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLastEmailMarketing = new GetLastEmailMarketing();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLastEmailMarketing, $methodName)) {
                $GetLastEmailMarketing->$methodName($paramValue);
            }
        }
        return $GetLastEmailMarketing;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLastEmailMarketingResponse
    */
    public function GetLastEmailMarketingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLastEmailMarketingResponse = new GetLastEmailMarketingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLastEmailMarketingResponse, $methodName)) {
                $GetLastEmailMarketingResponse->$methodName($paramValue);
            }
        }
        return $GetLastEmailMarketingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLocalEmailFileNames
    */
    public function GetLocalEmailFileNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLocalEmailFileNames = new GetLocalEmailFileNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLocalEmailFileNames, $methodName)) {
                $GetLocalEmailFileNames->$methodName($paramValue);
            }
        }
        return $GetLocalEmailFileNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetLocalEmailFileNamesResponse
    */
    public function GetLocalEmailFileNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetLocalEmailFileNamesResponse = new GetLocalEmailFileNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetLocalEmailFileNamesResponse, $methodName)) {
                $GetLocalEmailFileNamesResponse->$methodName($paramValue);
            }
        }
        return $GetLocalEmailFileNamesResponse;
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
    * @return GetUCreateXMSiteDefinitionsPath
    */
    public function GetUCreateXMSiteDefinitionsPath($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUCreateXMSiteDefinitionsPath = new GetUCreateXMSiteDefinitionsPath();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUCreateXMSiteDefinitionsPath, $methodName)) {
                $GetUCreateXMSiteDefinitionsPath->$methodName($paramValue);
            }
        }
        return $GetUCreateXMSiteDefinitionsPath;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUCreateXMSiteDefinitionsPathResponse
    */
    public function GetUCreateXMSiteDefinitionsPathResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUCreateXMSiteDefinitionsPathResponse = new GetUCreateXMSiteDefinitionsPathResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUCreateXMSiteDefinitionsPathResponse, $methodName)) {
                $GetUCreateXMSiteDefinitionsPathResponse->$methodName($paramValue);
            }
        }
        return $GetUCreateXMSiteDefinitionsPathResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSet
    */
    public function GetADORsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSet = new GetADORsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSet, $methodName)) {
                $GetADORsDataSet->$methodName($paramValue);
            }
        }
        return $GetADORsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSetResponse
    */
    public function GetADORsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSetResponse = new GetADORsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSetResponse, $methodName)) {
                $GetADORsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSetResult
    */
    public function GetADORsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSetResult = new GetADORsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSetResult, $methodName)) {
                $GetADORsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetADORsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsXMPTblDataSet
    */
    public function GetADORsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsXMPTblDataSet = new GetADORsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsXMPTblDataSet, $methodName)) {
                $GetADORsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetADORsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsXMPTblDataSetResponse
    */
    public function GetADORsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsXMPTblDataSetResponse = new GetADORsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsXMPTblDataSetResponse, $methodName)) {
                $GetADORsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTrackedADORNames
    */
    public function GetTrackedADORNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTrackedADORNames = new GetTrackedADORNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTrackedADORNames, $methodName)) {
                $GetTrackedADORNames->$methodName($paramValue);
            }
        }
        return $GetTrackedADORNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTrackedADORNamesResponse
    */
    public function GetTrackedADORNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTrackedADORNamesResponse = new GetTrackedADORNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTrackedADORNamesResponse, $methodName)) {
                $GetTrackedADORNamesResponse->$methodName($paramValue);
            }
        }
        return $GetTrackedADORNamesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTrackedADORs
    */
    public function SetTrackedADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTrackedADORs = new SetTrackedADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTrackedADORs, $methodName)) {
                $SetTrackedADORs->$methodName($paramValue);
            }
        }
        return $SetTrackedADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTrackedADORsResponse
    */
    public function SetTrackedADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTrackedADORsResponse = new SetTrackedADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTrackedADORsResponse, $methodName)) {
                $SetTrackedADORsResponse->$methodName($paramValue);
            }
        }
        return $SetTrackedADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTrackAllTextADORs
    */
    public function SetTrackAllTextADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTrackAllTextADORs = new SetTrackAllTextADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTrackAllTextADORs, $methodName)) {
                $SetTrackAllTextADORs->$methodName($paramValue);
            }
        }
        return $SetTrackAllTextADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return SetTrackAllTextADORsResponse
    */
    public function SetTrackAllTextADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetTrackAllTextADORsResponse = new SetTrackAllTextADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetTrackAllTextADORsResponse, $methodName)) {
                $SetTrackAllTextADORsResponse->$methodName($paramValue);
            }
        }
        return $SetTrackAllTextADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTrackAllTextADORs
    */
    public function GetTrackAllTextADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTrackAllTextADORs = new GetTrackAllTextADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTrackAllTextADORs, $methodName)) {
                $GetTrackAllTextADORs->$methodName($paramValue);
            }
        }
        return $GetTrackAllTextADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTrackAllTextADORsResponse
    */
    public function GetTrackAllTextADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTrackAllTextADORsResponse = new GetTrackAllTextADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTrackAllTextADORsResponse, $methodName)) {
                $GetTrackAllTextADORsResponse->$methodName($paramValue);
            }
        }
        return $GetTrackAllTextADORsResponse;
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
    * @return GetADORs
    */
    public function GetADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORs = new GetADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORs, $methodName)) {
                $GetADORs->$methodName($paramValue);
            }
        }
        return $GetADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsResponse
    */
    public function GetADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsResponse = new GetADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsResponse, $methodName)) {
                $GetADORsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanObject
    */
    public function ArrayOfPlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanObject = new ArrayOfPlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanObject, $methodName)) {
                $ArrayOfPlanObject->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanObject
    */
    public function PlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanObject = new PlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanObject, $methodName)) {
                $PlanObject->$methodName($paramValue);
            }
        }
        return $PlanObject;
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
    * @return CampaignMapping
    */
    public function CampaignMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CampaignMapping = new CampaignMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CampaignMapping, $methodName)) {
                $CampaignMapping->$methodName($paramValue);
            }
        }
        return $CampaignMapping;
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
    * @return ArrayOfDocumentMapping
    */
    public function ArrayOfDocumentMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfDocumentMapping = new ArrayOfDocumentMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfDocumentMapping, $methodName)) {
                $ArrayOfDocumentMapping->$methodName($paramValue);
            }
        }
        return $ArrayOfDocumentMapping;
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
    * @return ArrayOfDataSourceMapping
    */
    public function ArrayOfDataSourceMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfDataSourceMapping = new ArrayOfDataSourceMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfDataSourceMapping, $methodName)) {
                $ArrayOfDataSourceMapping->$methodName($paramValue);
            }
        }
        return $ArrayOfDataSourceMapping;
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
    * @return ArrayOfAssetSourceMapping
    */
    public function ArrayOfAssetSourceMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfAssetSourceMapping = new ArrayOfAssetSourceMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfAssetSourceMapping, $methodName)) {
                $ArrayOfAssetSourceMapping->$methodName($paramValue);
            }
        }
        return $ArrayOfAssetSourceMapping;
    }


   /**
    * @param array $paramAutoSet
    * @return AssetSourceMapping
    */
    public function AssetSourceMapping($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AssetSourceMapping = new AssetSourceMapping();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AssetSourceMapping, $methodName)) {
                $AssetSourceMapping->$methodName($paramValue);
            }
        }
        return $AssetSourceMapping;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneFull
    */
    public function CloneFull($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneFull = new CloneFull();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneFull, $methodName)) {
                $CloneFull->$methodName($paramValue);
            }
        }
        return $CloneFull;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneFullResponse
    */
    public function CloneFullResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneFullResponse = new CloneFullResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneFullResponse, $methodName)) {
                $CloneFullResponse->$methodName($paramValue);
            }
        }
        return $CloneFullResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneAllFonts
    */
    public function CloneAllFonts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneAllFonts = new CloneAllFonts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneAllFonts, $methodName)) {
                $CloneAllFonts->$methodName($paramValue);
            }
        }
        return $CloneAllFonts;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneAllFontsResponse
    */
    public function CloneAllFontsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneAllFontsResponse = new CloneAllFontsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneAllFontsResponse, $methodName)) {
                $CloneAllFontsResponse->$methodName($paramValue);
            }
        }
        return $CloneAllFontsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewAdditionalField
    */
    public function CreateNewAdditionalField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewAdditionalField = new CreateNewAdditionalField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewAdditionalField, $methodName)) {
                $CreateNewAdditionalField->$methodName($paramValue);
            }
        }
        return $CreateNewAdditionalField;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewAdditionalFieldResponse
    */
    public function CreateNewAdditionalFieldResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewAdditionalFieldResponse = new CreateNewAdditionalFieldResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewAdditionalFieldResponse, $methodName)) {
                $CreateNewAdditionalFieldResponse->$methodName($paramValue);
            }
        }
        return $CreateNewAdditionalFieldResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldDefaultValue
    */
    public function SetAdditionalFieldDefaultValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldDefaultValue = new SetAdditionalFieldDefaultValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldDefaultValue, $methodName)) {
                $SetAdditionalFieldDefaultValue->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldDefaultValue;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldDefaultValueResponse
    */
    public function SetAdditionalFieldDefaultValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldDefaultValueResponse = new SetAdditionalFieldDefaultValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldDefaultValueResponse, $methodName)) {
                $SetAdditionalFieldDefaultValueResponse->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldDefaultValueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAdditionalFieldDefaultValue
    */
    public function GetAdditionalFieldDefaultValue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAdditionalFieldDefaultValue = new GetAdditionalFieldDefaultValue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAdditionalFieldDefaultValue, $methodName)) {
                $GetAdditionalFieldDefaultValue->$methodName($paramValue);
            }
        }
        return $GetAdditionalFieldDefaultValue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAdditionalFieldDefaultValueResponse
    */
    public function GetAdditionalFieldDefaultValueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAdditionalFieldDefaultValueResponse = new GetAdditionalFieldDefaultValueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAdditionalFieldDefaultValueResponse, $methodName)) {
                $GetAdditionalFieldDefaultValueResponse->$methodName($paramValue);
            }
        }
        return $GetAdditionalFieldDefaultValueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAdditionalFields
    */
    public function GetAdditionalFields($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAdditionalFields = new GetAdditionalFields();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAdditionalFields, $methodName)) {
                $GetAdditionalFields->$methodName($paramValue);
            }
        }
        return $GetAdditionalFields;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAdditionalFieldsResponse
    */
    public function GetAdditionalFieldsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAdditionalFieldsResponse = new GetAdditionalFieldsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAdditionalFieldsResponse, $methodName)) {
                $GetAdditionalFieldsResponse->$methodName($paramValue);
            }
        }
        return $GetAdditionalFieldsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAdditionalFields
    */
    public function DeleteAdditionalFields($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAdditionalFields = new DeleteAdditionalFields();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAdditionalFields, $methodName)) {
                $DeleteAdditionalFields->$methodName($paramValue);
            }
        }
        return $DeleteAdditionalFields;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAdditionalFieldsResponse
    */
    public function DeleteAdditionalFieldsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAdditionalFieldsResponse = new DeleteAdditionalFieldsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAdditionalFieldsResponse, $methodName)) {
                $DeleteAdditionalFieldsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAdditionalFieldsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldValues
    */
    public function SetAdditionalFieldValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldValues = new SetAdditionalFieldValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldValues, $methodName)) {
                $SetAdditionalFieldValues->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldValues;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldValuesResponse
    */
    public function SetAdditionalFieldValuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldValuesResponse = new SetAdditionalFieldValuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldValuesResponse, $methodName)) {
                $SetAdditionalFieldValuesResponse->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldValuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldValuesForRecipients
    */
    public function SetAdditionalFieldValuesForRecipients($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldValuesForRecipients = new SetAdditionalFieldValuesForRecipients();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldValuesForRecipients, $methodName)) {
                $SetAdditionalFieldValuesForRecipients->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldValuesForRecipients;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAdditionalFieldValuesForRecipientsResponse
    */
    public function SetAdditionalFieldValuesForRecipientsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAdditionalFieldValuesForRecipientsResponse = new SetAdditionalFieldValuesForRecipientsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAdditionalFieldValuesForRecipientsResponse, $methodName)) {
                $SetAdditionalFieldValuesForRecipientsResponse->$methodName($paramValue);
            }
        }
        return $SetAdditionalFieldValuesForRecipientsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAdditionalFieldValues
    */
    public function DeleteAdditionalFieldValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAdditionalFieldValues = new DeleteAdditionalFieldValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAdditionalFieldValues, $methodName)) {
                $DeleteAdditionalFieldValues->$methodName($paramValue);
            }
        }
        return $DeleteAdditionalFieldValues;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAdditionalFieldValuesResponse
    */
    public function DeleteAdditionalFieldValuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAdditionalFieldValuesResponse = new DeleteAdditionalFieldValuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAdditionalFieldValuesResponse, $methodName)) {
                $DeleteAdditionalFieldValuesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAdditionalFieldValuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CloneCampaign
    */
    public function CloneCampaign($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloneCampaign = new CloneCampaign();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloneCampaign, $methodName)) {
                $CloneCampaign->$methodName($paramValue);
            }
        }
        return $CloneCampaign;
    }



}

?>
