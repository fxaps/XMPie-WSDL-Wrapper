<?php


 function autoload_76e3da182f230d466aa9354b50ab5592($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\CustomizationDialWS' => __DIR__ .'/CustomizationDialWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialList' => __DIR__ .'/GetCustomizationDialList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialListResponse' => __DIR__ .'/GetCustomizationDialListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\ArrayOfCustomizationDial' => __DIR__ .'/ArrayOfCustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\CustomizationDial' => __DIR__ .'/CustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\FieldOption' => __DIR__ .'/FieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\ArrayOfFieldOption' => __DIR__ .'/ArrayOfFieldOption.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDial' => __DIR__ .'/GetCustomizationDial.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialResponse' => __DIR__ .'/GetCustomizationDialResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialValueList' => __DIR__ .'/GetCustomizationDialValueList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialValueListResponse' => __DIR__ .'/GetCustomizationDialValueListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\ArrayOfCustomizationDialValue' => __DIR__ .'/ArrayOfCustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\CustomizationDialValue' => __DIR__ .'/CustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialValue' => __DIR__ .'/GetCustomizationDialValue.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CustomizationDialWS\GetCustomizationDialValueResponse' => __DIR__ .'/GetCustomizationDialValueResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_76e3da182f230d466aa9354b50ab5592');

// Do nothing. The rest is just leftovers from the code generation.
{
}
