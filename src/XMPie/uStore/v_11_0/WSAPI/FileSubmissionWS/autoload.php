<?php


 function autoload_265f9843f1632352b659ff0e4b5d1e9f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\FileSubmissionWS' => __DIR__ .'/FileSubmissionWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\ConvertToPDF' => __DIR__ .'/ConvertToPDF.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\ConvertToPDFResponse' => __DIR__ .'/ConvertToPDFResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\GeneratePreflightInformation' => __DIR__ .'/GeneratePreflightInformation.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\GeneratePreflightInformationResponse' => __DIR__ .'/GeneratePreflightInformationResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\GenerateThumbnails' => __DIR__ .'/GenerateThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\FileSubmissionWS\GenerateThumbnailsResponse' => __DIR__ .'/GenerateThumbnailsResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_265f9843f1632352b659ff0e4b5d1e9f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
