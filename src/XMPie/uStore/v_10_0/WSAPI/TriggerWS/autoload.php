<?php


 function autoload_69b9a59423f8eaadf39df029eff2e3c2($class)
{
    $classes = array(
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\TriggerWS' => __DIR__ .'/TriggerWS.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeCustomerRegistrationEvent' => __DIR__ .'/InvokeCustomerRegistrationEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeCustomerRegistrationEventResponse' => __DIR__ .'/InvokeCustomerRegistrationEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeCustomerUpdateEvent' => __DIR__ .'/InvokeCustomerUpdateEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeCustomerUpdateEventResponse' => __DIR__ .'/InvokeCustomerUpdateEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeOrderSubmissionEvent' => __DIR__ .'/InvokeOrderSubmissionEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeOrderSubmissionEventResponse' => __DIR__ .'/InvokeOrderSubmissionEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeReorderEvent' => __DIR__ .'/InvokeReorderEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeReorderEventResponse' => __DIR__ .'/InvokeReorderEventResponse.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeEvent' => __DIR__ .'/InvokeEvent.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\ArrayOfParameter' => __DIR__ .'/ArrayOfParameter.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\Parameter' => __DIR__ .'/Parameter.php',
        'XMPieWsdlClient\XMPie\uStore\v_10_0\WSAPI\TriggerWS\InvokeEventResponse' => __DIR__ .'/InvokeEventResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_69b9a59423f8eaadf39df029eff2e3c2');

// Do nothing. The rest is just leftovers from the code generation.
{
}
