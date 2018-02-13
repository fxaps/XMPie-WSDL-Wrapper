<?php


 function autoload_893ec3e33ccf41e7cd79976895198691($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\OrderWS' => __DIR__ .'/OrderWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrder' => __DIR__ .'/GetOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrderResponse' => __DIR__ .'/GetOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\Order' => __DIR__ .'/Order.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrderHistory' => __DIR__ .'/GetOrderHistory.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrderHistoryResponse' => __DIR__ .'/GetOrderHistoryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\ArrayOfOrder' => __DIR__ .'/ArrayOfOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetCartId' => __DIR__ .'/GetCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetCartIdResponse' => __DIR__ .'/GetCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetUserCartId' => __DIR__ .'/GetUserCartId.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetUserCartIdResponse' => __DIR__ .'/GetUserCartIdResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\SubmitOrder' => __DIR__ .'/SubmitOrder.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\SubmitOrderResponse' => __DIR__ .'/SubmitOrderResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\SubmitOrderProducts' => __DIR__ .'/SubmitOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\SubmitOrderProductsResponse' => __DIR__ .'/SubmitOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetLatestOrdersXml' => __DIR__ .'/GetLatestOrdersXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetLatestOrdersXmlResponse' => __DIR__ .'/GetLatestOrdersXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrderXml' => __DIR__ .'/GetOrderXml.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\GetOrderXmlResponse' => __DIR__ .'/GetOrderXmlResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\OrderWS\StringArray' => __DIR__ .'/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_893ec3e33ccf41e7cd79976895198691');

// Do nothing. The rest is just leftovers from the code generation.
{
}
