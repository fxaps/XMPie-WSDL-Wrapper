<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\CreateNewWithProperties;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\CreateNewWithPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Suspend;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SuspendResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Resume;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ResumeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsExistByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsExistByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Get;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfPlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\PlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADOR;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\PlanTabularColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumns;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfPlanTabularColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnsDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnsDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumnsDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipients;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetRecipientsCount;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetRecipientsCountResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeXMPDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeXMPDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRange;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRangeResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipient;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipientResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\InsertADORsValuesForRecipient;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\InsertADORsValuesForRecipientResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\DeleteRecipient;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\DeleteRecipientResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\AddTrackEvent;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\XMPDateTime;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\AddTrackEventResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SendMail;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\EmailHeaderInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfEmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\EmailAddress;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfEmailBodyOptions;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\EmailBodyOptions;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SendMailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfSendEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SendEmailResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobIDAsString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobIDAsStringResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetCorespondingJobIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetDataSetByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetDataSetByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetDataSetByIDResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSetByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetXMPTblDataSetByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SetSettingsByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\ArrayOfSetting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\Setting;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SetSettingsByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetSettingsByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetSettingsByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\DeleteSettingsByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\DeleteSettingsByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetStatusByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetStatusByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\StatusInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsTracked;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsTrackedResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsAdaptedToWeb;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\IsAdaptedToWebResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SetPropertyByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\SetPropertyByIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetPropertyByID;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetPropertyByIDResponse;


class FabricateInteractiveCampaign_SSP
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
    * @return CreateNew
    */
    public function CreateNew($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNew = new CreateNew();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNew, $methodName)) {
                $CreateNew->$methodName($paramValue);
            }
        }
        return $CreateNew;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewResponse
    */
    public function CreateNewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewResponse = new CreateNewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewResponse, $methodName)) {
                $CreateNewResponse->$methodName($paramValue);
            }
        }
        return $CreateNewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewWithProperties
    */
    public function CreateNewWithProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewWithProperties = new CreateNewWithProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewWithProperties, $methodName)) {
                $CreateNewWithProperties->$methodName($paramValue);
            }
        }
        return $CreateNewWithProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProperty
    */
    public function ArrayOfProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProperty = new ArrayOfProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProperty, $methodName)) {
                $ArrayOfProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return Property
    */
    public function Property($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Property = new Property();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Property, $methodName)) {
                $Property->$methodName($paramValue);
            }
        }
        return $Property;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewWithPropertiesResponse
    */
    public function CreateNewWithPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewWithPropertiesResponse = new CreateNewWithPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewWithPropertiesResponse, $methodName)) {
                $CreateNewWithPropertiesResponse->$methodName($paramValue);
            }
        }
        return $CreateNewWithPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Replace
    */
    public function Replace($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Replace = new Replace();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Replace, $methodName)) {
                $Replace->$methodName($paramValue);
            }
        }
        return $Replace;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceResponse
    */
    public function ReplaceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceResponse = new ReplaceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceResponse, $methodName)) {
                $ReplaceResponse->$methodName($paramValue);
            }
        }
        return $ReplaceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Delete
    */
    public function Delete($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Delete = new Delete();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Delete, $methodName)) {
                $Delete->$methodName($paramValue);
            }
        }
        return $Delete;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResponse
    */
    public function DeleteResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResponse = new DeleteResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResponse, $methodName)) {
                $DeleteResponse->$methodName($paramValue);
            }
        }
        return $DeleteResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Suspend
    */
    public function Suspend($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Suspend = new Suspend();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Suspend, $methodName)) {
                $Suspend->$methodName($paramValue);
            }
        }
        return $Suspend;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendResponse
    */
    public function SuspendResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendResponse = new SuspendResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendResponse, $methodName)) {
                $SuspendResponse->$methodName($paramValue);
            }
        }
        return $SuspendResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Resume
    */
    public function Resume($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Resume = new Resume();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Resume, $methodName)) {
                $Resume->$methodName($paramValue);
            }
        }
        return $Resume;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeResponse
    */
    public function ResumeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeResponse = new ResumeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeResponse, $methodName)) {
                $ResumeResponse->$methodName($paramValue);
            }
        }
        return $ResumeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExist
    */
    public function IsExist($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExist = new IsExist();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExist, $methodName)) {
                $IsExist->$methodName($paramValue);
            }
        }
        return $IsExist;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExistResponse
    */
    public function IsExistResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExistResponse = new IsExistResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExistResponse, $methodName)) {
                $IsExistResponse->$methodName($paramValue);
            }
        }
        return $IsExistResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExistByID
    */
    public function IsExistByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExistByID = new IsExistByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExistByID, $methodName)) {
                $IsExistByID->$methodName($paramValue);
            }
        }
        return $IsExistByID;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExistByIDResponse
    */
    public function IsExistByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExistByIDResponse = new IsExistByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExistByIDResponse, $methodName)) {
                $IsExistByIDResponse->$methodName($paramValue);
            }
        }
        return $IsExistByIDResponse;
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
    * @return GetResult
    */
    public function GetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResult = new GetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResult, $methodName)) {
                $GetResult->$methodName($paramValue);
            }
        }
        return $GetResult;
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
    * @return GetADORs
    */
    public function GetADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORs = new GetADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORs, $methodName)) {
                $GetADORs->$methodName($paramValue);
            }
        }
        return $GetADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsResponse
    */
    public function GetADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsResponse = new GetADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsResponse, $methodName)) {
                $GetADORsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanObject
    */
    public function ArrayOfPlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanObject = new ArrayOfPlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanObject, $methodName)) {
                $ArrayOfPlanObject->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanObject
    */
    public function PlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanObject = new PlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanObject, $methodName)) {
                $PlanObject->$methodName($paramValue);
            }
        }
        return $PlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSet
    */
    public function GetADORsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSet = new GetADORsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSet, $methodName)) {
                $GetADORsDataSet->$methodName($paramValue);
            }
        }
        return $GetADORsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSetResponse
    */
    public function GetADORsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSetResponse = new GetADORsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSetResponse, $methodName)) {
                $GetADORsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsDataSetResult
    */
    public function GetADORsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsDataSetResult = new GetADORsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsDataSetResult, $methodName)) {
                $GetADORsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetADORsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADOR
    */
    public function GetADOR($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADOR = new GetADOR();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADOR, $methodName)) {
                $GetADOR->$methodName($paramValue);
            }
        }
        return $GetADOR;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORResponse
    */
    public function GetADORResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORResponse = new GetADORResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORResponse, $methodName)) {
                $GetADORResponse->$methodName($paramValue);
            }
        }
        return $GetADORResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORDataSet
    */
    public function GetADORDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORDataSet = new GetADORDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORDataSet, $methodName)) {
                $GetADORDataSet->$methodName($paramValue);
            }
        }
        return $GetADORDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORDataSetResponse
    */
    public function GetADORDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORDataSetResponse = new GetADORDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORDataSetResponse, $methodName)) {
                $GetADORDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORDataSetResult
    */
    public function GetADORDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORDataSetResult = new GetADORDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORDataSetResult, $methodName)) {
                $GetADORDataSetResult->$methodName($paramValue);
            }
        }
        return $GetADORDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumn
    */
    public function GetTabularADORColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumn = new GetTabularADORColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumn, $methodName)) {
                $GetTabularADORColumn->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnResponse
    */
    public function GetTabularADORColumnResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnResponse = new GetTabularADORColumnResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnResponse, $methodName)) {
                $GetTabularADORColumnResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanTabularColumn
    */
    public function PlanTabularColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanTabularColumn = new PlanTabularColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanTabularColumn, $methodName)) {
                $PlanTabularColumn->$methodName($paramValue);
            }
        }
        return $PlanTabularColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnDataSet
    */
    public function GetTabularADORColumnDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnDataSet = new GetTabularADORColumnDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnDataSet, $methodName)) {
                $GetTabularADORColumnDataSet->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnDataSetResponse
    */
    public function GetTabularADORColumnDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnDataSetResponse = new GetTabularADORColumnDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnDataSetResponse, $methodName)) {
                $GetTabularADORColumnDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnDataSetResult
    */
    public function GetTabularADORColumnDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnDataSetResult = new GetTabularADORColumnDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnDataSetResult, $methodName)) {
                $GetTabularADORColumnDataSetResult->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumns
    */
    public function GetTabularADORColumns($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumns = new GetTabularADORColumns();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumns, $methodName)) {
                $GetTabularADORColumns->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumns;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnsResponse
    */
    public function GetTabularADORColumnsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnsResponse = new GetTabularADORColumnsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnsResponse, $methodName)) {
                $GetTabularADORColumnsResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanTabularColumn
    */
    public function ArrayOfPlanTabularColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanTabularColumn = new ArrayOfPlanTabularColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanTabularColumn, $methodName)) {
                $ArrayOfPlanTabularColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanTabularColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnsDataSet
    */
    public function GetTabularADORColumnsDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnsDataSet = new GetTabularADORColumnsDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnsDataSet, $methodName)) {
                $GetTabularADORColumnsDataSet->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnsDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnsDataSetResponse
    */
    public function GetTabularADORColumnsDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnsDataSetResponse = new GetTabularADORColumnsDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnsDataSetResponse, $methodName)) {
                $GetTabularADORColumnsDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnsDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTabularADORColumnsDataSetResult
    */
    public function GetTabularADORColumnsDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTabularADORColumnsDataSetResult = new GetTabularADORColumnsDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTabularADORColumnsDataSetResult, $methodName)) {
                $GetTabularADORColumnsDataSetResult->$methodName($paramValue);
            }
        }
        return $GetTabularADORColumnsDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRecipientsXMPDataSet
    */
    public function GetADORsValuesForRecipientsXMPDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRecipientsXMPDataSet = new GetADORsValuesForRecipientsXMPDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRecipientsXMPDataSet, $methodName)) {
                $GetADORsValuesForRecipientsXMPDataSet->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRecipientsXMPDataSet;
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
    * @return GetADORsValuesForRecipientsXMPDataSetResponse
    */
    public function GetADORsValuesForRecipientsXMPDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRecipientsXMPDataSetResponse = new GetADORsValuesForRecipientsXMPDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRecipientsXMPDataSetResponse, $methodName)) {
                $GetADORsValuesForRecipientsXMPDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRecipientsXMPDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRecipients
    */
    public function GetADORsValuesForRecipients($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRecipients = new GetADORsValuesForRecipients();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRecipients, $methodName)) {
                $GetADORsValuesForRecipients->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRecipients;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRecipientsResponse
    */
    public function GetADORsValuesForRecipientsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRecipientsResponse = new GetADORsValuesForRecipientsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRecipientsResponse, $methodName)) {
                $GetADORsValuesForRecipientsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRecipientsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRecipientsResult
    */
    public function GetADORsValuesForRecipientsResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRecipientsResult = new GetADORsValuesForRecipientsResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRecipientsResult, $methodName)) {
                $GetADORsValuesForRecipientsResult->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRecipientsResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCount
    */
    public function GetRecipientsCount($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCount = new GetRecipientsCount();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCount, $methodName)) {
                $GetRecipientsCount->$methodName($paramValue);
            }
        }
        return $GetRecipientsCount;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCountResponse
    */
    public function GetRecipientsCountResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCountResponse = new GetRecipientsCountResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCountResponse, $methodName)) {
                $GetRecipientsCountResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientsCountResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRangeXMPDataSet
    */
    public function GetADORsValuesForRangeXMPDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRangeXMPDataSet = new GetADORsValuesForRangeXMPDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRangeXMPDataSet, $methodName)) {
                $GetADORsValuesForRangeXMPDataSet->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRangeXMPDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRangeXMPDataSetResponse
    */
    public function GetADORsValuesForRangeXMPDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRangeXMPDataSetResponse = new GetADORsValuesForRangeXMPDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRangeXMPDataSetResponse, $methodName)) {
                $GetADORsValuesForRangeXMPDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRangeXMPDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRange
    */
    public function GetADORsValuesForRange($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRange = new GetADORsValuesForRange();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRange, $methodName)) {
                $GetADORsValuesForRange->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRange;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRangeResponse
    */
    public function GetADORsValuesForRangeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRangeResponse = new GetADORsValuesForRangeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRangeResponse, $methodName)) {
                $GetADORsValuesForRangeResponse->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRangeResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsValuesForRangeResult
    */
    public function GetADORsValuesForRangeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsValuesForRangeResult = new GetADORsValuesForRangeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsValuesForRangeResult, $methodName)) {
                $GetADORsValuesForRangeResult->$methodName($paramValue);
            }
        }
        return $GetADORsValuesForRangeResult;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateADORsValuesForRecipient
    */
    public function UpdateADORsValuesForRecipient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateADORsValuesForRecipient = new UpdateADORsValuesForRecipient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateADORsValuesForRecipient, $methodName)) {
                $UpdateADORsValuesForRecipient->$methodName($paramValue);
            }
        }
        return $UpdateADORsValuesForRecipient;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateADORsValuesForRecipientResponse
    */
    public function UpdateADORsValuesForRecipientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateADORsValuesForRecipientResponse = new UpdateADORsValuesForRecipientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateADORsValuesForRecipientResponse, $methodName)) {
                $UpdateADORsValuesForRecipientResponse->$methodName($paramValue);
            }
        }
        return $UpdateADORsValuesForRecipientResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return InsertADORsValuesForRecipient
    */
    public function InsertADORsValuesForRecipient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InsertADORsValuesForRecipient = new InsertADORsValuesForRecipient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InsertADORsValuesForRecipient, $methodName)) {
                $InsertADORsValuesForRecipient->$methodName($paramValue);
            }
        }
        return $InsertADORsValuesForRecipient;
    }


   /**
    * @param array $paramAutoSet
    * @return InsertADORsValuesForRecipientResponse
    */
    public function InsertADORsValuesForRecipientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InsertADORsValuesForRecipientResponse = new InsertADORsValuesForRecipientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InsertADORsValuesForRecipientResponse, $methodName)) {
                $InsertADORsValuesForRecipientResponse->$methodName($paramValue);
            }
        }
        return $InsertADORsValuesForRecipientResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteRecipient
    */
    public function DeleteRecipient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteRecipient = new DeleteRecipient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteRecipient, $methodName)) {
                $DeleteRecipient->$methodName($paramValue);
            }
        }
        return $DeleteRecipient;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteRecipientResponse
    */
    public function DeleteRecipientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteRecipientResponse = new DeleteRecipientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteRecipientResponse, $methodName)) {
                $DeleteRecipientResponse->$methodName($paramValue);
            }
        }
        return $DeleteRecipientResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddTrackEvent
    */
    public function AddTrackEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddTrackEvent = new AddTrackEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddTrackEvent, $methodName)) {
                $AddTrackEvent->$methodName($paramValue);
            }
        }
        return $AddTrackEvent;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPDateTime
    */
    public function XMPDateTime($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPDateTime = new XMPDateTime();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPDateTime, $methodName)) {
                $XMPDateTime->$methodName($paramValue);
            }
        }
        return $XMPDateTime;
    }


   /**
    * @param array $paramAutoSet
    * @return AddTrackEventResponse
    */
    public function AddTrackEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddTrackEventResponse = new AddTrackEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddTrackEventResponse, $methodName)) {
                $AddTrackEventResponse->$methodName($paramValue);
            }
        }
        return $AddTrackEventResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMail
    */
    public function SendMail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMail = new SendMail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMail, $methodName)) {
                $SendMail->$methodName($paramValue);
            }
        }
        return $SendMail;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailHeaderInfo
    */
    public function EmailHeaderInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailHeaderInfo = new EmailHeaderInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailHeaderInfo, $methodName)) {
                $EmailHeaderInfo->$methodName($paramValue);
            }
        }
        return $EmailHeaderInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfEmailAddress
    */
    public function ArrayOfEmailAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEmailAddress = new ArrayOfEmailAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEmailAddress, $methodName)) {
                $ArrayOfEmailAddress->$methodName($paramValue);
            }
        }
        return $ArrayOfEmailAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailAddress
    */
    public function EmailAddress($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailAddress = new EmailAddress();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailAddress, $methodName)) {
                $EmailAddress->$methodName($paramValue);
            }
        }
        return $EmailAddress;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfEmailBodyOptions
    */
    public function ArrayOfEmailBodyOptions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfEmailBodyOptions = new ArrayOfEmailBodyOptions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfEmailBodyOptions, $methodName)) {
                $ArrayOfEmailBodyOptions->$methodName($paramValue);
            }
        }
        return $ArrayOfEmailBodyOptions;
    }


   /**
    * @param array $paramAutoSet
    * @return EmailBodyOptions
    */
    public function EmailBodyOptions($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $EmailBodyOptions = new EmailBodyOptions();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($EmailBodyOptions, $methodName)) {
                $EmailBodyOptions->$methodName($paramValue);
            }
        }
        return $EmailBodyOptions;
    }


   /**
    * @param array $paramAutoSet
    * @return SendMailResponse
    */
    public function SendMailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailResponse = new SendMailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailResponse, $methodName)) {
                $SendMailResponse->$methodName($paramValue);
            }
        }
        return $SendMailResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfSendEmailResult
    */
    public function ArrayOfSendEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfSendEmailResult = new ArrayOfSendEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfSendEmailResult, $methodName)) {
                $ArrayOfSendEmailResult->$methodName($paramValue);
            }
        }
        return $ArrayOfSendEmailResult;
    }


   /**
    * @param array $paramAutoSet
    * @return SendEmailResult
    */
    public function SendEmailResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendEmailResult = new SendEmailResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendEmailResult, $methodName)) {
                $SendEmailResult->$methodName($paramValue);
            }
        }
        return $SendEmailResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorespondingJobIDAsString
    */
    public function GetCorespondingJobIDAsString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorespondingJobIDAsString = new GetCorespondingJobIDAsString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorespondingJobIDAsString, $methodName)) {
                $GetCorespondingJobIDAsString->$methodName($paramValue);
            }
        }
        return $GetCorespondingJobIDAsString;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorespondingJobIDAsStringResponse
    */
    public function GetCorespondingJobIDAsStringResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorespondingJobIDAsStringResponse = new GetCorespondingJobIDAsStringResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorespondingJobIDAsStringResponse, $methodName)) {
                $GetCorespondingJobIDAsStringResponse->$methodName($paramValue);
            }
        }
        return $GetCorespondingJobIDAsStringResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorespondingJobID
    */
    public function GetCorespondingJobID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorespondingJobID = new GetCorespondingJobID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorespondingJobID, $methodName)) {
                $GetCorespondingJobID->$methodName($paramValue);
            }
        }
        return $GetCorespondingJobID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCorespondingJobIDResponse
    */
    public function GetCorespondingJobIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCorespondingJobIDResponse = new GetCorespondingJobIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCorespondingJobIDResponse, $methodName)) {
                $GetCorespondingJobIDResponse->$methodName($paramValue);
            }
        }
        return $GetCorespondingJobIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetByID
    */
    public function GetDataSetByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetByID = new GetDataSetByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetByID, $methodName)) {
                $GetDataSetByID->$methodName($paramValue);
            }
        }
        return $GetDataSetByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetByIDResponse
    */
    public function GetDataSetByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetByIDResponse = new GetDataSetByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetByIDResponse, $methodName)) {
                $GetDataSetByIDResponse->$methodName($paramValue);
            }
        }
        return $GetDataSetByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetByIDResult
    */
    public function GetDataSetByIDResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetByIDResult = new GetDataSetByIDResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetByIDResult, $methodName)) {
                $GetDataSetByIDResult->$methodName($paramValue);
            }
        }
        return $GetDataSetByIDResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetByID
    */
    public function GetXMPTblDataSetByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetByID = new GetXMPTblDataSetByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetByID, $methodName)) {
                $GetXMPTblDataSetByID->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetByIDResponse
    */
    public function GetXMPTblDataSetByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetByIDResponse = new GetXMPTblDataSetByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetByIDResponse, $methodName)) {
                $GetXMPTblDataSetByIDResponse->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetSettingsByID
    */
    public function SetSettingsByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetSettingsByID = new SetSettingsByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetSettingsByID, $methodName)) {
                $SetSettingsByID->$methodName($paramValue);
            }
        }
        return $SetSettingsByID;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfSetting
    */
    public function ArrayOfSetting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfSetting = new ArrayOfSetting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfSetting, $methodName)) {
                $ArrayOfSetting->$methodName($paramValue);
            }
        }
        return $ArrayOfSetting;
    }


   /**
    * @param array $paramAutoSet
    * @return Setting
    */
    public function Setting($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Setting = new Setting();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Setting, $methodName)) {
                $Setting->$methodName($paramValue);
            }
        }
        return $Setting;
    }


   /**
    * @param array $paramAutoSet
    * @return SetSettingsByIDResponse
    */
    public function SetSettingsByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetSettingsByIDResponse = new SetSettingsByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetSettingsByIDResponse, $methodName)) {
                $SetSettingsByIDResponse->$methodName($paramValue);
            }
        }
        return $SetSettingsByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSettingsByID
    */
    public function GetSettingsByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSettingsByID = new GetSettingsByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSettingsByID, $methodName)) {
                $GetSettingsByID->$methodName($paramValue);
            }
        }
        return $GetSettingsByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSettingsByIDResponse
    */
    public function GetSettingsByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSettingsByIDResponse = new GetSettingsByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSettingsByIDResponse, $methodName)) {
                $GetSettingsByIDResponse->$methodName($paramValue);
            }
        }
        return $GetSettingsByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSettingsByID
    */
    public function DeleteSettingsByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSettingsByID = new DeleteSettingsByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSettingsByID, $methodName)) {
                $DeleteSettingsByID->$methodName($paramValue);
            }
        }
        return $DeleteSettingsByID;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteSettingsByIDResponse
    */
    public function DeleteSettingsByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteSettingsByIDResponse = new DeleteSettingsByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteSettingsByIDResponse, $methodName)) {
                $DeleteSettingsByIDResponse->$methodName($paramValue);
            }
        }
        return $DeleteSettingsByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatusByID
    */
    public function GetStatusByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatusByID = new GetStatusByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatusByID, $methodName)) {
                $GetStatusByID->$methodName($paramValue);
            }
        }
        return $GetStatusByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatusByIDResponse
    */
    public function GetStatusByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatusByIDResponse = new GetStatusByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatusByIDResponse, $methodName)) {
                $GetStatusByIDResponse->$methodName($paramValue);
            }
        }
        return $GetStatusByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StatusInfo
    */
    public function StatusInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StatusInfo = new StatusInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StatusInfo, $methodName)) {
                $StatusInfo->$methodName($paramValue);
            }
        }
        return $StatusInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTracked
    */
    public function IsTracked($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTracked = new IsTracked();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTracked, $methodName)) {
                $IsTracked->$methodName($paramValue);
            }
        }
        return $IsTracked;
    }


   /**
    * @param array $paramAutoSet
    * @return IsTrackedResponse
    */
    public function IsTrackedResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsTrackedResponse = new IsTrackedResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsTrackedResponse, $methodName)) {
                $IsTrackedResponse->$methodName($paramValue);
            }
        }
        return $IsTrackedResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetID
    */
    public function GetID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetID = new GetID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetID, $methodName)) {
                $GetID->$methodName($paramValue);
            }
        }
        return $GetID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetIDResponse
    */
    public function GetIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIDResponse = new GetIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIDResponse, $methodName)) {
                $GetIDResponse->$methodName($paramValue);
            }
        }
        return $GetIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetName
    */
    public function GetName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetName = new GetName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetName, $methodName)) {
                $GetName->$methodName($paramValue);
            }
        }
        return $GetName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetNameResponse
    */
    public function GetNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetNameResponse = new GetNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetNameResponse, $methodName)) {
                $GetNameResponse->$methodName($paramValue);
            }
        }
        return $GetNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAdaptedToWeb
    */
    public function IsAdaptedToWeb($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAdaptedToWeb = new IsAdaptedToWeb();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAdaptedToWeb, $methodName)) {
                $IsAdaptedToWeb->$methodName($paramValue);
            }
        }
        return $IsAdaptedToWeb;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAdaptedToWebResponse
    */
    public function IsAdaptedToWebResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAdaptedToWebResponse = new IsAdaptedToWebResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAdaptedToWebResponse, $methodName)) {
                $IsAdaptedToWebResponse->$methodName($paramValue);
            }
        }
        return $IsAdaptedToWebResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertyByID
    */
    public function SetPropertyByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertyByID = new SetPropertyByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertyByID, $methodName)) {
                $SetPropertyByID->$methodName($paramValue);
            }
        }
        return $SetPropertyByID;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertyByIDResponse
    */
    public function SetPropertyByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertyByIDResponse = new SetPropertyByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertyByIDResponse, $methodName)) {
                $SetPropertyByIDResponse->$methodName($paramValue);
            }
        }
        return $SetPropertyByIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPropertyByID
    */
    public function GetPropertyByID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertyByID = new GetPropertyByID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertyByID, $methodName)) {
                $GetPropertyByID->$methodName($paramValue);
            }
        }
        return $GetPropertyByID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPropertyByIDResponse
    */
    public function GetPropertyByIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertyByIDResponse = new GetPropertyByIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertyByIDResponse, $methodName)) {
                $GetPropertyByIDResponse->$methodName($paramValue);
            }
        }
        return $GetPropertyByIDResponse;
    }



}

?>
