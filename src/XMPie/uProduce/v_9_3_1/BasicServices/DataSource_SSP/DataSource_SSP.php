<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\DataSource_SSP;


/**
 * DataSource Web Service.
 */
class DataSource_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CreateNewResponse',
  'CreateNewFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CreateNewFromZip',
  'CreateNewFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CreateNewFromZipResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Replace',
  'Connection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Connection',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ReplaceResponse',
  'ReplaceFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ReplaceFromZip',
  'ReplaceFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ReplaceFromZipResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\DeleteResponse',
  'GetPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPlan',
  'GetPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPlanResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetCampaignResponse',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFolderPathResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetNameResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetPropertiesResponse',
  'GetConnectionInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetConnectionInfo',
  'GetConnectionInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetConnectionInfoResponse',
  'IsDownloadable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsDownloadable',
  'IsDownloadableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsDownloadableResponse',
  'GetPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPath',
  'GetPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetPathResponse',
  'GetBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStream',
  'GetBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStreamResponse',
  'GetBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStreamChunk',
  'GetBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStreamChunkResponse',
  'GetBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStreamSize',
  'GetBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetBinaryFileStreamSizeResponse',
  'GetDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetDownloadURL',
  'GetDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetDownloadURLResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsExistResponse',
  'HostTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\HostTables',
  'HostTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\HostTablesResponse',
  'HostAllTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\HostAllTables',
  'HostAllTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\HostAllTablesResponse',
  'GetTablesNamesForPort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetTablesNamesForPort',
  'GetTablesNamesForPortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetTablesNamesForPortResponse',
  'GetTablesNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetTablesNames',
  'GetTablesNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetTablesNamesResponse',
  'IsPrimaryTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsPrimaryTable',
  'IsPrimaryTableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsPrimaryTableResponse',
  'IsPrimaryFieldUnique' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsPrimaryFieldUnique',
  'IsPrimaryFieldUniqueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IsPrimaryFieldUniqueResponse',
  'ConvertToPrimaryTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ConvertToPrimaryTable',
  'ConvertToPrimaryTableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ConvertToPrimaryTableResponse',
  'Report' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Report',
  'ArrayOfReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfReportMessage',
  'ReportMessage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ReportMessage',
  'GetFieldNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFieldNames',
  'GetFieldNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFieldNamesResponse',
  'ExportHostedTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ExportHostedTables',
  'ExportHostedTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ExportHostedTablesResponse',
  'ExportAllHostedTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ExportAllHostedTables',
  'ExportAllHostedTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ExportAllHostedTablesResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\DeleteSettingsResponse',
  'GetRecipientTableID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTableID',
  'GetRecipientTableIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTableIDResponse',
  'GetRecipientTables' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTables',
  'GetRecipientTablesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTablesResponse',
  'GetRecipientTablesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTablesDataSet',
  'GetRecipientTablesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTablesDataSetResponse',
  'GetRecipientTablesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetRecipientTablesDataSetResult',
  'GetFirstRecipientFields' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFirstRecipientFields',
  'GetFirstRecipientFieldsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\GetFirstRecipientFieldsResponse',
  'CloneDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CloneCustom',
  'CloneResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\CloneResponse',
  'DataSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\DataSourceMapping',
  'IDMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\BasicServices\\DataSource_SSP\\IDMapping',
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
        $wsdl = 'http://localhost/xmpiewsapi/DataSource_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new DataSource.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create new DataSource from zip.
     *
     * @param CreateNewFromZip $parameters
     * @return CreateNewFromZipResponse
     */
    public function CreateNewFromZip(CreateNewFromZip $parameters)
    {
      return $this->__soapCall('CreateNewFromZip', array($parameters));
    }

    /**
     * Replace DataSource.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Replace DataSource from zip.
     *
     * @param ReplaceFromZip $parameters
     * @return ReplaceFromZipResponse
     */
    public function ReplaceFromZip(ReplaceFromZip $parameters)
    {
      return $this->__soapCall('ReplaceFromZip', array($parameters));
    }

    /**
     * Delete DataSource.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Plan from DatasourceID.
     *
     * @param GetPlan $parameters
     * @return GetPlanResponse
     */
    public function GetPlan(GetPlan $parameters)
    {
      return $this->__soapCall('GetPlan', array($parameters));
    }

    /**
     * Get 's Campaign.
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
     * Get DataSource's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get DataSource's property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get DataSource's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all DataSource's properties.
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
     * Set DataSource's property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set DataSource's properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get DataSource's Info.
     *
     * @param GetConnectionInfo $parameters
     * @return GetConnectionInfoResponse
     */
    public function GetConnectionInfo(GetConnectionInfo $parameters)
    {
      return $this->__soapCall('GetConnectionInfo', array($parameters));
    }

    /**
     * return true if the database is downloadable.
     *
     * @param IsDownloadable $parameters
     * @return IsDownloadableResponse
     */
    public function IsDownloadable(IsDownloadable $parameters)
    {
      return $this->__soapCall('IsDownloadable', array($parameters));
    }

    /**
     * return full data source path.
     *
     * @param GetPath $parameters
     * @return GetPathResponse
     */
    public function GetPath(GetPath $parameters)
    {
      return $this->__soapCall('GetPath', array($parameters));
    }

    /**
     * return the data source stream.
     *
     * @param GetBinaryFileStream $parameters
     * @return GetBinaryFileStreamResponse
     */
    public function GetBinaryFileStream(GetBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetBinaryFileStream', array($parameters));
    }

    /**
     * Return a data source chunk stream.
     *
     * @param GetBinaryFileStreamChunk $parameters
     * @return GetBinaryFileStreamChunkResponse
     */
    public function GetBinaryFileStreamChunk(GetBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get data source size.
     *
     * @param GetBinaryFileStreamSize $parameters
     * @return GetBinaryFileStreamSizeResponse
     */
    public function GetBinaryFileStreamSize(GetBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetBinaryFileStreamSize', array($parameters));
    }

    /**
     * return the data source download url.
     *
     * @param GetDownloadURL $parameters
     * @return GetDownloadURLResponse
     */
    public function GetDownloadURL(GetDownloadURL $parameters)
    {
      return $this->__soapCall('GetDownloadURL', array($parameters));
    }

    /**
     * Get data source ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is DataSource exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Create new hosted data source from specified data source tables.
     *
     * @param HostTables $parameters
     * @return HostTablesResponse
     */
    public function HostTables(HostTables $parameters)
    {
      return $this->__soapCall('HostTables', array($parameters));
    }

    /**
     * Create new hosted data source, hosts all tables from the source’s data source.
     *
     * @param HostAllTables $parameters
     * @return HostAllTablesResponse
     */
    public function HostAllTables(HostAllTables $parameters)
    {
      return $this->__soapCall('HostAllTables', array($parameters));
    }

    /**
     * returns list of tables names that belong to this data source and are ready for Port operations.
     *
     * @param GetTablesNamesForPort $parameters
     * @return GetTablesNamesForPortResponse
     */
    public function GetTablesNamesForPort(GetTablesNamesForPort $parameters)
    {
      return $this->__soapCall('GetTablesNamesForPort', array($parameters));
    }

    /**
     * returns list of tables names that belong to this data source.
     *
     * @param GetTablesNames $parameters
     * @return GetTablesNamesResponse
     */
    public function GetTablesNames(GetTablesNames $parameters)
    {
      return $this->__soapCall('GetTablesNames', array($parameters));
    }

    /**
     * Return true if the table is primary table (contains XMPieRecipientKey field).
     *
     * @param IsPrimaryTable $parameters
     * @return IsPrimaryTableResponse
     */
    public function IsPrimaryTable(IsPrimaryTable $parameters)
    {
      return $this->__soapCall('IsPrimaryTable', array($parameters));
    }

    /**
     * Returns true if the primary field of the table (XMPieRecipientKey field) is unique.
     *
     * @param IsPrimaryFieldUnique $parameters
     * @return IsPrimaryFieldUniqueResponse
     */
    public function IsPrimaryFieldUnique(IsPrimaryFieldUnique $parameters)
    {
      return $this->__soapCall('IsPrimaryFieldUnique', array($parameters));
    }

    /**
     * Converts a table to be a primary table.
     *
     * @param ConvertToPrimaryTable $parameters
     * @return ConvertToPrimaryTableResponse
     */
    public function ConvertToPrimaryTable(ConvertToPrimaryTable $parameters)
    {
      return $this->__soapCall('ConvertToPrimaryTable', array($parameters));
    }

    /**
     * Return the schema fields of a requested table
     *
     * @param GetFieldNames $parameters
     * @return GetFieldNamesResponse
     */
    public function GetFieldNames(GetFieldNames $parameters)
    {
      return $this->__soapCall('GetFieldNames', array($parameters));
    }

    /**
     * Exports tables to a file-based data source.
     *
     * @param ExportHostedTables $parameters
     * @return ExportHostedTablesResponse
     */
    public function ExportHostedTables(ExportHostedTables $parameters)
    {
      return $this->__soapCall('ExportHostedTables', array($parameters));
    }

    /**
     * Exports all tables to a file-based data source.
     *
     * @param ExportAllHostedTables $parameters
     * @return ExportAllHostedTablesResponse
     */
    public function ExportAllHostedTables(ExportAllHostedTables $parameters)
    {
      return $this->__soapCall('ExportAllHostedTables', array($parameters));
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
     * Returns Setting(s) for the Data Source and the user.
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
     * Get ID of Recipient table
     *
     * @param GetRecipientTableID $parameters
     * @return GetRecipientTableIDResponse
     */
    public function GetRecipientTableID(GetRecipientTableID $parameters)
    {
      return $this->__soapCall('GetRecipientTableID', array($parameters));
    }

    /**
     * Get names of all Recipient tables
     *
     * @param GetRecipientTables $parameters
     * @return GetRecipientTablesResponse
     */
    public function GetRecipientTables(GetRecipientTables $parameters)
    {
      return $this->__soapCall('GetRecipientTables', array($parameters));
    }

    /**
     * Get DataSet information from all Recipient tables
     *
     * @param GetRecipientTablesDataSet $parameters
     * @return GetRecipientTablesDataSetResponse
     */
    public function GetRecipientTablesDataSet(GetRecipientTablesDataSet $parameters)
    {
      return $this->__soapCall('GetRecipientTablesDataSet', array($parameters));
    }

    /**
     * Get all field values for the first recipient in the given table
     *
     * @param GetFirstRecipientFields $parameters
     * @return GetFirstRecipientFieldsResponse
     */
    public function GetFirstRecipientFields(GetFirstRecipientFields $parameters)
    {
      return $this->__soapCall('GetFirstRecipientFields', array($parameters));
    }

    /**
     * Duplicates the Data Source into a campaign.
     *
     * @param CloneCustom $parameters
     * @return CloneResponse
     */
    public function aClone($parameters)
    {
      return $this->__soapCall('Clone', array($parameters));
    }

}
