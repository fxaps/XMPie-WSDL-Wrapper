<?php


 function autoload_e790d56eda318394de166ee7c6ecf3ab($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_11_0\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_e790d56eda318394de166ee7c6ecf3ab');

// Do nothing. The rest is just leftovers from the code generation.
{
}
