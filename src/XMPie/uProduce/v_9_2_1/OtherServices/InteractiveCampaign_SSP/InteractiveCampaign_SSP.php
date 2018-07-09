<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;


/**
 * InteractiveCampaign Web Service.
 */
class InteractiveCampaign_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\CreateNew',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\CreateNewResponse',
  'CreateNewWithProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\CreateNewWithProperties',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Property',
  'CreateNewWithPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\CreateNewWithPropertiesResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\DeleteResponse',
  'Suspend' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Suspend',
  'SuspendResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SuspendResponse',
  'Resume' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Resume',
  'ResumeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ResumeResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsExistResponse',
  'IsExistByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsExistByID',
  'IsExistByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsExistByIDResponse',
  'Get' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Get',
  'GetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetResponse',
  'GetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPRowField',
  'GetADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORs',
  'GetADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsResponse',
  'ArrayOfPlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfPlanObject',
  'PlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\PlanObject',
  'GetADORsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsDataSet',
  'GetADORsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsDataSetResponse',
  'GetADORsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsDataSetResult',
  'GetADOR' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADOR',
  'GetADORResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORResponse',
  'GetADORDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORDataSet',
  'GetADORDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORDataSetResponse',
  'GetADORDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORDataSetResult',
  'GetTabularADORColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumn',
  'GetTabularADORColumnResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnResponse',
  'PlanTabularColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\PlanTabularColumn',
  'GetTabularADORColumnDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnDataSet',
  'GetTabularADORColumnDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnDataSetResponse',
  'GetTabularADORColumnDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnDataSetResult',
  'GetTabularADORColumns' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumns',
  'GetTabularADORColumnsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnsResponse',
  'ArrayOfPlanTabularColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfPlanTabularColumn',
  'GetTabularADORColumnsDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnsDataSet',
  'GetTabularADORColumnsDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnsDataSetResponse',
  'GetTabularADORColumnsDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetTabularADORColumnsDataSetResult',
  'GetADORsValuesForRecipientsXMPDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRecipientsXMPDataSet',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfString',
  'GetADORsValuesForRecipientsXMPDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRecipientsXMPDataSetResponse',
  'GetADORsValuesForRecipients' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRecipients',
  'GetADORsValuesForRecipientsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRecipientsResponse',
  'GetADORsValuesForRecipientsResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRecipientsResult',
  'GetRecipientsCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetRecipientsCount',
  'GetRecipientsCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetRecipientsCountResponse',
  'GetADORsValuesForRangeXMPDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRangeXMPDataSet',
  'GetADORsValuesForRangeXMPDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRangeXMPDataSetResponse',
  'GetADORsValuesForRange' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRange',
  'GetADORsValuesForRangeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRangeResponse',
  'GetADORsValuesForRangeResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetADORsValuesForRangeResult',
  'UpdateADORsValuesForRecipient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\UpdateADORsValuesForRecipient',
  'UpdateADORsValuesForRecipientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\UpdateADORsValuesForRecipientResponse',
  'InsertADORsValuesForRecipient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\InsertADORsValuesForRecipient',
  'InsertADORsValuesForRecipientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\InsertADORsValuesForRecipientResponse',
  'DeleteRecipient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\DeleteRecipient',
  'DeleteRecipientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\DeleteRecipientResponse',
  'AddTrackEvent' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\AddTrackEvent',
  'XMPDateTime' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\XMPDateTime',
  'AddTrackEventResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\AddTrackEventResponse',
  'SendMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SendMail',
  'EmailHeaderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\EmailHeaderInfo',
  'ArrayOfEmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfEmailAddress',
  'EmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\EmailAddress',
  'ArrayOfEmailBodyOptions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfEmailBodyOptions',
  'EmailBodyOptions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\EmailBodyOptions',
  'SendMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SendMailResponse',
  'ArrayOfSendEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfSendEmailResult',
  'SendEmailResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SendEmailResult',
  'GetCorespondingJobIDAsString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetCorespondingJobIDAsString',
  'GetCorespondingJobIDAsStringResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetCorespondingJobIDAsStringResponse',
  'GetCorespondingJobID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetCorespondingJobID',
  'GetCorespondingJobIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetCorespondingJobIDResponse',
  'GetDataSetByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetDataSetByID',
  'GetDataSetByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetDataSetByIDResponse',
  'GetDataSetByIDResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetDataSetByIDResult',
  'GetXMPTblDataSetByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetXMPTblDataSetByID',
  'GetXMPTblDataSetByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetXMPTblDataSetByIDResponse',
  'SetSettingsByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SetSettingsByID',
  'ArrayOfSetting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\ArrayOfSetting',
  'Setting' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\Setting',
  'SetSettingsByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SetSettingsByIDResponse',
  'GetSettingsByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetSettingsByID',
  'GetSettingsByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetSettingsByIDResponse',
  'DeleteSettingsByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\DeleteSettingsByID',
  'DeleteSettingsByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\DeleteSettingsByIDResponse',
  'GetStatusByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetStatusByID',
  'GetStatusByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetStatusByIDResponse',
  'StatusInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\StatusInfo',
  'IsTracked' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsTracked',
  'IsTrackedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsTrackedResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetIDResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetNameResponse',
  'IsAdaptedToWeb' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsAdaptedToWeb',
  'IsAdaptedToWebResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\IsAdaptedToWebResponse',
  'SetPropertyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SetPropertyByID',
  'SetPropertyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\SetPropertyByIDResponse',
  'GetPropertyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetPropertyByID',
  'GetPropertyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_2_1\\OtherServices\\InteractiveCampaign_SSP\\GetPropertyByIDResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/InteractiveCampaign_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates a new Interactive Campaign.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Creates a new Interactive Campaign.
     *
     * @param CreateNewWithProperties $parameters
     * @return CreateNewWithPropertiesResponse
     */
    public function CreateNewWithProperties(CreateNewWithProperties $parameters)
    {
      return $this->__soapCall('CreateNewWithProperties', array($parameters));
    }

    /**
     * Replaces an existed Interactive Campaign.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Deletes an Interactive Campaign.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Suspend interactive campaign.
     *
     * @param Suspend $parameters
     * @return SuspendResponse
     */
    public function Suspend(Suspend $parameters)
    {
      return $this->__soapCall('Suspend', array($parameters));
    }

    /**
     * Resume interactive campaign.
     *
     * @param Resume $parameters
     * @return ResumeResponse
     */
    public function Resume(Resume $parameters)
    {
      return $this->__soapCall('Resume', array($parameters));
    }

    /**
     * return true if an interactive campaign with this name exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Returns true if port exists.
     *
     * @param IsExistByID $parameters
     * @return IsExistByIDResponse
     */
    public function IsExistByID(IsExistByID $parameters)
    {
      return $this->__soapCall('IsExistByID', array($parameters));
    }

    /**
     * Get All the interactive campaigns names.
     *
     * @param Get $parameters
     * @return GetResponse
     */
    public function Get(Get $parameters)
    {
      return $this->__soapCall('Get', array($parameters));
    }

    /**
     * Get All the interactive campaigns names.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

    /**
     * Get ADORs information.
     *
     * @param GetADORs $parameters
     * @return GetADORsResponse
     */
    public function GetADORs(GetADORs $parameters)
    {
      return $this->__soapCall('GetADORs', array($parameters));
    }

    /**
     * Get ADORs information as dataset.
     *
     * @param GetADORsDataSet $parameters
     * @return GetADORsDataSetResponse
     */
    public function GetADORsDataSet(GetADORsDataSet $parameters)
    {
      return $this->__soapCall('GetADORsDataSet', array($parameters));
    }

    /**
     * Get ADOR information by name.
     *
     * @param GetADOR $parameters
     * @return GetADORResponse
     */
    public function GetADOR(GetADOR $parameters)
    {
      return $this->__soapCall('GetADOR', array($parameters));
    }

    /**
     * Get ADOR information by name as dataset.
     *
     * @param GetADORDataSet $parameters
     * @return GetADORDataSetResponse
     */
    public function GetADORDataSet(GetADORDataSet $parameters)
    {
      return $this->__soapCall('GetADORDataSet', array($parameters));
    }

    /**
     * Get Tabular ADOR column.
     *
     * @param GetTabularADORColumn $parameters
     * @return GetTabularADORColumnResponse
     */
    public function GetTabularADORColumn(GetTabularADORColumn $parameters)
    {
      return $this->__soapCall('GetTabularADORColumn', array($parameters));
    }

    /**
     * Get Tabular ADOR column as dataset.
     *
     * @param GetTabularADORColumnDataSet $parameters
     * @return GetTabularADORColumnDataSetResponse
     */
    public function GetTabularADORColumnDataSet(GetTabularADORColumnDataSet $parameters)
    {
      return $this->__soapCall('GetTabularADORColumnDataSet', array($parameters));
    }

    /**
     * Get Tabular ADOR columns.
     *
     * @param GetTabularADORColumns $parameters
     * @return GetTabularADORColumnsResponse
     */
    public function GetTabularADORColumns(GetTabularADORColumns $parameters)
    {
      return $this->__soapCall('GetTabularADORColumns', array($parameters));
    }

    /**
     * Get Tabular ADOR columns.
     *
     * @param GetTabularADORColumnsDataSet $parameters
     * @return GetTabularADORColumnsDataSetResponse
     */
    public function GetTabularADORColumnsDataSet(GetTabularADORColumnsDataSet $parameters)
    {
      return $this->__soapCall('GetTabularADORColumnsDataSet', array($parameters));
    }

    /**
     * Get ADORs values for recipients as XMPTblDataSet.
     *
     * @param GetADORsValuesForRecipientsXMPDataSet $parameters
     * @return GetADORsValuesForRecipientsXMPDataSetResponse
     */
    public function GetADORsValuesForRecipientsXMPDataSet(GetADORsValuesForRecipientsXMPDataSet $parameters)
    {
      return $this->__soapCall('GetADORsValuesForRecipientsXMPDataSet', array($parameters));
    }

    /**
     * Get ADORs values for recipients.
     *
     * @param GetADORsValuesForRecipients $parameters
     * @return GetADORsValuesForRecipientsResponse
     */
    public function GetADORsValuesForRecipients(GetADORsValuesForRecipients $parameters)
    {
      return $this->__soapCall('GetADORsValuesForRecipients', array($parameters));
    }

    /**
     * Get the number of recipients
     *
     * @param GetRecipientsCount $parameters
     * @return GetRecipientsCountResponse
     */
    public function GetRecipientsCount(GetRecipientsCount $parameters)
    {
      return $this->__soapCall('GetRecipientsCount', array($parameters));
    }

    /**
     * Get ADORs information as XMPTblDataSet.
     *
     * @param GetADORsValuesForRangeXMPDataSet $parameters
     * @return GetADORsValuesForRangeXMPDataSetResponse
     */
    public function GetADORsValuesForRangeXMPDataSet(GetADORsValuesForRangeXMPDataSet $parameters)
    {
      return $this->__soapCall('GetADORsValuesForRangeXMPDataSet', array($parameters));
    }

    /**
     * Get ADORs information.
     *
     * @param GetADORsValuesForRange $parameters
     * @return GetADORsValuesForRangeResponse
     */
    public function GetADORsValuesForRange(GetADORsValuesForRange $parameters)
    {
      return $this->__soapCall('GetADORsValuesForRange', array($parameters));
    }

    /**
     * Update ADORs values for recipient.
     *
     * @param UpdateADORsValuesForRecipient $parameters
     * @return UpdateADORsValuesForRecipientResponse
     */
    public function UpdateADORsValuesForRecipient(UpdateADORsValuesForRecipient $parameters)
    {
      return $this->__soapCall('UpdateADORsValuesForRecipient', array($parameters));
    }

    /**
     * Update ADORs values for recipient.
     *
     * @param InsertADORsValuesForRecipient $parameters
     * @return InsertADORsValuesForRecipientResponse
     */
    public function InsertADORsValuesForRecipient(InsertADORsValuesForRecipient $parameters)
    {
      return $this->__soapCall('InsertADORsValuesForRecipient', array($parameters));
    }

    /**
     * Delete a recipient.
     *
     * @param DeleteRecipient $parameters
     * @return DeleteRecipientResponse
     */
    public function DeleteRecipient(DeleteRecipient $parameters)
    {
      return $this->__soapCall('DeleteRecipient', array($parameters));
    }

    /**
     * Track an event
     *
     * @param AddTrackEvent $parameters
     * @return AddTrackEventResponse
     */
    public function AddTrackEvent(AddTrackEvent $parameters)
    {
      return $this->__soapCall('AddTrackEvent', array($parameters));
    }

    /**
     * Sens Email using port information
     *
     * @param SendMail $parameters
     * @return SendMailResponse
     */
    public function SendMail(SendMail $parameters)
    {
      return $this->__soapCall('SendMail', array($parameters));
    }

    /**
     * Get job ID of ICP As String
     *
     * @param GetCorespondingJobIDAsString $parameters
     * @return GetCorespondingJobIDAsStringResponse
     */
    public function GetCorespondingJobIDAsString(GetCorespondingJobIDAsString $parameters)
    {
      return $this->__soapCall('GetCorespondingJobIDAsString', array($parameters));
    }

    /**
     * Get job ID of ICP
     *
     * @param GetCorespondingJobID $parameters
     * @return GetCorespondingJobIDResponse
     */
    public function GetCorespondingJobID(GetCorespondingJobID $parameters)
    {
      return $this->__soapCall('GetCorespondingJobID', array($parameters));
    }

    /**
     * Get properties view by port ID.
     *
     * @param GetDataSetByID $parameters
     * @return GetDataSetByIDResponse
     */
    public function GetDataSetByID(GetDataSetByID $parameters)
    {
      return $this->__soapCall('GetDataSetByID', array($parameters));
    }

    /**
     * Get properties view by port ID.
     *
     * @param GetXMPTblDataSetByID $parameters
     * @return GetXMPTblDataSetByIDResponse
     */
    public function GetXMPTblDataSetByID(GetXMPTblDataSetByID $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSetByID', array($parameters));
    }

    /**
     * Defines Setting(s).
     *
     * @param SetSettingsByID $parameters
     * @return SetSettingsByIDResponse
     */
    public function SetSettingsByID(SetSettingsByID $parameters)
    {
      return $this->__soapCall('SetSettingsByID', array($parameters));
    }

    /**
     * Returns Setting(s) for the Interactive Campaign and the user.
     *
     * @param GetSettingsByID $parameters
     * @return GetSettingsByIDResponse
     */
    public function GetSettingsByID(GetSettingsByID $parameters)
    {
      return $this->__soapCall('GetSettingsByID', array($parameters));
    }

    /**
     * Deletes Setting(s).
     *
     * @param DeleteSettingsByID $parameters
     * @return DeleteSettingsByIDResponse
     */
    public function DeleteSettingsByID(DeleteSettingsByID $parameters)
    {
      return $this->__soapCall('DeleteSettingsByID', array($parameters));
    }

    /**
     * Gets the Interactive Campaign status.
     *
     * @param GetStatusByID $parameters
     * @return GetStatusByIDResponse
     */
    public function GetStatusByID(GetStatusByID $parameters)
    {
      return $this->__soapCall('GetStatusByID', array($parameters));
    }

    /**
     * Returns true if tracking is enabled for the port..
     *
     * @param IsTracked $parameters
     * @return IsTrackedResponse
     */
    public function IsTracked(IsTracked $parameters)
    {
      return $this->__soapCall('IsTracked', array($parameters));
    }

    /**
     * Get port ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Get port Name.
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Returns true if underlying data source is adapted to web
     *
     * @param IsAdaptedToWeb $parameters
     * @return IsAdaptedToWebResponse
     */
    public function IsAdaptedToWeb(IsAdaptedToWeb $parameters)
    {
      return $this->__soapCall('IsAdaptedToWeb', array($parameters));
    }

    /**
     * Set property. This method is for internal use only!
     *
     * @param SetPropertyByID $parameters
     * @return SetPropertyByIDResponse
     */
    public function SetPropertyByID(SetPropertyByID $parameters)
    {
      return $this->__soapCall('SetPropertyByID', array($parameters));
    }

    /**
     * Get property by name. This method is for internal use only!
     *
     * @param GetPropertyByID $parameters
     * @return GetPropertyByIDResponse
     */
    public function GetPropertyByID(GetPropertyByID $parameters)
    {
      return $this->__soapCall('GetPropertyByID', array($parameters));
    }

}
