<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP;


/**
 * Permission Web Service.
 */
class Permissions_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'IsAllowed' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\IsAllowed',
  'IsAllowedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\IsAllowedResponse',
  'SetAllowed' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\SetAllowed',
  'SetAllowedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\SetAllowedResponse',
  'Get' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\Get',
  'GetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetResponse',
  'ArrayOfPermission' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfPermission',
  'Permission' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\Permission',
  'GetView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetView',
  'GetViewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetViewResponse',
  'GetViewResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetViewResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\XMPRowField',
  'SetAllowedList' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\SetAllowedList',
  'SetAllowedListResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\SetAllowedListResponse',
  'RemoveOverload' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\RemoveOverload',
  'RemoveOverloadResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\RemoveOverloadResponse',
  'GetPermittedUsers' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsers',
  'GetPermittedUsersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\ArrayOfString',
  'GetPermittedUsersView' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersView',
  'GetPermittedUsersViewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersViewResponse',
  'GetPermittedUsersViewResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersViewResult',
  'GetPermittedUsersXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersXMPTblDataSet',
  'GetPermittedUsersXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetPermittedUsersXMPTblDataSetResponse',
  'LockResource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\LockResource',
  'LockResourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\LockResourceResponse',
  'UnLockResource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\UnLockResource',
  'UnLockResourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\UnLockResourceResponse',
  'IsResourceLocked' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\IsResourceLocked',
  'IsResourceLockedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\IsResourceLockedResponse',
  'GetResourceLockingUserName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetResourceLockingUserName',
  'GetResourceLockingUserNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3\\OtherServices\\Permissions_SSP\\GetResourceLockingUserNameResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Permissions_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * return true if user is allowed, false otherwise.
     *
     * @param IsAllowed $parameters
     * @return IsAllowedResponse
     */
    public function IsAllowed(IsAllowed $parameters)
    {
      return $this->__soapCall('IsAllowed', array($parameters));
    }

    /**
     * allow\disallow a resource to a user
     *
     * @param SetAllowed $parameters
     * @return SetAllowedResponse
     */
    public function SetAllowed(SetAllowed $parameters)
    {
      return $this->__soapCall('SetAllowed', array($parameters));
    }

    /**
     * get the permissions
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
      return $this->__soapCall('Get', array($parameters));
    }

    /**
     * get the permissions view.
     *
     * @param GetView $parameters
     * @return GetViewResponse
     */
    public function GetView(GetView $parameters)
    {
      return $this->__soapCall('GetView', array($parameters));
    }

    /**
     * get the permissions view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * set the permissions.
     *
     * @param SetAllowedList $parameters
     * @return SetAllowedListResponse
     */
    public function SetAllowedList(SetAllowedList $parameters)
    {
      return $this->__soapCall('SetAllowedList', array($parameters));
    }

    /**
     * removes a permission overload, the permission will be back to be inherited.
     *
     * @param RemoveOverload $parameters
     * @return RemoveOverloadResponse
     */
    public function RemoveOverload(RemoveOverload $parameters)
    {
      return $this->__soapCall('RemoveOverload', array($parameters));
    }

    /**
     * get the resource permitted user names.
     *
     * @param GetPermittedUsers $parameters
     * @return GetPermittedUsersResponse
     */
    public function GetPermittedUsers(GetPermittedUsers $parameters)
    {
      return $this->__soapCall('GetPermittedUsers', array($parameters));
    }

    /**
     * get the resource permitted users view.
     *
     * @param GetPermittedUsersView $parameters
     * @return GetPermittedUsersViewResponse
     */
    public function GetPermittedUsersView(GetPermittedUsersView $parameters)
    {
      return $this->__soapCall('GetPermittedUsersView', array($parameters));
    }

    /**
     * get the resource permitted users view.
     *
     * @param GetPermittedUsersXMPTblDataSet $parameters
     * @return GetPermittedUsersXMPTblDataSetResponse
     */
    public function GetPermittedUsersXMPTblDataSet(GetPermittedUsersXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetPermittedUsersXMPTblDataSet', array($parameters));
    }

    /**
     * locks a resource for the calling user.
     *
     * @param LockResource $parameters
     * @return LockResourceResponse
     */
    public function LockResource(LockResource $parameters)
    {
      return $this->__soapCall('LockResource', array($parameters));
    }

    /**
     * unlocks a resource for the calling user.
     *
     * @param UnLockResource $parameters
     * @return UnLockResourceResponse
     */
    public function UnLockResource(UnLockResource $parameters)
    {
      return $this->__soapCall('UnLockResource', array($parameters));
    }

    /**
     * return true if the resource is locked by a user.
     *
     * @param IsResourceLocked $parameters
     * @return IsResourceLockedResponse
     */
    public function IsResourceLocked(IsResourceLocked $parameters)
    {
      return $this->__soapCall('IsResourceLocked', array($parameters));
    }

    /**
     * return the user name of the resource locking user.
     *
     * @param GetResourceLockingUserName $parameters
     * @return GetResourceLockingUserNameResponse
     */
    public function GetResourceLockingUserName(GetResourceLockingUserName $parameters)
    {
      return $this->__soapCall('GetResourceLockingUserName', array($parameters));
    }

}
