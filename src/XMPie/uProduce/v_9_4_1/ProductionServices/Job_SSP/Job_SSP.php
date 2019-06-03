<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP;


/**
 * Job Web Service.
 */
class Job_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetFolderPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetFolderPath',
  'GetFolderPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetFolderPathResponse',
  'GetOutputResults' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResults',
  'GetOutputResultsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultsResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfString',
  'AddFileToOutputResults' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\AddFileToOutputResults',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\Property',
  'AddFileToOutputResultsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\AddFileToOutputResultsResponse',
  'AddFilesToOutputResults' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\AddFilesToOutputResults',
  'AddFilesToOutputResultsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\AddFilesToOutputResultsResponse',
  'DeleteOutputResults' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\DeleteOutputResults',
  'DeleteOutputResultsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\DeleteOutputResultsResponse',
  'GetOutputResultsInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultsInfo',
  'GetOutputResultsInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultsInfoResponse',
  'ArrayOfOutputResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfOutputResult',
  'OutputResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\OutputResult',
  'GetOutputResultBinaryFileStream' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStream',
  'GetOutputResultBinaryFileStreamResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStreamResponse',
  'GetOutputResultBinaryFileStreamChunk' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStreamChunk',
  'GetOutputResultBinaryFileStreamChunkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStreamChunkResponse',
  'GetOutputResultBinaryFileStreamSize' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStreamSize',
  'GetOutputResultBinaryFileStreamSizeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultBinaryFileStreamSizeResponse',
  'GetOutputResultDownloadURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultDownloadURL',
  'GetOutputResultDownloadURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetOutputResultDownloadURLResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetProperties',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetPropertiesResponse',
  'Abort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\Abort',
  'AbortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\AbortResponse',
  'ReQueue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ReQueue',
  'ReQueueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\ReQueueResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\DeleteResponse',
  'GetStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetStatus',
  'GetStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetStatusResponse',
  'SetProgressStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetProgressStatus',
  'SetProgressStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetProgressStatusResponse',
  'GetTicket' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetTicket',
  'GetTicketResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetTicketResponse',
  'GetMessages' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessages',
  'GetMessagesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesResponse',
  'GetMessagesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesDataSet',
  'GetMessagesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesDataSetResponse',
  'GetMessagesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesDataSetResult',
  'GetMessagesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesXMPTblDataSet',
  'GetMessagesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesXMPTblDataSetResponse',
  'GetMessagesNum' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesNum',
  'GetMessagesNumResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesNumResponse',
  'GetMessagesHighestSeverity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesHighestSeverity',
  'GetMessagesHighestSeverityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetMessagesHighestSeverityResponse',
  'DeleteMessages' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\DeleteMessages',
  'DeleteMessagesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\DeleteMessagesResponse',
  'GetCampaignShortcutInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetCampaignShortcutInfo',
  'GetCampaignShortcutInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetCampaignShortcutInfoResponse',
  'CampaignShortcutInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\CampaignShortcutInfo',
  'GetTouchPoint' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetTouchPoint',
  'GetTouchPointResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\GetTouchPointResponse',
  'SetTouchPoint' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetTouchPoint',
  'SetTouchPointResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\SetTouchPointResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_4_1\\ProductionServices\\Job_SSP\\IsExistResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Job_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
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
     * Get Output Results.
     *
     * @param GetOutputResults $parameters
     * @return GetOutputResultsResponse
     */
    public function GetOutputResults(GetOutputResults $parameters)
    {
      return $this->__soapCall('GetOutputResults', array($parameters));
    }

    /**
     * Add a File to the Output Results.
     *
     * @param AddFileToOutputResults $parameters
     * @return AddFileToOutputResultsResponse
     */
    public function AddFileToOutputResults(AddFileToOutputResults $parameters)
    {
      return $this->__soapCall('AddFileToOutputResults', array($parameters));
    }

    /**
     * Add Files to the Output Results.
     *
     * @param AddFilesToOutputResults $parameters
     * @return AddFilesToOutputResultsResponse
     */
    public function AddFilesToOutputResults(AddFilesToOutputResults $parameters)
    {
      return $this->__soapCall('AddFilesToOutputResults', array($parameters));
    }

    /**
     * Delete Output Results.
     *
     * @param DeleteOutputResults $parameters
     * @return DeleteOutputResultsResponse
     */
    public function DeleteOutputResults(DeleteOutputResults $parameters)
    {
      return $this->__soapCall('DeleteOutputResults', array($parameters));
    }

    /**
     * Get Output Results info.
     *
     * @param GetOutputResultsInfo $parameters
     * @return GetOutputResultsInfoResponse
     */
    public function GetOutputResultsInfo(GetOutputResultsInfo $parameters)
    {
      return $this->__soapCall('GetOutputResultsInfo', array($parameters));
    }

    /**
     * return the output result stream.
     *
     * @param GetOutputResultBinaryFileStream $parameters
     * @return GetOutputResultBinaryFileStreamResponse
     */
    public function GetOutputResultBinaryFileStream(GetOutputResultBinaryFileStream $parameters)
    {
      return $this->__soapCall('GetOutputResultBinaryFileStream', array($parameters));
    }

    /**
     * Return an output result chunk stream.
     *
     * @param GetOutputResultBinaryFileStreamChunk $parameters
     * @return GetOutputResultBinaryFileStreamChunkResponse
     */
    public function GetOutputResultBinaryFileStreamChunk(GetOutputResultBinaryFileStreamChunk $parameters)
    {
      return $this->__soapCall('GetOutputResultBinaryFileStreamChunk', array($parameters));
    }

    /**
     * Get output result size.
     *
     * @param GetOutputResultBinaryFileStreamSize $parameters
     * @return GetOutputResultBinaryFileStreamSizeResponse
     */
    public function GetOutputResultBinaryFileStreamSize(GetOutputResultBinaryFileStreamSize $parameters)
    {
      return $this->__soapCall('GetOutputResultBinaryFileStreamSize', array($parameters));
    }

    /**
     * return the output result download url.
     *
     * @param GetOutputResultDownloadURL $parameters
     * @return GetOutputResultDownloadURLResponse
     */
    public function GetOutputResultDownloadURL(GetOutputResultDownloadURL $parameters)
    {
      return $this->__soapCall('GetOutputResultDownloadURL', array($parameters));
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
     * Abort Job.
     *
     * @param Abort $parameters
     * @return AbortResponse
     */
    public function Abort(Abort $parameters)
    {
      return $this->__soapCall('Abort', array($parameters));
    }

    /**
     * Re queue Job if not handled yet (still waiting for processing), making it the last in queue (according to priority).
     *
     * @param ReQueue $parameters
     * @return ReQueueResponse
     */
    public function ReQueue(ReQueue $parameters)
    {
      return $this->__soapCall('ReQueue', array($parameters));
    }

    /**
     * Delete Job.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Job's status.
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
    }

    /**
     * Set Job's progress, for internal use only.
     *
     * @param SetProgressStatus $parameters
     * @return SetProgressStatusResponse
     */
    public function SetProgressStatus(SetProgressStatus $parameters)
    {
      return $this->__soapCall('SetProgressStatus', array($parameters));
    }

    /**
     * Get Job ticket.
     *
     * @param GetTicket $parameters
     * @return GetTicketResponse
     */
    public function GetTicket(GetTicket $parameters)
    {
      return $this->__soapCall('GetTicket', array($parameters));
    }

    /**
     * Get Job's Messages.
     *
     * @param GetMessages $parameters
     * @return GetMessagesResponse
     */
    public function GetMessages(GetMessages $parameters)
    {
      return $this->__soapCall('GetMessages', array($parameters));
    }

    /**
     * Get Messages view.
     *
     * @param GetMessagesDataSet $parameters
     * @return GetMessagesDataSetResponse
     */
    public function GetMessagesDataSet(GetMessagesDataSet $parameters)
    {
      return $this->__soapCall('GetMessagesDataSet', array($parameters));
    }

    /**
     * Get Messages view.
     *
     * @param GetMessagesXMPTblDataSet $parameters
     * @return GetMessagesXMPTblDataSetResponse
     */
    public function GetMessagesXMPTblDataSet(GetMessagesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetMessagesXMPTblDataSet', array($parameters));
    }

    /**
     * Get Messages Number by job ID.
     *
     * @param GetMessagesNum $parameters
     * @return GetMessagesNumResponse
     */
    public function GetMessagesNum(GetMessagesNum $parameters)
    {
      return $this->__soapCall('GetMessagesNum', array($parameters));
    }

    /**
     * Get the highest severity of the messages by job ID.
     *
     * @param GetMessagesHighestSeverity $parameters
     * @return GetMessagesHighestSeverityResponse
     */
    public function GetMessagesHighestSeverity(GetMessagesHighestSeverity $parameters)
    {
      return $this->__soapCall('GetMessagesHighestSeverity', array($parameters));
    }

    /**
     * Delete Messages.
     *
     * @param DeleteMessages $parameters
     * @return DeleteMessagesResponse
     */
    public function DeleteMessages(DeleteMessages $parameters)
    {
      return $this->__soapCall('DeleteMessages', array($parameters));
    }

    /**
     * Get campaign shortcut info for job.
     *
     * @param GetCampaignShortcutInfo $parameters
     * @return GetCampaignShortcutInfoResponse
     */
    public function GetCampaignShortcutInfo(GetCampaignShortcutInfo $parameters)
    {
      return $this->__soapCall('GetCampaignShortcutInfo', array($parameters));
    }

    /**
     * Get touch point ID.
     *
     * @param GetTouchPoint $parameters
     * @return GetTouchPointResponse
     */
    public function GetTouchPoint(GetTouchPoint $parameters)
    {
      return $this->__soapCall('GetTouchPoint', array($parameters));
    }

    /**
     * Set touch point ID.
     *
     * @param SetTouchPoint $parameters
     * @return SetTouchPointResponse
     */
    public function SetTouchPoint(SetTouchPoint $parameters)
    {
      return $this->__soapCall('SetTouchPoint', array($parameters));
    }

    /**
     * Is Job exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

}
