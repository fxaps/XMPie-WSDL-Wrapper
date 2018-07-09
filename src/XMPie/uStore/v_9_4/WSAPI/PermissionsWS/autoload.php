<?php


 function autoload_16fd89ee9ab40f0dac265aa6ddd2f331($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\PermissionsWS' => __DIR__ .'/PermissionsWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsAllowed' => __DIR__ .'/IsAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsAllowedResponse' => __DIR__ .'/IsAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\AddPermission' => __DIR__ .'/AddPermission.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\AddPermissionResponse' => __DIR__ .'/AddPermissionResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsStoreFrontAccessAllowed' => __DIR__ .'/IsStoreFrontAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsStoreFrontAccessAllowedResponse' => __DIR__ .'/IsStoreFrontAccessAllowedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsAccessAllowed' => __DIR__ .'/IsAccessAllowed.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PermissionsWS\IsAccessAllowedResponse' => __DIR__ .'/IsAccessAllowedResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_16fd89ee9ab40f0dac265aa6ddd2f331');

// Do nothing. The rest is just leftovers from the code generation.
{
}
