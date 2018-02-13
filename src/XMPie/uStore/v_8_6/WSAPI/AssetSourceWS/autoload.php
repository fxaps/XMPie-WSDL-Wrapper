<?php


 function autoload_83280dd66f9ea1ea4bc6a4102187ac58($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\AssetSourceWS' => __DIR__ .'/AssetSourceWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\GetAssetSource' => __DIR__ .'/GetAssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\GetAssetSourceResponse' => __DIR__ .'/GetAssetSourceResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\AssetSource' => __DIR__ .'/AssetSource.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AssetSourceWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_83280dd66f9ea1ea4bc6a4102187ac58');

// Do nothing. The rest is just leftovers from the code generation.
{
}
