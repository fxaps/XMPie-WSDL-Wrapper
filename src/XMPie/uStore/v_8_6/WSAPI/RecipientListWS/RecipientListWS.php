<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\RecipientListWS;

class RecipientListWS extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\GetRecipientList',
  'GetRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\GetRecipientListResponse',
  'RecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\RecipientList',
  'ReturnObject' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\ReturnObject',
  'AddRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\AddRecipientList',
  'AddRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\AddRecipientListResponse',
  'UpdateRecipientList' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\UpdateRecipientList',
  'UpdateRecipientListResponse' => 'XMPieWsdlClient\\XMPie\\uStore\\v_8_6\\WSAPI\\RecipientListWS\\UpdateRecipientListResponse',
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
        $wsdl = 'http://localhost/ustorewsapi/RecipientListWS.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Returns the data of the given Recipient list.
     *
     * @param GetRecipientList $parameters
     * @return GetRecipientListResponse
     */
    public function GetRecipientList(GetRecipientList $parameters)
    {
      return $this->__soapCall('GetRecipientList', array($parameters));
    }

    /**
     * Adds a new recipient list with the given data
     *
     * @param AddRecipientList $parameters
     * @return AddRecipientListResponse
     */
    public function AddRecipientList(AddRecipientList $parameters)
    {
      return $this->__soapCall('AddRecipientList', array($parameters));
    }

    /**
     * Updates an existing recipient list with the given data
     *
     * @param UpdateRecipientList $parameters
     * @return UpdateRecipientListResponse
     */
    public function UpdateRecipientList(UpdateRecipientList $parameters)
    {
      return $this->__soapCall('UpdateRecipientList', array($parameters));
    }

}
