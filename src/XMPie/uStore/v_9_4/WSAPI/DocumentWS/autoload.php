<?php


 function autoload_845fb4f92df4b26f8549ca08e06182d8($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\DocumentWS' => __DIR__ .'/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ .'/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ .'/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\Document' => __DIR__ .'/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\GetDocument' => __DIR__ .'/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ .'/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_845fb4f92df4b26f8549ca08e06182d8');

// Do nothing. The rest is just leftovers from the code generation.
{
}
