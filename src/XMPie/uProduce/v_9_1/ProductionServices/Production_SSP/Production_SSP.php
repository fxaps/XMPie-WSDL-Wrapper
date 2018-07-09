<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP;


/**
 * Production Web Service.
 */
class Production_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'SubmitJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJob',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\Property',
  'SubmitJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJobResponse',
  'SubmitJobs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJobs',
  'SubmitJobsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJobsResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\ArrayOfString',
  'SubmitSplittedJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitSplittedJob',
  'SubmitSplittedJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitSplittedJobResponse',
  'SubmitJobWithParallelProcessing' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJobWithParallelProcessing',
  'SubmitJobWithParallelProcessingResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SubmitJobWithParallelProcessingResponse',
  'DeployHTMLDocumentJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeployHTMLDocumentJob',
  'DeployHTMLDocumentJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeployHTMLDocumentJobResponse',
  'UnDeployHTMLDocumentJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\UnDeployHTMLDocumentJob',
  'UnDeployHTMLDocumentJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\UnDeployHTMLDocumentJobResponse',
  'MergeCSVXFiles' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\MergeCSVXFiles',
  'MergeCSVXFilesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\MergeCSVXFilesResponse',
  'AppendCSVXFile' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\AppendCSVXFile',
  'AppendCSVXFileResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\AppendCSVXFileResponse',
  'DeployOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeployOnDemandJob',
  'DeployOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeployOnDemandJobResponse',
  'UndeployOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\UndeployOnDemandJob',
  'UndeployOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\UndeployOnDemandJobResponse',
  'SuspendOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SuspendOnDemandJob',
  'SuspendOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\SuspendOnDemandJobResponse',
  'ResumeOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\ResumeOnDemandJob',
  'ResumeOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\ResumeOnDemandJobResponse',
  'RedeployOnDemandJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\RedeployOnDemandJob',
  'RedeployOnDemandJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\RedeployOnDemandJobResponse',
  'CreateOnDemandOutput' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\CreateOnDemandOutput',
  'CreateOnDemandOutputResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\CreateOnDemandOutputResponse',
  'GetOnDemandOutput' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\GetOnDemandOutput',
  'GetOnDemandOutputResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\GetOnDemandOutputResponse',
  'OnDemandOutputResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\OnDemandOutputResult',
  'DeleteOnDemandOutput' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeleteOnDemandOutput',
  'DeleteOnDemandOutputResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_1\\ProductionServices\\Production_SSP\\DeleteOnDemandOutputResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/Production_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Submit Job.
     *
     * @param SubmitJob $parameters
     * @return SubmitJobResponse
     */
    public function SubmitJob(SubmitJob $parameters)
    {
      return $this->__soapCall('SubmitJob', array($parameters));
    }

    /**
     * Submit Jobs.
     *
     * @param SubmitJobs $parameters
     * @return SubmitJobsResponse
     */
    public function SubmitJobs(SubmitJobs $parameters)
    {
      return $this->__soapCall('SubmitJobs', array($parameters));
    }

    /**
     * Submit splitted Job.
     *
     * @param SubmitSplittedJob $parameters
     * @return SubmitSplittedJobResponse
     */
    public function SubmitSplittedJob(SubmitSplittedJob $parameters)
    {
      return $this->__soapCall('SubmitSplittedJob', array($parameters));
    }

    /**
     * Submit parallel processing job.
     *
     * @param SubmitJobWithParallelProcessing $parameters
     * @return SubmitJobWithParallelProcessingResponse
     */
    public function SubmitJobWithParallelProcessing(SubmitJobWithParallelProcessing $parameters)
    {
      return $this->__soapCall('SubmitJobWithParallelProcessing', array($parameters));
    }

    /**
     * Deploy an HTML document Job.
     *
     * @param DeployHTMLDocumentJob $parameters
     * @return DeployHTMLDocumentJobResponse
     */
    public function DeployHTMLDocumentJob(DeployHTMLDocumentJob $parameters)
    {
      return $this->__soapCall('DeployHTMLDocumentJob', array($parameters));
    }

    /**
     * UnDeploy Job.
     *
     * @param UnDeployHTMLDocumentJob $parameters
     * @return UnDeployHTMLDocumentJobResponse
     */
    public function UnDeployHTMLDocumentJob(UnDeployHTMLDocumentJob $parameters)
    {
      return $this->__soapCall('UnDeployHTMLDocumentJob', array($parameters));
    }

    /**
     * Merge CSVX file to the one CSVX file.
     *
     * @param MergeCSVXFiles $parameters
     * @return MergeCSVXFilesResponse
     */
    public function MergeCSVXFiles(MergeCSVXFiles $parameters)
    {
      return $this->__soapCall('MergeCSVXFiles', array($parameters));
    }

    /**
     * Append the second CVSX file to the first.
     *
     * @param AppendCSVXFile $parameters
     * @return AppendCSVXFileResponse
     */
    public function AppendCSVXFile(AppendCSVXFile $parameters)
    {
      return $this->__soapCall('AppendCSVXFile', array($parameters));
    }

    /**
     * Deploy on demand job.
     *
     * @param DeployOnDemandJob $parameters
     * @return DeployOnDemandJobResponse
     */
    public function DeployOnDemandJob(DeployOnDemandJob $parameters)
    {
      return $this->__soapCall('DeployOnDemandJob', array($parameters));
    }

    /**
     * Undeploy on demand job.
     *
     * @param UndeployOnDemandJob $parameters
     * @return UndeployOnDemandJobResponse
     */
    public function UndeployOnDemandJob(UndeployOnDemandJob $parameters)
    {
      return $this->__soapCall('UndeployOnDemandJob', array($parameters));
    }

    /**
     * Suspend on demand job.
     *
     * @param SuspendOnDemandJob $parameters
     * @return SuspendOnDemandJobResponse
     */
    public function SuspendOnDemandJob(SuspendOnDemandJob $parameters)
    {
      return $this->__soapCall('SuspendOnDemandJob', array($parameters));
    }

    /**
     * Resume on demand job.
     *
     * @param ResumeOnDemandJob $parameters
     * @return ResumeOnDemandJobResponse
     */
    public function ResumeOnDemandJob(ResumeOnDemandJob $parameters)
    {
      return $this->__soapCall('ResumeOnDemandJob', array($parameters));
    }

    /**
     * Redeploy on demand job.
     *
     * @param RedeployOnDemandJob $parameters
     * @return RedeployOnDemandJobResponse
     */
    public function RedeployOnDemandJob(RedeployOnDemandJob $parameters)
    {
      return $this->__soapCall('RedeployOnDemandJob', array($parameters));
    }

    /**
     * Create on demand PDF document.
     *
     * @param CreateOnDemandOutput $parameters
     * @return CreateOnDemandOutputResponse
     */
    public function CreateOnDemandOutput(CreateOnDemandOutput $parameters)
    {
      return $this->__soapCall('CreateOnDemandOutput', array($parameters));
    }

    /**
     * Get on demand PDF document.
     *
     * @param GetOnDemandOutput $parameters
     * @return GetOnDemandOutputResponse
     */
    public function GetOnDemandOutput(GetOnDemandOutput $parameters)
    {
      return $this->__soapCall('GetOnDemandOutput', array($parameters));
    }

    /**
     * Delete on demand PDF document.
     *
     * @param DeleteOnDemandOutput $parameters
     * @return DeleteOnDemandOutputResponse
     */
    public function DeleteOnDemandOutput(DeleteOnDemandOutput $parameters)
    {
      return $this->__soapCall('DeleteOnDemandOutput', array($parameters));
    }

}
