<?php


 function autoload_c4221f129f25141dbc04ce5457779540($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\TentativeDeliveryWS' => __DIR__ .'/TentativeDeliveryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\GetTentativeDelivery' => __DIR__ .'/GetTentativeDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryResponse' => __DIR__ .'/GetTentativeDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\TentativeDelivery' => __DIR__ .'/TentativeDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\DeliveryItem' => __DIR__ .'/DeliveryItem.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\ArrayOfDeliveryItem' => __DIR__ .'/ArrayOfDeliveryItem.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryList' => __DIR__ .'/GetTentativeDeliveryList.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\GetTentativeDeliveryListResponse' => __DIR__ .'/GetTentativeDeliveryListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TentativeDeliveryWS\ArrayOfTentativeDelivery' => __DIR__ .'/ArrayOfTentativeDelivery.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_c4221f129f25141dbc04ce5457779540');

// Do nothing. The rest is just leftovers from the code generation.
{
}
