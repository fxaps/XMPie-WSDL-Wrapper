<?php


 function autoload_3dcf0d0ea580f1dea1e0695e71a2f46d($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\CultureWS' => __DIR__ .'/CultureWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\GetCulture' => __DIR__ .'/GetCulture.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\GetCultureResponse' => __DIR__ .'/GetCultureResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\Culture' => __DIR__ .'/Culture.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\GetCultureByStore' => __DIR__ .'/GetCultureByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\GetCultureByStoreResponse' => __DIR__ .'/GetCultureByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\CultureWS\ArrayOfCulture' => __DIR__ .'/ArrayOfCulture.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_3dcf0d0ea580f1dea1e0695e71a2f46d');

// Do nothing. The rest is just leftovers from the code generation.
{
}
