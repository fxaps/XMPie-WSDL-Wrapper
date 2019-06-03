<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP;


/**
 * AssetSource Web Service.
 */
class AssetSource_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CreateNewResponse',
  'CreateNewEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CreateNewEx',
  'ArrayOfAssetSourceParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfAssetSourceParameter',
  'AssetSourceParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\AssetSourceParameter',
  'CreateNewExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CreateNewExResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetCampaignResponse',
  'GetAssetSourceProviderSupport' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceProviderSupport',
  'GetAssetSourceProviderSupportResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceProviderSupportResponse',
  'AssetSourceProviderSupport' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\AssetSourceProviderSupport',
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetFolderPathResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetPropertiesResponse',
  'IsAssetsViewAvailable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\IsAssetsViewAvailable',
  'IsAssetsViewAvailableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\IsAssetsViewAvailableResponse',
  'GetAssetSourceType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceType',
  'GetAssetSourceTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceTypeResponse',
  'GetAssetSourceParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceParameters',
  'GetAssetSourceParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceParametersResponse',
  'SetAssetSourceParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetAssetSourceParameters',
  'SetAssetSourceParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetAssetSourceParametersResponse',
  'GetAssetSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceInfo',
  'GetAssetSourceInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceInfoResponse',
  'AssetSourceStruct' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\AssetSourceStruct',
  'GetAssetSourceInfoEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceInfoEx',
  'GetAssetSourceInfoExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetSourceInfoExResponse',
  'AssetSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\AssetSourceInfo',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetNameResponse',
  'SetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetName',
  'SetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetNameResponse',
  'GetPriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetPriority',
  'GetPriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetPriorityResponse',
  'SetPriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetPriority',
  'SetPriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetPriorityResponse',
  'GetActiveness' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetActiveness',
  'GetActivenessResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetActivenessResponse',
  'SetActiveness' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetActiveness',
  'SetActivenessResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetActivenessResponse',
  'GetAssetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetID',
  'GetAssetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetIDResponse',
  'GetAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssets',
  'GetAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsResponse',
  'GetAssetsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsDataSet',
  'GetAssetsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsDataSetResponse',
  'GetAssetsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsDataSetResult',
  'GetAssetsXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsXMPTblDataSet',
  'GetAssetsXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetAssetsXMPTblDataSetResponse',
  'DeleteAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteAssets',
  'DeleteAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteAssetsResponse',
  'DeleteAllAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteAllAssets',
  'DeleteAllAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteAllAssetsResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\DeleteSettingsResponse',
  'CloneAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CloneCustom',
  'CloneResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\CloneResponse',
  'AssetSourceMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\AssetSourceMapping',
  'IDMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\BasicServices\\AssetSource_SSP\\IDMapping',
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
        $wsdl = 'http://localhost/xmpiewsapi/AssetSource_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Asset Source.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create new Asset Source.
     *
     * @param CreateNewEx $parameters
     * @return CreateNewExResponse
     */
    public function CreateNewEx(CreateNewEx $parameters)
    {
      return $this->__soapCall('CreateNewEx', array($parameters));
    }

    /**
     * Delete Asset Source.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Asset Source Campaign.
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Get Asset Source provider support.
     *
     * @param GetAssetSourceProviderSupport $parameters
     * @return GetAssetSourceProviderSupportResponse
     */
    public function GetAssetSourceProviderSupport(GetAssetSourceProviderSupport $parameters)
    {
      return $this->__soapCall('GetAssetSourceProviderSupport', array($parameters));
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
     * Get Asset Source's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all Asset Source's properties.
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
     * Checks if Asset view is available.
     *
     * @param IsAssetsViewAvailable $parameters
     * @return IsAssetsViewAvailableResponse
     */
    public function IsAssetsViewAvailable(IsAssetsViewAvailable $parameters)
    {
      return $this->__soapCall('IsAssetsViewAvailable', array($parameters));
    }

    /**
     * Get Asset source type (Local, FileSystem).
     *
     * @param GetAssetSourceType $parameters
     * @return GetAssetSourceTypeResponse
     */
    public function GetAssetSourceType(GetAssetSourceType $parameters)
    {
      return $this->__soapCall('GetAssetSourceType', array($parameters));
    }

    /**
     * Get Asset source's parameters.
     *
     * @param GetAssetSourceParameters $parameters
     * @return GetAssetSourceParametersResponse
     */
    public function GetAssetSourceParameters(GetAssetSourceParameters $parameters)
    {
      return $this->__soapCall('GetAssetSourceParameters', array($parameters));
    }

    /**
     * Set Asset source's parameters.
     *
     * @param SetAssetSourceParameters $parameters
     * @return SetAssetSourceParametersResponse
     */
    public function SetAssetSourceParameters(SetAssetSourceParameters $parameters)
    {
      return $this->__soapCall('SetAssetSourceParameters', array($parameters));
    }

    /**
     * Get Asset source information.
     *
     * @param GetAssetSourceInfo $parameters
     * @return GetAssetSourceInfoResponse
     */
    public function GetAssetSourceInfo(GetAssetSourceInfo $parameters)
    {
      return $this->__soapCall('GetAssetSourceInfo', array($parameters));
    }

    /**
     * Get Asset source information.
     *
     * @param GetAssetSourceInfoEx $parameters
     * @return GetAssetSourceInfoExResponse
     */
    public function GetAssetSourceInfoEx(GetAssetSourceInfoEx $parameters)
    {
      return $this->__soapCall('GetAssetSourceInfoEx', array($parameters));
    }

    /**
     * Get Asset's name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Set Asset's name.
     *
     * @param SetName $parameters
     * @return SetNameResponse
     */
    public function SetName(SetName $parameters)
    {
      return $this->__soapCall('SetName', array($parameters));
    }

    /**
     * Get Asset's priority.
     *
     * @param GetPriority $parameters
     * @return GetPriorityResponse
     */
    public function GetPriority(GetPriority $parameters)
    {
      return $this->__soapCall('GetPriority', array($parameters));
    }

    /**
     * Set Asset's priority.
     *
     * @param SetPriority $parameters
     * @return SetPriorityResponse
     */
    public function SetPriority(SetPriority $parameters)
    {
      return $this->__soapCall('SetPriority', array($parameters));
    }

    /**
     * Get Asset's activness.
     *
     * @param GetActiveness $parameters
     * @return GetActivenessResponse
     */
    public function GetActiveness(GetActiveness $parameters)
    {
      return $this->__soapCall('GetActiveness', array($parameters));
    }

    /**
     * Set Asset's activness.
     *
     * @param SetActiveness $parameters
     * @return SetActivenessResponse
     */
    public function SetActiveness(SetActiveness $parameters)
    {
      return $this->__soapCall('SetActiveness', array($parameters));
    }

    /**
     * Get Asset ID by name.
     *
     * @param GetAssetID $parameters
     * @return GetAssetIDResponse
     */
    public function GetAssetID(GetAssetID $parameters)
    {
      return $this->__soapCall('GetAssetID', array($parameters));
    }

    /**
     * Get Assets.
     *
     * @param GetAssets $parameters
     * @return GetAssetsResponse
     */
    public function GetAssets(GetAssets $parameters)
    {
      return $this->__soapCall('GetAssets', array($parameters));
    }

    /**
     * Get Asset's view.
     *
     * @param GetAssetsDataSet $parameters
     * @return GetAssetsDataSetResponse
     */
    public function GetAssetsDataSet(GetAssetsDataSet $parameters)
    {
      return $this->__soapCall('GetAssetsDataSet', array($parameters));
    }

    /**
     * Get Asset's view.
     *
     * @param GetAssetsXMPTblDataSet $parameters
     * @return GetAssetsXMPTblDataSetResponse
     */
    public function GetAssetsXMPTblDataSet(GetAssetsXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAssetsXMPTblDataSet', array($parameters));
    }

    /**
     * Delete Assets.
     *
     * @param DeleteAssets $parameters
     * @return DeleteAssetsResponse
     */
    public function DeleteAssets(DeleteAssets $parameters)
    {
      return $this->__soapCall('DeleteAssets', array($parameters));
    }

    /**
     * Delete all Assets.
     *
     * @param DeleteAllAssets $parameters
     * @return DeleteAllAssetsResponse
     */
    public function DeleteAllAssets(DeleteAllAssets $parameters)
    {
      return $this->__soapCall('DeleteAllAssets', array($parameters));
    }

    /**
     * Get asset source ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is Asset Source exist.
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
     * Returns Setting(s) for the Asset Source and the user.
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
     * Duplicates the Asset Source into a campaign
     *
     * @param CloneCustom $parameters
     * @return CloneResponse
     */
    public function aClone($parameters)
    {
      return $this->__soapCall('Clone', array($parameters));
    }

}
