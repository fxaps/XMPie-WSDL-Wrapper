<?php


 function autoload_5fec3f387ee7073e395ab6b86e650991($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\Production_SSP' => __DIR__ .'/Production_SSP.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJob' => __DIR__ .'/SubmitJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ArrayOfProperty' => __DIR__ .'/ArrayOfProperty.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\Property' => __DIR__ .'/Property.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobResponse' => __DIR__ .'/SubmitJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobs' => __DIR__ .'/SubmitJobs.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobsResponse' => __DIR__ .'/SubmitJobsResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ArrayOfString' => __DIR__ .'/ArrayOfString.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitSplittedJob' => __DIR__ .'/SubmitSplittedJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitSplittedJobResponse' => __DIR__ .'/SubmitSplittedJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobWithParallelProcessing' => __DIR__ .'/SubmitJobWithParallelProcessing.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SubmitJobWithParallelProcessingResponse' => __DIR__ .'/SubmitJobWithParallelProcessingResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployHTMLDocumentJob' => __DIR__ .'/DeployHTMLDocumentJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployHTMLDocumentJobResponse' => __DIR__ .'/DeployHTMLDocumentJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UnDeployHTMLDocumentJob' => __DIR__ .'/UnDeployHTMLDocumentJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UnDeployHTMLDocumentJobResponse' => __DIR__ .'/UnDeployHTMLDocumentJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\MergeCSVXFiles' => __DIR__ .'/MergeCSVXFiles.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\MergeCSVXFilesResponse' => __DIR__ .'/MergeCSVXFilesResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile' => __DIR__ .'/AppendCSVXFile.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFileResponse' => __DIR__ .'/AppendCSVXFileResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployOnDemandJob' => __DIR__ .'/DeployOnDemandJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeployOnDemandJobResponse' => __DIR__ .'/DeployOnDemandJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UndeployOnDemandJob' => __DIR__ .'/UndeployOnDemandJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\UndeployOnDemandJobResponse' => __DIR__ .'/UndeployOnDemandJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SuspendOnDemandJob' => __DIR__ .'/SuspendOnDemandJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\SuspendOnDemandJobResponse' => __DIR__ .'/SuspendOnDemandJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ResumeOnDemandJob' => __DIR__ .'/ResumeOnDemandJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\ResumeOnDemandJobResponse' => __DIR__ .'/ResumeOnDemandJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\RedeployOnDemandJob' => __DIR__ .'/RedeployOnDemandJob.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\RedeployOnDemandJobResponse' => __DIR__ .'/RedeployOnDemandJobResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\CreateOnDemandOutput' => __DIR__ .'/CreateOnDemandOutput.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\CreateOnDemandOutputResponse' => __DIR__ .'/CreateOnDemandOutputResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\GetOnDemandOutput' => __DIR__ .'/GetOnDemandOutput.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\GetOnDemandOutputResponse' => __DIR__ .'/GetOnDemandOutputResponse.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\OnDemandOutputResult' => __DIR__ .'/OnDemandOutputResult.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeleteOnDemandOutput' => __DIR__ .'/DeleteOnDemandOutput.php',
        'XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\DeleteOnDemandOutputResponse' => __DIR__ .'/DeleteOnDemandOutputResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5fec3f387ee7073e395ab6b86e650991');

// Do nothing. The rest is just leftovers from the code generation.
{
}
