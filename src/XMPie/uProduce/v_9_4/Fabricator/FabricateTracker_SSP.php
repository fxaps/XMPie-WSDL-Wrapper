<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEvent;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\XMPDateTime;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventByRun;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventByRunResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventType;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventForRecipients;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventForRecipientsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEvents;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\ArrayOfTrackEvent;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\TrackEvent;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\AddEventsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\CreateNewJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\CreateNewJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\SetCloudTrackingConfiguration;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\SetCloudTrackingConfigurationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\GetCloudTrackingConfiguration;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\GetCloudTrackingConfigurationResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\GetCloudTrackingInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\GetCloudTrackingInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Tracker_SSP\CloudTrackingInfo;


class FabricateTracker_SSP
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
    * @return AddEvent
    */
    public function AddEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEvent = new AddEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEvent, $methodName)) {
                $AddEvent->$methodName($paramValue);
            }
        }
        return $AddEvent;
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
    * @return AddEventResponse
    */
    public function AddEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventResponse = new AddEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventResponse, $methodName)) {
                $AddEventResponse->$methodName($paramValue);
            }
        }
        return $AddEventResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEventByRun
    */
    public function AddEventByRun($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventByRun = new AddEventByRun();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventByRun, $methodName)) {
                $AddEventByRun->$methodName($paramValue);
            }
        }
        return $AddEventByRun;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEventByRunResponse
    */
    public function AddEventByRunResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventByRunResponse = new AddEventByRunResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventByRunResponse, $methodName)) {
                $AddEventByRunResponse->$methodName($paramValue);
            }
        }
        return $AddEventByRunResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEventType
    */
    public function AddEventType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventType = new AddEventType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventType, $methodName)) {
                $AddEventType->$methodName($paramValue);
            }
        }
        return $AddEventType;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEventTypeResponse
    */
    public function AddEventTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventTypeResponse = new AddEventTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventTypeResponse, $methodName)) {
                $AddEventTypeResponse->$methodName($paramValue);
            }
        }
        return $AddEventTypeResponse;
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
    * @return AddEventForRecipients
    */
    public function AddEventForRecipients($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventForRecipients = new AddEventForRecipients();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventForRecipients, $methodName)) {
                $AddEventForRecipients->$methodName($paramValue);
            }
        }
        return $AddEventForRecipients;
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
    * @return AddEventForRecipientsResponse
    */
    public function AddEventForRecipientsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventForRecipientsResponse = new AddEventForRecipientsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventForRecipientsResponse, $methodName)) {
                $AddEventForRecipientsResponse->$methodName($paramValue);
            }
        }
        return $AddEventForRecipientsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEvents
    */
    public function AddEvents($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEvents = new AddEvents();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEvents, $methodName)) {
                $AddEvents->$methodName($paramValue);
            }
        }
        return $AddEvents;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfTrackEvent
    */
    public function ArrayOfTrackEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfTrackEvent = new ArrayOfTrackEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfTrackEvent, $methodName)) {
                $ArrayOfTrackEvent->$methodName($paramValue);
            }
        }
        return $ArrayOfTrackEvent;
    }


   /**
    * @param array $paramAutoSet
    * @return TrackEvent
    */
    public function TrackEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TrackEvent = new TrackEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TrackEvent, $methodName)) {
                $TrackEvent->$methodName($paramValue);
            }
        }
        return $TrackEvent;
    }


   /**
    * @param array $paramAutoSet
    * @return AddEventsResponse
    */
    public function AddEventsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddEventsResponse = new AddEventsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddEventsResponse, $methodName)) {
                $AddEventsResponse->$methodName($paramValue);
            }
        }
        return $AddEventsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewJob
    */
    public function CreateNewJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewJob = new CreateNewJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewJob, $methodName)) {
                $CreateNewJob->$methodName($paramValue);
            }
        }
        return $CreateNewJob;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewJobResponse
    */
    public function CreateNewJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewJobResponse = new CreateNewJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewJobResponse, $methodName)) {
                $CreateNewJobResponse->$methodName($paramValue);
            }
        }
        return $CreateNewJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCloudTrackingConfiguration
    */
    public function SetCloudTrackingConfiguration($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCloudTrackingConfiguration = new SetCloudTrackingConfiguration();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCloudTrackingConfiguration, $methodName)) {
                $SetCloudTrackingConfiguration->$methodName($paramValue);
            }
        }
        return $SetCloudTrackingConfiguration;
    }


   /**
    * @param array $paramAutoSet
    * @return SetCloudTrackingConfigurationResponse
    */
    public function SetCloudTrackingConfigurationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetCloudTrackingConfigurationResponse = new SetCloudTrackingConfigurationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetCloudTrackingConfigurationResponse, $methodName)) {
                $SetCloudTrackingConfigurationResponse->$methodName($paramValue);
            }
        }
        return $SetCloudTrackingConfigurationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudTrackingConfiguration
    */
    public function GetCloudTrackingConfiguration($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudTrackingConfiguration = new GetCloudTrackingConfiguration();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudTrackingConfiguration, $methodName)) {
                $GetCloudTrackingConfiguration->$methodName($paramValue);
            }
        }
        return $GetCloudTrackingConfiguration;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudTrackingConfigurationResponse
    */
    public function GetCloudTrackingConfigurationResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudTrackingConfigurationResponse = new GetCloudTrackingConfigurationResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudTrackingConfigurationResponse, $methodName)) {
                $GetCloudTrackingConfigurationResponse->$methodName($paramValue);
            }
        }
        return $GetCloudTrackingConfigurationResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudTrackingInfo
    */
    public function GetCloudTrackingInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudTrackingInfo = new GetCloudTrackingInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudTrackingInfo, $methodName)) {
                $GetCloudTrackingInfo->$methodName($paramValue);
            }
        }
        return $GetCloudTrackingInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCloudTrackingInfoResponse
    */
    public function GetCloudTrackingInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCloudTrackingInfoResponse = new GetCloudTrackingInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCloudTrackingInfoResponse, $methodName)) {
                $GetCloudTrackingInfoResponse->$methodName($paramValue);
            }
        }
        return $GetCloudTrackingInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CloudTrackingInfo
    */
    public function CloudTrackingInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CloudTrackingInfo = new CloudTrackingInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CloudTrackingInfo, $methodName)) {
                $CloudTrackingInfo->$methodName($paramValue);
            }
        }
        return $CloudTrackingInfo;
    }



}

?>
