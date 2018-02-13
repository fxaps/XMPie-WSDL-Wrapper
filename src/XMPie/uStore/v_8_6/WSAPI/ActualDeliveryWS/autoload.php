<?php


 function autoload_5b2f3dc44719fc3f6edaf5d58ecf27f6($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ActualDeliveryWS' => __DIR__ .'/ActualDeliveryWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\GetActualDelivery' => __DIR__ .'/GetActualDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\GetActualDeliveryResponse' => __DIR__ .'/GetActualDeliveryResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ActualDelivery' => __DIR__ .'/ActualDelivery.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProducts' => __DIR__ .'/CreateDeliveryByOrderProducts.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ArrayOfInt' => __DIR__ .'/ArrayOfInt.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\CreateDeliveryByOrderProductsResponse' => __DIR__ .'/CreateDeliveryByOrderProductsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ManualDeliveryArrived' => __DIR__ .'/ManualDeliveryArrived.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\ManualDeliveryArrivedResponse' => __DIR__ .'/ManualDeliveryArrivedResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS\StringArray' => __DIR__ .'/StringArray.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5b2f3dc44719fc3f6edaf5d58ecf27f6');

// Do nothing. The rest is just leftovers from the code generation.
{
}
