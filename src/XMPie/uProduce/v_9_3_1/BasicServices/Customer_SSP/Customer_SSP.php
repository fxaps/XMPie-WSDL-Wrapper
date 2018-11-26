<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Customer_SSP;


/**
 * Customer Web Service.
 */
class Customer_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetPropertiesResponse',
  'GetAccountID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountID',
  'GetAccountIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountIDResponse',
  'GetAccounts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccounts',
  'GetAccountsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsResponse',
  'GetAccountsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsDataSet',
  'GetAccountsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsDataSetResponse',
  'GetAccountsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsDataSetResult',
  'GetAccountsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsXMPTblDataSet',
  'GetAccountsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetAccountsXMPTblDataSetResponse',
  'DeleteAccounts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAccounts',
  'DeleteAccountsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAccountsResponse',
  'DeleteAllAccounts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllAccounts',
  'DeleteAllAccountsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllAccountsResponse',
  'GetUser' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUser',
  'GetUserResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUserResponse',
  'GetUsers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsers',
  'GetUsersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersResponse',
  'GetUsersDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersDataSet',
  'GetUsersDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersDataSetResponse',
  'GetUsersDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersDataSetResult',
  'GetUsersXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersXMPTblDataSet',
  'GetUsersXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetUsersXMPTblDataSetResponse',
  'DeleteUsers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteUsers',
  'DeleteUsersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteUsersResponse',
  'DeleteAllUsers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllUsers',
  'DeleteAllUsersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllUsersResponse',
  'GetDestinationID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationID',
  'GetDestinationIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationIDResponse',
  'GetDestinations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinations',
  'GetDestinationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsResponse',
  'GetDestinationsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsDataSet',
  'GetDestinationsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsDataSetResponse',
  'GetDestinationsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsDataSetResult',
  'GetDestinationsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsXMPTblDataSet',
  'GetDestinationsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDestinationsXMPTblDataSetResponse',
  'DeleteDestinations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteDestinations',
  'DeleteDestinationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteDestinationsResponse',
  'DeleteAllDestinations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllDestinations',
  'DeleteAllDestinationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllDestinationsResponse',
  'GetPlanPartsProviderID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProviderID',
  'GetPlanPartsProviderIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProviderIDResponse',
  'GetPlanPartsProviderIDs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProviderIDs',
  'GetPlanPartsProviderIDsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProviderIDsResponse',
  'GetPlanPartsProvidersDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProvidersDataSet',
  'GetPlanPartsProvidersDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProvidersDataSetResponse',
  'GetPlanPartsProvidersDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProvidersDataSetResult',
  'GetPlanPartsProvidersXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProvidersXMPTblDataSet',
  'GetPlanPartsProvidersXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetPlanPartsProvidersXMPTblDataSetResponse',
  'DeletePlanPartsProviders' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeletePlanPartsProviders',
  'DeletePlanPartsProvidersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeletePlanPartsProvidersResponse',
  'DeleteAllPlanPartsProviders' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllPlanPartsProviders',
  'DeleteAllPlanPartsProvidersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllPlanPartsProvidersResponse',
  'GetDeliveryProviderID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProviderID',
  'GetDeliveryProviderIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProviderIDResponse',
  'GetDeliveryProviders' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProviders',
  'GetDeliveryProvidersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersResponse',
  'GetDeliveryProvidersDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersDataSet',
  'GetDeliveryProvidersDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersDataSetResponse',
  'GetDeliveryProvidersDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersDataSetResult',
  'GetDeliveryProvidersXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersXMPTblDataSet',
  'GetDeliveryProvidersXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetDeliveryProvidersXMPTblDataSetResponse',
  'DeleteDeliveryProviders' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteDeliveryProviders',
  'DeleteDeliveryProvidersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteDeliveryProvidersResponse',
  'DeleteAllDeliveryProviders' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllDeliveryProviders',
  'DeleteAllDeliveryProvidersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllDeliveryProvidersResponse',
  'GetConfigFileID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFileID',
  'GetConfigFileIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFileIDResponse',
  'GetConfigFiles' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFiles',
  'GetConfigFilesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesResponse',
  'GetConfigFilesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesDataSet',
  'GetConfigFilesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesDataSetResponse',
  'GetConfigFilesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesDataSetResult',
  'GetConfigFilesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesXMPTblDataSet',
  'GetConfigFilesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetConfigFilesXMPTblDataSetResponse',
  'DeleteConfigFiles' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteConfigFiles',
  'DeleteConfigFilesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteConfigFilesResponse',
  'DeleteAllConfigFiles' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllConfigFiles',
  'DeleteAllConfigFilesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllConfigFilesResponse',
  'GetCustomButtonID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonID',
  'GetCustomButtonIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonIDResponse',
  'GetCustomButtons' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtons',
  'GetCustomButtonsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsResponse',
  'GetCustomButtonsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsDataSet',
  'GetCustomButtonsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsDataSetResponse',
  'GetCustomButtonsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsDataSetResult',
  'GetCustomButtonsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsXMPTblDataSet',
  'GetCustomButtonsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetCustomButtonsXMPTblDataSetResponse',
  'DeleteCustomButtons' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteCustomButtons',
  'DeleteCustomButtonsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteCustomButtonsResponse',
  'DeleteAllCustomButtons' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllCustomButtons',
  'DeleteAllCustomButtonsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllCustomButtonsResponse',
  'GetMeasurementUnitID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitID',
  'GetMeasurementUnitIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitIDResponse',
  'GetMeasurementUnits' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnits',
  'GetMeasurementUnitsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsResponse',
  'GetMeasurementUnitsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsDataSet',
  'GetMeasurementUnitsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsDataSetResponse',
  'GetMeasurementUnitsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsDataSetResult',
  'GetMeasurementUnitsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsXMPTblDataSet',
  'GetMeasurementUnitsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetMeasurementUnitsXMPTblDataSetResponse',
  'DeleteMeasurementUnits' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteMeasurementUnits',
  'DeleteMeasurementUnitsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteMeasurementUnitsResponse',
  'DeleteAllMeasurementUnits' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllMeasurementUnits',
  'DeleteAllMeasurementUnitsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllMeasurementUnitsResponse',
  'GetSheetSizeID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizeID',
  'GetSheetSizeIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizeIDResponse',
  'GetSheetSizes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizes',
  'GetSheetSizesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesResponse',
  'GetSheetSizesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesDataSet',
  'GetSheetSizesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesDataSetResponse',
  'GetSheetSizesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesDataSetResult',
  'GetSheetSizesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesXMPTblDataSet',
  'GetSheetSizesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSheetSizesXMPTblDataSetResponse',
  'DeleteSheetSizes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteSheetSizes',
  'DeleteSheetSizesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteSheetSizesResponse',
  'DeleteAllSheetSizes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllSheetSizes',
  'DeleteAllSheetSizesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteAllSheetSizesResponse',
  'GetRecentCampaignInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetRecentCampaignInfo',
  'GetRecentCampaignInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetRecentCampaignInfoResponse',
  'CampaignShortcutInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\CampaignShortcutInfo',
  'SetRecentCampaignID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetRecentCampaignID',
  'SetRecentCampaignIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetRecentCampaignIDResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\Customer_SSP\\DeleteSettingsResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Customer_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Customer.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Customer.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
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
     * Get customer's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all customer's properties.
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
     * Set properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get Account ID by name.
     *
     * @param GetAccountID $parameters
     * @return GetAccountIDResponse
     */
    public function GetAccountID(GetAccountID $parameters)
    {
      return $this->__soapCall('GetAccountID', array($parameters));
    }

    /**
     * Get Customer's Accounts.
     *
     * @param GetAccounts $parameters
     * @return GetAccountsResponse
     */
    public function GetAccounts(GetAccounts $parameters)
    {
      return $this->__soapCall('GetAccounts', array($parameters));
    }

    /**
     * Get Account's view.
     *
     * @param GetAccountsDataSet $parameters
     * @return GetAccountsDataSetResponse
     */
    public function GetAccountsDataSet(GetAccountsDataSet $parameters)
    {
      return $this->__soapCall('GetAccountsDataSet', array($parameters));
    }

    /**
     * Get Account's view.
     *
     * @param GetAccountsXMPTblDataSet $parameters
     * @return GetAccountsXMPTblDataSetResponse
     */
    public function GetAccountsXMPTblDataSet(GetAccountsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAccountsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Accounts.
     *
     * @param DeleteAccounts $parameters
     * @return DeleteAccountsResponse
     */
    public function DeleteAccounts(DeleteAccounts $parameters)
    {
      return $this->__soapCall('DeleteAccounts', array($parameters));
    }

    /**
     * Delete all Accounts.
     *
     * @param DeleteAllAccounts $parameters
     * @return DeleteAllAccountsResponse
     */
    public function DeleteAllAccounts(DeleteAllAccounts $parameters)
    {
      return $this->__soapCall('DeleteAllAccounts', array($parameters));
    }

    /**
     * Get user by name.
     *
     * @param GetUser $parameters
     * @return GetUserResponse
     */
    public function GetUser(GetUser $parameters)
    {
      return $this->__soapCall('GetUser', array($parameters));
    }

    /**
     * Get all users.
     *
     * @param GetUsers $parameters
     * @return GetUsersResponse
     */
    public function GetUsers(GetUsers $parameters)
    {
      return $this->__soapCall('GetUsers', array($parameters));
    }

    /**
     * Dget user's view.
     *
     * @param GetUsersDataSet $parameters
     * @return GetUsersDataSetResponse
     */
    public function GetUsersDataSet(GetUsersDataSet $parameters)
    {
      return $this->__soapCall('GetUsersDataSet', array($parameters));
    }

    /**
     * Dget user's view.
     *
     * @param GetUsersXMPTblDataSet $parameters
     * @return GetUsersXMPTblDataSetResponse
     */
    public function GetUsersXMPTblDataSet(GetUsersXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetUsersXMPTblDataSet', array($parameters));
    }

    /**
     * Delete users.
     *
     * @param DeleteUsers $parameters
     * @return DeleteUsersResponse
     */
    public function DeleteUsers(DeleteUsers $parameters)
    {
      return $this->__soapCall('DeleteUsers', array($parameters));
    }

    /**
     * Delete all users.
     *
     * @param DeleteAllUsers $parameters
     * @return DeleteAllUsersResponse
     */
    public function DeleteAllUsers(DeleteAllUsers $parameters)
    {
      return $this->__soapCall('DeleteAllUsers', array($parameters));
    }

    /**
     * Get destination ID by name.
     *
     * @param GetDestinationID $parameters
     * @return GetDestinationIDResponse
     */
    public function GetDestinationID(GetDestinationID $parameters)
    {
      return $this->__soapCall('GetDestinationID', array($parameters));
    }

    /**
     * Get destinations.
     *
     * @param GetDestinations $parameters
     * @return GetDestinationsResponse
     */
    public function GetDestinations(GetDestinations $parameters)
    {
      return $this->__soapCall('GetDestinations', array($parameters));
    }

    /**
     * Get destination's view.
     *
     * @param GetDestinationsDataSet $parameters
     * @return GetDestinationsDataSetResponse
     */
    public function GetDestinationsDataSet(GetDestinationsDataSet $parameters)
    {
      return $this->__soapCall('GetDestinationsDataSet', array($parameters));
    }

    /**
     * Get destination's view.
     *
     * @param GetDestinationsXMPTblDataSet $parameters
     * @return GetDestinationsXMPTblDataSetResponse
     */
    public function GetDestinationsXMPTblDataSet(GetDestinationsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDestinationsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete destination.
     *
     * @param DeleteDestinations $parameters
     * @return DeleteDestinationsResponse
     */
    public function DeleteDestinations(DeleteDestinations $parameters)
    {
      return $this->__soapCall('DeleteDestinations', array($parameters));
    }

    /**
     * Delete all destinations.
     *
     * @param DeleteAllDestinations $parameters
     * @return DeleteAllDestinationsResponse
     */
    public function DeleteAllDestinations(DeleteAllDestinations $parameters)
    {
      return $this->__soapCall('DeleteAllDestinations', array($parameters));
    }

    /**
     * Get PlanPartsProvider ID by dllname and function name.
     *
     * @param GetPlanPartsProviderID $parameters
     * @return GetPlanPartsProviderIDResponse
     */
    public function GetPlanPartsProviderID(GetPlanPartsProviderID $parameters)
    {
      return $this->__soapCall('GetPlanPartsProviderID', array($parameters));
    }

    /**
     * Get PlanPartsProvider ID's.
     *
     * @param GetPlanPartsProviderIDs $parameters
     * @return GetPlanPartsProviderIDsResponse
     */
    public function GetPlanPartsProviderIDs(GetPlanPartsProviderIDs $parameters)
    {
      return $this->__soapCall('GetPlanPartsProviderIDs', array($parameters));
    }

    /**
     * Get PlanPartsProvider's view.
     *
     * @param GetPlanPartsProvidersDataSet $parameters
     * @return GetPlanPartsProvidersDataSetResponse
     */
    public function GetPlanPartsProvidersDataSet(GetPlanPartsProvidersDataSet $parameters)
    {
      return $this->__soapCall('GetPlanPartsProvidersDataSet', array($parameters));
    }

    /**
     * Get PlanPartsProvider's view.
     *
     * @param GetPlanPartsProvidersXMPTblDataSet $parameters
     * @return GetPlanPartsProvidersXMPTblDataSetResponse
     */
    public function GetPlanPartsProvidersXMPTblDataSet(GetPlanPartsProvidersXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPlanPartsProvidersXMPTblDataSet', array($parameters));
    }

    /**
     * Delete PlanPartsProviders.
     *
     * @param DeletePlanPartsProviders $parameters
     * @return DeletePlanPartsProvidersResponse
     */
    public function DeletePlanPartsProviders(DeletePlanPartsProviders $parameters)
    {
      return $this->__soapCall('DeletePlanPartsProviders', array($parameters));
    }

    /**
     * Delete all PlanPartsProviders.
     *
     * @param DeleteAllPlanPartsProviders $parameters
     * @return DeleteAllPlanPartsProvidersResponse
     */
    public function DeleteAllPlanPartsProviders(DeleteAllPlanPartsProviders $parameters)
    {
      return $this->__soapCall('DeleteAllPlanPartsProviders', array($parameters));
    }

    /**
     * Get DeliveryProvider ID by name.
     *
     * @param GetDeliveryProviderID $parameters
     * @return GetDeliveryProviderIDResponse
     */
    public function GetDeliveryProviderID(GetDeliveryProviderID $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderID', array($parameters));
    }

    /**
     * Get DeliveryProviders.
     *
     * @param GetDeliveryProviders $parameters
     * @return GetDeliveryProvidersResponse
     */
    public function GetDeliveryProviders(GetDeliveryProviders $parameters)
    {
      return $this->__soapCall('GetDeliveryProviders', array($parameters));
    }

    /**
     * Get DeliveryProvider's view.
     *
     * @param GetDeliveryProvidersDataSet $parameters
     * @return GetDeliveryProvidersDataSetResponse
     */
    public function GetDeliveryProvidersDataSet(GetDeliveryProvidersDataSet $parameters)
    {
      return $this->__soapCall('GetDeliveryProvidersDataSet', array($parameters));
    }

    /**
     * Get DeliveryProvider's view.
     *
     * @param GetDeliveryProvidersXMPTblDataSet $parameters
     * @return GetDeliveryProvidersXMPTblDataSetResponse
     */
    public function GetDeliveryProvidersXMPTblDataSet(GetDeliveryProvidersXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDeliveryProvidersXMPTblDataSet', array($parameters));
    }

    /**
     * Delete DeliveryProviders.
     *
     * @param DeleteDeliveryProviders $parameters
     * @return DeleteDeliveryProvidersResponse
     */
    public function DeleteDeliveryProviders(DeleteDeliveryProviders $parameters)
    {
      return $this->__soapCall('DeleteDeliveryProviders', array($parameters));
    }

    /**
     * Delete all DeliveryProviders.
     *
     * @param DeleteAllDeliveryProviders $parameters
     * @return DeleteAllDeliveryProvidersResponse
     */
    public function DeleteAllDeliveryProviders(DeleteAllDeliveryProviders $parameters)
    {
      return $this->__soapCall('DeleteAllDeliveryProviders', array($parameters));
    }

    /**
     * Get congif file ID by name.
     *
     * @param GetConfigFileID $parameters
     * @return GetConfigFileIDResponse
     */
    public function GetConfigFileID(GetConfigFileID $parameters)
    {
      return $this->__soapCall('GetConfigFileID', array($parameters));
    }

    /**
     * Get config files.
     *
     * @param GetConfigFiles $parameters
     * @return GetConfigFilesResponse
     */
    public function GetConfigFiles(GetConfigFiles $parameters)
    {
      return $this->__soapCall('GetConfigFiles', array($parameters));
    }

    /**
     * Get config files view.
     *
     * @param GetConfigFilesDataSet $parameters
     * @return GetConfigFilesDataSetResponse
     */
    public function GetConfigFilesDataSet(GetConfigFilesDataSet $parameters)
    {
      return $this->__soapCall('GetConfigFilesDataSet', array($parameters));
    }

    /**
     * Get config files view.
     *
     * @param GetConfigFilesXMPTblDataSet $parameters
     * @return GetConfigFilesXMPTblDataSetResponse
     */
    public function GetConfigFilesXMPTblDataSet(GetConfigFilesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetConfigFilesXMPTblDataSet', array($parameters));
    }

    /**
     * Delete config files.
     *
     * @param DeleteConfigFiles $parameters
     * @return DeleteConfigFilesResponse
     */
    public function DeleteConfigFiles(DeleteConfigFiles $parameters)
    {
      return $this->__soapCall('DeleteConfigFiles', array($parameters));
    }

    /**
     * Delete all config files.
     *
     * @param DeleteAllConfigFiles $parameters
     * @return DeleteAllConfigFilesResponse
     */
    public function DeleteAllConfigFiles(DeleteAllConfigFiles $parameters)
    {
      return $this->__soapCall('DeleteAllConfigFiles', array($parameters));
    }

    /**
     * Get Custom button ID by name.
     *
     * @param GetCustomButtonID $parameters
     * @return GetCustomButtonIDResponse
     */
    public function GetCustomButtonID(GetCustomButtonID $parameters)
    {
      return $this->__soapCall('GetCustomButtonID', array($parameters));
    }

    /**
     * Get Custom buttons.
     *
     * @param GetCustomButtons $parameters
     * @return GetCustomButtonsResponse
     */
    public function GetCustomButtons(GetCustomButtons $parameters)
    {
      return $this->__soapCall('GetCustomButtons', array($parameters));
    }

    /**
     * Get Custom button view.
     *
     * @param GetCustomButtonsDataSet $parameters
     * @return GetCustomButtonsDataSetResponse
     */
    public function GetCustomButtonsDataSet(GetCustomButtonsDataSet $parameters)
    {
      return $this->__soapCall('GetCustomButtonsDataSet', array($parameters));
    }

    /**
     * Get Custom button view.
     *
     * @param GetCustomButtonsXMPTblDataSet $parameters
     * @return GetCustomButtonsXMPTblDataSetResponse
     */
    public function GetCustomButtonsXMPTblDataSet(GetCustomButtonsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetCustomButtonsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Custom buttons.
     *
     * @param DeleteCustomButtons $parameters
     * @return DeleteCustomButtonsResponse
     */
    public function DeleteCustomButtons(DeleteCustomButtons $parameters)
    {
      return $this->__soapCall('DeleteCustomButtons', array($parameters));
    }

    /**
     * Delete all Custom buttons.
     *
     * @param DeleteAllCustomButtons $parameters
     * @return DeleteAllCustomButtonsResponse
     */
    public function DeleteAllCustomButtons(DeleteAllCustomButtons $parameters)
    {
      return $this->__soapCall('DeleteAllCustomButtons', array($parameters));
    }

    /**
     * Get measurement unit ID by name.
     *
     * @param GetMeasurementUnitID $parameters
     * @return GetMeasurementUnitIDResponse
     */
    public function GetMeasurementUnitID(GetMeasurementUnitID $parameters)
    {
      return $this->__soapCall('GetMeasurementUnitID', array($parameters));
    }

    /**
     * Get measurement units.
     *
     * @param GetMeasurementUnits $parameters
     * @return GetMeasurementUnitsResponse
     */
    public function GetMeasurementUnits(GetMeasurementUnits $parameters)
    {
      return $this->__soapCall('GetMeasurementUnits', array($parameters));
    }

    /**
     * Get measurement unit view.
     *
     * @param GetMeasurementUnitsDataSet $parameters
     * @return GetMeasurementUnitsDataSetResponse
     */
    public function GetMeasurementUnitsDataSet(GetMeasurementUnitsDataSet $parameters)
    {
      return $this->__soapCall('GetMeasurementUnitsDataSet', array($parameters));
    }

    /**
     * Get measurement unit view.
     *
     * @param GetMeasurementUnitsXMPTblDataSet $parameters
     * @return GetMeasurementUnitsXMPTblDataSetResponse
     */
    public function GetMeasurementUnitsXMPTblDataSet(GetMeasurementUnitsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetMeasurementUnitsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete measurement units.
     *
     * @param DeleteMeasurementUnits $parameters
     * @return DeleteMeasurementUnitsResponse
     */
    public function DeleteMeasurementUnits(DeleteMeasurementUnits $parameters)
    {
      return $this->__soapCall('DeleteMeasurementUnits', array($parameters));
    }

    /**
     * Delete all measurement units.
     *
     * @param DeleteAllMeasurementUnits $parameters
     * @return DeleteAllMeasurementUnitsResponse
     */
    public function DeleteAllMeasurementUnits(DeleteAllMeasurementUnits $parameters)
    {
      return $this->__soapCall('DeleteAllMeasurementUnits', array($parameters));
    }

    /**
     * Get sheet size ID by name.
     *
     * @param GetSheetSizeID $parameters
     * @return GetSheetSizeIDResponse
     */
    public function GetSheetSizeID(GetSheetSizeID $parameters)
    {
      return $this->__soapCall('GetSheetSizeID', array($parameters));
    }

    /**
     * Get sheet sizes.
     *
     * @param GetSheetSizes $parameters
     * @return GetSheetSizesResponse
     */
    public function GetSheetSizes(GetSheetSizes $parameters)
    {
      return $this->__soapCall('GetSheetSizes', array($parameters));
    }

    /**
     * Get sheet size view.
     *
     * @param GetSheetSizesDataSet $parameters
     * @return GetSheetSizesDataSetResponse
     */
    public function GetSheetSizesDataSet(GetSheetSizesDataSet $parameters)
    {
      return $this->__soapCall('GetSheetSizesDataSet', array($parameters));
    }

    /**
     * Get sheet size view.
     *
     * @param GetSheetSizesXMPTblDataSet $parameters
     * @return GetSheetSizesXMPTblDataSetResponse
     */
    public function GetSheetSizesXMPTblDataSet(GetSheetSizesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetSheetSizesXMPTblDataSet', array($parameters));
    }

    /**
     * Delete sheet sizes.
     *
     * @param DeleteSheetSizes $parameters
     * @return DeleteSheetSizesResponse
     */
    public function DeleteSheetSizes(DeleteSheetSizes $parameters)
    {
      return $this->__soapCall('DeleteSheetSizes', array($parameters));
    }

    /**
     * Delete all sheet sizes.
     *
     * @param DeleteAllSheetSizes $parameters
     * @return DeleteAllSheetSizesResponse
     */
    public function DeleteAllSheetSizes(DeleteAllSheetSizes $parameters)
    {
      return $this->__soapCall('DeleteAllSheetSizes', array($parameters));
    }

    /**
     * Get recent campaign shortcut info for the user.
     *
     * @param GetRecentCampaignInfo $parameters
     * @return GetRecentCampaignInfoResponse
     */
    public function GetRecentCampaignInfo(GetRecentCampaignInfo $parameters)
    {
      return $this->__soapCall('GetRecentCampaignInfo', array($parameters));
    }

    /**
     * Set recent campaign ID for the user.
     *
     * @param SetRecentCampaignID $parameters
     * @return SetRecentCampaignIDResponse
     */
    public function SetRecentCampaignID(SetRecentCampaignID $parameters)
    {
      return $this->__soapCall('SetRecentCampaignID', array($parameters));
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
     * Returns Setting(s) for the Customer and the user.
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

}
