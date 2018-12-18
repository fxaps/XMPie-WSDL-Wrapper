<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\IsAllowed;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\IsAllowedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\SetAllowed;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\SetAllowedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Get;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfPermission;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\Permission;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetView;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetViewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetViewResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\SetAllowedList;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\SetAllowedListResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\RemoveOverload;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\RemoveOverloadResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsers;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersView;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersViewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersViewResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetPermittedUsersXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\LockResource;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\LockResourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\UnLockResource;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\UnLockResourceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\IsResourceLocked;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\IsResourceLockedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetResourceLockingUserName;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\GetResourceLockingUserNameResponse;


class FabricatePermissions_SSP
{
    private $paramAutoSet;
    
    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAllowed
    */
    public function IsAllowed($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAllowed = new IsAllowed();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAllowed, $methodName)) {
                $IsAllowed->$methodName($paramValue);
            }
        }
        return $IsAllowed;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAllowedResponse
    */
    public function IsAllowedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAllowedResponse = new IsAllowedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAllowedResponse, $methodName)) {
                $IsAllowedResponse->$methodName($paramValue);
            }
        }
        return $IsAllowedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAllowed
    */
    public function SetAllowed($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAllowed = new SetAllowed();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAllowed, $methodName)) {
                $SetAllowed->$methodName($paramValue);
            }
        }
        return $SetAllowed;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAllowedResponse
    */
    public function SetAllowedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAllowedResponse = new SetAllowedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAllowedResponse, $methodName)) {
                $SetAllowedResponse->$methodName($paramValue);
            }
        }
        return $SetAllowedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Get
    */
    public function Get($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Get = new Get();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Get, $methodName)) {
                $Get->$methodName($paramValue);
            }
        }
        return $Get;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResponse
    */
    public function GetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResponse = new GetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResponse, $methodName)) {
                $GetResponse->$methodName($paramValue);
            }
        }
        return $GetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPermission
    */
    public function ArrayOfPermission($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPermission = new ArrayOfPermission();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPermission, $methodName)) {
                $ArrayOfPermission->$methodName($paramValue);
            }
        }
        return $ArrayOfPermission;
    }


   /**
    * @param array $paramAutoSet
    * @return Permission
    */
    public function Permission($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Permission = new Permission();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Permission, $methodName)) {
                $Permission->$methodName($paramValue);
            }
        }
        return $Permission;
    }


   /**
    * @param array $paramAutoSet
    * @return GetView
    */
    public function GetView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetView = new GetView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetView, $methodName)) {
                $GetView->$methodName($paramValue);
            }
        }
        return $GetView;
    }


   /**
    * @param array $paramAutoSet
    * @return GetViewResponse
    */
    public function GetViewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetViewResponse = new GetViewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetViewResponse, $methodName)) {
                $GetViewResponse->$methodName($paramValue);
            }
        }
        return $GetViewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetViewResult
    */
    public function GetViewResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetViewResult = new GetViewResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetViewResult, $methodName)) {
                $GetViewResult->$methodName($paramValue);
            }
        }
        return $GetViewResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSet
    */
    public function GetXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSet = new GetXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSet, $methodName)) {
                $GetXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetResponse
    */
    public function GetXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetResponse = new GetXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetResponse, $methodName)) {
                $GetXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblDataSet
    */
    public function XMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblDataSet = new XMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblDataSet, $methodName)) {
                $XMPTblDataSet->$methodName($paramValue);
            }
        }
        return $XMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTbl
    */
    public function ArrayOfXMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTbl = new ArrayOfXMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTbl, $methodName)) {
                $ArrayOfXMPTbl->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTbl
    */
    public function XMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTbl = new XMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTbl, $methodName)) {
                $XMPTbl->$methodName($paramValue);
            }
        }
        return $XMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblColumn
    */
    public function ArrayOfXMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblColumn = new ArrayOfXMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblColumn, $methodName)) {
                $ArrayOfXMPTblColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblColumn
    */
    public function XMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblColumn = new XMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblColumn, $methodName)) {
                $XMPTblColumn->$methodName($paramValue);
            }
        }
        return $XMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblRow
    */
    public function ArrayOfXMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblRow = new ArrayOfXMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblRow, $methodName)) {
                $ArrayOfXMPTblRow->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblRow
    */
    public function XMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblRow = new XMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblRow, $methodName)) {
                $XMPTblRow->$methodName($paramValue);
            }
        }
        return $XMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPRowField
    */
    public function ArrayOfXMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPRowField = new ArrayOfXMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPRowField, $methodName)) {
                $ArrayOfXMPRowField->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPRowField
    */
    public function XMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPRowField = new XMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPRowField, $methodName)) {
                $XMPRowField->$methodName($paramValue);
            }
        }
        return $XMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAllowedList
    */
    public function SetAllowedList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAllowedList = new SetAllowedList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAllowedList, $methodName)) {
                $SetAllowedList->$methodName($paramValue);
            }
        }
        return $SetAllowedList;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAllowedListResponse
    */
    public function SetAllowedListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAllowedListResponse = new SetAllowedListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAllowedListResponse, $methodName)) {
                $SetAllowedListResponse->$methodName($paramValue);
            }
        }
        return $SetAllowedListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveOverload
    */
    public function RemoveOverload($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveOverload = new RemoveOverload();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveOverload, $methodName)) {
                $RemoveOverload->$methodName($paramValue);
            }
        }
        return $RemoveOverload;
    }


   /**
    * @param array $paramAutoSet
    * @return RemoveOverloadResponse
    */
    public function RemoveOverloadResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RemoveOverloadResponse = new RemoveOverloadResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RemoveOverloadResponse, $methodName)) {
                $RemoveOverloadResponse->$methodName($paramValue);
            }
        }
        return $RemoveOverloadResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsers
    */
    public function GetPermittedUsers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsers = new GetPermittedUsers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsers, $methodName)) {
                $GetPermittedUsers->$methodName($paramValue);
            }
        }
        return $GetPermittedUsers;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersResponse
    */
    public function GetPermittedUsersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersResponse = new GetPermittedUsersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersResponse, $methodName)) {
                $GetPermittedUsersResponse->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersView
    */
    public function GetPermittedUsersView($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersView = new GetPermittedUsersView();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersView, $methodName)) {
                $GetPermittedUsersView->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersView;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersViewResponse
    */
    public function GetPermittedUsersViewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersViewResponse = new GetPermittedUsersViewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersViewResponse, $methodName)) {
                $GetPermittedUsersViewResponse->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersViewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersViewResult
    */
    public function GetPermittedUsersViewResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersViewResult = new GetPermittedUsersViewResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersViewResult, $methodName)) {
                $GetPermittedUsersViewResult->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersViewResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersXMPTblDataSet
    */
    public function GetPermittedUsersXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersXMPTblDataSet = new GetPermittedUsersXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersXMPTblDataSet, $methodName)) {
                $GetPermittedUsersXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPermittedUsersXMPTblDataSetResponse
    */
    public function GetPermittedUsersXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPermittedUsersXMPTblDataSetResponse = new GetPermittedUsersXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPermittedUsersXMPTblDataSetResponse, $methodName)) {
                $GetPermittedUsersXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetPermittedUsersXMPTblDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return LockResource
    */
    public function LockResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $LockResource = new LockResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($LockResource, $methodName)) {
                $LockResource->$methodName($paramValue);
            }
        }
        return $LockResource;
    }


   /**
    * @param array $paramAutoSet
    * @return LockResourceResponse
    */
    public function LockResourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $LockResourceResponse = new LockResourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($LockResourceResponse, $methodName)) {
                $LockResourceResponse->$methodName($paramValue);
            }
        }
        return $LockResourceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UnLockResource
    */
    public function UnLockResource($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnLockResource = new UnLockResource();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnLockResource, $methodName)) {
                $UnLockResource->$methodName($paramValue);
            }
        }
        return $UnLockResource;
    }


   /**
    * @param array $paramAutoSet
    * @return UnLockResourceResponse
    */
    public function UnLockResourceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnLockResourceResponse = new UnLockResourceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnLockResourceResponse, $methodName)) {
                $UnLockResourceResponse->$methodName($paramValue);
            }
        }
        return $UnLockResourceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsResourceLocked
    */
    public function IsResourceLocked($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsResourceLocked = new IsResourceLocked();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsResourceLocked, $methodName)) {
                $IsResourceLocked->$methodName($paramValue);
            }
        }
        return $IsResourceLocked;
    }


   /**
    * @param array $paramAutoSet
    * @return IsResourceLockedResponse
    */
    public function IsResourceLockedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsResourceLockedResponse = new IsResourceLockedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsResourceLockedResponse, $methodName)) {
                $IsResourceLockedResponse->$methodName($paramValue);
            }
        }
        return $IsResourceLockedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceLockingUserName
    */
    public function GetResourceLockingUserName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceLockingUserName = new GetResourceLockingUserName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceLockingUserName, $methodName)) {
                $GetResourceLockingUserName->$methodName($paramValue);
            }
        }
        return $GetResourceLockingUserName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetResourceLockingUserNameResponse
    */
    public function GetResourceLockingUserNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResourceLockingUserNameResponse = new GetResourceLockingUserNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResourceLockingUserNameResponse, $methodName)) {
                $GetResourceLockingUserNameResponse->$methodName($paramValue);
            }
        }
        return $GetResourceLockingUserNameResponse;
    }



}

?>
