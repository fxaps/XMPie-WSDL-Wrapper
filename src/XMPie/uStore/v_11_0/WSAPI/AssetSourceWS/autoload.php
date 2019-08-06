<?php


 function autoload_f73015195b6a250b1da6ca9f8acdc4e0($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ .'/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ .'/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ .'/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\AssetSourceWS\AssetSource' => __DIR__ .'/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_f73015195b6a250b1da6ca9f8acdc4e0');

// Do nothing. The rest is just leftovers from the code generation.
{
}
