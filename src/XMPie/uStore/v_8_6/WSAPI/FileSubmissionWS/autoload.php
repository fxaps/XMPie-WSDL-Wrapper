<?php


 function autoload_c3d9cfe6466444f9e0bb36117e1c6112($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ .'/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ .'/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ .'/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ .'/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ .'/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ .'/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ .'/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c3d9cfe6466444f9e0bb36117e1c6112');

// Do nothing. The rest is just leftovers from the code generation.
{
}
