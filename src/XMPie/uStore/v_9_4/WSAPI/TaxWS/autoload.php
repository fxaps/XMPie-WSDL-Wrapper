<?php


 function autoload_4914dea72e54d16a12d2f3571cf2d7fd($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_4914dea72e54d16a12d2f3571cf2d7fd');

// Do nothing. The rest is just leftovers from the code generation.
{
}
