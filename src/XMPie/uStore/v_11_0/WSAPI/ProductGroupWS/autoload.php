<?php


 function autoload_dd36ed86e5e45b30c522ebd5777cf1c7($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\ProductGroupWS' => __DIR__ .'/ProductGroupWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\GetProductGroupList' => __DIR__ .'/GetProductGroupList.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\GetProductGroupListResponse' => __DIR__ .'/GetProductGroupListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\ArrayOfProductGroup' => __DIR__ .'/ArrayOfProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\ProductGroup' => __DIR__ .'/ProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\GetProductGroup' => __DIR__ .'/GetProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\ProductGroupWS\GetProductGroupResponse' => __DIR__ .'/GetProductGroupResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_dd36ed86e5e45b30c522ebd5777cf1c7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
