<?php


 function autoload_ff1fa1c7b26d2bcf70bfc2d0fa636f5f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ .'/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ .'/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ .'/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\AssetSourceWS\AssetSource' => __DIR__ .'/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_ff1fa1c7b26d2bcf70bfc2d0fa636f5f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
