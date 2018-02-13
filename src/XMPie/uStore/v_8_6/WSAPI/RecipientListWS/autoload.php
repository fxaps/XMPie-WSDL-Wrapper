<?php


 function autoload_36d6a39a3349250b38760bdb3469d738($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\RecipientListWS' => __DIR__ .'/RecipientListWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientList' => __DIR__ .'/GetRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\GetRecipientListResponse' => __DIR__ .'/GetRecipientListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\RecipientList' => __DIR__ .'/RecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\AddRecipientList' => __DIR__ .'/AddRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\AddRecipientListResponse' => __DIR__ .'/AddRecipientListResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\UpdateRecipientList' => __DIR__ .'/UpdateRecipientList.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS\UpdateRecipientListResponse' => __DIR__ .'/UpdateRecipientListResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_36d6a39a3349250b38760bdb3469d738');

// Do nothing. The rest is just leftovers from the code generation.
{
}
