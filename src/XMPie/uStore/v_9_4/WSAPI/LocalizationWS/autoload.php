<?php


 function autoload_b3eba9892e830820e0ffc94d05ce5ef7($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\LocalizationWS' => __DIR__ .'/LocalizationWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\GetLocalizedString' => __DIR__ .'/GetLocalizedString.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\GetLocalizedStringResponse' => __DIR__ .'/GetLocalizedStringResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\GetPageResources' => __DIR__ .'/GetPageResources.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\GetPageResourcesResponse' => __DIR__ .'/GetPageResourcesResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\ArrayOfLocalizationResource' => __DIR__ .'/ArrayOfLocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\LocalizationResource' => __DIR__ .'/LocalizationResource.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\LocalizationWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_b3eba9892e830820e0ffc94d05ce5ef7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
