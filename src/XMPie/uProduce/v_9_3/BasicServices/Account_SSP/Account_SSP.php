<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Account_SSP;


/**
 * Account Web Service.
 */
class Account_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteResponse',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCustomerResponse',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetFolderPathResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetNameResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetPropertiesResponse',
  'GetCampaignID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignID',
  'GetCampaignIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignIDResponse',
  'GetCampaigns' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaigns',
  'GetCampaignsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsResponse',
  'GetCampaignsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsDataSet',
  'GetCampaignsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsDataSetResponse',
  'GetCampaignsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsDataSetResult',
  'GetCampaignsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsXMPTblDataSet',
  'GetCampaignsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetCampaignsXMPTblDataSetResponse',
  'DeleteCampaigns' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteCampaigns',
  'DeleteCampaignsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteCampaignsResponse',
  'DeleteAllCampaigns' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAllCampaigns',
  'DeleteAllCampaignsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAllCampaignsResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteSettingsResponse',
  'GetADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetADORs',
  'GetADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetADORsResponse',
  'ArrayOfPlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\ArrayOfPlanObject',
  'PlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\PlanObject',
  'GetAccountDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourceID',
  'GetAccountDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourceIDResponse',
  'GetAccountDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSources',
  'GetAccountDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesResponse',
  'GetAccountDataSourcesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesDataSet',
  'GetAccountDataSourcesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesDataSetResponse',
  'GetAccountDataSourcesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesDataSetResult',
  'GetAccountDataSourcesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesXMPTblDataSet',
  'GetAccountDataSourcesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\GetAccountDataSourcesXMPTblDataSetResponse',
  'DeleteAccountDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAccountDataSources',
  'DeleteAccountDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAccountDataSourcesResponse',
  'DeleteAllAccountDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAllAccountDataSources',
  'DeleteAllAccountDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\Account_SSP\\DeleteAllAccountDataSourcesResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Account_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Account.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Account.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Customer.
     *
     * @param GetCustomer $parameters
     * @return GetCustomerResponse
     */
    public function GetCustomer(GetCustomer $parameters)
    {
      return $this->__soapCall('GetCustomer', array($parameters));
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
     * Get Account's Name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
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
     * Get Campaign ID by name.
     *
     * @param GetCampaignID $parameters
     * @return GetCampaignIDResponse
     */
    public function GetCampaignID(GetCampaignID $parameters)
    {
      return $this->__soapCall('GetCampaignID', array($parameters));
    }

    /**
     * Get Campaigns.
     *
     * @param GetCampaigns $parameters
     * @return GetCampaignsResponse
     */
    public function GetCampaigns(GetCampaigns $parameters)
    {
      return $this->__soapCall('GetCampaigns', array($parameters));
    }

    /**
     * Get Campaign's view.
     *
     * @param GetCampaignsDataSet $parameters
     * @return GetCampaignsDataSetResponse
     */
    public function GetCampaignsDataSet(GetCampaignsDataSet $parameters)
    {
      return $this->__soapCall('GetCampaignsDataSet', array($parameters));
    }

    /**
     * Get Campaign's view.
     *
     * @param GetCampaignsXMPTblDataSet $parameters
     * @return GetCampaignsXMPTblDataSetResponse
     */
    public function GetCampaignsXMPTblDataSet(GetCampaignsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetCampaignsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Campaigns.
     *
     * @param DeleteCampaigns $parameters
     * @return DeleteCampaignsResponse
     */
    public function DeleteCampaigns(DeleteCampaigns $parameters)
    {
      return $this->__soapCall('DeleteCampaigns', array($parameters));
    }

    /**
     * Delete all Campaigns.
     *
     * @param DeleteAllCampaigns $parameters
     * @return DeleteAllCampaignsResponse
     */
    public function DeleteAllCampaigns(DeleteAllCampaigns $parameters)
    {
      return $this->__soapCall('DeleteAllCampaigns', array($parameters));
    }

    /**
     * Get account ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is Account exist.
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
     * Returns Setting(s) for the Account and the user.
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
     * Get Account ADORs information.
     *
     * @param GetADORs $parameters
     * @return GetADORsResponse
     */
    public function GetADORs(GetADORs $parameters)
    {
      return $this->__soapCall('GetADORs', array($parameters));
    }

    /**
     * Gets an Account level Data Source ID by name.
     *
     * @param GetAccountDataSourceID $parameters
     * @return GetAccountDataSourceIDResponse
     */
    public function GetAccountDataSourceID(GetAccountDataSourceID $parameters)
    {
      return $this->__soapCall('GetAccountDataSourceID', array($parameters));
    }

    /**
     * Gets all Account level Data Sources.
     *
     * @param GetAccountDataSources $parameters
     * @return GetAccountDataSourcesResponse
     */
    public function GetAccountDataSources(GetAccountDataSources $parameters)
    {
      return $this->__soapCall('GetAccountDataSources', array($parameters));
    }

    /**
     * Gets Account level Data Sources view.
     *
     * @param GetAccountDataSourcesDataSet $parameters
     * @return GetAccountDataSourcesDataSetResponse
     */
    public function GetAccountDataSourcesDataSet(GetAccountDataSourcesDataSet $parameters)
    {
      return $this->__soapCall('GetAccountDataSourcesDataSet', array($parameters));
    }

    /**
     * Gets Account level Data Sources view.
     *
     * @param GetAccountDataSourcesXMPTblDataSet $parameters
     * @return GetAccountDataSourcesXMPTblDataSetResponse
     */
    public function GetAccountDataSourcesXMPTblDataSet(GetAccountDataSourcesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAccountDataSourcesXMPTblDataSet', array($parameters));
    }

    /**
     * Deletes Account level Data Sources.
     *
     * @param DeleteAccountDataSources $parameters
     * @return DeleteAccountDataSourcesResponse
     */
    public function DeleteAccountDataSources(DeleteAccountDataSources $parameters)
    {
      return $this->__soapCall('DeleteAccountDataSources', array($parameters));
    }

    /**
     * Deletes all Account level Data Sources.
     *
     * @param DeleteAllAccountDataSources $parameters
     * @return DeleteAllAccountDataSourcesResponse
     */
    public function DeleteAllAccountDataSources(DeleteAllAccountDataSources $parameters)
    {
      return $this->__soapCall('DeleteAllAccountDataSources', array($parameters));
    }

}
