<?php


 function autoload_38c11b40fa725215bd6da3a891279a97($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\AddressWS' => __DIR__ .'/AddressWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\AddAddress' => __DIR__ .'/AddAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\Address' => __DIR__ .'/Address.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\ReturnObject' => __DIR__ .'/ReturnObject.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\AddAddressResponse' => __DIR__ .'/AddAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\UpdateAddress' => __DIR__ .'/UpdateAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\UpdateAddressResponse' => __DIR__ .'/UpdateAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddress' => __DIR__ .'/GetAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddressResponse' => __DIR__ .'/GetAddressResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddressListByCustomer' => __DIR__ .'/GetAddressListByCustomer.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddressListByCustomerResponse' => __DIR__ .'/GetAddressListByCustomerResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\ArrayOfAddress' => __DIR__ .'/ArrayOfAddress.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddressListByUser' => __DIR__ .'/GetAddressListByUser.php',
        'XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\AddressWS\GetAddressListByUserResponse' => __DIR__ .'/GetAddressListByUserResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_38c11b40fa725215bd6da3a891279a97');

// Do nothing. The rest is just leftovers from the code generation.
{
}
