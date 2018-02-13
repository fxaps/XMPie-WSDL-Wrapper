<?php


 function autoload_e108c10715d8027f08e89230e1d45c13($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\CustomizationStepWS' => __DIR__ .'/CustomizationStepWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\GetCustomizationStepList' => __DIR__ .'/GetCustomizationStepList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\GetCustomizationStepListResponse' => __DIR__ .'/GetCustomizationStepListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\ArrayOfCustomizationStep' => __DIR__ .'/ArrayOfCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\CustomizationStep' => __DIR__ .'/CustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\GetCustomizationStep' => __DIR__ .'/GetCustomizationStep.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationStepWS\GetCustomizationStepResponse' => __DIR__ .'/GetCustomizationStepResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e108c10715d8027f08e89230e1d45c13');

// Do nothing. The rest is just leftovers from the code generation.
{
}
