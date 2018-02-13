<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ApplicationServices\Destination_SSP;


/**
 * Destination Web Service.
 */
class Destination_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\DeleteResponse',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetCustomerResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\SetPropertiesResponse',
  'GetDestinationTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypes',
  'GetDestinationTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypesResponse',
  'GetDestinationTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypesResult',
  'GetDestinationTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypesXMPTblDataSet',
  'GetDestinationTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypesXMPTblDataSetResponse',
  'GetDestinationType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationType',
  'GetDestinationTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypeResponse',
  'GetDestinationTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypeResult',
  'GetDestinationTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypeXMPTblDataSet',
  'GetDestinationTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetDestinationTypeXMPTblDataSetResponse',
  'GetNetworkPrinterList' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetNetworkPrinterList',
  'GetNetworkPrinterListResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetNetworkPrinterListResponse',
  'RefreshQueues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\RefreshQueues',
  'RefreshQueuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\RefreshQueuesResponse',
  'TestFTPConnectivity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestFTPConnectivity',
  'TestFTPConnectivityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestFTPConnectivityResponse',
  'TestNetworkPathConnectivity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestNetworkPathConnectivity',
  'TestNetworkPathConnectivityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestNetworkPathConnectivityResponse',
  'TestNetworkPathConnectivityWithCredentials' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestNetworkPathConnectivityWithCredentials',
  'TestNetworkPathConnectivityWithCredentialsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestNetworkPathConnectivityWithCredentialsResponse',
  'TestXeroxFFPMConnectivity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestXeroxFFPMConnectivity',
  'TestXeroxFFPMConnectivityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\TestXeroxFFPMConnectivityResponse',
  'GetFFPMQueuesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetFFPMQueuesDataSet',
  'GetFFPMQueuesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetFFPMQueuesDataSetResponse',
  'GetFFPMQueuesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetFFPMQueuesDataSetResult',
  'GetFFPMQueuesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetFFPMQueuesXMPTblDataSet',
  'GetFFPMQueuesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetFFPMQueuesXMPTblDataSetResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_4\\ApplicationServices\\Destination_SSP\\IsExistResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
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
        $wsdl = 'http://localhost/xmpiewsapi/Destination_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Destination.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Destination.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Destination.
     *
     * @param GetCustomer $parameters
     * @return GetCustomerResponse
     */
    public function GetCustomer(GetCustomer $parameters)
    {
      return $this->__soapCall('GetCustomer', array($parameters));
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
     * Get properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all properties.
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
     * Get destination types.
     *
     * @param GetDestinationTypes $parameters
     * @return GetDestinationTypesResponse
     */
    public function GetDestinationTypes(GetDestinationTypes $parameters)
    {
      return $this->__soapCall('GetDestinationTypes', array($parameters));
    }

    /**
     * Get destination types.
     *
     * @param GetDestinationTypesXMPTblDataSet $parameters
     * @return GetDestinationTypesXMPTblDataSetResponse
     */
    public function GetDestinationTypesXMPTblDataSet(GetDestinationTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDestinationTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get destination type.
     *
     * @param GetDestinationType $parameters
     * @return GetDestinationTypeResponse
     */
    public function GetDestinationType(GetDestinationType $parameters)
    {
      return $this->__soapCall('GetDestinationType', array($parameters));
    }

    /**
     * Get destination type.
     *
     * @param GetDestinationTypeXMPTblDataSet $parameters
     * @return GetDestinationTypeXMPTblDataSetResponse
     */
    public function GetDestinationTypeXMPTblDataSet(GetDestinationTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDestinationTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Get Network Printer List.
     *
     * @param GetNetworkPrinterList $parameters
     * @return GetNetworkPrinterListResponse
     */
    public function GetNetworkPrinterList(GetNetworkPrinterList $parameters)
    {
      return $this->__soapCall('GetNetworkPrinterList', array($parameters));
    }

    /**
     * Refresh Queues.
     *
     * @param RefreshQueues $parameters
     * @return RefreshQueuesResponse
     */
    public function RefreshQueues(RefreshQueues $parameters)
    {
      return $this->__soapCall('RefreshQueues', array($parameters));
    }

    /**
     * Test FTP connectivity.
     *
     * @param TestFTPConnectivity $parameters
     * @return TestFTPConnectivityResponse
     */
    public function TestFTPConnectivity(TestFTPConnectivity $parameters)
    {
      return $this->__soapCall('TestFTPConnectivity', array($parameters));
    }

    /**
     * Test network path connectivity.
     *
     * @param TestNetworkPathConnectivity $parameters
     * @return TestNetworkPathConnectivityResponse
     */
    public function TestNetworkPathConnectivity(TestNetworkPathConnectivity $parameters)
    {
      return $this->__soapCall('TestNetworkPathConnectivity', array($parameters));
    }

    /**
     * Test network path connectivity (with specified credentials)
     *
     * @param TestNetworkPathConnectivityWithCredentials $parameters
     * @return TestNetworkPathConnectivityWithCredentialsResponse
     */
    public function TestNetworkPathConnectivityWithCredentials(TestNetworkPathConnectivityWithCredentials $parameters)
    {
      return $this->__soapCall('TestNetworkPathConnectivityWithCredentials', array($parameters));
    }

    /**
     * Test Xerox FFPM connectivity.
     *
     * @param TestXeroxFFPMConnectivity $parameters
     * @return TestXeroxFFPMConnectivityResponse
     */
    public function TestXeroxFFPMConnectivity(TestXeroxFFPMConnectivity $parameters)
    {
      return $this->__soapCall('TestXeroxFFPMConnectivity', array($parameters));
    }

    /**
     * Get FFPM Queues dataset.
     *
     * @param GetFFPMQueuesDataSet $parameters
     * @return GetFFPMQueuesDataSetResponse
     */
    public function GetFFPMQueuesDataSet(GetFFPMQueuesDataSet $parameters)
    {
      return $this->__soapCall('GetFFPMQueuesDataSet', array($parameters));
    }

    /**
     * Get FFPM Queues dataset.
     *
     * @param GetFFPMQueuesXMPTblDataSet $parameters
     * @return GetFFPMQueuesXMPTblDataSetResponse
     */
    public function GetFFPMQueuesXMPTblDataSet(GetFFPMQueuesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetFFPMQueuesXMPTblDataSet', array($parameters));
    }

    /**
     * Get destination ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is Destination exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

}
