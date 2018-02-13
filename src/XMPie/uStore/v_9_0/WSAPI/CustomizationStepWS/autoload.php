<?php


 function autoload_54a4c4f59fb3c77d47eaf8d8da0a166f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\CustomizationStepWS' => __DIR__ .'/CustomizationStepWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\GetCustomizationStepList' => __DIR__ .'/GetCustomizationStepList.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse' => __DIR__ .'/GetCustomizationStepListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep' => __DIR__ .'/ArrayOfCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\CustomizationStep' => __DIR__ .'/CustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\GetCustomizationStep' => __DIR__ .'/GetCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\CustomizationStepWS\GetCustomizationStepResponse' => __DIR__ .'/GetCustomizationStepResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_54a4c4f59fb3c77d47eaf8d8da0a166f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
