<?php


 function autoload_8fdc83d94fb5a1fc313388b53594649f($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\StoreWS' => __DIR__ .'/StoreWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\GetStoreList' => __DIR__ .'/GetStoreList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\GetStoreListResponse' => __DIR__ .'/GetStoreListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\ArrayOfStore' => __DIR__ .'/ArrayOfStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\Store' => __DIR__ .'/Store.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\GetStore' => __DIR__ .'/GetStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\StoreWS\GetStoreResponse' => __DIR__ .'/GetStoreResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_8fdc83d94fb5a1fc313388b53594649f');

// Do nothing. The rest is just leftovers from the code generation.
{
}
