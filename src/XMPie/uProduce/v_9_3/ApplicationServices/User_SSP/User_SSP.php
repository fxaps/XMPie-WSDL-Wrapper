<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP;


/**
 * User Web Service.
 */
class User_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\DeleteResponse',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetCustomerResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\XMPRowField',
  'AddUserToken' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\AddUserToken',
  'AddUserTokenResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\AddUserTokenResponse',
  'RemoveUserToken' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\RemoveUserToken',
  'RemoveUserTokenResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\RemoveUserTokenResponse',
  'RemoveAllUsersToken' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\RemoveAllUsersToken',
  'RemoveAllUsersTokenResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\RemoveAllUsersTokenResponse',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\SetPropertiesResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\ApplicationServices\\User_SSP\\IsExistResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/User_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new User.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete user.
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
     * Associate With Token.
     *
     * @param AddUserToken $parameters
     * @return AddUserTokenResponse
     */
    public function AddUserToken(AddUserToken $parameters)
    {
      return $this->__soapCall('AddUserToken', array($parameters));
    }

    /**
     * Remove a Token.
     *
     * @param RemoveUserToken $parameters
     * @return RemoveUserTokenResponse
     */
    public function RemoveUserToken(RemoveUserToken $parameters)
    {
      return $this->__soapCall('RemoveUserToken', array($parameters));
    }

    /**
     * Remove All User's Tokens.
     *
     * @param RemoveAllUsersToken $parameters
     * @return RemoveAllUsersTokenResponse
     */
    public function RemoveAllUsersToken(RemoveAllUsersToken $parameters)
    {
      return $this->__soapCall('RemoveAllUsersToken', array($parameters));
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
     * Get user ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is User exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

}
