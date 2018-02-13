<?php


 function autoload_e23a988e0ea896d21382c515b7b55be9($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\PaperSizeWS\PaperSizeWS' => __DIR__ .'/PaperSizeWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\PaperSizeWS\GetPaperSize' => __DIR__ .'/GetPaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\PaperSizeWS\GetPaperSizeResponse' => __DIR__ .'/GetPaperSizeResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\PaperSizeWS\PaperSize' => __DIR__ .'/PaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\PaperSizeWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e23a988e0ea896d21382c515b7b55be9');

// Do nothing. The rest is just leftovers from the code generation.
{
}
