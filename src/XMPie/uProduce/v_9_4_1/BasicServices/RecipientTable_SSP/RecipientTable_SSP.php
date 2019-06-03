<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\RecipientTable_SSP;


/**
 * RecipientTable Web Service.
 */
class RecipientTable_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\CreateNew',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\DeleteResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetIDResponse',
  'GetDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetDataSourceID',
  'GetDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetDataSourceIDResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetPropertyResponse',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\Property',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetPropertiesResponse',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfProperty',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetPropertiesResponse',
  'GetMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetMapping',
  'GetMappingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\GetMappingResponse',
  'FieldMappings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\FieldMappings',
  'ArrayOfFieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfFieldMappingInfo',
  'FieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\FieldMappingInfo',
  'SetMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetMapping',
  'SetMappingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\SetMappingResponse',
  'IsMappingCompatible' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\IsMappingCompatible',
  'IsMappingCompatibleResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\IsMappingCompatibleResponse',
  'AddXMPieRecipietKeyToMap' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\AddXMPieRecipietKeyToMap',
  'AddXMPieRecipietKeyToMapResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\AddXMPieRecipietKeyToMapResponse',
  'IsMatchingToPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\IsMatchingToPlan',
  'IsMatchingToPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\IsMatchingToPlanResponse',
  'ExportRecpientTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ExportRecpientTable',
  'ArrayOfDataParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ArrayOfDataParameter',
  'DataParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\DataParameter',
  'ExportRecpientTableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\RecipientTable_SSP\\ExportRecpientTableResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/RecipientTable_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new RecipientTable.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete RecipientTable.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get RecipientTable ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get RecipientTable's DataSource.
     *
     * @param GetDataSourceID $parameters
     * @return GetDataSourceIDResponse
     */
    public function GetDataSourceID(GetDataSourceID $parameters)
    {
      return $this->__soapCall('GetDataSourceID', array($parameters));
    }

    /**
     * Get RecipientTable's property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get RecipientTable's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all RecipientTable's properties.
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
     * Set RecipientTable's property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set RecipientTable's properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get RecipientTable's mapping.
     *
     * @param GetMapping $parameters
     * @return GetMappingResponse
     */
    public function GetMapping(GetMapping $parameters)
    {
      return $this->__soapCall('GetMapping', array($parameters));
    }

    /**
     * Set RecipientTable's mapping.
     *
     * @param SetMapping $parameters
     * @return SetMappingResponse
     */
    public function SetMapping(SetMapping $parameters)
    {
      return $this->__soapCall('SetMapping', array($parameters));
    }

    /**
     * Checks whether the mapping is compatible to the plan.
     *
     * @param IsMappingCompatible $parameters
     * @return IsMappingCompatibleResponse
     */
    public function IsMappingCompatible(IsMappingCompatible $parameters)
    {
      return $this->__soapCall('IsMappingCompatible', array($parameters));
    }

    /**
     * add Xmpie Recipient key to map.
     *
     * @param AddXMPieRecipietKeyToMap $parameters
     * @return AddXMPieRecipietKeyToMapResponse
     */
    public function AddXMPieRecipietKeyToMap(AddXMPieRecipietKeyToMap $parameters)
    {
      return $this->__soapCall('AddXMPieRecipietKeyToMap', array($parameters));
    }

    /**
     * Checks whether the recipient table is matching to the plan.
     *
     * @param IsMatchingToPlan $parameters
     * @return IsMatchingToPlanResponse
     */
    public function IsMatchingToPlan(IsMatchingToPlan $parameters)
    {
      return $this->__soapCall('IsMatchingToPlan', array($parameters));
    }

    /**
     * Export Xmpie Recipient table.
     *
     * @param ExportRecpientTable $parameters
     * @return ExportRecpientTableResponse
     */
    public function ExportRecpientTable(ExportRecpientTable $parameters)
    {
      return $this->__soapCall('ExportRecpientTable', array($parameters));
    }

}
