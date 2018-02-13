<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccounts;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetAccountsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAccounts;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAccountsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllAccounts;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllAccountsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUser;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUserResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsers;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteUsers;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteUsersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllUsers;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllUsersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinations;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDestinationsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDestinations;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDestinationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllDestinations;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllDestinationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProviderID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProviderIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProviderIDs;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProviderIDsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProvidersDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProvidersDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProvidersDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProvidersXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetPlanPartsProvidersXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeletePlanPartsProviders;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeletePlanPartsProvidersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllPlanPartsProviders;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllPlanPartsProvidersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProviderID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProviderIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProviders;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetDeliveryProvidersXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDeliveryProviders;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteDeliveryProvidersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllDeliveryProviders;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllDeliveryProvidersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFileID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFileIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFiles;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteConfigFiles;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteConfigFilesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllConfigFiles;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllConfigFilesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtons;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetCustomButtonsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteCustomButtons;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteCustomButtonsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllCustomButtons;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllCustomButtonsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnits;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetMeasurementUnitsXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteMeasurementUnits;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteMeasurementUnitsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllMeasurementUnits;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllMeasurementUnitsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizeID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizeIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizes;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSheetSizesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteSheetSizes;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteSheetSizesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllSheetSizes;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteAllSheetSizesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetRecentCampaignInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetRecentCampaignInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\CampaignShortcutInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetRecentCampaignID;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetRecentCampaignIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\SetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetSettingsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteSettings;
use XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\DeleteSettingsResponse;


class FabricateCustomer_SSP
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
    * @return GetAccountID
    */
    public function GetAccountID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountID = new GetAccountID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountID, $methodName)) {
                $GetAccountID->$methodName($paramValue);
            }
        }
        return $GetAccountID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountIDResponse
    */
    public function GetAccountIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountIDResponse = new GetAccountIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountIDResponse, $methodName)) {
                $GetAccountIDResponse->$methodName($paramValue);
            }
        }
        return $GetAccountIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccounts
    */
    public function GetAccounts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccounts = new GetAccounts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccounts, $methodName)) {
                $GetAccounts->$methodName($paramValue);
            }
        }
        return $GetAccounts;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsResponse
    */
    public function GetAccountsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsResponse = new GetAccountsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsResponse, $methodName)) {
                $GetAccountsResponse->$methodName($paramValue);
            }
        }
        return $GetAccountsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsDataSet
    */
    public function GetAccountsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsDataSet = new GetAccountsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsDataSet, $methodName)) {
                $GetAccountsDataSet->$methodName($paramValue);
            }
        }
        return $GetAccountsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsDataSetResponse
    */
    public function GetAccountsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsDataSetResponse = new GetAccountsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsDataSetResponse, $methodName)) {
                $GetAccountsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAccountsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsDataSetResult
    */
    public function GetAccountsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsDataSetResult = new GetAccountsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsDataSetResult, $methodName)) {
                $GetAccountsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetAccountsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsXMPTblDataSet
    */
    public function GetAccountsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsXMPTblDataSet = new GetAccountsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsXMPTblDataSet, $methodName)) {
                $GetAccountsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAccountsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountsXMPTblDataSetResponse
    */
    public function GetAccountsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountsXMPTblDataSetResponse = new GetAccountsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountsXMPTblDataSetResponse, $methodName)) {
                $GetAccountsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAccountsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAccounts
    */
    public function DeleteAccounts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAccounts = new DeleteAccounts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAccounts, $methodName)) {
                $DeleteAccounts->$methodName($paramValue);
            }
        }
        return $DeleteAccounts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAccountsResponse
    */
    public function DeleteAccountsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAccountsResponse = new DeleteAccountsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAccountsResponse, $methodName)) {
                $DeleteAccountsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAccountsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAccounts
    */
    public function DeleteAllAccounts($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAccounts = new DeleteAllAccounts();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAccounts, $methodName)) {
                $DeleteAllAccounts->$methodName($paramValue);
            }
        }
        return $DeleteAllAccounts;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllAccountsResponse
    */
    public function DeleteAllAccountsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllAccountsResponse = new DeleteAllAccountsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllAccountsResponse, $methodName)) {
                $DeleteAllAccountsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllAccountsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUser
    */
    public function GetUser($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUser = new GetUser();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUser, $methodName)) {
                $GetUser->$methodName($paramValue);
            }
        }
        return $GetUser;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserResponse
    */
    public function GetUserResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserResponse = new GetUserResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserResponse, $methodName)) {
                $GetUserResponse->$methodName($paramValue);
            }
        }
        return $GetUserResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsers
    */
    public function GetUsers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsers = new GetUsers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsers, $methodName)) {
                $GetUsers->$methodName($paramValue);
            }
        }
        return $GetUsers;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersResponse
    */
    public function GetUsersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersResponse = new GetUsersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersResponse, $methodName)) {
                $GetUsersResponse->$methodName($paramValue);
            }
        }
        return $GetUsersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersDataSet
    */
    public function GetUsersDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersDataSet = new GetUsersDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersDataSet, $methodName)) {
                $GetUsersDataSet->$methodName($paramValue);
            }
        }
        return $GetUsersDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersDataSetResponse
    */
    public function GetUsersDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersDataSetResponse = new GetUsersDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersDataSetResponse, $methodName)) {
                $GetUsersDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetUsersDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersDataSetResult
    */
    public function GetUsersDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersDataSetResult = new GetUsersDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersDataSetResult, $methodName)) {
                $GetUsersDataSetResult->$methodName($paramValue);
            }
        }
        return $GetUsersDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersXMPTblDataSet
    */
    public function GetUsersXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersXMPTblDataSet = new GetUsersXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersXMPTblDataSet, $methodName)) {
                $GetUsersXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetUsersXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUsersXMPTblDataSetResponse
    */
    public function GetUsersXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUsersXMPTblDataSetResponse = new GetUsersXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUsersXMPTblDataSetResponse, $methodName)) {
                $GetUsersXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetUsersXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteUsers
    */
    public function DeleteUsers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteUsers = new DeleteUsers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteUsers, $methodName)) {
                $DeleteUsers->$methodName($paramValue);
            }
        }
        return $DeleteUsers;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteUsersResponse
    */
    public function DeleteUsersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteUsersResponse = new DeleteUsersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteUsersResponse, $methodName)) {
                $DeleteUsersResponse->$methodName($paramValue);
            }
        }
        return $DeleteUsersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllUsers
    */
    public function DeleteAllUsers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllUsers = new DeleteAllUsers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllUsers, $methodName)) {
                $DeleteAllUsers->$methodName($paramValue);
            }
        }
        return $DeleteAllUsers;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllUsersResponse
    */
    public function DeleteAllUsersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllUsersResponse = new DeleteAllUsersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllUsersResponse, $methodName)) {
                $DeleteAllUsersResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllUsersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationID
    */
    public function GetDestinationID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationID = new GetDestinationID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationID, $methodName)) {
                $GetDestinationID->$methodName($paramValue);
            }
        }
        return $GetDestinationID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationIDResponse
    */
    public function GetDestinationIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationIDResponse = new GetDestinationIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationIDResponse, $methodName)) {
                $GetDestinationIDResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinations
    */
    public function GetDestinations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinations = new GetDestinations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinations, $methodName)) {
                $GetDestinations->$methodName($paramValue);
            }
        }
        return $GetDestinations;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsResponse
    */
    public function GetDestinationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsResponse = new GetDestinationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsResponse, $methodName)) {
                $GetDestinationsResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsDataSet
    */
    public function GetDestinationsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsDataSet = new GetDestinationsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsDataSet, $methodName)) {
                $GetDestinationsDataSet->$methodName($paramValue);
            }
        }
        return $GetDestinationsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsDataSetResponse
    */
    public function GetDestinationsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsDataSetResponse = new GetDestinationsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsDataSetResponse, $methodName)) {
                $GetDestinationsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsDataSetResult
    */
    public function GetDestinationsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsDataSetResult = new GetDestinationsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsDataSetResult, $methodName)) {
                $GetDestinationsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDestinationsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsXMPTblDataSet
    */
    public function GetDestinationsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsXMPTblDataSet = new GetDestinationsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsXMPTblDataSet, $methodName)) {
                $GetDestinationsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDestinationsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDestinationsXMPTblDataSetResponse
    */
    public function GetDestinationsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDestinationsXMPTblDataSetResponse = new GetDestinationsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDestinationsXMPTblDataSetResponse, $methodName)) {
                $GetDestinationsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDestinationsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDestinations
    */
    public function DeleteDestinations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDestinations = new DeleteDestinations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDestinations, $methodName)) {
                $DeleteDestinations->$methodName($paramValue);
            }
        }
        return $DeleteDestinations;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDestinationsResponse
    */
    public function DeleteDestinationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDestinationsResponse = new DeleteDestinationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDestinationsResponse, $methodName)) {
                $DeleteDestinationsResponse->$methodName($paramValue);
            }
        }
        return $DeleteDestinationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDestinations
    */
    public function DeleteAllDestinations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDestinations = new DeleteAllDestinations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDestinations, $methodName)) {
                $DeleteAllDestinations->$methodName($paramValue);
            }
        }
        return $DeleteAllDestinations;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDestinationsResponse
    */
    public function DeleteAllDestinationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDestinationsResponse = new DeleteAllDestinationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDestinationsResponse, $methodName)) {
                $DeleteAllDestinationsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllDestinationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProviderID
    */
    public function GetPlanPartsProviderID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProviderID = new GetPlanPartsProviderID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProviderID, $methodName)) {
                $GetPlanPartsProviderID->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProviderID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProviderIDResponse
    */
    public function GetPlanPartsProviderIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProviderIDResponse = new GetPlanPartsProviderIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProviderIDResponse, $methodName)) {
                $GetPlanPartsProviderIDResponse->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProviderIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProviderIDs
    */
    public function GetPlanPartsProviderIDs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProviderIDs = new GetPlanPartsProviderIDs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProviderIDs, $methodName)) {
                $GetPlanPartsProviderIDs->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProviderIDs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProviderIDsResponse
    */
    public function GetPlanPartsProviderIDsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProviderIDsResponse = new GetPlanPartsProviderIDsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProviderIDsResponse, $methodName)) {
                $GetPlanPartsProviderIDsResponse->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProviderIDsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProvidersDataSet
    */
    public function GetPlanPartsProvidersDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProvidersDataSet = new GetPlanPartsProvidersDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProvidersDataSet, $methodName)) {
                $GetPlanPartsProvidersDataSet->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProvidersDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProvidersDataSetResponse
    */
    public function GetPlanPartsProvidersDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProvidersDataSetResponse = new GetPlanPartsProvidersDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProvidersDataSetResponse, $methodName)) {
                $GetPlanPartsProvidersDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProvidersDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProvidersDataSetResult
    */
    public function GetPlanPartsProvidersDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProvidersDataSetResult = new GetPlanPartsProvidersDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProvidersDataSetResult, $methodName)) {
                $GetPlanPartsProvidersDataSetResult->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProvidersDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProvidersXMPTblDataSet
    */
    public function GetPlanPartsProvidersXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProvidersXMPTblDataSet = new GetPlanPartsProvidersXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProvidersXMPTblDataSet, $methodName)) {
                $GetPlanPartsProvidersXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProvidersXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPlanPartsProvidersXMPTblDataSetResponse
    */
    public function GetPlanPartsProvidersXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPlanPartsProvidersXMPTblDataSetResponse = new GetPlanPartsProvidersXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPlanPartsProvidersXMPTblDataSetResponse, $methodName)) {
                $GetPlanPartsProvidersXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPlanPartsProvidersXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePlanPartsProviders
    */
    public function DeletePlanPartsProviders($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePlanPartsProviders = new DeletePlanPartsProviders();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePlanPartsProviders, $methodName)) {
                $DeletePlanPartsProviders->$methodName($paramValue);
            }
        }
        return $DeletePlanPartsProviders;
    }


   /**
    * @param array $paramAutoSet
    * @return DeletePlanPartsProvidersResponse
    */
    public function DeletePlanPartsProvidersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeletePlanPartsProvidersResponse = new DeletePlanPartsProvidersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeletePlanPartsProvidersResponse, $methodName)) {
                $DeletePlanPartsProvidersResponse->$methodName($paramValue);
            }
        }
        return $DeletePlanPartsProvidersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPlanPartsProviders
    */
    public function DeleteAllPlanPartsProviders($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPlanPartsProviders = new DeleteAllPlanPartsProviders();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPlanPartsProviders, $methodName)) {
                $DeleteAllPlanPartsProviders->$methodName($paramValue);
            }
        }
        return $DeleteAllPlanPartsProviders;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllPlanPartsProvidersResponse
    */
    public function DeleteAllPlanPartsProvidersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllPlanPartsProvidersResponse = new DeleteAllPlanPartsProvidersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllPlanPartsProvidersResponse, $methodName)) {
                $DeleteAllPlanPartsProvidersResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllPlanPartsProvidersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderID
    */
    public function GetDeliveryProviderID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderID = new GetDeliveryProviderID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderID, $methodName)) {
                $GetDeliveryProviderID->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviderIDResponse
    */
    public function GetDeliveryProviderIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviderIDResponse = new GetDeliveryProviderIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviderIDResponse, $methodName)) {
                $GetDeliveryProviderIDResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviderIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProviders
    */
    public function GetDeliveryProviders($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProviders = new GetDeliveryProviders();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProviders, $methodName)) {
                $GetDeliveryProviders->$methodName($paramValue);
            }
        }
        return $GetDeliveryProviders;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersResponse
    */
    public function GetDeliveryProvidersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersResponse = new GetDeliveryProvidersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersResponse, $methodName)) {
                $GetDeliveryProvidersResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersDataSet
    */
    public function GetDeliveryProvidersDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersDataSet = new GetDeliveryProvidersDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersDataSet, $methodName)) {
                $GetDeliveryProvidersDataSet->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersDataSetResponse
    */
    public function GetDeliveryProvidersDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersDataSetResponse = new GetDeliveryProvidersDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersDataSetResponse, $methodName)) {
                $GetDeliveryProvidersDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersDataSetResult
    */
    public function GetDeliveryProvidersDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersDataSetResult = new GetDeliveryProvidersDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersDataSetResult, $methodName)) {
                $GetDeliveryProvidersDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersXMPTblDataSet
    */
    public function GetDeliveryProvidersXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersXMPTblDataSet = new GetDeliveryProvidersXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersXMPTblDataSet, $methodName)) {
                $GetDeliveryProvidersXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDeliveryProvidersXMPTblDataSetResponse
    */
    public function GetDeliveryProvidersXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDeliveryProvidersXMPTblDataSetResponse = new GetDeliveryProvidersXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDeliveryProvidersXMPTblDataSetResponse, $methodName)) {
                $GetDeliveryProvidersXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDeliveryProvidersXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDeliveryProviders
    */
    public function DeleteDeliveryProviders($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDeliveryProviders = new DeleteDeliveryProviders();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDeliveryProviders, $methodName)) {
                $DeleteDeliveryProviders->$methodName($paramValue);
            }
        }
        return $DeleteDeliveryProviders;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteDeliveryProvidersResponse
    */
    public function DeleteDeliveryProvidersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteDeliveryProvidersResponse = new DeleteDeliveryProvidersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteDeliveryProvidersResponse, $methodName)) {
                $DeleteDeliveryProvidersResponse->$methodName($paramValue);
            }
        }
        return $DeleteDeliveryProvidersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDeliveryProviders
    */
    public function DeleteAllDeliveryProviders($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDeliveryProviders = new DeleteAllDeliveryProviders();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDeliveryProviders, $methodName)) {
                $DeleteAllDeliveryProviders->$methodName($paramValue);
            }
        }
        return $DeleteAllDeliveryProviders;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllDeliveryProvidersResponse
    */
    public function DeleteAllDeliveryProvidersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllDeliveryProvidersResponse = new DeleteAllDeliveryProvidersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllDeliveryProvidersResponse, $methodName)) {
                $DeleteAllDeliveryProvidersResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllDeliveryProvidersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFileID
    */
    public function GetConfigFileID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFileID = new GetConfigFileID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFileID, $methodName)) {
                $GetConfigFileID->$methodName($paramValue);
            }
        }
        return $GetConfigFileID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFileIDResponse
    */
    public function GetConfigFileIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFileIDResponse = new GetConfigFileIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFileIDResponse, $methodName)) {
                $GetConfigFileIDResponse->$methodName($paramValue);
            }
        }
        return $GetConfigFileIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFiles
    */
    public function GetConfigFiles($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFiles = new GetConfigFiles();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFiles, $methodName)) {
                $GetConfigFiles->$methodName($paramValue);
            }
        }
        return $GetConfigFiles;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesResponse
    */
    public function GetConfigFilesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesResponse = new GetConfigFilesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesResponse, $methodName)) {
                $GetConfigFilesResponse->$methodName($paramValue);
            }
        }
        return $GetConfigFilesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesDataSet
    */
    public function GetConfigFilesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesDataSet = new GetConfigFilesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesDataSet, $methodName)) {
                $GetConfigFilesDataSet->$methodName($paramValue);
            }
        }
        return $GetConfigFilesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesDataSetResponse
    */
    public function GetConfigFilesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesDataSetResponse = new GetConfigFilesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesDataSetResponse, $methodName)) {
                $GetConfigFilesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetConfigFilesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesDataSetResult
    */
    public function GetConfigFilesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesDataSetResult = new GetConfigFilesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesDataSetResult, $methodName)) {
                $GetConfigFilesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetConfigFilesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesXMPTblDataSet
    */
    public function GetConfigFilesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesXMPTblDataSet = new GetConfigFilesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesXMPTblDataSet, $methodName)) {
                $GetConfigFilesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetConfigFilesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetConfigFilesXMPTblDataSetResponse
    */
    public function GetConfigFilesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetConfigFilesXMPTblDataSetResponse = new GetConfigFilesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetConfigFilesXMPTblDataSetResponse, $methodName)) {
                $GetConfigFilesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetConfigFilesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteConfigFiles
    */
    public function DeleteConfigFiles($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteConfigFiles = new DeleteConfigFiles();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteConfigFiles, $methodName)) {
                $DeleteConfigFiles->$methodName($paramValue);
            }
        }
        return $DeleteConfigFiles;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteConfigFilesResponse
    */
    public function DeleteConfigFilesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteConfigFilesResponse = new DeleteConfigFilesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteConfigFilesResponse, $methodName)) {
                $DeleteConfigFilesResponse->$methodName($paramValue);
            }
        }
        return $DeleteConfigFilesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllConfigFiles
    */
    public function DeleteAllConfigFiles($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllConfigFiles = new DeleteAllConfigFiles();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllConfigFiles, $methodName)) {
                $DeleteAllConfigFiles->$methodName($paramValue);
            }
        }
        return $DeleteAllConfigFiles;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllConfigFilesResponse
    */
    public function DeleteAllConfigFilesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllConfigFilesResponse = new DeleteAllConfigFilesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllConfigFilesResponse, $methodName)) {
                $DeleteAllConfigFilesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllConfigFilesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonID
    */
    public function GetCustomButtonID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonID = new GetCustomButtonID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonID, $methodName)) {
                $GetCustomButtonID->$methodName($paramValue);
            }
        }
        return $GetCustomButtonID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonIDResponse
    */
    public function GetCustomButtonIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonIDResponse = new GetCustomButtonIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonIDResponse, $methodName)) {
                $GetCustomButtonIDResponse->$methodName($paramValue);
            }
        }
        return $GetCustomButtonIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtons
    */
    public function GetCustomButtons($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtons = new GetCustomButtons();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtons, $methodName)) {
                $GetCustomButtons->$methodName($paramValue);
            }
        }
        return $GetCustomButtons;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsResponse
    */
    public function GetCustomButtonsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsResponse = new GetCustomButtonsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsResponse, $methodName)) {
                $GetCustomButtonsResponse->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsDataSet
    */
    public function GetCustomButtonsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsDataSet = new GetCustomButtonsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsDataSet, $methodName)) {
                $GetCustomButtonsDataSet->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsDataSetResponse
    */
    public function GetCustomButtonsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsDataSetResponse = new GetCustomButtonsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsDataSetResponse, $methodName)) {
                $GetCustomButtonsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsDataSetResult
    */
    public function GetCustomButtonsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsDataSetResult = new GetCustomButtonsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsDataSetResult, $methodName)) {
                $GetCustomButtonsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsXMPTblDataSet
    */
    public function GetCustomButtonsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsXMPTblDataSet = new GetCustomButtonsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsXMPTblDataSet, $methodName)) {
                $GetCustomButtonsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCustomButtonsXMPTblDataSetResponse
    */
    public function GetCustomButtonsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCustomButtonsXMPTblDataSetResponse = new GetCustomButtonsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCustomButtonsXMPTblDataSetResponse, $methodName)) {
                $GetCustomButtonsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetCustomButtonsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteCustomButtons
    */
    public function DeleteCustomButtons($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteCustomButtons = new DeleteCustomButtons();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteCustomButtons, $methodName)) {
                $DeleteCustomButtons->$methodName($paramValue);
            }
        }
        return $DeleteCustomButtons;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteCustomButtonsResponse
    */
    public function DeleteCustomButtonsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteCustomButtonsResponse = new DeleteCustomButtonsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteCustomButtonsResponse, $methodName)) {
                $DeleteCustomButtonsResponse->$methodName($paramValue);
            }
        }
        return $DeleteCustomButtonsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllCustomButtons
    */
    public function DeleteAllCustomButtons($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllCustomButtons = new DeleteAllCustomButtons();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllCustomButtons, $methodName)) {
                $DeleteAllCustomButtons->$methodName($paramValue);
            }
        }
        return $DeleteAllCustomButtons;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllCustomButtonsResponse
    */
    public function DeleteAllCustomButtonsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllCustomButtonsResponse = new DeleteAllCustomButtonsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllCustomButtonsResponse, $methodName)) {
                $DeleteAllCustomButtonsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllCustomButtonsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitID
    */
    public function GetMeasurementUnitID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitID = new GetMeasurementUnitID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitID, $methodName)) {
                $GetMeasurementUnitID->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitIDResponse
    */
    public function GetMeasurementUnitIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitIDResponse = new GetMeasurementUnitIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitIDResponse, $methodName)) {
                $GetMeasurementUnitIDResponse->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnits
    */
    public function GetMeasurementUnits($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnits = new GetMeasurementUnits();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnits, $methodName)) {
                $GetMeasurementUnits->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnits;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsResponse
    */
    public function GetMeasurementUnitsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsResponse = new GetMeasurementUnitsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsResponse, $methodName)) {
                $GetMeasurementUnitsResponse->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsDataSet
    */
    public function GetMeasurementUnitsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsDataSet = new GetMeasurementUnitsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsDataSet, $methodName)) {
                $GetMeasurementUnitsDataSet->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsDataSetResponse
    */
    public function GetMeasurementUnitsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsDataSetResponse = new GetMeasurementUnitsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsDataSetResponse, $methodName)) {
                $GetMeasurementUnitsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsDataSetResult
    */
    public function GetMeasurementUnitsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsDataSetResult = new GetMeasurementUnitsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsDataSetResult, $methodName)) {
                $GetMeasurementUnitsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsXMPTblDataSet
    */
    public function GetMeasurementUnitsXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsXMPTblDataSet = new GetMeasurementUnitsXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsXMPTblDataSet, $methodName)) {
                $GetMeasurementUnitsXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMeasurementUnitsXMPTblDataSetResponse
    */
    public function GetMeasurementUnitsXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMeasurementUnitsXMPTblDataSetResponse = new GetMeasurementUnitsXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMeasurementUnitsXMPTblDataSetResponse, $methodName)) {
                $GetMeasurementUnitsXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetMeasurementUnitsXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteMeasurementUnits
    */
    public function DeleteMeasurementUnits($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteMeasurementUnits = new DeleteMeasurementUnits();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteMeasurementUnits, $methodName)) {
                $DeleteMeasurementUnits->$methodName($paramValue);
            }
        }
        return $DeleteMeasurementUnits;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteMeasurementUnitsResponse
    */
    public function DeleteMeasurementUnitsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteMeasurementUnitsResponse = new DeleteMeasurementUnitsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteMeasurementUnitsResponse, $methodName)) {
                $DeleteMeasurementUnitsResponse->$methodName($paramValue);
            }
        }
        return $DeleteMeasurementUnitsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllMeasurementUnits
    */
    public function DeleteAllMeasurementUnits($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllMeasurementUnits = new DeleteAllMeasurementUnits();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllMeasurementUnits, $methodName)) {
                $DeleteAllMeasurementUnits->$methodName($paramValue);
            }
        }
        return $DeleteAllMeasurementUnits;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllMeasurementUnitsResponse
    */
    public function DeleteAllMeasurementUnitsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllMeasurementUnitsResponse = new DeleteAllMeasurementUnitsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllMeasurementUnitsResponse, $methodName)) {
                $DeleteAllMeasurementUnitsResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllMeasurementUnitsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizeID
    */
    public function GetSheetSizeID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizeID = new GetSheetSizeID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizeID, $methodName)) {
                $GetSheetSizeID->$methodName($paramValue);
            }
        }
        return $GetSheetSizeID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizeIDResponse
    */
    public function GetSheetSizeIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizeIDResponse = new GetSheetSizeIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizeIDResponse, $methodName)) {
                $GetSheetSizeIDResponse->$methodName($paramValue);
            }
        }
        return $GetSheetSizeIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizes
    */
    public function GetSheetSizes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizes = new GetSheetSizes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizes, $methodName)) {
                $GetSheetSizes->$methodName($paramValue);
            }
        }
        return $GetSheetSizes;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesResponse
    */
    public function GetSheetSizesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesResponse = new GetSheetSizesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesResponse, $methodName)) {
                $GetSheetSizesResponse->$methodName($paramValue);
            }
        }
        return $GetSheetSizesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesDataSet
    */
    public function GetSheetSizesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesDataSet = new GetSheetSizesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesDataSet, $methodName)) {
                $GetSheetSizesDataSet->$methodName($paramValue);
            }
        }
        return $GetSheetSizesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesDataSetResponse
    */
    public function GetSheetSizesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesDataSetResponse = new GetSheetSizesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesDataSetResponse, $methodName)) {
                $GetSheetSizesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetSheetSizesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesDataSetResult
    */
    public function GetSheetSizesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesDataSetResult = new GetSheetSizesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesDataSetResult, $methodName)) {
                $GetSheetSizesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetSheetSizesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesXMPTblDataSet
    */
    public function GetSheetSizesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesXMPTblDataSet = new GetSheetSizesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesXMPTblDataSet, $methodName)) {
                $GetSheetSizesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetSheetSizesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSheetSizesXMPTblDataSetResponse
    */
    public function GetSheetSizesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSheetSizesXMPTblDataSetResponse = new GetSheetSizesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSheetSizesXMPTblDataSetResponse, $methodName)) {
                $GetSheetSizesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetSheetSizesXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSheetSizes
    */
    public function DeleteSheetSizes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSheetSizes = new DeleteSheetSizes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSheetSizes, $methodName)) {
                $DeleteSheetSizes->$methodName($paramValue);
            }
        }
        return $DeleteSheetSizes;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSheetSizesResponse
    */
    public function DeleteSheetSizesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSheetSizesResponse = new DeleteSheetSizesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSheetSizesResponse, $methodName)) {
                $DeleteSheetSizesResponse->$methodName($paramValue);
            }
        }
        return $DeleteSheetSizesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllSheetSizes
    */
    public function DeleteAllSheetSizes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllSheetSizes = new DeleteAllSheetSizes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllSheetSizes, $methodName)) {
                $DeleteAllSheetSizes->$methodName($paramValue);
            }
        }
        return $DeleteAllSheetSizes;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteAllSheetSizesResponse
    */
    public function DeleteAllSheetSizesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllSheetSizesResponse = new DeleteAllSheetSizesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllSheetSizesResponse, $methodName)) {
                $DeleteAllSheetSizesResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllSheetSizesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecentCampaignInfo
    */
    public function GetRecentCampaignInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecentCampaignInfo = new GetRecentCampaignInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecentCampaignInfo, $methodName)) {
                $GetRecentCampaignInfo->$methodName($paramValue);
            }
        }
        return $GetRecentCampaignInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecentCampaignInfoResponse
    */
    public function GetRecentCampaignInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecentCampaignInfoResponse = new GetRecentCampaignInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecentCampaignInfoResponse, $methodName)) {
                $GetRecentCampaignInfoResponse->$methodName($paramValue);
            }
        }
        return $GetRecentCampaignInfoResponse;
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
    * @return SetRecentCampaignID
    */
    public function SetRecentCampaignID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetRecentCampaignID = new SetRecentCampaignID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetRecentCampaignID, $methodName)) {
                $SetRecentCampaignID->$methodName($paramValue);
            }
        }
        return $SetRecentCampaignID;
    }


   /**
    * @param array $paramAutoSet
    * @return SetRecentCampaignIDResponse
    */
    public function SetRecentCampaignIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetRecentCampaignIDResponse = new SetRecentCampaignIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetRecentCampaignIDResponse, $methodName)) {
                $SetRecentCampaignIDResponse->$methodName($paramValue);
            }
        }
        return $SetRecentCampaignIDResponse;
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
