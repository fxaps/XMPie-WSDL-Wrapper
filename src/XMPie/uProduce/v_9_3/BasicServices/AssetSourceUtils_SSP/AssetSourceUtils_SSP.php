<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSourceUtils_SSP;


/**
 * AssetSourceUtils Web Service.
 */
class AssetSourceUtils_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetAssetSourceTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypes',
  'GetAssetSourceTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypesResponse',
  'GetAssetSourceTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypesResult',
  'GetAssetSourceTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypesXMPTblDataSet',
  'GetAssetSourceTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypesXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\XMPRowField',
  'GetAssetSourceType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceType',
  'GetAssetSourceTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypeResponse',
  'GetAssetSourceTypeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypeResult',
  'GetAssetSourceTypeXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypeXMPTblDataSet',
  'GetAssetSourceTypeXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\BasicServices\\AssetSourceUtils_SSP\\GetAssetSourceTypeXMPTblDataSetResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/AssetSourceUtils_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get DataSet with AssetSources types.
     *
     * @param GetAssetSourceTypes $parameters
     * @return GetAssetSourceTypesResponse
     */
    public function GetAssetSourceTypes(GetAssetSourceTypes $parameters)
    {
      return $this->__soapCall('GetAssetSourceTypes', array($parameters));
    }

    /**
     * Get DataSet with AssetSources types.
     *
     * @param GetAssetSourceTypesXMPTblDataSet $parameters
     * @return GetAssetSourceTypesXMPTblDataSetResponse
     */
    public function GetAssetSourceTypesXMPTblDataSet(GetAssetSourceTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAssetSourceTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Get DataSet with AssetSource type.
     *
     * @param GetAssetSourceType $parameters
     * @return GetAssetSourceTypeResponse
     */
    public function GetAssetSourceType(GetAssetSourceType $parameters)
    {
      return $this->__soapCall('GetAssetSourceType', array($parameters));
    }

    /**
     * Get DataSet with AssetSource type.
     *
     * @param GetAssetSourceTypeXMPTblDataSet $parameters
     * @return GetAssetSourceTypeXMPTblDataSetResponse
     */
    public function GetAssetSourceTypeXMPTblDataSet(GetAssetSourceTypeXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAssetSourceTypeXMPTblDataSet', array($parameters));
    }

}
