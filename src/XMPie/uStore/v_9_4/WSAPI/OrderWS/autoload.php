<?php


 function autoload_e5f4b614d9cbd5ad5f170c6a3b5891ec($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\OrderWS' => __DIR__ .'/OrderWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrder' => __DIR__ .'/GetOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\Order' => __DIR__ .'/Order.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrderHistory' => __DIR__ .'/GetOrderHistory.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrderHistoryResponse' => __DIR__ .'/GetOrderHistoryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetCartId' => __DIR__ .'/GetCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetCartIdResponse' => __DIR__ .'/GetCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetUserCartId' => __DIR__ .'/GetUserCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetUserCartIdResponse' => __DIR__ .'/GetUserCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\SubmitOrderProducts' => __DIR__ .'/SubmitOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\SubmitOrderProductsResponse' => __DIR__ .'/SubmitOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetLatestOrdersXml' => __DIR__ .'/GetLatestOrdersXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetLatestOrdersXmlResponse' => __DIR__ .'/GetLatestOrdersXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrderXml' => __DIR__ .'/GetOrderXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\GetOrderXmlResponse' => __DIR__ .'/GetOrderXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\OrderWS\StringArray' => __DIR__ .'/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e5f4b614d9cbd5ad5f170c6a3b5891ec');

// Do nothing. The rest is just leftovers from the code generation.
{
}
