<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\EmailMarketing_SSP;


/**
 * Email Marketing Web Service.
 */
class EmailMarketing_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\CreateNewResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\DeleteResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetPropertiesResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetCampaignResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetIDResponse',
  'GetLastJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetLastJob',
  'GetLastJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetLastJobResponse',
  'Send' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Send',
  'SendResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendResponse',
  'SendMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMail',
  'EmailHeaderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\EmailHeaderInfo',
  'ArrayOfEmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfEmailAddress',
  'EmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\EmailAddress',
  'SendMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMailResponse',
  'ArrayOfSendEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfSendEmailResult',
  'SendEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendEmailResult',
  'SendMailByPopulation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMailByPopulation',
  'SendMailByPopulationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMailByPopulationResponse',
  'SendMailByRun' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMailByRun',
  'SendMailByRunResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendMailByRunResponse',
  'GetEmailHeader' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetEmailHeader',
  'GetEmailHeaderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetEmailHeaderResponse',
  'PreviewEmail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmail',
  'PreviewEmailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailResponse',
  'PreviewEmailByPopulation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailByPopulation',
  'PreviewEmailByPopulationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailByPopulationResponse',
  'PreviewEmailByRun' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailByRun',
  'PreviewEmailByRunResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailByRunResponse',
  'PreviewEmailDocumentId' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentId',
  'PreviewEmailDocumentIdResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentIdResponse',
  'PreviewEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailResult',
  'PreviewEmailDocumentIdByPopulation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentIdByPopulation',
  'PreviewEmailDocumentIdByPopulationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentIdByPopulationResponse',
  'PreviewEmailDocumentIdByRun' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentIdByRun',
  'PreviewEmailDocumentIdByRunResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentIdByRunResponse',
  'PreviewEmailDocument' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocument',
  'PreviewEmailDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentResponse',
  'PreviewEmailDocumentByPopulation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentByPopulation',
  'PreviewEmailDocumentByPopulationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentByPopulationResponse',
  'PreviewEmailDocumentByRun' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentByRun',
  'PreviewEmailDocumentByRunResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreviewEmailDocumentByRunResponse',
  'GetPreviewEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetPreviewEmailResult',
  'GetPreviewEmailResultResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetPreviewEmailResultResponse',
  'Suspend' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Suspend',
  'SuspendResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SuspendResponse',
  'Resume' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Resume',
  'ResumeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ResumeResponse',
  'IsTracked' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsTracked',
  'IsTrackedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsTrackedResponse',
  'IsReadyForBatch' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsReadyForBatch',
  'IsReadyForBatchResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsReadyForBatchResponse',
  'IsReadyForOnDemand' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsReadyForOnDemand',
  'IsReadyForOnDemandResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsReadyForOnDemandResponse',
  'GetCorrespondingJobID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetCorrespondingJobID',
  'GetCorrespondingJobIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetCorrespondingJobIDResponse',
  'SendSplitted' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendSplitted',
  'SendSplittedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SendSplittedResponse',
  'Test' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Test',
  'TestResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\TestResponse',
  'Preflight' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Preflight',
  'PreflightResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreflightResponse',
  'PreflightSplitted' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreflightSplitted',
  'PreflightSplittedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\PreflightSplittedResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\IsExistResponse',
  'SetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetSettings',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\Setting',
  'SetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\SetSettingsResponse',
  'GetSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetSettings',
  'GetSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\GetSettingsResponse',
  'DeleteSettings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\DeleteSettings',
  'DeleteSettingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_0_2\\OtherServices\\EmailMarketing_SSP\\DeleteSettingsResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
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
        $wsdl = 'http://localhost/xmpiewsapi/EmailMarketing_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Email Template.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Replace Email Template.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Delete Template.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get property.
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
     * Get properties in a data set.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get properties in a data set.
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
     * Get Email template's Campaign.
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Get Template ID from Ticket Name.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get Last job id.
     *
     * @param GetLastJob $parameters
     * @return GetLastJobResponse
     */
    public function GetLastJob(GetLastJob $parameters)
    {
      return $this->__soapCall('GetLastJob', array($parameters));
    }

    /**
     * Send an email job.
     *
     * @param Send $parameters
     * @return SendResponse
     */
    public function Send(Send $parameters)
    {
      return $this->__soapCall('Send', array($parameters));
    }

    /**
     * Send an email On Demand job.
     *
     * @param SendMail $parameters
     * @return SendMailResponse
     */
    public function SendMail(SendMail $parameters)
    {
      return $this->__soapCall('SendMail', array($parameters));
    }

    /**
     * Send an email On Demand job (using Population).
     *
     * @param SendMailByPopulation $parameters
     * @return SendMailByPopulationResponse
     */
    public function SendMailByPopulation(SendMailByPopulation $parameters)
    {
      return $this->__soapCall('SendMailByPopulation', array($parameters));
    }

    /**
     * Send an email On Demand job (using ADOR Resolver).
     *
     * @param SendMailByRun $parameters
     * @return SendMailByRunResponse
     */
    public function SendMailByRun(SendMailByRun $parameters)
    {
      return $this->__soapCall('SendMailByRun', array($parameters));
    }

    /**
     * get current email header info.
     *
     * @param GetEmailHeader $parameters
     * @return GetEmailHeaderResponse
     */
    public function GetEmailHeader(GetEmailHeader $parameters)
    {
      return $this->__soapCall('GetEmailHeader', array($parameters));
    }

    /**
     * Creates a request of an email activity for a recipient.
     *
     * @param PreviewEmail $parameters
     * @return PreviewEmailResponse
     */
    public function PreviewEmail(PreviewEmail $parameters)
    {
      return $this->__soapCall('PreviewEmail', array($parameters));
    }

    /**
     * Creates a request of an email activity for a recipient (using Population).
     *
     * @param PreviewEmailByPopulation $parameters
     * @return PreviewEmailByPopulationResponse
     */
    public function PreviewEmailByPopulation(PreviewEmailByPopulation $parameters)
    {
      return $this->__soapCall('PreviewEmailByPopulation', array($parameters));
    }

    /**
     * Creates a request of an email activity for a recipient (using ADOR Resolver).
     *
     * @param PreviewEmailByRun $parameters
     * @return PreviewEmailByRunResponse
     */
    public function PreviewEmailByRun(PreviewEmailByRun $parameters)
    {
      return $this->__soapCall('PreviewEmailByRun', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient.
     *
     * @param PreviewEmailDocumentId $parameters
     * @return PreviewEmailDocumentIdResponse
     */
    public function PreviewEmailDocumentId(PreviewEmailDocumentId $parameters)
    {
      return $this->__soapCall('PreviewEmailDocumentId', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient (using Population).
     *
     * @param PreviewEmailDocumentIdByPopulation $parameters
     * @return PreviewEmailDocumentIdByPopulationResponse
     */
    public function PreviewEmailDocumentIdByPopulation(PreviewEmailDocumentIdByPopulation $parameters)
    {
      return $this->__soapCall('PreviewEmailDocumentIdByPopulation', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient (using ADOR Resolver).
     *
     * @param PreviewEmailDocumentIdByRun $parameters
     * @return PreviewEmailDocumentIdByRunResponse
     */
    public function PreviewEmailDocumentIdByRun(PreviewEmailDocumentIdByRun $parameters)
    {
      return $this->__soapCall('PreviewEmailDocumentIdByRun', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient.
     *
     * @param PreviewEmailDocument $parameters
     * @return PreviewEmailDocumentResponse
     */
    public function PreviewEmailDocument(PreviewEmailDocument $parameters)
    {
      return $this->__soapCall('PreviewEmailDocument', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient (using Population).
     *
     * @param PreviewEmailDocumentByPopulation $parameters
     * @return PreviewEmailDocumentByPopulationResponse
     */
    public function PreviewEmailDocumentByPopulation(PreviewEmailDocumentByPopulation $parameters)
    {
      return $this->__soapCall('PreviewEmailDocumentByPopulation', array($parameters));
    }

    /**
     * Creates a request of an email document preview for a recipient (using ADOR Resolver).
     *
     * @param PreviewEmailDocumentByRun $parameters
     * @return PreviewEmailDocumentByRunResponse
     */
    public function PreviewEmailDocumentByRun(PreviewEmailDocumentByRun $parameters)
    {
      return $this->__soapCall('PreviewEmailDocumentByRun', array($parameters));
    }

    /**
     * Returns a result of an email activity preview request.
     *
     * @param GetPreviewEmailResult $parameters
     * @return GetPreviewEmailResultResponse
     */
    public function GetPreviewEmailResult(GetPreviewEmailResult $parameters)
    {
      return $this->__soapCall('GetPreviewEmailResult', array($parameters));
    }

    /**
     * Suspend on demand job.
     *
     * @param Suspend $parameters
     * @return SuspendResponse
     */
    public function Suspend(Suspend $parameters)
    {
      return $this->__soapCall('Suspend', array($parameters));
    }

    /**
     * Resume on demand job.
     *
     * @param Resume $parameters
     * @return ResumeResponse
     */
    public function Resume(Resume $parameters)
    {
      return $this->__soapCall('Resume', array($parameters));
    }

    /**
     * check if on demand job is tracked.
     *
     * @param IsTracked $parameters
     * @return IsTrackedResponse
     */
    public function IsTracked(IsTracked $parameters)
    {
      return $this->__soapCall('IsTracked', array($parameters));
    }

    /**
     * check if Email Activity is ready to send batch email.
     *
     * @param IsReadyForBatch $parameters
     * @return IsReadyForBatchResponse
     */
    public function IsReadyForBatch(IsReadyForBatch $parameters)
    {
      return $this->__soapCall('IsReadyForBatch', array($parameters));
    }

    /**
     * check if Email Activity is ready to send On Demand email.
     *
     * @param IsReadyForOnDemand $parameters
     * @return IsReadyForOnDemandResponse
     */
    public function IsReadyForOnDemand(IsReadyForOnDemand $parameters)
    {
      return $this->__soapCall('IsReadyForOnDemand', array($parameters));
    }

    /**
     * get On Demand email job id.
     *
     * @param GetCorrespondingJobID $parameters
     * @return GetCorrespondingJobIDResponse
     */
    public function GetCorrespondingJobID(GetCorrespondingJobID $parameters)
    {
      return $this->__soapCall('GetCorrespondingJobID', array($parameters));
    }

    /**
     * Send an email splitted job.
     *
     * @param SendSplitted $parameters
     * @return SendSplittedResponse
     */
    public function SendSplitted(SendSplitted $parameters)
    {
      return $this->__soapCall('SendSplitted', array($parameters));
    }

    /**
     * Test an email.
     *
     * @param Test $parameters
     * @return TestResponse
     */
    public function Test(Test $parameters)
    {
      return $this->__soapCall('Test', array($parameters));
    }

    /**
     * Preflight an email job.
     *
     * @param Preflight $parameters
     * @return PreflightResponse
     */
    public function Preflight(Preflight $parameters)
    {
      return $this->__soapCall('Preflight', array($parameters));
    }

    /**
     * Preflight an email splitted job.
     *
     * @param PreflightSplitted $parameters
     * @return PreflightSplittedResponse
     */
    public function PreflightSplitted(PreflightSplitted $parameters)
    {
      return $this->__soapCall('PreflightSplitted', array($parameters));
    }

    /**
     * Is Email exist.
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
     * Returns Setting(s) for the Email Template and the user.
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

}
