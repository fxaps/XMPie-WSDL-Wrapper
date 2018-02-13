<?php


 function autoload_461b2193389db8badb4975e7d8024897($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\TaxWS\TaxWS' => __DIR__ .'/TaxWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\TaxWS\CalculateTax' => __DIR__ .'/CalculateTax.php',
        'XMPieWsdlClient\XMPie\uStore\v_9_0\WSAPI\TaxWS\CalculateTaxResponse' => __DIR__ .'/CalculateTaxResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_461b2193389db8badb4975e7d8024897');

// Do nothing. The rest is just leftovers from the code generation.
{
}
