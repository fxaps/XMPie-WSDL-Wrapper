<?php


 function autoload_966685f24bc86cc6cb72e60d63a7b8b0($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\CurrencyWS' => __DIR__ .'/CurrencyWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\GetCurrency' => __DIR__ .'/GetCurrency.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\GetCurrencyResponse' => __DIR__ .'/GetCurrencyResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\CurrencyInfo' => __DIR__ .'/CurrencyInfo.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviation' => __DIR__ .'/GetCurrencyByAbbreviation.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\CurrencyWS\GetCurrencyByAbbreviationResponse' => __DIR__ .'/GetCurrencyByAbbreviationResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_966685f24bc86cc6cb72e60d63a7b8b0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
