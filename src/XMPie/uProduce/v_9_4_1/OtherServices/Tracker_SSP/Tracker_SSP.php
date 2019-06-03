<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Tracker_SSP;


/**
 * Tracker Web Service.
 */
class Tracker_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'AddEvent' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEvent',
  'XMPDateTime' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\XMPDateTime',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\Property',
  'AddEventResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventResponse',
  'AddEventByRun' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventByRun',
  'AddEventByRunResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventByRunResponse',
  'AddEventType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventType',
  'AddEventTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventTypeResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\DeleteResponse',
  'AddEventForRecipients' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventForRecipients',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\ArrayOfString',
  'AddEventForRecipientsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventForRecipientsResponse',
  'AddEvents' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEvents',
  'ArrayOfTrackEvent' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\ArrayOfTrackEvent',
  'TrackEvent' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\TrackEvent',
  'AddEventsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\AddEventsResponse',
  'CreateNewJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\CreateNewJob',
  'CreateNewJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\CreateNewJobResponse',
  'SetCloudTrackingConfiguration' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\SetCloudTrackingConfiguration',
  'SetCloudTrackingConfigurationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\SetCloudTrackingConfigurationResponse',
  'GetCloudTrackingConfiguration' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\GetCloudTrackingConfiguration',
  'GetCloudTrackingConfigurationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\GetCloudTrackingConfigurationResponse',
  'GetCloudTrackingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\GetCloudTrackingInfo',
  'GetCloudTrackingInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\GetCloudTrackingInfoResponse',
  'CloudTrackingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\OtherServices\\Tracker_SSP\\CloudTrackingInfo',
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
        $wsdl = 'http://localhost/xmpiewsapi/Tracker_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Adds a new track event.
     *
     * @param AddEvent $parameters
     * @return AddEventResponse
     */
    public function AddEvent(AddEvent $parameters)
    {
      return $this->__soapCall('AddEvent', array($parameters));
    }

    /**
     * Track a new event by Circle Run (that should be connected to a Population).
     *
     * @param AddEventByRun $parameters
     * @return AddEventByRunResponse
     */
    public function AddEventByRun(AddEventByRun $parameters)
    {
      return $this->__soapCall('AddEventByRun', array($parameters));
    }

    /**
     * Adds a new track event type.
     *
     * @param AddEventType $parameters
     * @return AddEventTypeResponse
     */
    public function AddEventType(AddEventType $parameters)
    {
      return $this->__soapCall('AddEventType', array($parameters));
    }

    /**
     * Deletes the tracking information for a campaign.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Adds a new track event for group of recipients.
     *
     * @param AddEventForRecipients $parameters
     * @return AddEventForRecipientsResponse
     */
    public function AddEventForRecipients(AddEventForRecipients $parameters)
    {
      return $this->__soapCall('AddEventForRecipients', array($parameters));
    }

    /**
     * Adds new track events.
     *
     * @param AddEvents $parameters
     * @return AddEventsResponse
     */
    public function AddEvents(AddEvents $parameters)
    {
      return $this->__soapCall('AddEvents', array($parameters));
    }

    /**
     * Create a new tracking job.
     *
     * @param CreateNewJob $parameters
     * @return CreateNewJobResponse
     */
    public function CreateNewJob(CreateNewJob $parameters)
    {
      return $this->__soapCall('CreateNewJob', array($parameters));
    }

    /**
     * Deprecated. Configures Cloud Tracking feature on uProduce.
     *
     * @param SetCloudTrackingConfiguration $parameters
     * @return SetCloudTrackingConfigurationResponse
     */
    public function SetCloudTrackingConfiguration(SetCloudTrackingConfiguration $parameters)
    {
      return $this->__soapCall('SetCloudTrackingConfiguration', array($parameters));
    }

    /**
     * Deprecated. Returns Cloud Tracking feature's configuration.
     *
     * @param GetCloudTrackingConfiguration $parameters
     * @return GetCloudTrackingConfigurationResponse
     */
    public function GetCloudTrackingConfiguration(GetCloudTrackingConfiguration $parameters)
    {
      return $this->__soapCall('GetCloudTrackingConfiguration', array($parameters));
    }

    /**
     * Deprecated. Returns status of Cloud Tracking feature.
     *
     * @param GetCloudTrackingInfo $parameters
     * @return GetCloudTrackingInfoResponse
     */
    public function GetCloudTrackingInfo(GetCloudTrackingInfo $parameters)
    {
      return $this->__soapCall('GetCloudTrackingInfo', array($parameters));
    }

}
