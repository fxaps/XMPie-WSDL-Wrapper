<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\Licensing_SSP;


/**
 * Licensing Web Service.
 */
class Licensing_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetServerID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetServerID',
  'GetServerIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetServerIDResponse',
  'Activate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\Activate',
  'ActivateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ActivateResponse',
  'Report' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\Report',
  'ArrayOfReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfReportMessage',
  'ReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ReportMessage',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\Property',
  'Reactivate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\Reactivate',
  'ReactivateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ReactivateResponse',
  'IsUProduceLE' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProduceLE',
  'IsUProduceLEResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProduceLEResponse',
  'IsUProducePrintOnly' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProducePrintOnly',
  'IsUProducePrintOnlyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProducePrintOnlyResponse',
  'IsUProduceEMedia' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProduceEMedia',
  'IsUProduceEMediaResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsUProduceEMediaResponse',
  'GetCustomerClicksView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetCustomerClicksView',
  'GetCustomerClicksViewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetCustomerClicksViewResponse',
  'GetCustomerClicksViewResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetCustomerClicksViewResult',
  'GetCustomerClicksXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetCustomerClicksXMPTblDataSet',
  'GetCustomerClicksXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetCustomerClicksXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\XMPRowField',
  'GetAvailableClicks' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableClicks',
  'GetAvailableClicksResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableClicksResponse',
  'IsPerpetual' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsPerpetual',
  'IsPerpetualResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsPerpetualResponse',
  'GetAvailableOutputFormats' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableOutputFormats',
  'GetAvailableOutputFormatsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableOutputFormatsResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ArrayOfString',
  'GetAvailableInputFormats' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableInputFormats',
  'GetAvailableInputFormatsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetAvailableInputFormatsResponse',
  'IsTrackingAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsTrackingAvailable',
  'IsTrackingAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsTrackingAvailableResponse',
  'GetMarketingConsoleType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMarketingConsoleType',
  'GetMarketingConsoleTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMarketingConsoleTypeResponse',
  'GetStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetStatus',
  'GetStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetStatusResponse',
  'StatusInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\StatusInfo',
  'IsMIAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsMIAvailable',
  'IsMIAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\IsMIAvailableResponse',
  'GetMaximumNumberOfAvailableInstances' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumNumberOfAvailableInstances',
  'GetMaximumNumberOfAvailableInstancesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumNumberOfAvailableInstancesResponse',
  'GetMaximumNumberOfConnectivityLicenses' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumNumberOfConnectivityLicenses',
  'GetMaximumNumberOfConnectivityLicensesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumNumberOfConnectivityLicensesResponse',
  'GetConnectivityLicenses' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetConnectivityLicenses',
  'GetConnectivityLicensesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetConnectivityLicensesResponse',
  'GetConnectivityLicensesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetConnectivityLicensesResult',
  'ValidateConnectivityLicense' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ValidateConnectivityLicense',
  'ValidateConnectivityLicenseResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ValidateConnectivityLicenseResponse',
  'DeleteConnectivityLicense' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\DeleteConnectivityLicense',
  'DeleteConnectivityLicenseResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\DeleteConnectivityLicenseResponse',
  'GetMaximumFeatureClients' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumFeatureClients',
  'GetMaximumFeatureClientsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetMaximumFeatureClientsResponse',
  'GetFeatureClients' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetFeatureClients',
  'GetFeatureClientsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetFeatureClientsResponse',
  'GetFeatureClientsResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\GetFeatureClientsResult',
  'ValidateFeatureClient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ValidateFeatureClient',
  'ValidateFeatureClientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\ValidateFeatureClientResponse',
  'DeleteFeatureClient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\DeleteFeatureClient',
  'DeleteFeatureClientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\Licensing_SSP\\DeleteFeatureClientResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Licensing_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get Server ID.
     *
     * @param GetServerID $parameters
     * @return GetServerIDResponse
     */
    public function GetServerID(GetServerID $parameters)
    {
      return $this->__soapCall('GetServerID', array($parameters));
    }

    /**
     * Activates a license.
     *
     * @param Activate $parameters
     * @return ActivateResponse
     */
    public function Activate(Activate $parameters)
    {
      return $this->__soapCall('Activate', array($parameters));
    }

    /**
     * Reactivates a license.
     *
     * @param Reactivate $parameters
     * @return ReactivateResponse
     */
    public function Reactivate(Reactivate $parameters)
    {
      return $this->__soapCall('Reactivate', array($parameters));
    }

    /**
     * Check if uProduce type is LE. (This method is deprecated from version 5.0.)
     *
     * @param IsUProduceLE $parameters
     * @return IsUProduceLEResponse
     */
    public function IsUProduceLE(IsUProduceLE $parameters)
    {
      return $this->__soapCall('IsUProduceLE', array($parameters));
    }

    /**
     * Check uProduce type is Print Only (or LE). (This method is deprecated from version 5.0.)
     *
     * @param IsUProducePrintOnly $parameters
     * @return IsUProducePrintOnlyResponse
     */
    public function IsUProducePrintOnly(IsUProducePrintOnly $parameters)
    {
      return $this->__soapCall('IsUProducePrintOnly', array($parameters));
    }

    /**
     * Check uProduce type is E-Media. (This method is deprecated from version 5.0.)
     *
     * @param IsUProduceEMedia $parameters
     * @return IsUProduceEMediaResponse
     */
    public function IsUProduceEMedia(IsUProduceEMedia $parameters)
    {
      return $this->__soapCall('IsUProduceEMedia', array($parameters));
    }

    /**
     * Get Customer Clicks View.
     *
     * @param GetCustomerClicksView $parameters
     * @return GetCustomerClicksViewResponse
     */
    public function GetCustomerClicksView(GetCustomerClicksView $parameters)
    {
      return $this->__soapCall('GetCustomerClicksView', array($parameters));
    }

    /**
     * Get Customer Clicks View.
     *
     * @param GetCustomerClicksXMPTblDataSet $parameters
     * @return GetCustomerClicksXMPTblDataSetResponse
     */
    public function GetCustomerClicksXMPTblDataSet(GetCustomerClicksXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetCustomerClicksXMPTblDataSet', array($parameters));
    }

    /**
     * Get Customer available clicks.
     *
     * @param GetAvailableClicks $parameters
     * @return GetAvailableClicksResponse
     */
    public function GetAvailableClicks(GetAvailableClicks $parameters)
    {
      return $this->__soapCall('GetAvailableClicks', array($parameters));
    }

    /**
     * Check Perpetual mode.
     *
     * @param IsPerpetual $parameters
     * @return IsPerpetualResponse
     */
    public function IsPerpetual(IsPerpetual $parameters)
    {
      return $this->__soapCall('IsPerpetual', array($parameters));
    }

    /**
     * Get Available Output formats string array.
     *
     * @param GetAvailableOutputFormats $parameters
     * @return GetAvailableOutputFormatsResponse
     */
    public function GetAvailableOutputFormats(GetAvailableOutputFormats $parameters)
    {
      return $this->__soapCall('GetAvailableOutputFormats', array($parameters));
    }

    /**
     * Get Available Input formats string array.
     *
     * @param GetAvailableInputFormats $parameters
     * @return GetAvailableInputFormatsResponse
     */
    public function GetAvailableInputFormats(GetAvailableInputFormats $parameters)
    {
      return $this->__soapCall('GetAvailableInputFormats', array($parameters));
    }

    /**
     * Checks if tracking is available.
     *
     * @param IsTrackingAvailable $parameters
     * @return IsTrackingAvailableResponse
     */
    public function IsTrackingAvailable(IsTrackingAvailable $parameters)
    {
      return $this->__soapCall('IsTrackingAvailable', array($parameters));
    }

    /**
     * Returns MarketingConsole type: None, Basic or Advanced.
     *
     * @param GetMarketingConsoleType $parameters
     * @return GetMarketingConsoleTypeResponse
     */
    public function GetMarketingConsoleType(GetMarketingConsoleType $parameters)
    {
      return $this->__soapCall('GetMarketingConsoleType', array($parameters));
    }

    /**
     * Gets a license Status.
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
    }

    /**
     * Checks if MI license (Multi Instance) is available.
     *
     * @param IsMIAvailable $parameters
     * @return IsMIAvailableResponse
     */
    public function IsMIAvailable(IsMIAvailable $parameters)
    {
      return $this->__soapCall('IsMIAvailable', array($parameters));
    }

    /**
     * Get the maximum number of available instances for a specified license type.
     *
     * @param GetMaximumNumberOfAvailableInstances $parameters
     * @return GetMaximumNumberOfAvailableInstancesResponse
     */
    public function GetMaximumNumberOfAvailableInstances(GetMaximumNumberOfAvailableInstances $parameters)
    {
      return $this->__soapCall('GetMaximumNumberOfAvailableInstances', array($parameters));
    }

    /**
     * Get a the maximum allowed number of Connectivity licenses.
     *
     * @param GetMaximumNumberOfConnectivityLicenses $parameters
     * @return GetMaximumNumberOfConnectivityLicensesResponse
     */
    public function GetMaximumNumberOfConnectivityLicenses(GetMaximumNumberOfConnectivityLicenses $parameters)
    {
      return $this->__soapCall('GetMaximumNumberOfConnectivityLicenses', array($parameters));
    }

    /**
     * Get a list of Connectivity licenses.
     *
     * @param GetConnectivityLicenses $parameters
     * @return GetConnectivityLicensesResponse
     */
    public function GetConnectivityLicenses(GetConnectivityLicenses $parameters)
    {
      return $this->__soapCall('GetConnectivityLicenses', array($parameters));
    }

    /**
     * Checks whether a connectivity license exists and tries to create one if it doesn't
     *
     * @param ValidateConnectivityLicense $parameters
     * @return ValidateConnectivityLicenseResponse
     */
    public function ValidateConnectivityLicense(ValidateConnectivityLicense $parameters)
    {
      return $this->__soapCall('ValidateConnectivityLicense', array($parameters));
    }

    /**
     * Remove the specified Connectivity licenses.
     *
     * @param DeleteConnectivityLicense $parameters
     * @return DeleteConnectivityLicenseResponse
     */
    public function DeleteConnectivityLicense(DeleteConnectivityLicense $parameters)
    {
      return $this->__soapCall('DeleteConnectivityLicense', array($parameters));
    }

    /**
     * Get Max number of clients per feature.
     *
     * @param GetMaximumFeatureClients $parameters
     * @return GetMaximumFeatureClientsResponse
     */
    public function GetMaximumFeatureClients(GetMaximumFeatureClients $parameters)
    {
      return $this->__soapCall('GetMaximumFeatureClients', array($parameters));
    }

    /**
     * Get Activations list per feature.
     *
     * @param GetFeatureClients $parameters
     * @return GetFeatureClientsResponse
     */
    public function GetFeatureClients(GetFeatureClients $parameters)
    {
      return $this->__soapCall('GetFeatureClients', array($parameters));
    }

    /**
     * Validate if MachineID can register on this Feature. If Activations < Max - will insert MachineID and return true , If not will return false
     *
     * @param ValidateFeatureClient $parameters
     * @return ValidateFeatureClientResponse
     */
    public function ValidateFeatureClient(ValidateFeatureClient $parameters)
    {
      return $this->__soapCall('ValidateFeatureClient', array($parameters));
    }

    /**
     * Delete Feature Activation (Free space for next user).
     *
     * @param DeleteFeatureClient $parameters
     * @return DeleteFeatureClientResponse
     */
    public function DeleteFeatureClient(DeleteFeatureClient $parameters)
    {
      return $this->__soapCall('DeleteFeatureClient', array($parameters));
    }

}
