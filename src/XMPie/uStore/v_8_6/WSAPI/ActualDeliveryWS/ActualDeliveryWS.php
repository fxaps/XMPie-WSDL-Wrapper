<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ActualDeliveryWS;

class ActualDeliveryWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetActualDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\GetActualDelivery',
  'GetActualDeliveryResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\GetActualDeliveryResponse',
  'ActualDelivery' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\ActualDelivery',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\ReturnObject',
  'CreateDeliveryByOrderProducts' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\CreateDeliveryByOrderProducts',
  'ArrayOfInt' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\ArrayOfInt',
  'CreateDeliveryByOrderProductsResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\CreateDeliveryByOrderProductsResponse',
  'ManualDeliveryArrived' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\ManualDeliveryArrived',
  'ManualDeliveryArrivedResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\ManualDeliveryArrivedResponse',
  'StringArray' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\ActualDeliveryWS\\StringArray',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/ustorewsapi/ActualDeliveryWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the actual delivery which its ID is given.
     *
     * @param GetActualDelivery $parameters
     * @return GetActualDeliveryResponse
     */
    public function GetActualDelivery(GetActualDelivery $parameters)
    {
      return $this->__soapCall('GetActualDelivery', array($parameters));
    }

    /**
     * Creates a delivery for the supplied order products (items), and saves the delivery date and tracking number.
     *
     * @param CreateDeliveryByOrderProducts $parameters
     * @return CreateDeliveryByOrderProductsResponse
     */
    public function CreateDeliveryByOrderProducts(CreateDeliveryByOrderProducts $parameters)
    {
      return $this->__soapCall('CreateDeliveryByOrderProducts', array($parameters));
    }

    /**
     * Moves the order products of the delivery to the Delivered queue.
     *
     * @param ManualDeliveryArrived $parameters
     * @return ManualDeliveryArrivedResponse
     */
    public function ManualDeliveryArrived(ManualDeliveryArrived $parameters)
    {
      return $this->__soapCall('ManualDeliveryArrived', array($parameters));
    }

}
