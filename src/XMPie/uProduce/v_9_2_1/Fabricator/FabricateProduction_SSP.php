<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobs;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitSplittedJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitSplittedJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobWithParallelProcessing;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobWithParallelProcessingResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployHTMLDocumentJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployHTMLDocumentJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UnDeployHTMLDocumentJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UnDeployHTMLDocumentJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\MergeCSVXFiles;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\MergeCSVXFilesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFileResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UndeployOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UndeployOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SuspendOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SuspendOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ResumeOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ResumeOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\RedeployOnDemandJob;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\RedeployOnDemandJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\CreateOnDemandOutput;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\CreateOnDemandOutputResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\GetOnDemandOutput;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\GetOnDemandOutputResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\OnDemandOutputResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeleteOnDemandOutput;
use XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeleteOnDemandOutputResponse;


class FabricateProduction_SSP
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
    * @return SubmitJob
    */
    public function SubmitJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJob = new SubmitJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJob, $methodName)) {
                $SubmitJob->$methodName($paramValue);
            }
        }
        return $SubmitJob;
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
    * @return SubmitJobResponse
    */
    public function SubmitJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJobResponse = new SubmitJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJobResponse, $methodName)) {
                $SubmitJobResponse->$methodName($paramValue);
            }
        }
        return $SubmitJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitJobs
    */
    public function SubmitJobs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJobs = new SubmitJobs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJobs, $methodName)) {
                $SubmitJobs->$methodName($paramValue);
            }
        }
        return $SubmitJobs;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitJobsResponse
    */
    public function SubmitJobsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJobsResponse = new SubmitJobsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJobsResponse, $methodName)) {
                $SubmitJobsResponse->$methodName($paramValue);
            }
        }
        return $SubmitJobsResponse;
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
    * @return SubmitSplittedJob
    */
    public function SubmitSplittedJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitSplittedJob = new SubmitSplittedJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitSplittedJob, $methodName)) {
                $SubmitSplittedJob->$methodName($paramValue);
            }
        }
        return $SubmitSplittedJob;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitSplittedJobResponse
    */
    public function SubmitSplittedJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitSplittedJobResponse = new SubmitSplittedJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitSplittedJobResponse, $methodName)) {
                $SubmitSplittedJobResponse->$methodName($paramValue);
            }
        }
        return $SubmitSplittedJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitJobWithParallelProcessing
    */
    public function SubmitJobWithParallelProcessing($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJobWithParallelProcessing = new SubmitJobWithParallelProcessing();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJobWithParallelProcessing, $methodName)) {
                $SubmitJobWithParallelProcessing->$methodName($paramValue);
            }
        }
        return $SubmitJobWithParallelProcessing;
    }


   /**
    * @param array $paramAutoSet
    * @return SubmitJobWithParallelProcessingResponse
    */
    public function SubmitJobWithParallelProcessingResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SubmitJobWithParallelProcessingResponse = new SubmitJobWithParallelProcessingResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SubmitJobWithParallelProcessingResponse, $methodName)) {
                $SubmitJobWithParallelProcessingResponse->$methodName($paramValue);
            }
        }
        return $SubmitJobWithParallelProcessingResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeployHTMLDocumentJob
    */
    public function DeployHTMLDocumentJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployHTMLDocumentJob = new DeployHTMLDocumentJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployHTMLDocumentJob, $methodName)) {
                $DeployHTMLDocumentJob->$methodName($paramValue);
            }
        }
        return $DeployHTMLDocumentJob;
    }


   /**
    * @param array $paramAutoSet
    * @return DeployHTMLDocumentJobResponse
    */
    public function DeployHTMLDocumentJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployHTMLDocumentJobResponse = new DeployHTMLDocumentJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployHTMLDocumentJobResponse, $methodName)) {
                $DeployHTMLDocumentJobResponse->$methodName($paramValue);
            }
        }
        return $DeployHTMLDocumentJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UnDeployHTMLDocumentJob
    */
    public function UnDeployHTMLDocumentJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnDeployHTMLDocumentJob = new UnDeployHTMLDocumentJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnDeployHTMLDocumentJob, $methodName)) {
                $UnDeployHTMLDocumentJob->$methodName($paramValue);
            }
        }
        return $UnDeployHTMLDocumentJob;
    }


   /**
    * @param array $paramAutoSet
    * @return UnDeployHTMLDocumentJobResponse
    */
    public function UnDeployHTMLDocumentJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UnDeployHTMLDocumentJobResponse = new UnDeployHTMLDocumentJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UnDeployHTMLDocumentJobResponse, $methodName)) {
                $UnDeployHTMLDocumentJobResponse->$methodName($paramValue);
            }
        }
        return $UnDeployHTMLDocumentJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return MergeCSVXFiles
    */
    public function MergeCSVXFiles($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MergeCSVXFiles = new MergeCSVXFiles();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MergeCSVXFiles, $methodName)) {
                $MergeCSVXFiles->$methodName($paramValue);
            }
        }
        return $MergeCSVXFiles;
    }


   /**
    * @param array $paramAutoSet
    * @return MergeCSVXFilesResponse
    */
    public function MergeCSVXFilesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $MergeCSVXFilesResponse = new MergeCSVXFilesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($MergeCSVXFilesResponse, $methodName)) {
                $MergeCSVXFilesResponse->$methodName($paramValue);
            }
        }
        return $MergeCSVXFilesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return AppendCSVXFile
    */
    public function AppendCSVXFile($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AppendCSVXFile = new AppendCSVXFile();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AppendCSVXFile, $methodName)) {
                $AppendCSVXFile->$methodName($paramValue);
            }
        }
        return $AppendCSVXFile;
    }


   /**
    * @param array $paramAutoSet
    * @return AppendCSVXFileResponse
    */
    public function AppendCSVXFileResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AppendCSVXFileResponse = new AppendCSVXFileResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AppendCSVXFileResponse, $methodName)) {
                $AppendCSVXFileResponse->$methodName($paramValue);
            }
        }
        return $AppendCSVXFileResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeployOnDemandJob
    */
    public function DeployOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployOnDemandJob = new DeployOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployOnDemandJob, $methodName)) {
                $DeployOnDemandJob->$methodName($paramValue);
            }
        }
        return $DeployOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return DeployOnDemandJobResponse
    */
    public function DeployOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeployOnDemandJobResponse = new DeployOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeployOnDemandJobResponse, $methodName)) {
                $DeployOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $DeployOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UndeployOnDemandJob
    */
    public function UndeployOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UndeployOnDemandJob = new UndeployOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UndeployOnDemandJob, $methodName)) {
                $UndeployOnDemandJob->$methodName($paramValue);
            }
        }
        return $UndeployOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return UndeployOnDemandJobResponse
    */
    public function UndeployOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UndeployOnDemandJobResponse = new UndeployOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UndeployOnDemandJobResponse, $methodName)) {
                $UndeployOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $UndeployOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendOnDemandJob
    */
    public function SuspendOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendOnDemandJob = new SuspendOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendOnDemandJob, $methodName)) {
                $SuspendOnDemandJob->$methodName($paramValue);
            }
        }
        return $SuspendOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return SuspendOnDemandJobResponse
    */
    public function SuspendOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SuspendOnDemandJobResponse = new SuspendOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SuspendOnDemandJobResponse, $methodName)) {
                $SuspendOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $SuspendOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeOnDemandJob
    */
    public function ResumeOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeOnDemandJob = new ResumeOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeOnDemandJob, $methodName)) {
                $ResumeOnDemandJob->$methodName($paramValue);
            }
        }
        return $ResumeOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return ResumeOnDemandJobResponse
    */
    public function ResumeOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ResumeOnDemandJobResponse = new ResumeOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ResumeOnDemandJobResponse, $methodName)) {
                $ResumeOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $ResumeOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return RedeployOnDemandJob
    */
    public function RedeployOnDemandJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RedeployOnDemandJob = new RedeployOnDemandJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RedeployOnDemandJob, $methodName)) {
                $RedeployOnDemandJob->$methodName($paramValue);
            }
        }
        return $RedeployOnDemandJob;
    }


   /**
    * @param array $paramAutoSet
    * @return RedeployOnDemandJobResponse
    */
    public function RedeployOnDemandJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $RedeployOnDemandJobResponse = new RedeployOnDemandJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($RedeployOnDemandJobResponse, $methodName)) {
                $RedeployOnDemandJobResponse->$methodName($paramValue);
            }
        }
        return $RedeployOnDemandJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateOnDemandOutput
    */
    public function CreateOnDemandOutput($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateOnDemandOutput = new CreateOnDemandOutput();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateOnDemandOutput, $methodName)) {
                $CreateOnDemandOutput->$methodName($paramValue);
            }
        }
        return $CreateOnDemandOutput;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateOnDemandOutputResponse
    */
    public function CreateOnDemandOutputResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateOnDemandOutputResponse = new CreateOnDemandOutputResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateOnDemandOutputResponse, $methodName)) {
                $CreateOnDemandOutputResponse->$methodName($paramValue);
            }
        }
        return $CreateOnDemandOutputResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOnDemandOutput
    */
    public function GetOnDemandOutput($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOnDemandOutput = new GetOnDemandOutput();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOnDemandOutput, $methodName)) {
                $GetOnDemandOutput->$methodName($paramValue);
            }
        }
        return $GetOnDemandOutput;
    }


   /**
    * @param array $paramAutoSet
    * @return GetOnDemandOutputResponse
    */
    public function GetOnDemandOutputResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetOnDemandOutputResponse = new GetOnDemandOutputResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetOnDemandOutputResponse, $methodName)) {
                $GetOnDemandOutputResponse->$methodName($paramValue);
            }
        }
        return $GetOnDemandOutputResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return OnDemandOutputResult
    */
    public function OnDemandOutputResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $OnDemandOutputResult = new OnDemandOutputResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($OnDemandOutputResult, $methodName)) {
                $OnDemandOutputResult->$methodName($paramValue);
            }
        }
        return $OnDemandOutputResult;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteOnDemandOutput
    */
    public function DeleteOnDemandOutput($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOnDemandOutput = new DeleteOnDemandOutput();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOnDemandOutput, $methodName)) {
                $DeleteOnDemandOutput->$methodName($paramValue);
            }
        }
        return $DeleteOnDemandOutput;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteOnDemandOutputResponse
    */
    public function DeleteOnDemandOutputResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteOnDemandOutputResponse = new DeleteOnDemandOutputResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteOnDemandOutputResponse, $methodName)) {
                $DeleteOnDemandOutputResponse->$methodName($paramValue);
            }
        }
        return $DeleteOnDemandOutputResponse;
    }



}

?>
