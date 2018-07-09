<?php


 function autoload_c63f4fffa8e1856362c8ad1289b30219($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\CultureWS' => __DIR__ .'/CultureWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\GetCulture' => __DIR__ .'/GetCulture.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\GetCultureResponse' => __DIR__ .'/GetCultureResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\Culture' => __DIR__ .'/Culture.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\GetCultureByStore' => __DIR__ .'/GetCultureByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\GetCultureByStoreResponse' => __DIR__ .'/GetCultureByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CultureWS\ArrayOfCulture' => __DIR__ .'/ArrayOfCulture.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c63f4fffa8e1856362c8ad1289b30219');

// Do nothing. The rest is just leftovers from the code generation.
{
}
