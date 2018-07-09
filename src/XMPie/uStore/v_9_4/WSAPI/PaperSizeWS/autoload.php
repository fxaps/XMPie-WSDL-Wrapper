<?php


 function autoload_01b8212e25cb9f6c3b8b4d37c5fea09c($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PaperSizeWS\PaperSizeWS' => __DIR__ .'/PaperSizeWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PaperSizeWS\GetPaperSize' => __DIR__ .'/GetPaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PaperSizeWS\GetPaperSizeResponse' => __DIR__ .'/GetPaperSizeResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PaperSizeWS\PaperSize' => __DIR__ .'/PaperSize.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\PaperSizeWS\ReturnObject' => __DIR__ .'/ReturnObject.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_01b8212e25cb9f6c3b8b4d37c5fea09c');

// Do nothing. The rest is just leftovers from the code generation.
{
}
