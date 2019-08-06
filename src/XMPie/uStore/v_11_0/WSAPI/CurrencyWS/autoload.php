<?php


 function autoload_1b9ba607b77770c5361333545d835587($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ .'/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\GetCurrency' => __DIR__ .'/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ .'/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ .'/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ .'/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ .'/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_1b9ba607b77770c5361333545d835587');

// Do nothing. The rest is just leftovers from the code generation.
{
}
