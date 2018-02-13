<?php


 function autoload_a1a38d9b5e614e27f769f18589a22f0a($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\DocumentWS' => __DIR__ .'/DocumentWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\GetDocumentByProduct' => __DIR__ .'/GetDocumentByProduct.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\GetDocumentByProductResponse' => __DIR__ .'/GetDocumentByProductResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\Document' => __DIR__ .'/Document.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\GetDocument' => __DIR__ .'/GetDocument.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\DocumentWS\GetDocumentResponse' => __DIR__ .'/GetDocumentResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_a1a38d9b5e614e27f769f18589a22f0a');

// Do nothing. The rest is just leftovers from the code generation.
{
}
