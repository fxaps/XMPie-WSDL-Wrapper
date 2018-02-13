<?php


 function autoload_26f781d115261da4208c4598ec944f9a($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\ProductWS' => __DIR__ .'/ProductWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductList' => __DIR__ .'/GetProductList.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductListResponse' => __DIR__ .'/GetProductListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\ArrayOfProduct' => __DIR__ .'/ArrayOfProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\Product' => __DIR__ .'/Product.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductListByStore' => __DIR__ .'/GetProductListByStore.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductListByStoreResponse' => __DIR__ .'/GetProductListByStoreResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProduct' => __DIR__ .'/GetProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductResponse' => __DIR__ .'/GetProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductThumbnails' => __DIR__ .'/GetProductThumbnails.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductThumbnailsResponse' => __DIR__ .'/GetProductThumbnailsResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\ArrayOfBase64Binary' => __DIR__ .'/ArrayOfBase64Binary.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductIDByExternalID' => __DIR__ .'/GetProductIDByExternalID.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\ProductWS\GetProductIDByExternalIDResponse' => __DIR__ .'/GetProductIDByExternalIDResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_26f781d115261da4208c4598ec944f9a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
