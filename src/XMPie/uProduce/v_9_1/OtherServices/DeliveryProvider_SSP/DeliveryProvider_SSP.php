<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\DeliveryProvider_SSP;


/**
 * DeliveryProvider Web Service.
 */
class DeliveryProvider_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\CreateNew',
  'ArrayOfEmailProviderParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfEmailProviderParameter',
  'EmailProviderParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailProviderParameter',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\CreateNewResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\DeleteResponse',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetCustomerResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetPropertiesResponse',
  'GetDeliveryProviderParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderParameters',
  'GetDeliveryProviderParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderParametersResponse',
  'SetDeliveryProviderParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetDeliveryProviderParameters',
  'SetDeliveryProviderParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetDeliveryProviderParametersResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetIDResponse',
  'GetDeliveryProviderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderInfo',
  'GetDeliveryProviderInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderInfoResponse',
  'EmailProviderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailProviderInfo',
  'GetDeliveryProviderTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypes',
  'GetDeliveryProviderTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypesResponse',
  'GetDeliveryProviderTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypesResult',
  'GetDeliveryProviderTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypesXMPTblDataSet',
  'GetDeliveryProviderTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypesXMPTblDataSetResponse',
  'GetDeliveryProviderType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderType',
  'GetDeliveryProviderTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypeResponse',
  'GetDeliveryProviderTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypeResult',
  'GetDeliveryProviderTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypeXMPTblDataSet',
  'GetDeliveryProviderTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetDeliveryProviderTypeXMPTblDataSetResponse',
  'SendMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SendMail',
  'EmailHeaderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailHeaderInfo',
  'ArrayOfEmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfEmailAddress',
  'EmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailAddress',
  'ArrayOfEmailBodyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfEmailBodyInfo',
  'EmailBodyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailBodyInfo',
  'EmailBodyOptions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\EmailBodyOptions',
  'URLInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\URLInfo',
  'SendMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SendMailResponse',
  'SendEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SendEmailResult',
  'SendMailByProviderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SendMailByProviderInfo',
  'SendMailByProviderInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SendMailByProviderInfoResponse',
  'ProviderCustomActionByProviderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ProviderCustomActionByProviderInfo',
  'ProviderCustomActionByProviderInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ProviderCustomActionByProviderInfoResponse',
  'ProviderCustomAction' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ProviderCustomAction',
  'ProviderCustomActionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ProviderCustomActionResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\IsExistResponse',
  'GetStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetStatus',
  'GetStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetStatusResponse',
  'StatusInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\StatusInfo',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\OtherServices\\DeliveryProvider_SSP\\DeleteSettingsResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/DeliveryProvider_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new DeliveryProvider.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Replace DeliveryProvider.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Delete DeliveryProvider.
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
     * Get DeliveryProvider's property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get DeliveryProvider's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all DeliveryProvider's properties.
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
     * Set DeliveryProvider's property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set DeliveryProvider's properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get DeliveryProvider's parameters.
     *
     * @param GetDeliveryProviderParameters $parameters
     * @return GetDeliveryProviderParametersResponse
     */
    public function GetDeliveryProviderParameters(GetDeliveryProviderParameters $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderParameters', array($parameters));
    }

    /**
     * Set DeliveryProvider's parameters.
     *
     * @param SetDeliveryProviderParameters $parameters
     * @return SetDeliveryProviderParametersResponse
     */
    public function SetDeliveryProviderParameters(SetDeliveryProviderParameters $parameters)
    {
      return $this->__soapCall('SetDeliveryProviderParameters', array($parameters));
    }

    /**
     * Get email provider ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get email provider info.
     *
     * @param GetDeliveryProviderInfo $parameters
     * @return GetDeliveryProviderInfoResponse
     */
    public function GetDeliveryProviderInfo(GetDeliveryProviderInfo $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderInfo', array($parameters));
    }

    /**
     * Get email provider types.
     *
     * @param GetDeliveryProviderTypes $parameters
     * @return GetDeliveryProviderTypesResponse
     */
    public function GetDeliveryProviderTypes(GetDeliveryProviderTypes $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderTypes', array($parameters));
    }

    /**
     * Get email provider types.
     *
     * @param GetDeliveryProviderTypesXMPTblDataSet $parameters
     * @return GetDeliveryProviderTypesXMPTblDataSetResponse
     */
    public function GetDeliveryProviderTypesXMPTblDataSet(GetDeliveryProviderTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get email provider type.
     *
     * @param GetDeliveryProviderType $parameters
     * @return GetDeliveryProviderTypeResponse
     */
    public function GetDeliveryProviderType(GetDeliveryProviderType $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderType', array($parameters));
    }

    /**
     * Get email provider type.
     *
     * @param GetDeliveryProviderTypeXMPTblDataSet $parameters
     * @return GetDeliveryProviderTypeXMPTblDataSetResponse
     */
    public function GetDeliveryProviderTypeXMPTblDataSet(GetDeliveryProviderTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Send email using an email provider.
     *
     * @param SendMail $parameters
     * @return SendMailResponse
     */
    public function SendMail(SendMail $parameters)
    {
      return $this->__soapCall('SendMail', array($parameters));
    }

    /**
     * Send email using an email provider info.
     *
     * @param SendMailByProviderInfo $parameters
     * @return SendMailByProviderInfoResponse
     */
    public function SendMailByProviderInfo(SendMailByProviderInfo $parameters)
    {
      return $this->__soapCall('SendMailByProviderInfo', array($parameters));
    }

    /**
     * Provider Custom Action using an email provider info.
     *
     * @param ProviderCustomActionByProviderInfo $parameters
     * @return ProviderCustomActionByProviderInfoResponse
     */
    public function ProviderCustomActionByProviderInfo(ProviderCustomActionByProviderInfo $parameters)
    {
      return $this->__soapCall('ProviderCustomActionByProviderInfo', array($parameters));
    }

    /**
     * Provider Custom Action.
     *
     * @param ProviderCustomAction $parameters
     * @return ProviderCustomActionResponse
     */
    public function ProviderCustomAction(ProviderCustomAction $parameters)
    {
      return $this->__soapCall('ProviderCustomAction', array($parameters));
    }

    /**
     * Is DeliveryProvider exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Gets the Delivery Provider Status.
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
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
     * Returns Setting(s) for the Delivery Provider and the user.
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
