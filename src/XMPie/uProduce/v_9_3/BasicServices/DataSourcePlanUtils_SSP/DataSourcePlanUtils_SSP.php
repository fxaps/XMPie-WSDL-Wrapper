<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP;


/**
 * DataSourcePlanUtils Web Service.
 */
class DataSourcePlanUtils_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'TestDataSourceConnectivity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\TestDataSourceConnectivity',
  'TestDataSourceConnectivityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\TestDataSourceConnectivityResponse',
  'TestDataSourceConnectivityByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\TestDataSourceConnectivityByInfo',
  'Connection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\Connection',
  'TestDataSourceConnectivityByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\TestDataSourceConnectivityByInfoResponse',
  'GetRecipientsCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetRecipientsCount',
  'RecipientsInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\RecipientsInfo',
  'GetRecipientsCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetRecipientsCountResponse',
  'GetRecipientsCountByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetRecipientsCountByInfo',
  'GetRecipientsCountByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetRecipientsCountByInfoResponse',
  'IsRecipientParticipating' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsRecipientParticipating',
  'IsRecipientParticipatingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsRecipientParticipatingResponse',
  'IsRecipientParticipatingByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsRecipientParticipatingByInfo',
  'IsRecipientParticipatingByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsRecipientParticipatingByInfoResponse',
  'GetCompatibleTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTables',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\Property',
  'GetCompatibleTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfString',
  'GetCompatibleTablesByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesByInfo',
  'GetCompatibleTablesByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesByInfoResponse',
  'GetFirstCompatibleTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetFirstCompatibleTable',
  'GetFirstCompatibleTableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetFirstCompatibleTableResponse',
  'GetFirstCompatibleTableByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetFirstCompatibleTableByInfo',
  'GetFirstCompatibleTableByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetFirstCompatibleTableByInfoResponse',
  'IsDataSourceCompatibleWithSchema' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsDataSourceCompatibleWithSchema',
  'IsDataSourceCompatibleWithSchemaResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsDataSourceCompatibleWithSchemaResponse',
  'IsDataSourceCompatibleWithSchemaByInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsDataSourceCompatibleWithSchemaByInfo',
  'IsDataSourceCompatibleWithSchemaByInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsDataSourceCompatibleWithSchemaByInfoResponse',
  'GetDataSourceTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypes',
  'GetDataSourceTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypesResponse',
  'GetDataSourceTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypesResult',
  'GetDataSourceTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypesXMPTblDataSet',
  'GetDataSourceTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypesXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\XMPRowField',
  'GetDataSourceType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceType',
  'GetDataSourceTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypeResponse',
  'GetDataSourceTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypeResult',
  'GetDataSourceTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypeXMPTblDataSet',
  'GetDataSourceTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetDataSourceTypeXMPTblDataSetResponse',
  'GetCompatibleTablesForHosting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesForHosting',
  'GetCompatibleTablesForHostingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesForHostingResponse',
  'GetCompatibleTablesByInfoForHosting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesByInfoForHosting',
  'GetCompatibleTablesByInfoForHostingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\GetCompatibleTablesByInfoForHostingResponse',
  'IsTableReadyForPort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsTableReadyForPort',
  'IsTableReadyForPortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\IsTableReadyForPortResponse',
  'ConvertTableForPort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ConvertTableForPort',
  'ConvertTableForPortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\DataSourcePlanUtils_SSP\\ConvertTableForPortResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/DataSourcePlanUtils_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Test DataSource Connectivity.
     *
     * @param TestDataSourceConnectivity $parameters
     * @return TestDataSourceConnectivityResponse
     */
    public function TestDataSourceConnectivity(TestDataSourceConnectivity $parameters)
    {
      return $this->__soapCall('TestDataSourceConnectivity', array($parameters));
    }

    /**
     * Test DataSource Connectivity By DataSource Info.
     *
     * @param TestDataSourceConnectivityByInfo $parameters
     * @return TestDataSourceConnectivityByInfoResponse
     */
    public function TestDataSourceConnectivityByInfo(TestDataSourceConnectivityByInfo $parameters)
    {
      return $this->__soapCall('TestDataSourceConnectivityByInfo', array($parameters));
    }

    /**
     * Get the recipients count.
     *
     * @param GetRecipientsCount $parameters
     * @return GetRecipientsCountResponse
     */
    public function GetRecipientsCount(GetRecipientsCount $parameters)
    {
      return $this->__soapCall('GetRecipientsCount', array($parameters));
    }

    /**
     * Get the recipients count By DataSource Info.
     *
     * @param GetRecipientsCountByInfo $parameters
     * @return GetRecipientsCountByInfoResponse
     */
    public function GetRecipientsCountByInfo(GetRecipientsCountByInfo $parameters)
    {
      return $this->__soapCall('GetRecipientsCountByInfo', array($parameters));
    }

    /**
     * Verifies if a recipient is part of a given RecipientsInfo.
     *
     * @param IsRecipientParticipating $parameters
     * @return IsRecipientParticipatingResponse
     */
    public function IsRecipientParticipating(IsRecipientParticipating $parameters)
    {
      return $this->__soapCall('IsRecipientParticipating', array($parameters));
    }

    /**
     * Verifies if a recipient is part of a given RecipientsInfo.
     *
     * @param IsRecipientParticipatingByInfo $parameters
     * @return IsRecipientParticipatingByInfoResponse
     */
    public function IsRecipientParticipatingByInfo(IsRecipientParticipatingByInfo $parameters)
    {
      return $this->__soapCall('IsRecipientParticipatingByInfo', array($parameters));
    }

    /**
     * Get Compatible Tables.
     *
     * @param GetCompatibleTables $parameters
     * @return GetCompatibleTablesResponse
     */
    public function GetCompatibleTables(GetCompatibleTables $parameters)
    {
      return $this->__soapCall('GetCompatibleTables', array($parameters));
    }

    /**
     * Get Compatible Tables By DataSource Info.
     *
     * @param GetCompatibleTablesByInfo $parameters
     * @return GetCompatibleTablesByInfoResponse
     */
    public function GetCompatibleTablesByInfo(GetCompatibleTablesByInfo $parameters)
    {
      return $this->__soapCall('GetCompatibleTablesByInfo', array($parameters));
    }

    /**
     * Get the First Compatible Table.
     *
     * @param GetFirstCompatibleTable $parameters
     * @return GetFirstCompatibleTableResponse
     */
    public function GetFirstCompatibleTable(GetFirstCompatibleTable $parameters)
    {
      return $this->__soapCall('GetFirstCompatibleTable', array($parameters));
    }

    /**
     * Get the First Compatible Table By DataSource Info.
     *
     * @param GetFirstCompatibleTableByInfo $parameters
     * @return GetFirstCompatibleTableByInfoResponse
     */
    public function GetFirstCompatibleTableByInfo(GetFirstCompatibleTableByInfo $parameters)
    {
      return $this->__soapCall('GetFirstCompatibleTableByInfo', array($parameters));
    }

    /**
     * Check if DataSource Compatible With Schema.
     *
     * @param IsDataSourceCompatibleWithSchema $parameters
     * @return IsDataSourceCompatibleWithSchemaResponse
     */
    public function IsDataSourceCompatibleWithSchema(IsDataSourceCompatibleWithSchema $parameters)
    {
      return $this->__soapCall('IsDataSourceCompatibleWithSchema', array($parameters));
    }

    /**
     * Check if DataSource Compatible With Schema By DataSource Info.
     *
     * @param IsDataSourceCompatibleWithSchemaByInfo $parameters
     * @return IsDataSourceCompatibleWithSchemaByInfoResponse
     */
    public function IsDataSourceCompatibleWithSchemaByInfo(IsDataSourceCompatibleWithSchemaByInfo $parameters)
    {
      return $this->__soapCall('IsDataSourceCompatibleWithSchemaByInfo', array($parameters));
    }

    /**
     * Get DataSet with DataSources types.
     *
     * @param GetDataSourceTypes $parameters
     * @return GetDataSourceTypesResponse
     */
    public function GetDataSourceTypes(GetDataSourceTypes $parameters)
    {
      return $this->__soapCall('GetDataSourceTypes', array($parameters));
    }

    /**
     * Get DataSet with DataSources types.
     *
     * @param GetDataSourceTypesXMPTblDataSet $parameters
     * @return GetDataSourceTypesXMPTblDataSetResponse
     */
    public function GetDataSourceTypesXMPTblDataSet(GetDataSourceTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDataSourceTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with DataSources type information.
     *
     * @param GetDataSourceType $parameters
     * @return GetDataSourceTypeResponse
     */
    public function GetDataSourceType(GetDataSourceType $parameters)
    {
      return $this->__soapCall('GetDataSourceType', array($parameters));
    }

    /**
     * Get DataSet with DataSources type information.
     *
     * @param GetDataSourceTypeXMPTblDataSet $parameters
     * @return GetDataSourceTypeXMPTblDataSetResponse
     */
    public function GetDataSourceTypeXMPTblDataSet(GetDataSourceTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetDataSourceTypeXMPTblDataSet', array($parameters));
    }

    /**
     * Returns list of tables that are compatible to the plan in case of data source hosting.
     *
     * @param GetCompatibleTablesForHosting $parameters
     * @return GetCompatibleTablesForHostingResponse
     */
    public function GetCompatibleTablesForHosting(GetCompatibleTablesForHosting $parameters)
    {
      return $this->__soapCall('GetCompatibleTablesForHosting', array($parameters));
    }

    /**
     * Returns list of tables that are compatible to the plan in case of data source hosting.
     *
     * @param GetCompatibleTablesByInfoForHosting $parameters
     * @return GetCompatibleTablesByInfoForHostingResponse
     */
    public function GetCompatibleTablesByInfoForHosting(GetCompatibleTablesByInfoForHosting $parameters)
    {
      return $this->__soapCall('GetCompatibleTablesByInfoForHosting', array($parameters));
    }

    /**
     * Return true if the table is ready for Portd (Plan field columnd is indexed and meta-data columns exist).
     *
     * @param IsTableReadyForPort $parameters
     * @return IsTableReadyForPortResponse
     */
    public function IsTableReadyForPort(IsTableReadyForPort $parameters)
    {
      return $this->__soapCall('IsTableReadyForPort', array($parameters));
    }

    /**
     * Converts a table to be ready for Port operations.
     *
     * @param ConvertTableForPort $parameters
     * @return ConvertTableForPortResponse
     */
    public function ConvertTableForPort(ConvertTableForPort $parameters)
    {
      return $this->__soapCall('ConvertTableForPort', array($parameters));
    }

}
