<?php


 function autoload_5c0fcb9074c3d43063bc34cb4dfcee3b($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\ProductGroupWS' => __DIR__ .'/ProductGroupWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\GetProductGroupList' => __DIR__ .'/GetProductGroupList.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\GetProductGroupListResponse' => __DIR__ .'/GetProductGroupListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\ArrayOfProductGroup' => __DIR__ .'/ArrayOfProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\ProductGroup' => __DIR__ .'/ProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\GetProductGroup' => __DIR__ .'/GetProductGroup.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\ProductGroupWS\GetProductGroupResponse' => __DIR__ .'/GetProductGroupResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_5c0fcb9074c3d43063bc34cb4dfcee3b');

// Do nothing. The rest is just leftovers from the code generation.
{
}
