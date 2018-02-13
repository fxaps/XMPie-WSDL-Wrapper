<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\Fabricator;


use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientListResponse;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\RecipientList;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\ReturnObject;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\AddRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\AddRecipientListResponse;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\UpdateRecipientList;
use XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\UpdateRecipientListResponse;


class FabricateRecipientListWS
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
    * @return GetRecipientList
    */
    public function GetRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientList = new GetRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientList, $methodName)) {
                $GetRecipientList->$methodName($paramValue);
            }
        }
        return $GetRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientListResponse
    */
    public function GetRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientListResponse = new GetRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientListResponse, $methodName)) {
                $GetRecipientListResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RecipientList
    */
    public function RecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RecipientList = new RecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RecipientList, $methodName)) {
                $RecipientList->$methodName($paramValue);
            }
        }
        return $RecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return ReturnObject
    */
    public function ReturnObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReturnObject = new ReturnObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReturnObject, $methodName)) {
                $ReturnObject->$methodName($paramValue);
            }
        }
        return $ReturnObject;
    }


   /**
    * @param array $paramAutoSet
    * @return AddRecipientList
    */
    public function AddRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddRecipientList = new AddRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddRecipientList, $methodName)) {
                $AddRecipientList->$methodName($paramValue);
            }
        }
        return $AddRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return AddRecipientListResponse
    */
    public function AddRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddRecipientListResponse = new AddRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddRecipientListResponse, $methodName)) {
                $AddRecipientListResponse->$methodName($paramValue);
            }
        }
        return $AddRecipientListResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateRecipientList
    */
    public function UpdateRecipientList($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateRecipientList = new UpdateRecipientList();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateRecipientList, $methodName)) {
                $UpdateRecipientList->$methodName($paramValue);
            }
        }
        return $UpdateRecipientList;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateRecipientListResponse
    */
    public function UpdateRecipientListResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateRecipientListResponse = new UpdateRecipientListResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateRecipientListResponse, $methodName)) {
                $UpdateRecipientListResponse->$methodName($paramValue);
            }
        }
        return $UpdateRecipientListResponse;
    }



}

?>
