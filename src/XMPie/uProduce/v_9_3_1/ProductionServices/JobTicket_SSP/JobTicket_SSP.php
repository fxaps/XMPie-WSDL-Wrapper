<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;


/**
 * JobTicket Web Service.
 */
class JobTicket_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetFFPMExecutablePath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMExecutablePath',
  'GetFFPMExecutablePathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMExecutablePathResponse',
  'GetFFPMQueueSpecs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMQueueSpecs',
  'GetFFPMQueueSpecsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMQueueSpecsResponse',
  'AddRemoteCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRemoteCopy',
  'AddRemoteCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRemoteCopyResponse',
  'AddRemoteCopyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRemoteCopyByID',
  'AddRemoteCopyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRemoteCopyByIDResponse',
  'RemoveRemoteCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveRemoteCopy',
  'RemoveRemoteCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveRemoteCopyResponse',
  'IsRemoteCopyExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsRemoteCopyExist',
  'IsRemoteCopyExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsRemoteCopyExistResponse',
  'GetRemoteCopyID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRemoteCopyID',
  'GetRemoteCopyIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRemoteCopyIDResponse',
  'GetRemoteCopyDestination' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRemoteCopyDestination',
  'GetRemoteCopyDestinationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRemoteCopyDestinationResponse',
  'IsRemoteCopyDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsRemoteCopyDeleteSource',
  'IsRemoteCopyDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsRemoteCopyDeleteSourceResponse',
  'AddSecondaryRemoteCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddSecondaryRemoteCopy',
  'AddSecondaryRemoteCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddSecondaryRemoteCopyResponse',
  'AddSecondaryRemoteCopyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddSecondaryRemoteCopyByID',
  'AddSecondaryRemoteCopyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddSecondaryRemoteCopyByIDResponse',
  'RemoveSecondaryRemoteCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveSecondaryRemoteCopy',
  'RemoveSecondaryRemoteCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveSecondaryRemoteCopyResponse',
  'IsSecondaryRemoteCopyExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSecondaryRemoteCopyExist',
  'IsSecondaryRemoteCopyExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSecondaryRemoteCopyExistResponse',
  'GetSecondaryRemoteCopyID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSecondaryRemoteCopyID',
  'GetSecondaryRemoteCopyIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSecondaryRemoteCopyIDResponse',
  'GetSecondaryRemoteCopyDestination' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSecondaryRemoteCopyDestination',
  'GetSecondaryRemoteCopyDestinationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSecondaryRemoteCopyDestinationResponse',
  'IsSecondaryRemoteCopyDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSecondaryRemoteCopyDeleteSource',
  'IsSecondaryRemoteCopyDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSecondaryRemoteCopyDeleteSourceResponse',
  'AddJDFCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDFCopy',
  'AddJDFCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDFCopyResponse',
  'AddJDFCopyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDFCopyByID',
  'AddJDFCopyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDFCopyByIDResponse',
  'RemoveJDFCopy' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFCopy',
  'RemoveJDFCopyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFCopyResponse',
  'IsJDFCopyExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFCopyExist',
  'IsJDFCopyExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFCopyExistResponse',
  'GetJDFCopyID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFCopyID',
  'GetJDFCopyIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFCopyIDResponse',
  'GetJDFCopyDestination' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFCopyDestination',
  'GetJDFCopyDestinationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFCopyDestinationResponse',
  'IsJDFCopyDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFCopyDeleteSource',
  'IsJDFCopyDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFCopyDeleteSourceResponse',
  'SetDistillJobOptionName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDistillJobOptionName',
  'SetDistillJobOptionNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDistillJobOptionNameResponse',
  'IsJobTracked' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJobTracked',
  'IsJobTrackedResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJobTrackedResponse',
  'SetTouchPointID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTouchPointID',
  'SetTouchPointIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTouchPointIDResponse',
  'GetTouchPointID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTouchPointID',
  'GetTouchPointIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTouchPointIDResponse',
  'AddTracking' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddTracking',
  'ArrayOfParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfParameter',
  'Parameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\Parameter',
  'AddTrackingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddTrackingResponse',
  'RemoveTracking' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTracking',
  'RemoveTrackingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTrackingResponse',
  'SetTrackingParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTrackingParameter',
  'SetTrackingParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTrackingParameterResponse',
  'SetTrackingParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTrackingParameters',
  'SetTrackingParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTrackingParametersResponse',
  'GetTrackingParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingParameter',
  'GetTrackingParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingParameterResponse',
  'GetTrackingParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingParameters',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfString',
  'GetTrackingParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingParametersResponse',
  'RemoveTrackingParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTrackingParameter',
  'RemoveTrackingParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTrackingParameterResponse',
  'RemoveTrackingParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTrackingParameters',
  'RemoveTrackingParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveTrackingParametersResponse',
  'RemoveAllTrackingParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllTrackingParameters',
  'RemoveAllTrackingParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllTrackingParametersResponse',
  'IsTrackingADOR' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsTrackingADOR',
  'IsTrackingADORResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsTrackingADORResponse',
  'GetTrackingADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingADORs',
  'GetTrackingADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTrackingADORsResponse',
  'SetCircleTouchpointGuid' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCircleTouchpointGuid',
  'SetCircleTouchpointGuidResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCircleTouchpointGuidResponse',
  'GetCircleTouchpointGuid' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCircleTouchpointGuid',
  'GetCircleTouchpointGuidResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCircleTouchpointGuidResponse',
  'SetCircleRunGuid' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCircleRunGuid',
  'SetCircleRunGuidResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCircleRunGuidResponse',
  'GetCircleRunGuid' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCircleRunGuid',
  'GetCircleRunGuidResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCircleRunGuidResponse',
  'SetDeliveryProvider' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDeliveryProvider',
  'EmailProviderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailProviderInfo',
  'ArrayOfEmailProviderParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfEmailProviderParameter',
  'EmailProviderParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailProviderParameter',
  'SetDeliveryProviderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDeliveryProviderResponse',
  'SetDeliveryProviderByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDeliveryProviderByID',
  'SetDeliveryProviderByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDeliveryProviderByIDResponse',
  'GetDeliveryProvider' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDeliveryProvider',
  'GetDeliveryProviderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDeliveryProviderResponse',
  'GetDeliveryProviderID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDeliveryProviderID',
  'GetDeliveryProviderIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDeliveryProviderIDResponse',
  'SetEmailHeader' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailHeader',
  'EmailHeaderInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailHeaderInfo',
  'ArrayOfEmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfEmailAddress',
  'EmailAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailAddress',
  'SetEmailHeaderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailHeaderResponse',
  'GetEmailHeader' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailHeader',
  'GetEmailHeaderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailHeaderResponse',
  'SetEmailBody' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBody',
  'EmailBodyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailBodyInfo',
  'EmailBodyOptions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\EmailBodyOptions',
  'URLInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\URLInfo',
  'SetEmailBodyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodyResponse',
  'SetEmailBodies' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodies',
  'ArrayOfEmailBodyInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfEmailBodyInfo',
  'SetEmailBodiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodiesResponse',
  'AddEmailBody' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddEmailBody',
  'AddEmailBodyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddEmailBodyResponse',
  'SetEmailBodyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodyByID',
  'SetEmailBodyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodyByIDResponse',
  'SetEmailBodiesByIDs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodiesByIDs',
  'ArrayOfEmailBodyOptions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfEmailBodyOptions',
  'SetEmailBodiesByIDsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailBodiesByIDsResponse',
  'AddEmailBodyByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddEmailBodyByID',
  'AddEmailBodyByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddEmailBodyByIDResponse',
  'RemoveAllEmailBodies' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllEmailBodies',
  'RemoveAllEmailBodiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllEmailBodiesResponse',
  'GetEmailBodies' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodies',
  'GetEmailBodiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodiesResponse',
  'GetEmailBodiesIDs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodiesIDs',
  'GetEmailBodiesIDsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodiesIDsResponse',
  'GetEmailBodyCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodyCount',
  'GetEmailBodyCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailBodyCountResponse',
  'GetNthEmailBody' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthEmailBody',
  'GetNthEmailBodyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthEmailBodyResponse',
  'GetNthEmailBodyID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthEmailBodyID',
  'GetNthEmailBodyIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthEmailBodyIDResponse',
  'SetMetaData' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetMetaData',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\Property',
  'SetMetaDataResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetMetaDataResponse',
  'GetMetaData' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetMetaData',
  'GetMetaDataResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetMetaDataResponse',
  'GetAllMetaData' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAllMetaData',
  'GetAllMetaDataResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAllMetaDataResponse',
  'GetMetaDataSubGroups' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetMetaDataSubGroups',
  'GetMetaDataSubGroupsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetMetaDataSubGroupsResponse',
  'RemoveMetaData' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveMetaData',
  'RemoveMetaDataResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveMetaDataResponse',
  'RemoveMetaDataGroup' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveMetaDataGroup',
  'RemoveMetaDataGroupResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveMetaDataGroupResponse',
  'IsMappingExists' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsMappingExists',
  'IsMappingExistsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsMappingExistsResponse',
  'GetFieldMappings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFieldMappings',
  'GetFieldMappingsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFieldMappingsResponse',
  'FieldMappings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\FieldMappings',
  'ArrayOfFieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfFieldMappingInfo',
  'FieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\FieldMappingInfo',
  'SetFieldMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFieldMapping',
  'SetFieldMappingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFieldMappingResponse',
  'SetFieldMappingByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFieldMappingByID',
  'SetFieldMappingByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFieldMappingByIDResponse',
  'RemoveFieldMapping' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFieldMapping',
  'RemoveFieldMappingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFieldMappingResponse',
  'GetNthRIInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIInfo',
  'GetNthRIInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIInfoResponse',
  'RecipientsInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RecipientsInfo',
  'GetNthRIDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIDataSourceID',
  'GetNthRIDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIDataSourceIDResponse',
  'GetNthRIDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIDataSource',
  'GetNthRIDataSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIDataSourceResponse',
  'Connection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\Connection',
  'AddRI' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRI',
  'AddRIResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRIResponse',
  'AddRIByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRIByID',
  'AddRIByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddRIByIDResponse',
  'AddDefaultRI' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddDefaultRI',
  'AddDefaultRIResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddDefaultRIResponse',
  'SetRIOnDemandInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIOnDemandInfo',
  'SetRIOnDemandInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIOnDemandInfoResponse',
  'GetRIOnDemandRecipientID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIOnDemandRecipientID',
  'GetRIOnDemandRecipientIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIOnDemandRecipientIDResponse',
  'GetRIOnDemandRecipientInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIOnDemandRecipientInfo',
  'GetRIOnDemandRecipientInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIOnDemandRecipientInfoResponse',
  'SetJobType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobType',
  'SetJobTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobTypeResponse',
  'GetJobType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobType',
  'GetJobTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobTypeResponse',
  'GetJobPriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobPriority',
  'GetJobPriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobPriorityResponse',
  'SetJobPriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobPriority',
  'SetJobPriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobPriorityResponse',
  'SetJobTrackingWebService' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobTrackingWebService',
  'SetJobTrackingWebServiceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobTrackingWebServiceResponse',
  'GetJobTrackingWebService' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobTrackingWebService',
  'GetJobTrackingWebServiceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobTrackingWebServiceResponse',
  'SetJobReportingWebService' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobReportingWebService',
  'SetJobReportingWebServiceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobReportingWebServiceResponse',
  'GetJobReportingWebService' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobReportingWebService',
  'GetJobReportingWebServiceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobReportingWebServiceResponse',
  'SetSplittedJobInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSplittedJobInfo',
  'SetSplittedJobInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSplittedJobInfoResponse',
  'IsSplittedJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSplittedJob',
  'IsSplittedJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSplittedJobResponse',
  'IsParallelProcessingJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsParallelProcessingJob',
  'IsParallelProcessingJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsParallelProcessingJobResponse',
  'SetAutomaticSubSplitAndMerge' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAutomaticSubSplitAndMerge',
  'SetAutomaticSubSplitAndMergeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAutomaticSubSplitAndMergeResponse',
  'IsAutomaticSubSplitEnabled' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsAutomaticSubSplitEnabled',
  'IsAutomaticSubSplitEnabledResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsAutomaticSubSplitEnabledResponse',
  'IsAutomaticMergeEnabled' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsAutomaticMergeEnabled',
  'IsAutomaticMergeEnabledResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsAutomaticMergeEnabledResponse',
  'IsSubJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSubJob',
  'IsSubJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsSubJobResponse',
  'GetSubJobInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobInfo',
  'GetSubJobInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobInfoResponse',
  'SubJobInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SubJobInfo',
  'GetSubJobIndex' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobIndex',
  'GetSubJobIndexResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobIndexResponse',
  'GetSubJobOrigFrom' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobOrigFrom',
  'GetSubJobOrigFromResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobOrigFromResponse',
  'GetSubJobOrigTo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobOrigTo',
  'GetSubJobOrigToResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobOrigToResponse',
  'GetSubJobSplitCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobSplitCount',
  'GetSubJobSplitCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobSplitCountResponse',
  'GetSubJobSplitType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobSplitType',
  'GetSubJobSplitTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubJobSplitTypeResponse',
  'SetJobParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobParameter',
  'SetJobParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobParameterResponse',
  'SetJobParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobParameters',
  'SetJobParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJobParametersResponse',
  'GetJobParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobParameter',
  'GetJobParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobParameterResponse',
  'GetJobParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobParameters',
  'GetJobParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJobParametersResponse',
  'RemoveJobParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJobParameter',
  'RemoveJobParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJobParameterResponse',
  'RemoveJobParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJobParameters',
  'RemoveJobParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJobParametersResponse',
  'RemoveAllJobParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllJobParameters',
  'RemoveAllJobParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllJobParametersResponse',
  'SetEmailInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailInfo',
  'SetEmailInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailInfoResponse',
  'SetEmailAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailAdorName',
  'SetEmailAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmailAdorNameResponse',
  'SetSenderAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSenderAdorName',
  'SetSenderAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSenderAdorNameResponse',
  'SetSubjectAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSubjectAdorName',
  'SetSubjectAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetSubjectAdorNameResponse',
  'SetEmbedEmailBody' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmbedEmailBody',
  'SetEmbedEmailBodyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEmbedEmailBodyResponse',
  'SetProcessEmailOutputType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetProcessEmailOutputType',
  'SetProcessEmailOutputTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetProcessEmailOutputTypeResponse',
  'SetOnDemandBaseURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOnDemandBaseURL',
  'SetOnDemandBaseURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOnDemandBaseURLResponse',
  'GetEmailAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailAdorName',
  'GetEmailAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmailAdorNameResponse',
  'GetSenderAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSenderAdorName',
  'GetSenderAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSenderAdorNameResponse',
  'GetSubjectAdorName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubjectAdorName',
  'GetSubjectAdorNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSubjectAdorNameResponse',
  'GetEmbedEmailBody' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmbedEmailBody',
  'GetEmbedEmailBodyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEmbedEmailBodyResponse',
  'GetProcessEmailOutputType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetProcessEmailOutputType',
  'GetProcessEmailOutputTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetProcessEmailOutputTypeResponse',
  'GetOnDemandBaseURL' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOnDemandBaseURL',
  'GetOnDemandBaseURLResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOnDemandBaseURLResponse',
  'GetOutputFileNameOption' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFileNameOption',
  'GetOutputFileNameOptionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFileNameOptionResponse',
  'SetOutputInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputInfo',
  'SetOutputInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputInfoResponse',
  'SetOutputParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputParameter',
  'SetOutputParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputParameterResponse',
  'SetOutputParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputParameters',
  'SetOutputParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputParametersResponse',
  'GetOutputParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputParameter',
  'GetOutputParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputParameterResponse',
  'GetOutputParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputParameters',
  'GetOutputParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputParametersResponse',
  'RemoveOutputParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveOutputParameter',
  'RemoveOutputParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveOutputParameterResponse',
  'RemoveOutputParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveOutputParameters',
  'RemoveOutputParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveOutputParametersResponse',
  'RemoveAllOutputParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllOutputParameters',
  'RemoveAllOutputParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllOutputParametersResponse',
  'SetAppendJobID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAppendJobID',
  'SetAppendJobIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAppendJobIDResponse',
  'SetEnvJobName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEnvJobName',
  'SetEnvJobNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetEnvJobNameResponse',
  'SetOutputMedia' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputMedia',
  'SetOutputMediaResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputMediaResponse',
  'SetOutputType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputType',
  'SetOutputTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputTypeResponse',
  'SetOutputFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputFolder',
  'SetOutputFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputFolderResponse',
  'SetOutputFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputFileName',
  'SetOutputFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetOutputFileNameResponse',
  'GetAppendJobID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAppendJobID',
  'GetAppendJobIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAppendJobIDResponse',
  'GetDefaultCacheEnv' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDefaultCacheEnv',
  'GetDefaultCacheEnvResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDefaultCacheEnvResponse',
  'GetEnvJobName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEnvJobName',
  'GetEnvJobNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetEnvJobNameResponse',
  'GetOutputMedia' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputMedia',
  'GetOutputMediaResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputMediaResponse',
  'GetOutputType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputType',
  'GetOutputTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputTypeResponse',
  'GetOutputFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFolder',
  'GetOutputFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFolderResponse',
  'GetOutputFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFileName',
  'GetOutputFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetOutputFileNameResponse',
  'AddImposition' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddImposition',
  'AddImpositionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddImpositionResponse',
  'RemoveImposition' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImposition',
  'RemoveImpositionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImpositionResponse',
  'IsImpositionExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsImpositionExist',
  'IsImpositionExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsImpositionExistResponse',
  'SetImpositionParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetImpositionParameter',
  'SetImpositionParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetImpositionParameterResponse',
  'SetImpositionParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetImpositionParameters',
  'SetImpositionParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetImpositionParametersResponse',
  'GetImpositionParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetImpositionParameter',
  'GetImpositionParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetImpositionParameterResponse',
  'GetImpositionParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetImpositionParameters',
  'GetImpositionParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetImpositionParametersResponse',
  'RemoveImpositionParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImpositionParameter',
  'RemoveImpositionParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImpositionParameterResponse',
  'RemoveImpositionParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImpositionParameters',
  'RemoveImpositionParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveImpositionParametersResponse',
  'RemoveAllImpositionParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllImpositionParameters',
  'RemoveAllImpositionParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllImpositionParametersResponse',
  'AddJDF' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDF',
  'AddJDFResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddJDFResponse',
  'RemoveJDF' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDF',
  'RemoveJDFResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFResponse',
  'IsJDFExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFExist',
  'IsJDFExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsJDFExistResponse',
  'SetJDFParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJDFParameter',
  'SetJDFParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJDFParameterResponse',
  'SetJDFParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJDFParameters',
  'SetJDFParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetJDFParametersResponse',
  'GetJDFParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFParameter',
  'GetJDFParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFParameterResponse',
  'GetJDFParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFParameters',
  'GetJDFParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetJDFParametersResponse',
  'RemoveJDFParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFParameter',
  'RemoveJDFParameterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFParameterResponse',
  'RemoveJDFParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFParameters',
  'RemoveJDFParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveJDFParametersResponse',
  'RemoveAllJDFParameters' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllJDFParameters',
  'RemoveAllJDFParametersResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllJDFParametersResponse',
  'AddCompression' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddCompression',
  'AddCompressionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddCompressionResponse',
  'RemoveCompression' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveCompression',
  'RemoveCompressionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveCompressionResponse',
  'IsCompressionExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsCompressionExist',
  'IsCompressionExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsCompressionExistResponse',
  'IsVPCCompression' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsVPCCompression',
  'IsVPCCompressionResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsVPCCompressionResponse',
  'AddDestinationByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddDestinationByID',
  'AddDestinationByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddDestinationByIDResponse',
  'AddFTP' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFTP',
  'AddFTPResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFTPResponse',
  'AddFTPByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFTPByID',
  'AddFTPByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFTPByIDResponse',
  'RemoveFTP' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFTP',
  'RemoveFTPResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFTPResponse',
  'IsFTPExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFTPExist',
  'IsFTPExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFTPExistResponse',
  'GetFTPID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPID',
  'GetFTPIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPIDResponse',
  'GetFTPAddress' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPAddress',
  'GetFTPAddressResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPAddressResponse',
  'GetFTPPort' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPort',
  'GetFTPPortResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPortResponse',
  'GetFTPUser' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPUser',
  'GetFTPUserResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPUserResponse',
  'GetFTPPassword' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPassword',
  'GetFTPPasswordResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPasswordResponse',
  'GetFTPPassive' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPassive',
  'GetFTPPassiveResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFTPPassiveResponse',
  'IsFTPDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFTPDeleteSource',
  'IsFTPDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFTPDeleteSourceResponse',
  'AddUMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddUMail',
  'AddUMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddUMailResponse',
  'RemoveUMail' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveUMail',
  'RemoveUMailResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveUMailResponse',
  'IsUMailExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsUMailExist',
  'IsUMailExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsUMailExistResponse',
  'GetUMailTemplate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailTemplate',
  'GetUMailTemplateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailTemplateResponse',
  'GetUMailOrigZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailOrigZip',
  'GetUMailOrigZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailOrigZipResponse',
  'GetUMailPCWT' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailPCWT',
  'GetUMailPCWTResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailPCWTResponse',
  'GetUMailPCThick' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailPCThick',
  'GetUMailPCThickResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUMailPCThickResponse',
  'AddPrint' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddPrint',
  'AddPrintResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddPrintResponse',
  'AddPrintByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddPrintByID',
  'AddPrintByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddPrintByIDResponse',
  'RemovePrint' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemovePrint',
  'RemovePrintResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemovePrintResponse',
  'IsPrintExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPrintExist',
  'IsPrintExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPrintExistResponse',
  'GetPrintID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPrintID',
  'GetPrintIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPrintIDResponse',
  'GetPrinter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPrinter',
  'GetPrinterResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPrinterResponse',
  'IsPrinterDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPrinterDeleteSource',
  'IsPrinterDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPrinterDeleteSourceResponse',
  'AddFFPM' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFFPM',
  'AddFFPMResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFFPMResponse',
  'AddFFPMByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFFPMByID',
  'AddFFPMByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AddFFPMByIDResponse',
  'RemoveFFPM' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFFPM',
  'RemoveFFPMResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveFFPMResponse',
  'IsFFPMExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFFPMExist',
  'IsFFPMExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFFPMExistResponse',
  'GetFFPMID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMID',
  'GetFFPMIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFFPMIDResponse',
  'IsFFPMDeleteSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFFPMDeleteSource',
  'IsFFPMDeleteSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFFPMDeleteSourceResponse',
  'CreateNewTicket' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicket',
  'CreateNewTicketResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketResponse',
  'CreateNewTicketForDocument' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForDocument',
  'CreateNewTicketForDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForDocumentResponse',
  'CreateNewTicketForPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForPlan',
  'CreateNewTicketForPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForPlanResponse',
  'CreateNewTicketForCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForCampaign',
  'CreateNewTicketForCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\CreateNewTicketForCampaignResponse',
  'RecycleTicketID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RecycleTicketID',
  'RecycleTicketIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RecycleTicketIDResponse',
  'LoadTicketFromFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromFile',
  'LoadTicketFromFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromFileResponse',
  'LoadJobTicket' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadJobTicket',
  'LoadJobTicketResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadJobTicketResponse',
  'LoadLastJobTicketOfDocument' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadLastJobTicketOfDocument',
  'LoadLastJobTicketOfDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadLastJobTicketOfDocumentResponse',
  'LoadLastJobTicketOfPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadLastJobTicketOfPlan',
  'LoadLastJobTicketOfPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadLastJobTicketOfPlanResponse',
  'LoadTicketFromTicket' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromTicket',
  'LoadTicketFromTicketResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromTicketResponse',
  'GetTicketPropertyFromDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketPropertyFromDB',
  'GetTicketPropertyFromDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketPropertyFromDBResponse',
  'LoadTicketFromDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromDB',
  'LoadTicketFromDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\LoadTicketFromDBResponse',
  'SaveTicketToFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SaveTicketToFile',
  'SaveTicketToFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SaveTicketToFileResponse',
  'SaveNewTicketToDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SaveNewTicketToDB',
  'SaveNewTicketToDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SaveNewTicketToDBResponse',
  'OverwriteTicketInDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\OverwriteTicketInDB',
  'OverwriteTicketInDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\OverwriteTicketInDBResponse',
  'DeleteTicketFromDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\DeleteTicketFromDB',
  'DeleteTicketFromDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\DeleteTicketFromDBResponse',
  'GetTicketsFromDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketsFromDB',
  'GetTicketsFromDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketsFromDBResponse',
  'GetTicketsFromDBResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketsFromDBResult',
  'GetTemplatesFromDB' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTemplatesFromDB',
  'GetTemplatesFromDBResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTemplatesFromDBResponse',
  'GetTemplatesFromDBResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTemplatesFromDBResult',
  'GetTicket' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicket',
  'GetTicketResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketResponse',
  'GetTicketAndRecycleID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketAndRecycleID',
  'GetTicketAndRecycleIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetTicketAndRecycleIDResponse',
  'SetTicketDefaultsForDocument' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForDocument',
  'SetTicketDefaultsForDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForDocumentResponse',
  'SetTicketDefaultsForPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForPlan',
  'SetTicketDefaultsForPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForPlanResponse',
  'SetTicketDefaultsForCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForCampaign',
  'SetTicketDefaultsForCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetTicketDefaultsForCampaignResponse',
  'SetPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPlan',
  'SetPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPlanResponse',
  'SetPlanByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPlanByID',
  'SetPlanByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPlanByIDResponse',
  'GetUseTrivialPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUseTrivialPlan',
  'GetUseTrivialPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetUseTrivialPlanResponse',
  'SetUseTrivialPlan' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetUseTrivialPlan',
  'SetUseTrivialPlanResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetUseTrivialPlanResponse',
  'GetPlanPath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPlanPath',
  'GetPlanPathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPlanPathResponse',
  'GetPlanID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPlanID',
  'GetPlanIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPlanIDResponse',
  'SetCustomization' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCustomization',
  'Customization' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\Customization',
  'SetCustomizationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCustomizationResponse',
  'SetCustomizations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCustomizations',
  'ArrayOfCustomization' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfCustomization',
  'SetCustomizationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCustomizationsResponse',
  'RemoveCustomization' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveCustomization',
  'RemoveCustomizationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveCustomizationResponse',
  'RemoveAllCustomizations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllCustomizations',
  'RemoveAllCustomizationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllCustomizationsResponse',
  'GetCustomizationsCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCustomizationsCount',
  'GetCustomizationsCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCustomizationsCountResponse',
  'GetNthCustomization' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthCustomization',
  'GetNthCustomizationResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthCustomizationResponse',
  'GetCustomizations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCustomizations',
  'GetCustomizationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCustomizationsResponse',
  'SetDocumentByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDocumentByID',
  'SetDocumentByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDocumentByIDResponse',
  'SetDocument' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDocument',
  'SetDocumentResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDocumentResponse',
  'GetDocumentID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentID',
  'GetDocumentIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentIDResponse',
  'GetDocumentFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentFolder',
  'GetDocumentFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentFolderResponse',
  'GetDocumentName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentName',
  'GetDocumentNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentNameResponse',
  'GetDocumentType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentType',
  'GetDocumentTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetDocumentTypeResponse',
  'SetWebResourcesBasePath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetWebResourcesBasePath',
  'SetWebResourcesBasePathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetWebResourcesBasePathResponse',
  'GetWebResourcesBasePath' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetWebResourcesBasePath',
  'GetWebResourcesBasePathResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetWebResourcesBasePathResponse',
  'SetAllowFriendly' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAllowFriendly',
  'SetAllowFriendlyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAllowFriendlyResponse',
  'GetAllowFriendly' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAllowFriendly',
  'GetAllowFriendlyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAllowFriendlyResponse',
  'SetFriendliness' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFriendliness',
  'SetFriendlinessResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFriendlinessResponse',
  'GetFriendlyDomain' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyDomain',
  'GetFriendlyDomainResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyDomainResponse',
  'GetFriendlyFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyFolder',
  'GetFriendlyFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyFolderResponse',
  'GetFriendlyLandingPage' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyLandingPage',
  'GetFriendlyLandingPageResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFriendlyLandingPageResponse',
  'IsFriendlyUrlRedirectMode' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFriendlyUrlRedirectMode',
  'IsFriendlyUrlRedirectModeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFriendlyUrlRedirectModeResponse',
  'IsFriendlyUrlUseRIDPrefixMode' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFriendlyUrlUseRIDPrefixMode',
  'IsFriendlyUrlUseRIDPrefixModeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsFriendlyUrlUseRIDPrefixModeResponse',
  'SetCampaignID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCampaignID',
  'SetCampaignIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetCampaignIDResponse',
  'GetCampaignID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCampaignID',
  'GetCampaignIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetCampaignIDResponse',
  'SetFonts' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFonts',
  'SetFontsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFontsResponse',
  'SetFontsByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFontsByID',
  'SetFontsByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetFontsByIDResponse',
  'GetFontsFolder' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFontsFolder',
  'GetFontsFolderResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetFontsFolderResponse',
  'SetPortLink' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPortLink',
  'SetPortLinkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetPortLinkResponse',
  'RefreshPortLink' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RefreshPortLink',
  'RefreshPortLinkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RefreshPortLinkResponse',
  'RemovePortLink' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemovePortLink',
  'RemovePortLinkResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemovePortLinkResponse',
  'IsPortLinkExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPortLinkExist',
  'IsPortLinkExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\IsPortLinkExistResponse',
  'GetPortLinkAccount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkAccount',
  'GetPortLinkAccountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkAccountResponse',
  'GetPortLinkCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkCampaign',
  'GetPortLinkCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkCampaignResponse',
  'GetPortLinkPortName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkPortName',
  'GetPortLinkPortNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPortLinkPortNameResponse',
  'SetDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSource',
  'SetDataSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourceResponse',
  'SetDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSources',
  'ArrayOfConnection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfConnection',
  'SetDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourcesResponse',
  'SetDataSourceByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourceByID',
  'SetDataSourceByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourceByIDResponse',
  'SetDataSourcesByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourcesByID',
  'SetDataSourcesByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDataSourcesByIDResponse',
  'SetDefaultDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultDataSources',
  'SetDefaultDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultDataSourcesResponse',
  'RemoveAllSchemaDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllSchemaDataSources',
  'RemoveAllSchemaDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllSchemaDataSourcesResponse',
  'RemoveSchemaDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveSchemaDataSource',
  'RemoveSchemaDataSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveSchemaDataSourceResponse',
  'GetSchemaDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSource',
  'GetSchemaDataSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourceResponse',
  'GetSchemaDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourceID',
  'GetSchemaDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourceIDResponse',
  'GetSchemasNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemasNames',
  'GetSchemasNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemasNamesResponse',
  'GetSchemasDataSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemasDataSources',
  'GetSchemasDataSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemasDataSourcesResponse',
  'GetSchemaDataSourceIDs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourceIDs',
  'GetSchemaDataSourceIDsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourceIDsResponse',
  'GetSchemaDataSourcesCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourcesCount',
  'GetSchemaDataSourcesCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetSchemaDataSourcesCountResponse',
  'GetNthSchemaName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaName',
  'GetNthSchemaNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaNameResponse',
  'GetNthSchemaDataSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaDataSourceID',
  'GetNthSchemaDataSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaDataSourceIDResponse',
  'GetNthSchemaDataSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaDataSource',
  'GetNthSchemaDataSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthSchemaDataSourceResponse',
  'SetResolveAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetResolveAssets',
  'SetResolveAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetResolveAssetsResponse',
  'GetResolveAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetResolveAssets',
  'GetResolveAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetResolveAssetsResponse',
  'SetConnectivityAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetConnectivityAssets',
  'SetConnectivityAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetConnectivityAssetsResponse',
  'GetConnectivityAssets' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetConnectivityAssets',
  'GetConnectivityAssetsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetConnectivityAssetsResponse',
  'SetAssetsPrefix' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetsPrefix',
  'SetAssetsPrefixResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetsPrefixResponse',
  'GetAssetsPrefixType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetsPrefixType',
  'GetAssetsPrefixTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetsPrefixTypeResponse',
  'GetAssetsFixedPrefix' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetsFixedPrefix',
  'GetAssetsFixedPrefixResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetsFixedPrefixResponse',
  'SetAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSource',
  'AssetSourceStruct' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AssetSourceStruct',
  'SetAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourceResponse',
  'SetAssetSourceEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourceEx',
  'AssetSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AssetSourceInfo',
  'ArrayOfAssetSourceParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfAssetSourceParameter',
  'AssetSourceParameter' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\AssetSourceParameter',
  'SetAssetSourceExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourceExResponse',
  'SetAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSources',
  'ArrayOfAssetSourceStruct' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfAssetSourceStruct',
  'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfInt',
  'SetAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourcesResponse',
  'SetAssetSourcesEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourcesEx',
  'ArrayOfAssetSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfAssetSourceInfo',
  'SetAssetSourcesExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourcesExResponse',
  'SetAssetSourceByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourceByID',
  'SetAssetSourceByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourceByIDResponse',
  'SetAssetSourcesByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourcesByID',
  'SetAssetSourcesByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetAssetSourcesByIDResponse',
  'SetDefaultAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultAssetSources',
  'SetDefaultAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultAssetSourcesResponse',
  'RemoveAllAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllAssetSources',
  'RemoveAllAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllAssetSourcesResponse',
  'RemoveAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAssetSource',
  'RemoveAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAssetSourceResponse',
  'GetAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSource',
  'GetAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourceResponse',
  'GetAssetSourceEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourceEx',
  'GetAssetSourceExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourceExResponse',
  'GetAssetSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourceID',
  'GetAssetSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourceIDResponse',
  'GetAssetSourcePriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcePriority',
  'GetAssetSourcePriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcePriorityResponse',
  'GetAssetSourcesNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesNames',
  'GetAssetSourcesNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesNamesResponse',
  'GetAssetSources' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSources',
  'GetAssetSourcesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesResponse',
  'GetAssetSourcesEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesEx',
  'GetAssetSourcesExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesExResponse',
  'GetAssetSourcesIDs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesIDs',
  'GetAssetSourcesIDsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesIDsResponse',
  'GetAssetSourcesCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesCount',
  'GetAssetSourcesCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetAssetSourcesCountResponse',
  'GetNthAssetSourceName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceName',
  'GetNthAssetSourceNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceNameResponse',
  'GetNthAssetSource' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSource',
  'GetNthAssetSourceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceResponse',
  'GetNthAssetSourceEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceEx',
  'GetNthAssetSourceExResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceExResponse',
  'GetNthAssetSourceID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceID',
  'GetNthAssetSourceIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourceIDResponse',
  'GetNthAssetSourcePriority' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourcePriority',
  'GetNthAssetSourcePriorityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthAssetSourcePriorityResponse',
  'GetPopulationGUID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPopulationGUID',
  'GetPopulationGUIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetPopulationGUIDResponse',
  'SetRIRange' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIRange',
  'SetRIRangeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIRangeResponse',
  'SetRI' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRI',
  'SetRIResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIResponse',
  'SetRIs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIs',
  'ArrayOfRecipientsInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\ArrayOfRecipientsInfo',
  'SetRIsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIsResponse',
  'SetRIByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIByID',
  'SetRIByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIByIDResponse',
  'SetRIByPopulationGUID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIByPopulationGUID',
  'SetRIByPopulationGUIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIByPopulationGUIDResponse',
  'SetInfoByRunGUID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetInfoByRunGUID',
  'SetInfoByRunGUIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetInfoByRunGUIDResponse',
  'SetRIsByID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIsByID',
  'SetRIsByIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetRIsByIDResponse',
  'SetDefaultRI' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultRI',
  'SetDefaultRIResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\SetDefaultRIResponse',
  'RemoveAllRIs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllRIs',
  'RemoveAllRIsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\RemoveAllRIsResponse',
  'GetRIsCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIsCount',
  'GetRIsCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIsCountResponse',
  'GetRIFrom' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIFrom',
  'GetRIFromResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIFromResponse',
  'GetRITo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRITo',
  'GetRIToResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetRIToResponse',
  'GetNthRIRecipientIDListFileName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIRecipientIDListFileName',
  'GetNthRIRecipientIDListFileNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIRecipientIDListFileNameResponse',
  'GetNthRIRecipientIDListMergeType' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIRecipientIDListMergeType',
  'GetNthRIRecipientIDListMergeTypeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_3_1\\ProductionServices\\JobTicket_SSP\\GetNthRIRecipientIDListMergeTypeResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/JobTicket_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Gets FFPM executable path.
     *
     * @param GetFFPMExecutablePath $parameters
     * @return GetFFPMExecutablePathResponse
     */
    public function GetFFPMExecutablePath(GetFFPMExecutablePath $parameters)
    {
      return $this->__soapCall('GetFFPMExecutablePath', array($parameters));
    }

    /**
     * Gets FFPM queue specifications.
     *
     * @param GetFFPMQueueSpecs $parameters
     * @return GetFFPMQueueSpecsResponse
     */
    public function GetFFPMQueueSpecs(GetFFPMQueueSpecs $parameters)
    {
      return $this->__soapCall('GetFFPMQueueSpecs', array($parameters));
    }

    /**
     * Adds remote destination.
     *
     * @param AddRemoteCopy $parameters
     * @return AddRemoteCopyResponse
     */
    public function AddRemoteCopy(AddRemoteCopy $parameters)
    {
      return $this->__soapCall('AddRemoteCopy', array($parameters));
    }

    /**
     * Adds remote destination by destination id.
     *
     * @param AddRemoteCopyByID $parameters
     * @return AddRemoteCopyByIDResponse
     */
    public function AddRemoteCopyByID(AddRemoteCopyByID $parameters)
    {
      return $this->__soapCall('AddRemoteCopyByID', array($parameters));
    }

    /**
     * Removes remote destination
     *
     * @param RemoveRemoteCopy $parameters
     * @return RemoveRemoteCopyResponse
     */
    public function RemoveRemoteCopy(RemoveRemoteCopy $parameters)
    {
      return $this->__soapCall('RemoveRemoteCopy', array($parameters));
    }

    /**
     * true if remote destination exist in the ticket.
     *
     * @param IsRemoteCopyExist $parameters
     * @return IsRemoteCopyExistResponse
     */
    public function IsRemoteCopyExist(IsRemoteCopyExist $parameters)
    {
      return $this->__soapCall('IsRemoteCopyExist', array($parameters));
    }

    /**
     * Gets the remote destination, destination id.
     *
     * @param GetRemoteCopyID $parameters
     * @return GetRemoteCopyIDResponse
     */
    public function GetRemoteCopyID(GetRemoteCopyID $parameters)
    {
      return $this->__soapCall('GetRemoteCopyID', array($parameters));
    }

    /**
     * Gets the remote destination.
     *
     * @param GetRemoteCopyDestination $parameters
     * @return GetRemoteCopyDestinationResponse
     */
    public function GetRemoteCopyDestination(GetRemoteCopyDestination $parameters)
    {
      return $this->__soapCall('GetRemoteCopyDestination', array($parameters));
    }

    /**
     * Gets whether the remote destination requested to delete the source.
     *
     * @param IsRemoteCopyDeleteSource $parameters
     * @return IsRemoteCopyDeleteSourceResponse
     */
    public function IsRemoteCopyDeleteSource(IsRemoteCopyDeleteSource $parameters)
    {
      return $this->__soapCall('IsRemoteCopyDeleteSource', array($parameters));
    }

    /**
     * Adds secondary remote destination.
     *
     * @param AddSecondaryRemoteCopy $parameters
     * @return AddSecondaryRemoteCopyResponse
     */
    public function AddSecondaryRemoteCopy(AddSecondaryRemoteCopy $parameters)
    {
      return $this->__soapCall('AddSecondaryRemoteCopy', array($parameters));
    }

    /**
     * Adds secondary remote destination by destination id.
     *
     * @param AddSecondaryRemoteCopyByID $parameters
     * @return AddSecondaryRemoteCopyByIDResponse
     */
    public function AddSecondaryRemoteCopyByID(AddSecondaryRemoteCopyByID $parameters)
    {
      return $this->__soapCall('AddSecondaryRemoteCopyByID', array($parameters));
    }

    /**
     * Removes secondary remote destination
     *
     * @param RemoveSecondaryRemoteCopy $parameters
     * @return RemoveSecondaryRemoteCopyResponse
     */
    public function RemoveSecondaryRemoteCopy(RemoveSecondaryRemoteCopy $parameters)
    {
      return $this->__soapCall('RemoveSecondaryRemoteCopy', array($parameters));
    }

    /**
     * true if secondary remote destination exist in the ticket.
     *
     * @param IsSecondaryRemoteCopyExist $parameters
     * @return IsSecondaryRemoteCopyExistResponse
     */
    public function IsSecondaryRemoteCopyExist(IsSecondaryRemoteCopyExist $parameters)
    {
      return $this->__soapCall('IsSecondaryRemoteCopyExist', array($parameters));
    }

    /**
     * Gets the secondary remote destination, destination id.
     *
     * @param GetSecondaryRemoteCopyID $parameters
     * @return GetSecondaryRemoteCopyIDResponse
     */
    public function GetSecondaryRemoteCopyID(GetSecondaryRemoteCopyID $parameters)
    {
      return $this->__soapCall('GetSecondaryRemoteCopyID', array($parameters));
    }

    /**
     * Gets the secondary remote destination.
     *
     * @param GetSecondaryRemoteCopyDestination $parameters
     * @return GetSecondaryRemoteCopyDestinationResponse
     */
    public function GetSecondaryRemoteCopyDestination(GetSecondaryRemoteCopyDestination $parameters)
    {
      return $this->__soapCall('GetSecondaryRemoteCopyDestination', array($parameters));
    }

    /**
     * Gets whether the secondary remote destination requested to delete the source.
     *
     * @param IsSecondaryRemoteCopyDeleteSource $parameters
     * @return IsSecondaryRemoteCopyDeleteSourceResponse
     */
    public function IsSecondaryRemoteCopyDeleteSource(IsSecondaryRemoteCopyDeleteSource $parameters)
    {
      return $this->__soapCall('IsSecondaryRemoteCopyDeleteSource', array($parameters));
    }

    /**
     * Adds JDF destination.
     *
     * @param AddJDFCopy $parameters
     * @return AddJDFCopyResponse
     */
    public function AddJDFCopy(AddJDFCopy $parameters)
    {
      return $this->__soapCall('AddJDFCopy', array($parameters));
    }

    /**
     * Adds JDF destination by destination id.
     *
     * @param AddJDFCopyByID $parameters
     * @return AddJDFCopyByIDResponse
     */
    public function AddJDFCopyByID(AddJDFCopyByID $parameters)
    {
      return $this->__soapCall('AddJDFCopyByID', array($parameters));
    }

    /**
     * Adds JDF destination.
     *
     * @param RemoveJDFCopy $parameters
     * @return RemoveJDFCopyResponse
     */
    public function RemoveJDFCopy(RemoveJDFCopy $parameters)
    {
      return $this->__soapCall('RemoveJDFCopy', array($parameters));
    }

    /**
     * true if JDF destination exist in the ticket.
     *
     * @param IsJDFCopyExist $parameters
     * @return IsJDFCopyExistResponse
     */
    public function IsJDFCopyExist(IsJDFCopyExist $parameters)
    {
      return $this->__soapCall('IsJDFCopyExist', array($parameters));
    }

    /**
     * Gets the JDF destination, destination id.
     *
     * @param GetJDFCopyID $parameters
     * @return GetJDFCopyIDResponse
     */
    public function GetJDFCopyID(GetJDFCopyID $parameters)
    {
      return $this->__soapCall('GetJDFCopyID', array($parameters));
    }

    /**
     * Gets the JDF destination.
     *
     * @param GetJDFCopyDestination $parameters
     * @return GetJDFCopyDestinationResponse
     */
    public function GetJDFCopyDestination(GetJDFCopyDestination $parameters)
    {
      return $this->__soapCall('GetJDFCopyDestination', array($parameters));
    }

    /**
     * Gets whether the JDF requested to delete the source.
     *
     * @param IsJDFCopyDeleteSource $parameters
     * @return IsJDFCopyDeleteSourceResponse
     */
    public function IsJDFCopyDeleteSource(IsJDFCopyDeleteSource $parameters)
    {
      return $this->__soapCall('IsJDFCopyDeleteSource', array($parameters));
    }

    /**
     * Sets the PDF output quality option configuration settings name.
     *
     * @param SetDistillJobOptionName $parameters
     * @return SetDistillJobOptionNameResponse
     */
    public function SetDistillJobOptionName(SetDistillJobOptionName $parameters)
    {
      return $this->__soapCall('SetDistillJobOptionName', array($parameters));
    }

    /**
     * Returns true if the job is tracking job.
     *
     * @param IsJobTracked $parameters
     * @return IsJobTrackedResponse
     */
    public function IsJobTracked(IsJobTracked $parameters)
    {
      return $this->__soapCall('IsJobTracked', array($parameters));
    }

    /**
     * Sets the Touch point id.
     *
     * @param SetTouchPointID $parameters
     * @return SetTouchPointIDResponse
     */
    public function SetTouchPointID(SetTouchPointID $parameters)
    {
      return $this->__soapCall('SetTouchPointID', array($parameters));
    }

    /**
     * Gets the Touch point id.
     *
     * @param GetTouchPointID $parameters
     * @return GetTouchPointIDResponse
     */
    public function GetTouchPointID(GetTouchPointID $parameters)
    {
      return $this->__soapCall('GetTouchPointID', array($parameters));
    }

    /**
     * Adds tracking to the job.
     *
     * @param AddTracking $parameters
     * @return AddTrackingResponse
     */
    public function AddTracking(AddTracking $parameters)
    {
      return $this->__soapCall('AddTracking', array($parameters));
    }

    /**
     * Removes tracking from the job.
     *
     * @param RemoveTracking $parameters
     * @return RemoveTrackingResponse
     */
    public function RemoveTracking(RemoveTracking $parameters)
    {
      return $this->__soapCall('RemoveTracking', array($parameters));
    }

    /**
     * Sets the job tracking parameter.
     *
     * @param SetTrackingParameter $parameters
     * @return SetTrackingParameterResponse
     */
    public function SetTrackingParameter(SetTrackingParameter $parameters)
    {
      return $this->__soapCall('SetTrackingParameter', array($parameters));
    }

    /**
     * Sets the job tracking parameters.
     *
     * @param SetTrackingParameters $parameters
     * @return SetTrackingParametersResponse
     */
    public function SetTrackingParameters(SetTrackingParameters $parameters)
    {
      return $this->__soapCall('SetTrackingParameters', array($parameters));
    }

    /**
     * Gets the job tracking parameter.
     *
     * @param GetTrackingParameter $parameters
     * @return GetTrackingParameterResponse
     */
    public function GetTrackingParameter(GetTrackingParameter $parameters)
    {
      return $this->__soapCall('GetTrackingParameter', array($parameters));
    }

    /**
     * Gets the job tracking parameters.
     *
     * @param GetTrackingParameters $parameters
     * @return GetTrackingParametersResponse
     */
    public function GetTrackingParameters(GetTrackingParameters $parameters)
    {
      return $this->__soapCall('GetTrackingParameters', array($parameters));
    }

    /**
     * Removes the job tracking parameter.
     *
     * @param RemoveTrackingParameter $parameters
     * @return RemoveTrackingParameterResponse
     */
    public function RemoveTrackingParameter(RemoveTrackingParameter $parameters)
    {
      return $this->__soapCall('RemoveTrackingParameter', array($parameters));
    }

    /**
     * Removes the job tracking parameters.
     *
     * @param RemoveTrackingParameters $parameters
     * @return RemoveTrackingParametersResponse
     */
    public function RemoveTrackingParameters(RemoveTrackingParameters $parameters)
    {
      return $this->__soapCall('RemoveTrackingParameters', array($parameters));
    }

    /**
     * Removes the job all tracking parameters.
     *
     * @param RemoveAllTrackingParameters $parameters
     * @return RemoveAllTrackingParametersResponse
     */
    public function RemoveAllTrackingParameters(RemoveAllTrackingParameters $parameters)
    {
      return $this->__soapCall('RemoveAllTrackingParameters', array($parameters));
    }

    /**
     * Returns true is the ADOR is tracking.
     *
     * @param IsTrackingADOR $parameters
     * @return IsTrackingADORResponse
     */
    public function IsTrackingADOR(IsTrackingADOR $parameters)
    {
      return $this->__soapCall('IsTrackingADOR', array($parameters));
    }

    /**
     * Gets the job tracking ADORs.
     *
     * @param GetTrackingADORs $parameters
     * @return GetTrackingADORsResponse
     */
    public function GetTrackingADORs(GetTrackingADORs $parameters)
    {
      return $this->__soapCall('GetTrackingADORs', array($parameters));
    }

    /**
     * Sets the Circle Touchpoint Guid.
     *
     * @param SetCircleTouchpointGuid $parameters
     * @return SetCircleTouchpointGuidResponse
     */
    public function SetCircleTouchpointGuid(SetCircleTouchpointGuid $parameters)
    {
      return $this->__soapCall('SetCircleTouchpointGuid', array($parameters));
    }

    /**
     * Gets the Circle Touchpoint Guid
     *
     * @param GetCircleTouchpointGuid $parameters
     * @return GetCircleTouchpointGuidResponse
     */
    public function GetCircleTouchpointGuid(GetCircleTouchpointGuid $parameters)
    {
      return $this->__soapCall('GetCircleTouchpointGuid', array($parameters));
    }

    /**
     * Sets the Circle Run Guid.
     *
     * @param SetCircleRunGuid $parameters
     * @return SetCircleRunGuidResponse
     */
    public function SetCircleRunGuid(SetCircleRunGuid $parameters)
    {
      return $this->__soapCall('SetCircleRunGuid', array($parameters));
    }

    /**
     * Gets the Circle Run Guid
     *
     * @param GetCircleRunGuid $parameters
     * @return GetCircleRunGuidResponse
     */
    public function GetCircleRunGuid(GetCircleRunGuid $parameters)
    {
      return $this->__soapCall('GetCircleRunGuid', array($parameters));
    }

    /**
     * Sets the Email provider.
     *
     * @param SetDeliveryProvider $parameters
     * @return SetDeliveryProviderResponse
     */
    public function SetDeliveryProvider(SetDeliveryProvider $parameters)
    {
      return $this->__soapCall('SetDeliveryProvider', array($parameters));
    }

    /**
     * Sets an Email provider info by destination id.
     *
     * @param SetDeliveryProviderByID $parameters
     * @return SetDeliveryProviderByIDResponse
     */
    public function SetDeliveryProviderByID(SetDeliveryProviderByID $parameters)
    {
      return $this->__soapCall('SetDeliveryProviderByID', array($parameters));
    }

    /**
     * Gets the Email provider.
     *
     * @param GetDeliveryProvider $parameters
     * @return GetDeliveryProviderResponse
     */
    public function GetDeliveryProvider(GetDeliveryProvider $parameters)
    {
      return $this->__soapCall('GetDeliveryProvider', array($parameters));
    }

    /**
     * Gets the Email provider destination id.
     *
     * @param GetDeliveryProviderID $parameters
     * @return GetDeliveryProviderIDResponse
     */
    public function GetDeliveryProviderID(GetDeliveryProviderID $parameters)
    {
      return $this->__soapCall('GetDeliveryProviderID', array($parameters));
    }

    /**
     * Set email header in ticket.
     *
     * @param SetEmailHeader $parameters
     * @return SetEmailHeaderResponse
     */
    public function SetEmailHeader(SetEmailHeader $parameters)
    {
      return $this->__soapCall('SetEmailHeader', array($parameters));
    }

    /**
     * Get email header from ticket.
     *
     * @param GetEmailHeader $parameters
     * @return GetEmailHeaderResponse
     */
    public function GetEmailHeader(GetEmailHeader $parameters)
    {
      return $this->__soapCall('GetEmailHeader', array($parameters));
    }

    /**
     * remove all body info and set this email body in ticket.
     *
     * @param SetEmailBody $parameters
     * @return SetEmailBodyResponse
     */
    public function SetEmailBody(SetEmailBody $parameters)
    {
      return $this->__soapCall('SetEmailBody', array($parameters));
    }

    /**
     * Set email bodies in ticket.
     *
     * @param SetEmailBodies $parameters
     * @return SetEmailBodiesResponse
     */
    public function SetEmailBodies(SetEmailBodies $parameters)
    {
      return $this->__soapCall('SetEmailBodies', array($parameters));
    }

    /**
     * add this email body in ticket.
     *
     * @param AddEmailBody $parameters
     * @return AddEmailBodyResponse
     */
    public function AddEmailBody(AddEmailBody $parameters)
    {
      return $this->__soapCall('AddEmailBody', array($parameters));
    }

    /**
     * remove all body info and set email body in ticket by document ID.
     *
     * @param SetEmailBodyByID $parameters
     * @return SetEmailBodyByIDResponse
     */
    public function SetEmailBodyByID(SetEmailBodyByID $parameters)
    {
      return $this->__soapCall('SetEmailBodyByID', array($parameters));
    }

    /**
     * remove all body info and set email bodies in ticket by document IDs.
     *
     * @param SetEmailBodiesByIDs $parameters
     * @return SetEmailBodiesByIDsResponse
     */
    public function SetEmailBodiesByIDs(SetEmailBodiesByIDs $parameters)
    {
      return $this->__soapCall('SetEmailBodiesByIDs', array($parameters));
    }

    /**
     * add email body in ticket by document ID.
     *
     * @param AddEmailBodyByID $parameters
     * @return AddEmailBodyByIDResponse
     */
    public function AddEmailBodyByID(AddEmailBodyByID $parameters)
    {
      return $this->__soapCall('AddEmailBodyByID', array($parameters));
    }

    /**
     * remove all body info.
     *
     * @param RemoveAllEmailBodies $parameters
     * @return RemoveAllEmailBodiesResponse
     */
    public function RemoveAllEmailBodies(RemoveAllEmailBodies $parameters)
    {
      return $this->__soapCall('RemoveAllEmailBodies', array($parameters));
    }

    /**
     * Get all email body from the ticket.
     *
     * @param GetEmailBodies $parameters
     * @return GetEmailBodiesResponse
     */
    public function GetEmailBodies(GetEmailBodies $parameters)
    {
      return $this->__soapCall('GetEmailBodies', array($parameters));
    }

    /**
     * Get all email body ids from the ticket.
     *
     * @param GetEmailBodiesIDs $parameters
     * @return GetEmailBodiesIDsResponse
     */
    public function GetEmailBodiesIDs(GetEmailBodiesIDs $parameters)
    {
      return $this->__soapCall('GetEmailBodiesIDs', array($parameters));
    }

    /**
     * Get email body count from the ticket.
     *
     * @param GetEmailBodyCount $parameters
     * @return GetEmailBodyCountResponse
     */
    public function GetEmailBodyCount(GetEmailBodyCount $parameters)
    {
      return $this->__soapCall('GetEmailBodyCount', array($parameters));
    }

    /**
     * Get nth email body from the ticket.
     *
     * @param GetNthEmailBody $parameters
     * @return GetNthEmailBodyResponse
     */
    public function GetNthEmailBody(GetNthEmailBody $parameters)
    {
      return $this->__soapCall('GetNthEmailBody', array($parameters));
    }

    /**
     * Get nth email body document ID.
     *
     * @param GetNthEmailBodyID $parameters
     * @return GetNthEmailBodyIDResponse
     */
    public function GetNthEmailBodyID(GetNthEmailBodyID $parameters)
    {
      return $this->__soapCall('GetNthEmailBodyID', array($parameters));
    }

    /**
     * Adds metadata properties.
     *
     * @param SetMetaData $parameters
     * @return SetMetaDataResponse
     */
    public function SetMetaData(SetMetaData $parameters)
    {
      return $this->__soapCall('SetMetaData', array($parameters));
    }

    /**
     * Gets metadata properties.
     *
     * @param GetMetaData $parameters
     * @return GetMetaDataResponse
     */
    public function GetMetaData(GetMetaData $parameters)
    {
      return $this->__soapCall('GetMetaData', array($parameters));
    }

    /**
     * Gets all metadata properties.
     *
     * @param GetAllMetaData $parameters
     * @return GetAllMetaDataResponse
     */
    public function GetAllMetaData(GetAllMetaData $parameters)
    {
      return $this->__soapCall('GetAllMetaData', array($parameters));
    }

    /**
     * Gets list of sub-groups names.
     *
     * @param GetMetaDataSubGroups $parameters
     * @return GetMetaDataSubGroupsResponse
     */
    public function GetMetaDataSubGroups(GetMetaDataSubGroups $parameters)
    {
      return $this->__soapCall('GetMetaDataSubGroups', array($parameters));
    }

    /**
     * Removes metadata properties.
     *
     * @param RemoveMetaData $parameters
     * @return RemoveMetaDataResponse
     */
    public function RemoveMetaData(RemoveMetaData $parameters)
    {
      return $this->__soapCall('RemoveMetaData', array($parameters));
    }

    /**
     * Removes metadata properties group.
     *
     * @param RemoveMetaDataGroup $parameters
     * @return RemoveMetaDataGroupResponse
     */
    public function RemoveMetaDataGroup(RemoveMetaDataGroup $parameters)
    {
      return $this->__soapCall('RemoveMetaDataGroup', array($parameters));
    }

    /**
     * Check whether field mapping exists.
     *
     * @param IsMappingExists $parameters
     * @return IsMappingExistsResponse
     */
    public function IsMappingExists(IsMappingExists $parameters)
    {
      return $this->__soapCall('IsMappingExists', array($parameters));
    }

    /**
     * Get field mapping.
     *
     * @param GetFieldMappings $parameters
     * @return GetFieldMappingsResponse
     */
    public function GetFieldMappings(GetFieldMappings $parameters)
    {
      return $this->__soapCall('GetFieldMappings', array($parameters));
    }

    /**
     * Set field mapping.
     *
     * @param SetFieldMapping $parameters
     * @return SetFieldMappingResponse
     */
    public function SetFieldMapping(SetFieldMapping $parameters)
    {
      return $this->__soapCall('SetFieldMapping', array($parameters));
    }

    /**
     * Set field mapping (using ID of RecipientTable).
     *
     * @param SetFieldMappingByID $parameters
     * @return SetFieldMappingByIDResponse
     */
    public function SetFieldMappingByID(SetFieldMappingByID $parameters)
    {
      return $this->__soapCall('SetFieldMappingByID', array($parameters));
    }

    /**
     * Remove field mapping.
     *
     * @param RemoveFieldMapping $parameters
     * @return RemoveFieldMappingResponse
     */
    public function RemoveFieldMapping(RemoveFieldMapping $parameters)
    {
      return $this->__soapCall('RemoveFieldMapping', array($parameters));
    }

    /**
     * Gets the nth recipient list in the ticket.
     *
     * @param GetNthRIInfo $parameters
     * @return GetNthRIInfoResponse
     */
    public function GetNthRIInfo(GetNthRIInfo $parameters)
    {
      return $this->__soapCall('GetNthRIInfo', array($parameters));
    }

    /**
     * Gets the nth recipient list data source id in the ticket.
     *
     * @param GetNthRIDataSourceID $parameters
     * @return GetNthRIDataSourceIDResponse
     */
    public function GetNthRIDataSourceID(GetNthRIDataSourceID $parameters)
    {
      return $this->__soapCall('GetNthRIDataSourceID', array($parameters));
    }

    /**
     * Gets the nth recipient list data source in the ticket.
     *
     * @param GetNthRIDataSource $parameters
     * @return GetNthRIDataSourceResponse
     */
    public function GetNthRIDataSource(GetNthRIDataSource $parameters)
    {
      return $this->__soapCall('GetNthRIDataSource', array($parameters));
    }

    /**
     * Adds the recipient list source to the ticket.
     *
     * @param AddRI $parameters
     * @return AddRIResponse
     */
    public function AddRI(AddRI $parameters)
    {
      return $this->__soapCall('AddRI', array($parameters));
    }

    /**
     * Adds the recipient list source by id in the ticket.
     *
     * @param AddRIByID $parameters
     * @return AddRIByIDResponse
     */
    public function AddRIByID(AddRIByID $parameters)
    {
      return $this->__soapCall('AddRIByID', array($parameters));
    }

    /**
     * Adds the campaign defaulted recipient list in the ticket.
     *
     * @param AddDefaultRI $parameters
     * @return AddDefaultRIResponse
     */
    public function AddDefaultRI(AddDefaultRI $parameters)
    {
      return $this->__soapCall('AddDefaultRI', array($parameters));
    }

    /**
     * Sets the recipients on demand information in the ticket.
     *
     * @param SetRIOnDemandInfo $parameters
     * @return SetRIOnDemandInfoResponse
     */
    public function SetRIOnDemandInfo(SetRIOnDemandInfo $parameters)
    {
      return $this->__soapCall('SetRIOnDemandInfo', array($parameters));
    }

    /**
     * Gets the recipients on demand identifier from the ticket.
     *
     * @param GetRIOnDemandRecipientID $parameters
     * @return GetRIOnDemandRecipientIDResponse
     */
    public function GetRIOnDemandRecipientID(GetRIOnDemandRecipientID $parameters)
    {
      return $this->__soapCall('GetRIOnDemandRecipientID', array($parameters));
    }

    /**
     * Gets the recipients on demand info from the ticket.
     *
     * @param GetRIOnDemandRecipientInfo $parameters
     * @return GetRIOnDemandRecipientInfoResponse
     */
    public function GetRIOnDemandRecipientInfo(GetRIOnDemandRecipientInfo $parameters)
    {
      return $this->__soapCall('GetRIOnDemandRecipientInfo', array($parameters));
    }

    /**
     * Sets the job type in the ticket.
     *
     * @param SetJobType $parameters
     * @return SetJobTypeResponse
     */
    public function SetJobType(SetJobType $parameters)
    {
      return $this->__soapCall('SetJobType', array($parameters));
    }

    /**
     * Gets the job type in the ticket.
     *
     * @param GetJobType $parameters
     * @return GetJobTypeResponse
     */
    public function GetJobType(GetJobType $parameters)
    {
      return $this->__soapCall('GetJobType', array($parameters));
    }

    /**
     * Gets the job priority in the ticket.
     *
     * @param GetJobPriority $parameters
     * @return GetJobPriorityResponse
     */
    public function GetJobPriority(GetJobPriority $parameters)
    {
      return $this->__soapCall('GetJobPriority', array($parameters));
    }

    /**
     * Sets the job priority in the ticket.
     *
     * @param SetJobPriority $parameters
     * @return SetJobPriorityResponse
     */
    public function SetJobPriority(SetJobPriority $parameters)
    {
      return $this->__soapCall('SetJobPriority', array($parameters));
    }

    /**
     * Sets the job tracking web service url in the ticket.
     *
     * @param SetJobTrackingWebService $parameters
     * @return SetJobTrackingWebServiceResponse
     */
    public function SetJobTrackingWebService(SetJobTrackingWebService $parameters)
    {
      return $this->__soapCall('SetJobTrackingWebService', array($parameters));
    }

    /**
     * Gets the job tracking web service url in the ticket.
     *
     * @param GetJobTrackingWebService $parameters
     * @return GetJobTrackingWebServiceResponse
     */
    public function GetJobTrackingWebService(GetJobTrackingWebService $parameters)
    {
      return $this->__soapCall('GetJobTrackingWebService', array($parameters));
    }

    /**
     * Sets the job reporting web service url in the ticket.
     *
     * @param SetJobReportingWebService $parameters
     * @return SetJobReportingWebServiceResponse
     */
    public function SetJobReportingWebService(SetJobReportingWebService $parameters)
    {
      return $this->__soapCall('SetJobReportingWebService', array($parameters));
    }

    /**
     * Gets the job reporting web service url in the ticket.
     *
     * @param GetJobReportingWebService $parameters
     * @return GetJobReportingWebServiceResponse
     */
    public function GetJobReportingWebService(GetJobReportingWebService $parameters)
    {
      return $this->__soapCall('GetJobReportingWebService', array($parameters));
    }

    /**
     * Sets the parameter of a splitted job.
     *
     * @param SetSplittedJobInfo $parameters
     * @return SetSplittedJobInfoResponse
     */
    public function SetSplittedJobInfo(SetSplittedJobInfo $parameters)
    {
      return $this->__soapCall('SetSplittedJobInfo', array($parameters));
    }

    /**
     * Returns true if it is a splitted job.
     *
     * @param IsSplittedJob $parameters
     * @return IsSplittedJobResponse
     */
    public function IsSplittedJob(IsSplittedJob $parameters)
    {
      return $this->__soapCall('IsSplittedJob', array($parameters));
    }

    /**
     * Returns true if it is a parallel processing job.
     *
     * @param IsParallelProcessingJob $parameters
     * @return IsParallelProcessingJobResponse
     */
    public function IsParallelProcessingJob(IsParallelProcessingJob $parameters)
    {
      return $this->__soapCall('IsParallelProcessingJob', array($parameters));
    }

    /**
     * Sets the Automatic sub split options for this Job.
     *
     * @param SetAutomaticSubSplitAndMerge $parameters
     * @return SetAutomaticSubSplitAndMergeResponse
     */
    public function SetAutomaticSubSplitAndMerge(SetAutomaticSubSplitAndMerge $parameters)
    {
      return $this->__soapCall('SetAutomaticSubSplitAndMerge', array($parameters));
    }

    /**
     * Returns true if Automatic sub-split was defined for this Job.
     *
     * @param IsAutomaticSubSplitEnabled $parameters
     * @return IsAutomaticSubSplitEnabledResponse
     */
    public function IsAutomaticSubSplitEnabled(IsAutomaticSubSplitEnabled $parameters)
    {
      return $this->__soapCall('IsAutomaticSubSplitEnabled', array($parameters));
    }

    /**
     * Returns true if automatic Merge was defined for this Job.
     *
     * @param IsAutomaticMergeEnabled $parameters
     * @return IsAutomaticMergeEnabledResponse
     */
    public function IsAutomaticMergeEnabled(IsAutomaticMergeEnabled $parameters)
    {
      return $this->__soapCall('IsAutomaticMergeEnabled', array($parameters));
    }

    /**
     * Returns true if it is a sub job.
     *
     * @param IsSubJob $parameters
     * @return IsSubJobResponse
     */
    public function IsSubJob(IsSubJob $parameters)
    {
      return $this->__soapCall('IsSubJob', array($parameters));
    }

    /**
     * Gets the sub job information.
     *
     * @param GetSubJobInfo $parameters
     * @return GetSubJobInfoResponse
     */
    public function GetSubJobInfo(GetSubJobInfo $parameters)
    {
      return $this->__soapCall('GetSubJobInfo', array($parameters));
    }

    /**
     * Gets the sub job index.
     *
     * @param GetSubJobIndex $parameters
     * @return GetSubJobIndexResponse
     */
    public function GetSubJobIndex(GetSubJobIndex $parameters)
    {
      return $this->__soapCall('GetSubJobIndex', array($parameters));
    }

    /**
     * Gets the sub job container from.
     *
     * @param GetSubJobOrigFrom $parameters
     * @return GetSubJobOrigFromResponse
     */
    public function GetSubJobOrigFrom(GetSubJobOrigFrom $parameters)
    {
      return $this->__soapCall('GetSubJobOrigFrom', array($parameters));
    }

    /**
     * Gets the sub job container to.
     *
     * @param GetSubJobOrigTo $parameters
     * @return GetSubJobOrigToResponse
     */
    public function GetSubJobOrigTo(GetSubJobOrigTo $parameters)
    {
      return $this->__soapCall('GetSubJobOrigTo', array($parameters));
    }

    /**
     * Gets the sub job count.
     *
     * @param GetSubJobSplitCount $parameters
     * @return GetSubJobSplitCountResponse
     */
    public function GetSubJobSplitCount(GetSubJobSplitCount $parameters)
    {
      return $this->__soapCall('GetSubJobSplitCount', array($parameters));
    }

    /**
     * Gets the split method type.
     *
     * @param GetSubJobSplitType $parameters
     * @return GetSubJobSplitTypeResponse
     */
    public function GetSubJobSplitType(GetSubJobSplitType $parameters)
    {
      return $this->__soapCall('GetSubJobSplitType', array($parameters));
    }

    /**
     * Sets the job parameter.
     *
     * @param SetJobParameter $parameters
     * @return SetJobParameterResponse
     */
    public function SetJobParameter(SetJobParameter $parameters)
    {
      return $this->__soapCall('SetJobParameter', array($parameters));
    }

    /**
     * Sets the job parameters.
     *
     * @param SetJobParameters $parameters
     * @return SetJobParametersResponse
     */
    public function SetJobParameters(SetJobParameters $parameters)
    {
      return $this->__soapCall('SetJobParameters', array($parameters));
    }

    /**
     * Gets the job parameter.
     *
     * @param GetJobParameter $parameters
     * @return GetJobParameterResponse
     */
    public function GetJobParameter(GetJobParameter $parameters)
    {
      return $this->__soapCall('GetJobParameter', array($parameters));
    }

    /**
     * Gets the job parameters.
     *
     * @param GetJobParameters $parameters
     * @return GetJobParametersResponse
     */
    public function GetJobParameters(GetJobParameters $parameters)
    {
      return $this->__soapCall('GetJobParameters', array($parameters));
    }

    /**
     * Removes the job parameter.
     *
     * @param RemoveJobParameter $parameters
     * @return RemoveJobParameterResponse
     */
    public function RemoveJobParameter(RemoveJobParameter $parameters)
    {
      return $this->__soapCall('RemoveJobParameter', array($parameters));
    }

    /**
     * Removes the job parameters.
     *
     * @param RemoveJobParameters $parameters
     * @return RemoveJobParametersResponse
     */
    public function RemoveJobParameters(RemoveJobParameters $parameters)
    {
      return $this->__soapCall('RemoveJobParameters', array($parameters));
    }

    /**
     * Removes all the job parameters.
     *
     * @param RemoveAllJobParameters $parameters
     * @return RemoveAllJobParametersResponse
     */
    public function RemoveAllJobParameters(RemoveAllJobParameters $parameters)
    {
      return $this->__soapCall('RemoveAllJobParameters', array($parameters));
    }

    /**
     * Sets the email job information.
     *
     * @param SetEmailInfo $parameters
     * @return SetEmailInfoResponse
     */
    public function SetEmailInfo(SetEmailInfo $parameters)
    {
      return $this->__soapCall('SetEmailInfo', array($parameters));
    }

    /**
     * Sets the email job email ADOR name.
     *
     * @param SetEmailAdorName $parameters
     * @return SetEmailAdorNameResponse
     */
    public function SetEmailAdorName(SetEmailAdorName $parameters)
    {
      return $this->__soapCall('SetEmailAdorName', array($parameters));
    }

    /**
     * Sets the email job sender ADOR name.
     *
     * @param SetSenderAdorName $parameters
     * @return SetSenderAdorNameResponse
     */
    public function SetSenderAdorName(SetSenderAdorName $parameters)
    {
      return $this->__soapCall('SetSenderAdorName', array($parameters));
    }

    /**
     * Sets the email job subject ADOR name.
     *
     * @param SetSubjectAdorName $parameters
     * @return SetSubjectAdorNameResponse
     */
    public function SetSubjectAdorName(SetSubjectAdorName $parameters)
    {
      return $this->__soapCall('SetSubjectAdorName', array($parameters));
    }

    /**
     * Sets to true to embed the email job output files.
     *
     * @param SetEmbedEmailBody $parameters
     * @return SetEmbedEmailBodyResponse
     */
    public function SetEmbedEmailBody(SetEmbedEmailBody $parameters)
    {
      return $this->__soapCall('SetEmbedEmailBody', array($parameters));
    }

    /**
     * Sets the email job output type.
     *
     * @param SetProcessEmailOutputType $parameters
     * @return SetProcessEmailOutputTypeResponse
     */
    public function SetProcessEmailOutputType(SetProcessEmailOutputType $parameters)
    {
      return $this->__soapCall('SetProcessEmailOutputType', array($parameters));
    }

    /**
     * Sets the email job on demand base url.
     *
     * @param SetOnDemandBaseURL $parameters
     * @return SetOnDemandBaseURLResponse
     */
    public function SetOnDemandBaseURL(SetOnDemandBaseURL $parameters)
    {
      return $this->__soapCall('SetOnDemandBaseURL', array($parameters));
    }

    /**
     * Gets the email job email ADOR name.
     *
     * @param GetEmailAdorName $parameters
     * @return GetEmailAdorNameResponse
     */
    public function GetEmailAdorName(GetEmailAdorName $parameters)
    {
      return $this->__soapCall('GetEmailAdorName', array($parameters));
    }

    /**
     * Gets the email job sender ADOR name.
     *
     * @param GetSenderAdorName $parameters
     * @return GetSenderAdorNameResponse
     */
    public function GetSenderAdorName(GetSenderAdorName $parameters)
    {
      return $this->__soapCall('GetSenderAdorName', array($parameters));
    }

    /**
     * Gets the email job subject ADOR name.
     *
     * @param GetSubjectAdorName $parameters
     * @return GetSubjectAdorNameResponse
     */
    public function GetSubjectAdorName(GetSubjectAdorName $parameters)
    {
      return $this->__soapCall('GetSubjectAdorName', array($parameters));
    }

    /**
     * Gets true for email job embedded output.
     *
     * @param GetEmbedEmailBody $parameters
     * @return GetEmbedEmailBodyResponse
     */
    public function GetEmbedEmailBody(GetEmbedEmailBody $parameters)
    {
      return $this->__soapCall('GetEmbedEmailBody', array($parameters));
    }

    /**
     * Gets the email job output type.
     *
     * @param GetProcessEmailOutputType $parameters
     * @return GetProcessEmailOutputTypeResponse
     */
    public function GetProcessEmailOutputType(GetProcessEmailOutputType $parameters)
    {
      return $this->__soapCall('GetProcessEmailOutputType', array($parameters));
    }

    /**
     * Gets the email job on demand base url.
     *
     * @param GetOnDemandBaseURL $parameters
     * @return GetOnDemandBaseURLResponse
     */
    public function GetOnDemandBaseURL(GetOnDemandBaseURL $parameters)
    {
      return $this->__soapCall('GetOnDemandBaseURL', array($parameters));
    }

    /**
     * Retrieve the Output File Name Option (0 = Automatic, 1 = Custom, 2 = ADOR)
     *
     * @param GetOutputFileNameOption $parameters
     * @return GetOutputFileNameOptionResponse
     */
    public function GetOutputFileNameOption(GetOutputFileNameOption $parameters)
    {
      return $this->__soapCall('GetOutputFileNameOption', array($parameters));
    }

    /**
     * Sets the job output information.
     *
     * @param SetOutputInfo $parameters
     * @return SetOutputInfoResponse
     */
    public function SetOutputInfo(SetOutputInfo $parameters)
    {
      return $this->__soapCall('SetOutputInfo', array($parameters));
    }

    /**
     * Sets the job output parameter.
     *
     * @param SetOutputParameter $parameters
     * @return SetOutputParameterResponse
     */
    public function SetOutputParameter(SetOutputParameter $parameters)
    {
      return $this->__soapCall('SetOutputParameter', array($parameters));
    }

    /**
     * Sets the job output parameters.
     *
     * @param SetOutputParameters $parameters
     * @return SetOutputParametersResponse
     */
    public function SetOutputParameters(SetOutputParameters $parameters)
    {
      return $this->__soapCall('SetOutputParameters', array($parameters));
    }

    /**
     * Gets the job output parameter.
     *
     * @param GetOutputParameter $parameters
     * @return GetOutputParameterResponse
     */
    public function GetOutputParameter(GetOutputParameter $parameters)
    {
      return $this->__soapCall('GetOutputParameter', array($parameters));
    }

    /**
     * Gets the job output parameters.
     *
     * @param GetOutputParameters $parameters
     * @return GetOutputParametersResponse
     */
    public function GetOutputParameters(GetOutputParameters $parameters)
    {
      return $this->__soapCall('GetOutputParameters', array($parameters));
    }

    /**
     * Removes the job output parameter.
     *
     * @param RemoveOutputParameter $parameters
     * @return RemoveOutputParameterResponse
     */
    public function RemoveOutputParameter(RemoveOutputParameter $parameters)
    {
      return $this->__soapCall('RemoveOutputParameter', array($parameters));
    }

    /**
     * Removes the job output parameters.
     *
     * @param RemoveOutputParameters $parameters
     * @return RemoveOutputParametersResponse
     */
    public function RemoveOutputParameters(RemoveOutputParameters $parameters)
    {
      return $this->__soapCall('RemoveOutputParameters', array($parameters));
    }

    /**
     * Removes the job all output parameters.
     *
     * @param RemoveAllOutputParameters $parameters
     * @return RemoveAllOutputParametersResponse
     */
    public function RemoveAllOutputParameters(RemoveAllOutputParameters $parameters)
    {
      return $this->__soapCall('RemoveAllOutputParameters', array($parameters));
    }

    /**
     * Sets the job output to be appended with the job id.
     *
     * @param SetAppendJobID $parameters
     * @return SetAppendJobIDResponse
     */
    public function SetAppendJobID(SetAppendJobID $parameters)
    {
      return $this->__soapCall('SetAppendJobID', array($parameters));
    }

    /**
     * Sets the job output environment job name.
     *
     * @param SetEnvJobName $parameters
     * @return SetEnvJobNameResponse
     */
    public function SetEnvJobName(SetEnvJobName $parameters)
    {
      return $this->__soapCall('SetEnvJobName', array($parameters));
    }

    /**
     * Sets the job output media.
     *
     * @param SetOutputMedia $parameters
     * @return SetOutputMediaResponse
     */
    public function SetOutputMedia(SetOutputMedia $parameters)
    {
      return $this->__soapCall('SetOutputMedia', array($parameters));
    }

    /**
     * Sets the job output type.
     *
     * @param SetOutputType $parameters
     * @return SetOutputTypeResponse
     */
    public function SetOutputType(SetOutputType $parameters)
    {
      return $this->__soapCall('SetOutputType', array($parameters));
    }

    /**
     * Sets the job output folder.
     *
     * @param SetOutputFolder $parameters
     * @return SetOutputFolderResponse
     */
    public function SetOutputFolder(SetOutputFolder $parameters)
    {
      return $this->__soapCall('SetOutputFolder', array($parameters));
    }

    /**
     * Sets the job output file name.
     *
     * @param SetOutputFileName $parameters
     * @return SetOutputFileNameResponse
     */
    public function SetOutputFileName(SetOutputFileName $parameters)
    {
      return $this->__soapCall('SetOutputFileName', array($parameters));
    }

    /**
     * Gets if job output marked to append job id.
     *
     * @param GetAppendJobID $parameters
     * @return GetAppendJobIDResponse
     */
    public function GetAppendJobID(GetAppendJobID $parameters)
    {
      return $this->__soapCall('GetAppendJobID', array($parameters));
    }

    /**
     * Gets if job output marked to use default cache environment.
     *
     * @param GetDefaultCacheEnv $parameters
     * @return GetDefaultCacheEnvResponse
     */
    public function GetDefaultCacheEnv(GetDefaultCacheEnv $parameters)
    {
      return $this->__soapCall('GetDefaultCacheEnv', array($parameters));
    }

    /**
     * Gets job output cache environment name.
     *
     * @param GetEnvJobName $parameters
     * @return GetEnvJobNameResponse
     */
    public function GetEnvJobName(GetEnvJobName $parameters)
    {
      return $this->__soapCall('GetEnvJobName', array($parameters));
    }

    /**
     * Gets job output media.
     *
     * @param GetOutputMedia $parameters
     * @return GetOutputMediaResponse
     */
    public function GetOutputMedia(GetOutputMedia $parameters)
    {
      return $this->__soapCall('GetOutputMedia', array($parameters));
    }

    /**
     * Gets job output type.
     *
     * @param GetOutputType $parameters
     * @return GetOutputTypeResponse
     */
    public function GetOutputType(GetOutputType $parameters)
    {
      return $this->__soapCall('GetOutputType', array($parameters));
    }

    /**
     * Gets job output folder.
     *
     * @param GetOutputFolder $parameters
     * @return GetOutputFolderResponse
     */
    public function GetOutputFolder(GetOutputFolder $parameters)
    {
      return $this->__soapCall('GetOutputFolder', array($parameters));
    }

    /**
     * Gets job output file name.
     *
     * @param GetOutputFileName $parameters
     * @return GetOutputFileNameResponse
     */
    public function GetOutputFileName(GetOutputFileName $parameters)
    {
      return $this->__soapCall('GetOutputFileName', array($parameters));
    }

    /**
     * Add Imposition
     *
     * @param AddImposition $parameters
     * @return AddImpositionResponse
     */
    public function AddImposition(AddImposition $parameters)
    {
      return $this->__soapCall('AddImposition', array($parameters));
    }

    /**
     * Remove Imposition
     *
     * @param RemoveImposition $parameters
     * @return RemoveImpositionResponse
     */
    public function RemoveImposition(RemoveImposition $parameters)
    {
      return $this->__soapCall('RemoveImposition', array($parameters));
    }

    /**
     * true if imposition exist
     *
     * @param IsImpositionExist $parameters
     * @return IsImpositionExistResponse
     */
    public function IsImpositionExist(IsImpositionExist $parameters)
    {
      return $this->__soapCall('IsImpositionExist', array($parameters));
    }

    /**
     * Sets imposition parameter.
     *
     * @param SetImpositionParameter $parameters
     * @return SetImpositionParameterResponse
     */
    public function SetImpositionParameter(SetImpositionParameter $parameters)
    {
      return $this->__soapCall('SetImpositionParameter', array($parameters));
    }

    /**
     * Sets imposition parameters.
     *
     * @param SetImpositionParameters $parameters
     * @return SetImpositionParametersResponse
     */
    public function SetImpositionParameters(SetImpositionParameters $parameters)
    {
      return $this->__soapCall('SetImpositionParameters', array($parameters));
    }

    /**
     * Gets imposition parameter.
     *
     * @param GetImpositionParameter $parameters
     * @return GetImpositionParameterResponse
     */
    public function GetImpositionParameter(GetImpositionParameter $parameters)
    {
      return $this->__soapCall('GetImpositionParameter', array($parameters));
    }

    /**
     * Gets imposition parameters.
     *
     * @param GetImpositionParameters $parameters
     * @return GetImpositionParametersResponse
     */
    public function GetImpositionParameters(GetImpositionParameters $parameters)
    {
      return $this->__soapCall('GetImpositionParameters', array($parameters));
    }

    /**
     * Removes imposition parameter.
     *
     * @param RemoveImpositionParameter $parameters
     * @return RemoveImpositionParameterResponse
     */
    public function RemoveImpositionParameter(RemoveImpositionParameter $parameters)
    {
      return $this->__soapCall('RemoveImpositionParameter', array($parameters));
    }

    /**
     * Removes imposition parameters.
     *
     * @param RemoveImpositionParameters $parameters
     * @return RemoveImpositionParametersResponse
     */
    public function RemoveImpositionParameters(RemoveImpositionParameters $parameters)
    {
      return $this->__soapCall('RemoveImpositionParameters', array($parameters));
    }

    /**
     * Removes imposition all parameters.
     *
     * @param RemoveAllImpositionParameters $parameters
     * @return RemoveAllImpositionParametersResponse
     */
    public function RemoveAllImpositionParameters(RemoveAllImpositionParameters $parameters)
    {
      return $this->__soapCall('RemoveAllImpositionParameters', array($parameters));
    }

    /**
     * Add JDF.
     *
     * @param AddJDF $parameters
     * @return AddJDFResponse
     */
    public function AddJDF(AddJDF $parameters)
    {
      return $this->__soapCall('AddJDF', array($parameters));
    }

    /**
     * Remove JDF.
     *
     * @param RemoveJDF $parameters
     * @return RemoveJDFResponse
     */
    public function RemoveJDF(RemoveJDF $parameters)
    {
      return $this->__soapCall('RemoveJDF', array($parameters));
    }

    /**
     * true if JDF exist in the ticket.
     *
     * @param IsJDFExist $parameters
     * @return IsJDFExistResponse
     */
    public function IsJDFExist(IsJDFExist $parameters)
    {
      return $this->__soapCall('IsJDFExist', array($parameters));
    }

    /**
     * Sets JDF parameter.
     *
     * @param SetJDFParameter $parameters
     * @return SetJDFParameterResponse
     */
    public function SetJDFParameter(SetJDFParameter $parameters)
    {
      return $this->__soapCall('SetJDFParameter', array($parameters));
    }

    /**
     * Sets JDF parameters.
     *
     * @param SetJDFParameters $parameters
     * @return SetJDFParametersResponse
     */
    public function SetJDFParameters(SetJDFParameters $parameters)
    {
      return $this->__soapCall('SetJDFParameters', array($parameters));
    }

    /**
     * Gets JDF parameter.
     *
     * @param GetJDFParameter $parameters
     * @return GetJDFParameterResponse
     */
    public function GetJDFParameter(GetJDFParameter $parameters)
    {
      return $this->__soapCall('GetJDFParameter', array($parameters));
    }

    /**
     * Gets JDF parameters.
     *
     * @param GetJDFParameters $parameters
     * @return GetJDFParametersResponse
     */
    public function GetJDFParameters(GetJDFParameters $parameters)
    {
      return $this->__soapCall('GetJDFParameters', array($parameters));
    }

    /**
     * Removes JDF parameter.
     *
     * @param RemoveJDFParameter $parameters
     * @return RemoveJDFParameterResponse
     */
    public function RemoveJDFParameter(RemoveJDFParameter $parameters)
    {
      return $this->__soapCall('RemoveJDFParameter', array($parameters));
    }

    /**
     * Removes JDF parameters.
     *
     * @param RemoveJDFParameters $parameters
     * @return RemoveJDFParametersResponse
     */
    public function RemoveJDFParameters(RemoveJDFParameters $parameters)
    {
      return $this->__soapCall('RemoveJDFParameters', array($parameters));
    }

    /**
     * Removes JDF all parameters.
     *
     * @param RemoveAllJDFParameters $parameters
     * @return RemoveAllJDFParametersResponse
     */
    public function RemoveAllJDFParameters(RemoveAllJDFParameters $parameters)
    {
      return $this->__soapCall('RemoveAllJDFParameters', array($parameters));
    }

    /**
     * Add Compression
     *
     * @param AddCompression $parameters
     * @return AddCompressionResponse
     */
    public function AddCompression(AddCompression $parameters)
    {
      return $this->__soapCall('AddCompression', array($parameters));
    }

    /**
     * Remove Compression
     *
     * @param RemoveCompression $parameters
     * @return RemoveCompressionResponse
     */
    public function RemoveCompression(RemoveCompression $parameters)
    {
      return $this->__soapCall('RemoveCompression', array($parameters));
    }

    /**
     * Return true if compression exist in the ticket.
     *
     * @param IsCompressionExist $parameters
     * @return IsCompressionExistResponse
     */
    public function IsCompressionExist(IsCompressionExist $parameters)
    {
      return $this->__soapCall('IsCompressionExist', array($parameters));
    }

    /**
     * Return true if it is VPC compression.
     *
     * @param IsVPCCompression $parameters
     * @return IsVPCCompressionResponse
     */
    public function IsVPCCompression(IsVPCCompression $parameters)
    {
      return $this->__soapCall('IsVPCCompression', array($parameters));
    }

    /**
     * Add destination by destination id.
     *
     * @param AddDestinationByID $parameters
     * @return AddDestinationByIDResponse
     */
    public function AddDestinationByID(AddDestinationByID $parameters)
    {
      return $this->__soapCall('AddDestinationByID', array($parameters));
    }

    /**
     * Add FTP.
     *
     * @param AddFTP $parameters
     * @return AddFTPResponse
     */
    public function AddFTP(AddFTP $parameters)
    {
      return $this->__soapCall('AddFTP', array($parameters));
    }

    /**
     * Add FTP by destination id.
     *
     * @param AddFTPByID $parameters
     * @return AddFTPByIDResponse
     */
    public function AddFTPByID(AddFTPByID $parameters)
    {
      return $this->__soapCall('AddFTPByID', array($parameters));
    }

    /**
     * Remove FTP.
     *
     * @param RemoveFTP $parameters
     * @return RemoveFTPResponse
     */
    public function RemoveFTP(RemoveFTP $parameters)
    {
      return $this->__soapCall('RemoveFTP', array($parameters));
    }

    /**
     * true if FTP exist in the ticket.
     *
     * @param IsFTPExist $parameters
     * @return IsFTPExistResponse
     */
    public function IsFTPExist(IsFTPExist $parameters)
    {
      return $this->__soapCall('IsFTPExist', array($parameters));
    }

    /**
     * Gets the FTP destination id.
     *
     * @param GetFTPID $parameters
     * @return GetFTPIDResponse
     */
    public function GetFTPID(GetFTPID $parameters)
    {
      return $this->__soapCall('GetFTPID', array($parameters));
    }

    /**
     * Gets the FTP address.
     *
     * @param GetFTPAddress $parameters
     * @return GetFTPAddressResponse
     */
    public function GetFTPAddress(GetFTPAddress $parameters)
    {
      return $this->__soapCall('GetFTPAddress', array($parameters));
    }

    /**
     * Gets the FTP port.
     *
     * @param GetFTPPort $parameters
     * @return GetFTPPortResponse
     */
    public function GetFTPPort(GetFTPPort $parameters)
    {
      return $this->__soapCall('GetFTPPort', array($parameters));
    }

    /**
     * Gets the FTP user.
     *
     * @param GetFTPUser $parameters
     * @return GetFTPUserResponse
     */
    public function GetFTPUser(GetFTPUser $parameters)
    {
      return $this->__soapCall('GetFTPUser', array($parameters));
    }

    /**
     * Gets the FTP password.
     *
     * @param GetFTPPassword $parameters
     * @return GetFTPPasswordResponse
     */
    public function GetFTPPassword(GetFTPPassword $parameters)
    {
      return $this->__soapCall('GetFTPPassword', array($parameters));
    }

    /**
     * Gets the FTP passiveness.
     *
     * @param GetFTPPassive $parameters
     * @return GetFTPPassiveResponse
     */
    public function GetFTPPassive(GetFTPPassive $parameters)
    {
      return $this->__soapCall('GetFTPPassive', array($parameters));
    }

    /**
     * Gets whether the FTP deleted the source.
     *
     * @param IsFTPDeleteSource $parameters
     * @return IsFTPDeleteSourceResponse
     */
    public function IsFTPDeleteSource(IsFTPDeleteSource $parameters)
    {
      return $this->__soapCall('IsFTPDeleteSource', array($parameters));
    }

    /**
     * Add UMail.
     *
     * @param AddUMail $parameters
     * @return AddUMailResponse
     */
    public function AddUMail(AddUMail $parameters)
    {
      return $this->__soapCall('AddUMail', array($parameters));
    }

    /**
     * Remove UMail.
     *
     * @param RemoveUMail $parameters
     * @return RemoveUMailResponse
     */
    public function RemoveUMail(RemoveUMail $parameters)
    {
      return $this->__soapCall('RemoveUMail', array($parameters));
    }

    /**
     * true if UMail exist in the ticket.
     *
     * @param IsUMailExist $parameters
     * @return IsUMailExistResponse
     */
    public function IsUMailExist(IsUMailExist $parameters)
    {
      return $this->__soapCall('IsUMailExist', array($parameters));
    }

    /**
     * Gets the UMail template.
     *
     * @param GetUMailTemplate $parameters
     * @return GetUMailTemplateResponse
     */
    public function GetUMailTemplate(GetUMailTemplate $parameters)
    {
      return $this->__soapCall('GetUMailTemplate', array($parameters));
    }

    /**
     * Gets the UMail Orig Zip.
     *
     * @param GetUMailOrigZip $parameters
     * @return GetUMailOrigZipResponse
     */
    public function GetUMailOrigZip(GetUMailOrigZip $parameters)
    {
      return $this->__soapCall('GetUMailOrigZip', array($parameters));
    }

    /**
     * Gets the UMail PCWT.
     *
     * @param GetUMailPCWT $parameters
     * @return GetUMailPCWTResponse
     */
    public function GetUMailPCWT(GetUMailPCWT $parameters)
    {
      return $this->__soapCall('GetUMailPCWT', array($parameters));
    }

    /**
     * Gets the UMail PCThick.
     *
     * @param GetUMailPCThick $parameters
     * @return GetUMailPCThickResponse
     */
    public function GetUMailPCThick(GetUMailPCThick $parameters)
    {
      return $this->__soapCall('GetUMailPCThick', array($parameters));
    }

    /**
     * Add Print.
     *
     * @param AddPrint $parameters
     * @return AddPrintResponse
     */
    public function AddPrint(AddPrint $parameters)
    {
      return $this->__soapCall('AddPrint', array($parameters));
    }

    /**
     * Add Print by destination id.
     *
     * @param AddPrintByID $parameters
     * @return AddPrintByIDResponse
     */
    public function AddPrintByID(AddPrintByID $parameters)
    {
      return $this->__soapCall('AddPrintByID', array($parameters));
    }

    /**
     * Remove Print.
     *
     * @param RemovePrint $parameters
     * @return RemovePrintResponse
     */
    public function RemovePrint(RemovePrint $parameters)
    {
      return $this->__soapCall('RemovePrint', array($parameters));
    }

    /**
     * true if print exist in the ticket.
     *
     * @param IsPrintExist $parameters
     * @return IsPrintExistResponse
     */
    public function IsPrintExist(IsPrintExist $parameters)
    {
      return $this->__soapCall('IsPrintExist', array($parameters));
    }

    /**
     * Gets the print destination id.
     *
     * @param GetPrintID $parameters
     * @return GetPrintIDResponse
     */
    public function GetPrintID(GetPrintID $parameters)
    {
      return $this->__soapCall('GetPrintID', array($parameters));
    }

    /**
     * Get the Printer name
     *
     * @param GetPrinter $parameters
     * @return GetPrinterResponse
     */
    public function GetPrinter(GetPrinter $parameters)
    {
      return $this->__soapCall('GetPrinter', array($parameters));
    }

    /**
     * Get whether the Printer requested to delete the source
     *
     * @param IsPrinterDeleteSource $parameters
     * @return IsPrinterDeleteSourceResponse
     */
    public function IsPrinterDeleteSource(IsPrinterDeleteSource $parameters)
    {
      return $this->__soapCall('IsPrinterDeleteSource', array($parameters));
    }

    /**
     * Add FFPM.
     *
     * @param AddFFPM $parameters
     * @return AddFFPMResponse
     */
    public function AddFFPM(AddFFPM $parameters)
    {
      return $this->__soapCall('AddFFPM', array($parameters));
    }

    /**
     * Add FFPM by destination id.
     *
     * @param AddFFPMByID $parameters
     * @return AddFFPMByIDResponse
     */
    public function AddFFPMByID(AddFFPMByID $parameters)
    {
      return $this->__soapCall('AddFFPMByID', array($parameters));
    }

    /**
     * Removes FFPM.
     *
     * @param RemoveFFPM $parameters
     * @return RemoveFFPMResponse
     */
    public function RemoveFFPM(RemoveFFPM $parameters)
    {
      return $this->__soapCall('RemoveFFPM', array($parameters));
    }

    /**
     * true if FFPM exist in the ticket.
     *
     * @param IsFFPMExist $parameters
     * @return IsFFPMExistResponse
     */
    public function IsFFPMExist(IsFFPMExist $parameters)
    {
      return $this->__soapCall('IsFFPMExist', array($parameters));
    }

    /**
     * Gets FFPM destination id.
     *
     * @param GetFFPMID $parameters
     * @return GetFFPMIDResponse
     */
    public function GetFFPMID(GetFFPMID $parameters)
    {
      return $this->__soapCall('GetFFPMID', array($parameters));
    }

    /**
     * Gets whether the FFPM requested to delete the source.
     *
     * @param IsFFPMDeleteSource $parameters
     * @return IsFFPMDeleteSourceResponse
     */
    public function IsFFPMDeleteSource(IsFFPMDeleteSource $parameters)
    {
      return $this->__soapCall('IsFFPMDeleteSource', array($parameters));
    }

    /**
     * Create new Ticket.
     *
     * @param CreateNewTicket $parameters
     * @return CreateNewTicketResponse
     */
    public function CreateNewTicket(CreateNewTicket $parameters)
    {
      return $this->__soapCall('CreateNewTicket', array($parameters));
    }

    /**
     * Create new Ticket initialized for the document production.
     *
     * @param CreateNewTicketForDocument $parameters
     * @return CreateNewTicketForDocumentResponse
     */
    public function CreateNewTicketForDocument(CreateNewTicketForDocument $parameters)
    {
      return $this->__soapCall('CreateNewTicketForDocument', array($parameters));
    }

    /**
     * Create new Ticket initialized for the plan production.
     *
     * @param CreateNewTicketForPlan $parameters
     * @return CreateNewTicketForPlanResponse
     */
    public function CreateNewTicketForPlan(CreateNewTicketForPlan $parameters)
    {
      return $this->__soapCall('CreateNewTicketForPlan', array($parameters));
    }

    /**
     * Create new Ticket initialized for the campaign production.
     *
     * @param CreateNewTicketForCampaign $parameters
     * @return CreateNewTicketForCampaignResponse
     */
    public function CreateNewTicketForCampaign(CreateNewTicketForCampaign $parameters)
    {
      return $this->__soapCall('CreateNewTicketForCampaign', array($parameters));
    }

    /**
     * Recycles a ticket id.
     *
     * @param RecycleTicketID $parameters
     * @return RecycleTicketIDResponse
     */
    public function RecycleTicketID(RecycleTicketID $parameters)
    {
      return $this->__soapCall('RecycleTicketID', array($parameters));
    }

    /**
     * loads a ticket from pre-saved ticket.
     *
     * @param LoadTicketFromFile $parameters
     * @return LoadTicketFromFileResponse
     */
    public function LoadTicketFromFile(LoadTicketFromFile $parameters)
    {
      return $this->__soapCall('LoadTicketFromFile', array($parameters));
    }

    /**
     * loads the ticket of a job.
     *
     * @param LoadJobTicket $parameters
     * @return LoadJobTicketResponse
     */
    public function LoadJobTicket(LoadJobTicket $parameters)
    {
      return $this->__soapCall('LoadJobTicket', array($parameters));
    }

    /**
     * loads the last ticket used for this document production.
     *
     * @param LoadLastJobTicketOfDocument $parameters
     * @return LoadLastJobTicketOfDocumentResponse
     */
    public function LoadLastJobTicketOfDocument(LoadLastJobTicketOfDocument $parameters)
    {
      return $this->__soapCall('LoadLastJobTicketOfDocument', array($parameters));
    }

    /**
     * loads the last ticket used for this plan production (proofset).
     *
     * @param LoadLastJobTicketOfPlan $parameters
     * @return LoadLastJobTicketOfPlanResponse
     */
    public function LoadLastJobTicketOfPlan(LoadLastJobTicketOfPlan $parameters)
    {
      return $this->__soapCall('LoadLastJobTicketOfPlan', array($parameters));
    }

    /**
     * loads a ticket - initialized a ticket id from an actual ticket
     *
     * @param LoadTicketFromTicket $parameters
     * @return LoadTicketFromTicketResponse
     */
    public function LoadTicketFromTicket(LoadTicketFromTicket $parameters)
    {
      return $this->__soapCall('LoadTicketFromTicket', array($parameters));
    }

    /**
     * gets a ticket property from database (either regular or template). Returns the Property.
     *
     * @param GetTicketPropertyFromDB $parameters
     * @return GetTicketPropertyFromDBResponse
     */
    public function GetTicketPropertyFromDB(GetTicketPropertyFromDB $parameters)
    {
      return $this->__soapCall('GetTicketPropertyFromDB', array($parameters));
    }

    /**
     * loads a ticket from database (either regular or template). Returns the TicketID.
     *
     * @param LoadTicketFromDB $parameters
     * @return LoadTicketFromDBResponse
     */
    public function LoadTicketFromDB(LoadTicketFromDB $parameters)
    {
      return $this->__soapCall('LoadTicketFromDB', array($parameters));
    }

    /**
     * saves a ticket to file.
     *
     * @param SaveTicketToFile $parameters
     * @return SaveTicketToFileResponse
     */
    public function SaveTicketToFile(SaveTicketToFile $parameters)
    {
      return $this->__soapCall('SaveTicketToFile', array($parameters));
    }

    /**
     * saves a ticket (or template ticket) to the database either for a given account or global.
     *
     * @param SaveNewTicketToDB $parameters
     * @return SaveNewTicketToDBResponse
     */
    public function SaveNewTicketToDB(SaveNewTicketToDB $parameters)
    {
      return $this->__soapCall('SaveNewTicketToDB', array($parameters));
    }

    /**
     * overwrites a ticket (or template ticket) to the database.
     *
     * @param OverwriteTicketInDB $parameters
     * @return OverwriteTicketInDBResponse
     */
    public function OverwriteTicketInDB(OverwriteTicketInDB $parameters)
    {
      return $this->__soapCall('OverwriteTicketInDB', array($parameters));
    }

    /**
     * deletes a ticket from the database.
     *
     * @param DeleteTicketFromDB $parameters
     * @return DeleteTicketFromDBResponse
     */
    public function DeleteTicketFromDB(DeleteTicketFromDB $parameters)
    {
      return $this->__soapCall('DeleteTicketFromDB', array($parameters));
    }

    /**
     * Retrieve Tickets (not templates) from database based on job type.
     *
     * @param GetTicketsFromDB $parameters
     * @return GetTicketsFromDBResponse
     */
    public function GetTicketsFromDB(GetTicketsFromDB $parameters)
    {
      return $this->__soapCall('GetTicketsFromDB', array($parameters));
    }

    /**
     * Retrieve Ticket Templates from database based on job type. If inAccountID is empty string all templates from permissible accounts + globals are returned. If inAccountID is a valid account number, all templates of that account + globals are returned.
     *
     * @param GetTemplatesFromDB $parameters
     * @return GetTemplatesFromDBResponse
     */
    public function GetTemplatesFromDB(GetTemplatesFromDB $parameters)
    {
      return $this->__soapCall('GetTemplatesFromDB', array($parameters));
    }

    /**
     * get the actual ticket represented by the ticket id.
     *
     * @param GetTicket $parameters
     * @return GetTicketResponse
     */
    public function GetTicket(GetTicket $parameters)
    {
      return $this->__soapCall('GetTicket', array($parameters));
    }

    /**
     * get the actual ticket represented by the ticket id, and recycles the ticket id.
     *
     * @param GetTicketAndRecycleID $parameters
     * @return GetTicketAndRecycleIDResponse
     */
    public function GetTicketAndRecycleID(GetTicketAndRecycleID $parameters)
    {
      return $this->__soapCall('GetTicketAndRecycleID', array($parameters));
    }

    /**
     * Initialize the ticket for the document production.
     *
     * @param SetTicketDefaultsForDocument $parameters
     * @return SetTicketDefaultsForDocumentResponse
     */
    public function SetTicketDefaultsForDocument(SetTicketDefaultsForDocument $parameters)
    {
      return $this->__soapCall('SetTicketDefaultsForDocument', array($parameters));
    }

    /**
     * Initialize the ticket for the plan production.
     *
     * @param SetTicketDefaultsForPlan $parameters
     * @return SetTicketDefaultsForPlanResponse
     */
    public function SetTicketDefaultsForPlan(SetTicketDefaultsForPlan $parameters)
    {
      return $this->__soapCall('SetTicketDefaultsForPlan', array($parameters));
    }

    /**
     * Initialize the ticket for the campaign production.
     *
     * @param SetTicketDefaultsForCampaign $parameters
     * @return SetTicketDefaultsForCampaignResponse
     */
    public function SetTicketDefaultsForCampaign(SetTicketDefaultsForCampaign $parameters)
    {
      return $this->__soapCall('SetTicketDefaultsForCampaign', array($parameters));
    }

    /**
     * Sets the plan in the ticket.
     *
     * @param SetPlan $parameters
     * @return SetPlanResponse
     */
    public function SetPlan(SetPlan $parameters)
    {
      return $this->__soapCall('SetPlan', array($parameters));
    }

    /**
     * Sets the plan by its id in the ticket.
     *
     * @param SetPlanByID $parameters
     * @return SetPlanByIDResponse
     */
    public function SetPlanByID(SetPlanByID $parameters)
    {
      return $this->__soapCall('SetPlanByID', array($parameters));
    }

    /**
     * Get the use trivial plan property from the ticket.
     *
     * @param GetUseTrivialPlan $parameters
     * @return GetUseTrivialPlanResponse
     */
    public function GetUseTrivialPlan(GetUseTrivialPlan $parameters)
    {
      return $this->__soapCall('GetUseTrivialPlan', array($parameters));
    }

    /**
     * Set the use trivial plan property to the ticket.
     *
     * @param SetUseTrivialPlan $parameters
     * @return SetUseTrivialPlanResponse
     */
    public function SetUseTrivialPlan(SetUseTrivialPlan $parameters)
    {
      return $this->__soapCall('SetUseTrivialPlan', array($parameters));
    }

    /**
     * Get the plan set in the ticket.
     *
     * @param GetPlanPath $parameters
     * @return GetPlanPathResponse
     */
    public function GetPlanPath(GetPlanPath $parameters)
    {
      return $this->__soapCall('GetPlanPath', array($parameters));
    }

    /**
     * Get the plan id set in the ticket.
     *
     * @param GetPlanID $parameters
     * @return GetPlanIDResponse
     */
    public function GetPlanID(GetPlanID $parameters)
    {
      return $this->__soapCall('GetPlanID', array($parameters));
    }

    /**
     * Set a customization for production.
     *
     * @param SetCustomization $parameters
     * @return SetCustomizationResponse
     */
    public function SetCustomization(SetCustomization $parameters)
    {
      return $this->__soapCall('SetCustomization', array($parameters));
    }

    /**
     * Set a customizations for production.
     *
     * @param SetCustomizations $parameters
     * @return SetCustomizationsResponse
     */
    public function SetCustomizations(SetCustomizations $parameters)
    {
      return $this->__soapCall('SetCustomizations', array($parameters));
    }

    /**
     * Removes pre-created customization for production.
     *
     * @param RemoveCustomization $parameters
     * @return RemoveCustomizationResponse
     */
    public function RemoveCustomization(RemoveCustomization $parameters)
    {
      return $this->__soapCall('RemoveCustomization', array($parameters));
    }

    /**
     * Removes all pre-created customizations for production.
     *
     * @param RemoveAllCustomizations $parameters
     * @return RemoveAllCustomizationsResponse
     */
    public function RemoveAllCustomizations(RemoveAllCustomizations $parameters)
    {
      return $this->__soapCall('RemoveAllCustomizations', array($parameters));
    }

    /**
     * Get the number of customizations set for production.
     *
     * @param GetCustomizationsCount $parameters
     * @return GetCustomizationsCountResponse
     */
    public function GetCustomizationsCount(GetCustomizationsCount $parameters)
    {
      return $this->__soapCall('GetCustomizationsCount', array($parameters));
    }

    /**
     * Get the nth customization set for production.
     *
     * @param GetNthCustomization $parameters
     * @return GetNthCustomizationResponse
     */
    public function GetNthCustomization(GetNthCustomization $parameters)
    {
      return $this->__soapCall('GetNthCustomization', array($parameters));
    }

    /**
     * Get all the customizations set for production.
     *
     * @param GetCustomizations $parameters
     * @return GetCustomizationsResponse
     */
    public function GetCustomizations(GetCustomizations $parameters)
    {
      return $this->__soapCall('GetCustomizations', array($parameters));
    }

    /**
     * Sets the document by its id in the ticket.
     *
     * @param SetDocumentByID $parameters
     * @return SetDocumentByIDResponse
     */
    public function SetDocumentByID(SetDocumentByID $parameters)
    {
      return $this->__soapCall('SetDocumentByID', array($parameters));
    }

    /**
     * Sets the document in the ticket.
     *
     * @param SetDocument $parameters
     * @return SetDocumentResponse
     */
    public function SetDocument(SetDocument $parameters)
    {
      return $this->__soapCall('SetDocument', array($parameters));
    }

    /**
     * Get the document id set in the ticket.
     *
     * @param GetDocumentID $parameters
     * @return GetDocumentIDResponse
     */
    public function GetDocumentID(GetDocumentID $parameters)
    {
      return $this->__soapCall('GetDocumentID', array($parameters));
    }

    /**
     * Get the document folder set in the ticket.
     *
     * @param GetDocumentFolder $parameters
     * @return GetDocumentFolderResponse
     */
    public function GetDocumentFolder(GetDocumentFolder $parameters)
    {
      return $this->__soapCall('GetDocumentFolder', array($parameters));
    }

    /**
     * Get the document name set in the ticket.
     *
     * @param GetDocumentName $parameters
     * @return GetDocumentNameResponse
     */
    public function GetDocumentName(GetDocumentName $parameters)
    {
      return $this->__soapCall('GetDocumentName', array($parameters));
    }

    /**
     * Get the document type set in the ticket.
     *
     * @param GetDocumentType $parameters
     * @return GetDocumentTypeResponse
     */
    public function GetDocumentType(GetDocumentType $parameters)
    {
      return $this->__soapCall('GetDocumentType', array($parameters));
    }

    /**
     * Set the web resources base path in the ticket.
     *
     * @param SetWebResourcesBasePath $parameters
     * @return SetWebResourcesBasePathResponse
     */
    public function SetWebResourcesBasePath(SetWebResourcesBasePath $parameters)
    {
      return $this->__soapCall('SetWebResourcesBasePath', array($parameters));
    }

    /**
     * Get the web resources base path in the ticket.
     *
     * @param GetWebResourcesBasePath $parameters
     * @return GetWebResourcesBasePathResponse
     */
    public function GetWebResourcesBasePath(GetWebResourcesBasePath $parameters)
    {
      return $this->__soapCall('GetWebResourcesBasePath', array($parameters));
    }

    /**
     * Set allow friendly in the ticket.
     *
     * @param SetAllowFriendly $parameters
     * @return SetAllowFriendlyResponse
     */
    public function SetAllowFriendly(SetAllowFriendly $parameters)
    {
      return $this->__soapCall('SetAllowFriendly', array($parameters));
    }

    /**
     * Get is allow friendly in the ticket.
     *
     * @param GetAllowFriendly $parameters
     * @return GetAllowFriendlyResponse
     */
    public function GetAllowFriendly(GetAllowFriendly $parameters)
    {
      return $this->__soapCall('GetAllowFriendly', array($parameters));
    }

    /**
     * Set friendliness information in the ticket.
     *
     * @param SetFriendliness $parameters
     * @return SetFriendlinessResponse
     */
    public function SetFriendliness(SetFriendliness $parameters)
    {
      return $this->__soapCall('SetFriendliness', array($parameters));
    }

    /**
     * Get friendly domain in the ticket.
     *
     * @param GetFriendlyDomain $parameters
     * @return GetFriendlyDomainResponse
     */
    public function GetFriendlyDomain(GetFriendlyDomain $parameters)
    {
      return $this->__soapCall('GetFriendlyDomain', array($parameters));
    }

    /**
     * Get friendly folder in the ticket.
     *
     * @param GetFriendlyFolder $parameters
     * @return GetFriendlyFolderResponse
     */
    public function GetFriendlyFolder(GetFriendlyFolder $parameters)
    {
      return $this->__soapCall('GetFriendlyFolder', array($parameters));
    }

    /**
     * Get friendly landing page in the ticket.
     *
     * @param GetFriendlyLandingPage $parameters
     * @return GetFriendlyLandingPageResponse
     */
    public function GetFriendlyLandingPage(GetFriendlyLandingPage $parameters)
    {
      return $this->__soapCall('GetFriendlyLandingPage', array($parameters));
    }

    /**
     * Return true if friendly redirect mode is defined in the ticket.
     *
     * @param IsFriendlyUrlRedirectMode $parameters
     * @return IsFriendlyUrlRedirectModeResponse
     */
    public function IsFriendlyUrlRedirectMode(IsFriendlyUrlRedirectMode $parameters)
    {
      return $this->__soapCall('IsFriendlyUrlRedirectMode', array($parameters));
    }

    /**
     * Return true if prefix recipient ID friendly mode is defined in the ticket.
     *
     * @param IsFriendlyUrlUseRIDPrefixMode $parameters
     * @return IsFriendlyUrlUseRIDPrefixModeResponse
     */
    public function IsFriendlyUrlUseRIDPrefixMode(IsFriendlyUrlUseRIDPrefixMode $parameters)
    {
      return $this->__soapCall('IsFriendlyUrlUseRIDPrefixMode', array($parameters));
    }

    /**
     * Sets the campaign id in the ticket.
     *
     * @param SetCampaignID $parameters
     * @return SetCampaignIDResponse
     */
    public function SetCampaignID(SetCampaignID $parameters)
    {
      return $this->__soapCall('SetCampaignID', array($parameters));
    }

    /**
     * Gets the campaign id in the ticket.
     *
     * @param GetCampaignID $parameters
     * @return GetCampaignIDResponse
     */
    public function GetCampaignID(GetCampaignID $parameters)
    {
      return $this->__soapCall('GetCampaignID', array($parameters));
    }

    /**
     * Sets the fonts folder in the ticket.
     *
     * @param SetFonts $parameters
     * @return SetFontsResponse
     */
    public function SetFonts(SetFonts $parameters)
    {
      return $this->__soapCall('SetFonts', array($parameters));
    }

    /**
     * Sets the fonts by id in the ticket.
     *
     * @param SetFontsByID $parameters
     * @return SetFontsByIDResponse
     */
    public function SetFontsByID(SetFontsByID $parameters)
    {
      return $this->__soapCall('SetFontsByID', array($parameters));
    }

    /**
     * Gets the fonts folder in the ticket.
     *
     * @param GetFontsFolder $parameters
     * @return GetFontsFolderResponse
     */
    public function GetFontsFolder(GetFontsFolder $parameters)
    {
      return $this->__soapCall('GetFontsFolder', array($parameters));
    }

    /**
     * Sets a port link.
     *
     * @param SetPortLink $parameters
     * @return SetPortLinkResponse
     */
    public function SetPortLink(SetPortLink $parameters)
    {
      return $this->__soapCall('SetPortLink', array($parameters));
    }

    /**
     * Refreshes the port link information.
     *
     * @param RefreshPortLink $parameters
     * @return RefreshPortLinkResponse
     */
    public function RefreshPortLink(RefreshPortLink $parameters)
    {
      return $this->__soapCall('RefreshPortLink', array($parameters));
    }

    /**
     * Removes a port link.
     *
     * @param RemovePortLink $parameters
     * @return RemovePortLinkResponse
     */
    public function RemovePortLink(RemovePortLink $parameters)
    {
      return $this->__soapCall('RemovePortLink', array($parameters));
    }

    /**
     * Checks if a port link exists.
     *
     * @param IsPortLinkExist $parameters
     * @return IsPortLinkExistResponse
     */
    public function IsPortLinkExist(IsPortLinkExist $parameters)
    {
      return $this->__soapCall('IsPortLinkExist', array($parameters));
    }

    /**
     * Gets the port link account name.
     *
     * @param GetPortLinkAccount $parameters
     * @return GetPortLinkAccountResponse
     */
    public function GetPortLinkAccount(GetPortLinkAccount $parameters)
    {
      return $this->__soapCall('GetPortLinkAccount', array($parameters));
    }

    /**
     * Gets the port link campaign name.
     *
     * @param GetPortLinkCampaign $parameters
     * @return GetPortLinkCampaignResponse
     */
    public function GetPortLinkCampaign(GetPortLinkCampaign $parameters)
    {
      return $this->__soapCall('GetPortLinkCampaign', array($parameters));
    }

    /**
     * Gets the port link port name.
     *
     * @param GetPortLinkPortName $parameters
     * @return GetPortLinkPortNameResponse
     */
    public function GetPortLinkPortName(GetPortLinkPortName $parameters)
    {
      return $this->__soapCall('GetPortLinkPortName', array($parameters));
    }

    /**
     * Sets a schema data source in the ticket.
     *
     * @param SetDataSource $parameters
     * @return SetDataSourceResponse
     */
    public function SetDataSource(SetDataSource $parameters)
    {
      return $this->__soapCall('SetDataSource', array($parameters));
    }

    /**
     * Sets schemas data sources in the ticket.
     *
     * @param SetDataSources $parameters
     * @return SetDataSourcesResponse
     */
    public function SetDataSources(SetDataSources $parameters)
    {
      return $this->__soapCall('SetDataSources', array($parameters));
    }

    /**
     * Sets a schema data source by id in the ticket.
     *
     * @param SetDataSourceByID $parameters
     * @return SetDataSourceByIDResponse
     */
    public function SetDataSourceByID(SetDataSourceByID $parameters)
    {
      return $this->__soapCall('SetDataSourceByID', array($parameters));
    }

    /**
     * Sets schemas data sources by ids in the ticket.
     *
     * @param SetDataSourcesByID $parameters
     * @return SetDataSourcesByIDResponse
     */
    public function SetDataSourcesByID(SetDataSourcesByID $parameters)
    {
      return $this->__soapCall('SetDataSourcesByID', array($parameters));
    }

    /**
     * Sets all campaign defaulted schemas data sources in the ticket.
     *
     * @param SetDefaultDataSources $parameters
     * @return SetDefaultDataSourcesResponse
     */
    public function SetDefaultDataSources(SetDefaultDataSources $parameters)
    {
      return $this->__soapCall('SetDefaultDataSources', array($parameters));
    }

    /**
     * Removes all schemas data sources in the ticket.
     *
     * @param RemoveAllSchemaDataSources $parameters
     * @return RemoveAllSchemaDataSourcesResponse
     */
    public function RemoveAllSchemaDataSources(RemoveAllSchemaDataSources $parameters)
    {
      return $this->__soapCall('RemoveAllSchemaDataSources', array($parameters));
    }

    /**
     * Removes a schema data source in the ticket.
     *
     * @param RemoveSchemaDataSource $parameters
     * @return RemoveSchemaDataSourceResponse
     */
    public function RemoveSchemaDataSource(RemoveSchemaDataSource $parameters)
    {
      return $this->__soapCall('RemoveSchemaDataSource', array($parameters));
    }

    /**
     * Gets a schema data source in the ticket.
     *
     * @param GetSchemaDataSource $parameters
     * @return GetSchemaDataSourceResponse
     */
    public function GetSchemaDataSource(GetSchemaDataSource $parameters)
    {
      return $this->__soapCall('GetSchemaDataSource', array($parameters));
    }

    /**
     * Gets a schema data source id in the ticket.
     *
     * @param GetSchemaDataSourceID $parameters
     * @return GetSchemaDataSourceIDResponse
     */
    public function GetSchemaDataSourceID(GetSchemaDataSourceID $parameters)
    {
      return $this->__soapCall('GetSchemaDataSourceID', array($parameters));
    }

    /**
     * Gets all schema names that has data sources in the ticket.
     *
     * @param GetSchemasNames $parameters
     * @return GetSchemasNamesResponse
     */
    public function GetSchemasNames(GetSchemasNames $parameters)
    {
      return $this->__soapCall('GetSchemasNames', array($parameters));
    }

    /**
     * Gets all schema data sources in the ticket.
     *
     * @param GetSchemasDataSources $parameters
     * @return GetSchemasDataSourcesResponse
     */
    public function GetSchemasDataSources(GetSchemasDataSources $parameters)
    {
      return $this->__soapCall('GetSchemasDataSources', array($parameters));
    }

    /**
     * Gets all schema data sources ids in the ticket.
     *
     * @param GetSchemaDataSourceIDs $parameters
     * @return GetSchemaDataSourceIDsResponse
     */
    public function GetSchemaDataSourceIDs(GetSchemaDataSourceIDs $parameters)
    {
      return $this->__soapCall('GetSchemaDataSourceIDs', array($parameters));
    }

    /**
     * Gets the number of schema data sources in the ticket.
     *
     * @param GetSchemaDataSourcesCount $parameters
     * @return GetSchemaDataSourcesCountResponse
     */
    public function GetSchemaDataSourcesCount(GetSchemaDataSourcesCount $parameters)
    {
      return $this->__soapCall('GetSchemaDataSourcesCount', array($parameters));
    }

    /**
     * Gets the nth schema name in the ticket.
     *
     * @param GetNthSchemaName $parameters
     * @return GetNthSchemaNameResponse
     */
    public function GetNthSchemaName(GetNthSchemaName $parameters)
    {
      return $this->__soapCall('GetNthSchemaName', array($parameters));
    }

    /**
     * Gets the nth schema data source id in the ticket.
     *
     * @param GetNthSchemaDataSourceID $parameters
     * @return GetNthSchemaDataSourceIDResponse
     */
    public function GetNthSchemaDataSourceID(GetNthSchemaDataSourceID $parameters)
    {
      return $this->__soapCall('GetNthSchemaDataSourceID', array($parameters));
    }

    /**
     * Gets the nth schema data source in the ticket.
     *
     * @param GetNthSchemaDataSource $parameters
     * @return GetNthSchemaDataSourceResponse
     */
    public function GetNthSchemaDataSource(GetNthSchemaDataSource $parameters)
    {
      return $this->__soapCall('GetNthSchemaDataSource', array($parameters));
    }

    /**
     * Sets if to resolve the assets.
     *
     * @param SetResolveAssets $parameters
     * @return SetResolveAssetsResponse
     */
    public function SetResolveAssets(SetResolveAssets $parameters)
    {
      return $this->__soapCall('SetResolveAssets', array($parameters));
    }

    /**
     * Gets if to resolve the assets.
     *
     * @param GetResolveAssets $parameters
     * @return GetResolveAssetsResponse
     */
    public function GetResolveAssets(GetResolveAssets $parameters)
    {
      return $this->__soapCall('GetResolveAssets', array($parameters));
    }

    /**
     * Sets if assets are of type connectivity.
     *
     * @param SetConnectivityAssets $parameters
     * @return SetConnectivityAssetsResponse
     */
    public function SetConnectivityAssets(SetConnectivityAssets $parameters)
    {
      return $this->__soapCall('SetConnectivityAssets', array($parameters));
    }

    /**
     * Gets if assets are of type connectivity.
     *
     * @param GetConnectivityAssets $parameters
     * @return GetConnectivityAssetsResponse
     */
    public function GetConnectivityAssets(GetConnectivityAssets $parameters)
    {
      return $this->__soapCall('GetConnectivityAssets', array($parameters));
    }

    /**
     * Sets the resolved assets prefix type.
     *
     * @param SetAssetsPrefix $parameters
     * @return SetAssetsPrefixResponse
     */
    public function SetAssetsPrefix(SetAssetsPrefix $parameters)
    {
      return $this->__soapCall('SetAssetsPrefix', array($parameters));
    }

    /**
     * Gets the resolved assets prefix type.
     *
     * @param GetAssetsPrefixType $parameters
     * @return GetAssetsPrefixTypeResponse
     */
    public function GetAssetsPrefixType(GetAssetsPrefixType $parameters)
    {
      return $this->__soapCall('GetAssetsPrefixType', array($parameters));
    }

    /**
     * Gets the resolved assets fixed prefix.
     *
     * @param GetAssetsFixedPrefix $parameters
     * @return GetAssetsFixedPrefixResponse
     */
    public function GetAssetsFixedPrefix(GetAssetsFixedPrefix $parameters)
    {
      return $this->__soapCall('GetAssetsFixedPrefix', array($parameters));
    }

    /**
     * Sets an asset source in the ticket.
     *
     * @param SetAssetSource $parameters
     * @return SetAssetSourceResponse
     */
    public function SetAssetSource(SetAssetSource $parameters)
    {
      return $this->__soapCall('SetAssetSource', array($parameters));
    }

    /**
     * Sets an asset source in the ticket.
     *
     * @param SetAssetSourceEx $parameters
     * @return SetAssetSourceExResponse
     */
    public function SetAssetSourceEx(SetAssetSourceEx $parameters)
    {
      return $this->__soapCall('SetAssetSourceEx', array($parameters));
    }

    /**
     * Sets asset sources in the ticket.
     *
     * @param SetAssetSources $parameters
     * @return SetAssetSourcesResponse
     */
    public function SetAssetSources(SetAssetSources $parameters)
    {
      return $this->__soapCall('SetAssetSources', array($parameters));
    }

    /**
     * Sets asset sources in the ticket.
     *
     * @param SetAssetSourcesEx $parameters
     * @return SetAssetSourcesExResponse
     */
    public function SetAssetSourcesEx(SetAssetSourcesEx $parameters)
    {
      return $this->__soapCall('SetAssetSourcesEx', array($parameters));
    }

    /**
     * Sets an asset source by id in the ticket.
     *
     * @param SetAssetSourceByID $parameters
     * @return SetAssetSourceByIDResponse
     */
    public function SetAssetSourceByID(SetAssetSourceByID $parameters)
    {
      return $this->__soapCall('SetAssetSourceByID', array($parameters));
    }

    /**
     * Sets asset sources by ids in the ticket.
     *
     * @param SetAssetSourcesByID $parameters
     * @return SetAssetSourcesByIDResponse
     */
    public function SetAssetSourcesByID(SetAssetSourcesByID $parameters)
    {
      return $this->__soapCall('SetAssetSourcesByID', array($parameters));
    }

    /**
     * Sets all campaign defaulted asset sources in the ticket.
     *
     * @param SetDefaultAssetSources $parameters
     * @return SetDefaultAssetSourcesResponse
     */
    public function SetDefaultAssetSources(SetDefaultAssetSources $parameters)
    {
      return $this->__soapCall('SetDefaultAssetSources', array($parameters));
    }

    /**
     * Removes all asset sources in the ticket.
     *
     * @param RemoveAllAssetSources $parameters
     * @return RemoveAllAssetSourcesResponse
     */
    public function RemoveAllAssetSources(RemoveAllAssetSources $parameters)
    {
      return $this->__soapCall('RemoveAllAssetSources', array($parameters));
    }

    /**
     * Removes an asset source in the ticket.
     *
     * @param RemoveAssetSource $parameters
     * @return RemoveAssetSourceResponse
     */
    public function RemoveAssetSource(RemoveAssetSource $parameters)
    {
      return $this->__soapCall('RemoveAssetSource', array($parameters));
    }

    /**
     * Gets an asset source in the ticket.
     *
     * @param GetAssetSource $parameters
     * @return GetAssetSourceResponse
     */
    public function GetAssetSource(GetAssetSource $parameters)
    {
      return $this->__soapCall('GetAssetSource', array($parameters));
    }

    /**
     * Gets an asset source in the ticket.
     *
     * @param GetAssetSourceEx $parameters
     * @return GetAssetSourceExResponse
     */
    public function GetAssetSourceEx(GetAssetSourceEx $parameters)
    {
      return $this->__soapCall('GetAssetSourceEx', array($parameters));
    }

    /**
     * Gets an asset source id in the ticket.
     *
     * @param GetAssetSourceID $parameters
     * @return GetAssetSourceIDResponse
     */
    public function GetAssetSourceID(GetAssetSourceID $parameters)
    {
      return $this->__soapCall('GetAssetSourceID', array($parameters));
    }

    /**
     * Gets an asset source priority in the ticket.
     *
     * @param GetAssetSourcePriority $parameters
     * @return GetAssetSourcePriorityResponse
     */
    public function GetAssetSourcePriority(GetAssetSourcePriority $parameters)
    {
      return $this->__soapCall('GetAssetSourcePriority', array($parameters));
    }

    /**
     * Gets all asset sources names in the ticket.
     *
     * @param GetAssetSourcesNames $parameters
     * @return GetAssetSourcesNamesResponse
     */
    public function GetAssetSourcesNames(GetAssetSourcesNames $parameters)
    {
      return $this->__soapCall('GetAssetSourcesNames', array($parameters));
    }

    /**
     * Gets all asset sources in the ticket.
     *
     * @param GetAssetSources $parameters
     * @return GetAssetSourcesResponse
     */
    public function GetAssetSources(GetAssetSources $parameters)
    {
      return $this->__soapCall('GetAssetSources', array($parameters));
    }

    /**
     * Gets all asset sources in the ticket.
     *
     * @param GetAssetSourcesEx $parameters
     * @return GetAssetSourcesExResponse
     */
    public function GetAssetSourcesEx(GetAssetSourcesEx $parameters)
    {
      return $this->__soapCall('GetAssetSourcesEx', array($parameters));
    }

    /**
     * Gets all asset sources ids in the ticket.
     *
     * @param GetAssetSourcesIDs $parameters
     * @return GetAssetSourcesIDsResponse
     */
    public function GetAssetSourcesIDs(GetAssetSourcesIDs $parameters)
    {
      return $this->__soapCall('GetAssetSourcesIDs', array($parameters));
    }

    /**
     * Gets asset sources count in the ticket.
     *
     * @param GetAssetSourcesCount $parameters
     * @return GetAssetSourcesCountResponse
     */
    public function GetAssetSourcesCount(GetAssetSourcesCount $parameters)
    {
      return $this->__soapCall('GetAssetSourcesCount', array($parameters));
    }

    /**
     * Gets the nth asset source name in the ticket.
     *
     * @param GetNthAssetSourceName $parameters
     * @return GetNthAssetSourceNameResponse
     */
    public function GetNthAssetSourceName(GetNthAssetSourceName $parameters)
    {
      return $this->__soapCall('GetNthAssetSourceName', array($parameters));
    }

    /**
     * Gets the nth asset source in the ticket.
     *
     * @param GetNthAssetSource $parameters
     * @return GetNthAssetSourceResponse
     */
    public function GetNthAssetSource(GetNthAssetSource $parameters)
    {
      return $this->__soapCall('GetNthAssetSource', array($parameters));
    }

    /**
     * Gets the nth asset source in the ticket.
     *
     * @param GetNthAssetSourceEx $parameters
     * @return GetNthAssetSourceExResponse
     */
    public function GetNthAssetSourceEx(GetNthAssetSourceEx $parameters)
    {
      return $this->__soapCall('GetNthAssetSourceEx', array($parameters));
    }

    /**
     * Gets the nth asset source id in the ticket.
     *
     * @param GetNthAssetSourceID $parameters
     * @return GetNthAssetSourceIDResponse
     */
    public function GetNthAssetSourceID(GetNthAssetSourceID $parameters)
    {
      return $this->__soapCall('GetNthAssetSourceID', array($parameters));
    }

    /**
     * Gets the nth asset source priority in the ticket.
     *
     * @param GetNthAssetSourcePriority $parameters
     * @return GetNthAssetSourcePriorityResponse
     */
    public function GetNthAssetSourcePriority(GetNthAssetSourcePriority $parameters)
    {
      return $this->__soapCall('GetNthAssetSourcePriority', array($parameters));
    }

    /**
     * Gets the Population GUID that was defined on the ticket.
     *
     * @param GetPopulationGUID $parameters
     * @return GetPopulationGUIDResponse
     */
    public function GetPopulationGUID(GetPopulationGUID $parameters)
    {
      return $this->__soapCall('GetPopulationGUID', array($parameters));
    }

    /**
     * Add the recipient range in the ticket.
     *
     * @param SetRIRange $parameters
     * @return SetRIRangeResponse
     */
    public function SetRIRange(SetRIRange $parameters)
    {
      return $this->__soapCall('SetRIRange', array($parameters));
    }

    /**
     * Add a recipient list source in the ticket.
     *
     * @param SetRI $parameters
     * @return SetRIResponse
     */
    public function SetRI(SetRI $parameters)
    {
      return $this->__soapCall('SetRI', array($parameters));
    }

    /**
     * Add a recipient list sources in the ticket.
     *
     * @param SetRIs $parameters
     * @return SetRIsResponse
     */
    public function SetRIs(SetRIs $parameters)
    {
      return $this->__soapCall('SetRIs', array($parameters));
    }

    /**
     * Add a recipient list source by id in the ticket.
     *
     * @param SetRIByID $parameters
     * @return SetRIByIDResponse
     */
    public function SetRIByID(SetRIByID $parameters)
    {
      return $this->__soapCall('SetRIByID', array($parameters));
    }

    /**
     * Add a recipient information using the population information (does not effect From/To and RID-file-list)
     *
     * @param SetRIByPopulationGUID $parameters
     * @return SetRIByPopulationGUIDResponse
     */
    public function SetRIByPopulationGUID(SetRIByPopulationGUID $parameters)
    {
      return $this->__soapCall('SetRIByPopulationGUID', array($parameters));
    }

    /**
     * Add various information using the Run information (population + asset resolving + friendly URL + tracking)
     *
     * @param SetInfoByRunGUID $parameters
     * @return SetInfoByRunGUIDResponse
     */
    public function SetInfoByRunGUID(SetInfoByRunGUID $parameters)
    {
      return $this->__soapCall('SetInfoByRunGUID', array($parameters));
    }

    /**
     * Add a recipient list sources by ids in the ticket.
     *
     * @param SetRIsByID $parameters
     * @return SetRIsByIDResponse
     */
    public function SetRIsByID(SetRIsByID $parameters)
    {
      return $this->__soapCall('SetRIsByID', array($parameters));
    }

    /**
     * Adds campaign defaulted recipient list in the ticket.
     *
     * @param SetDefaultRI $parameters
     * @return SetDefaultRIResponse
     */
    public function SetDefaultRI(SetDefaultRI $parameters)
    {
      return $this->__soapCall('SetDefaultRI', array($parameters));
    }

    /**
     * Removes all recipient lists in the ticket.
     *
     * @param RemoveAllRIs $parameters
     * @return RemoveAllRIsResponse
     */
    public function RemoveAllRIs(RemoveAllRIs $parameters)
    {
      return $this->__soapCall('RemoveAllRIs', array($parameters));
    }

    /**
     * Gets the number of recipient lists in the ticket.
     *
     * @param GetRIsCount $parameters
     * @return GetRIsCountResponse
     */
    public function GetRIsCount(GetRIsCount $parameters)
    {
      return $this->__soapCall('GetRIsCount', array($parameters));
    }

    /**
     * Gets the FROM value of recipient info range in the ticket.
     *
     * @param GetRIFrom $parameters
     * @return GetRIFromResponse
     */
    public function GetRIFrom(GetRIFrom $parameters)
    {
      return $this->__soapCall('GetRIFrom', array($parameters));
    }

    /**
     * Gets the TO value of recipient info range in the ticket.
     *
     * @param GetRITo $parameters
     * @return GetRIToResponse
     */
    public function GetRITo(GetRITo $parameters)
    {
      return $this->__soapCall('GetRITo', array($parameters));
    }

    /**
     * Gets the Recipient ID List File Name value of recipient info range in the ticket.
     *
     * @param GetNthRIRecipientIDListFileName $parameters
     * @return GetNthRIRecipientIDListFileNameResponse
     */
    public function GetNthRIRecipientIDListFileName(GetNthRIRecipientIDListFileName $parameters)
    {
      return $this->__soapCall('GetNthRIRecipientIDListFileName', array($parameters));
    }

    /**
     * Whether to intersect with the list or to skip the recipients in it.
     *
     * @param GetNthRIRecipientIDListMergeType $parameters
     * @return GetNthRIRecipientIDListMergeTypeResponse
     */
    public function GetNthRIRecipientIDListMergeType(GetNthRIRecipientIDListMergeType $parameters)
    {
      return $this->__soapCall('GetNthRIRecipientIDListMergeType', array($parameters));
    }

}
