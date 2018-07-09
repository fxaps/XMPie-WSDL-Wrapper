<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP;

class ValidateConnectivityLicenseResponse
{

    /**
     * @var boolean $ValidateConnectivityLicenseResult
     */
    protected $ValidateConnectivityLicenseResult = null;

    /**
     * @param boolean $ValidateConnectivityLicenseResult
     */
    public function __construct($ValidateConnectivityLicenseResult = null)
    {
      $this->ValidateConnectivityLicenseResult = $ValidateConnectivityLicenseResult;
    }

    /**
     * @return boolean
     */
    public function getValidateConnectivityLicenseResult()
    {
      return $this->ValidateConnectivityLicenseResult;
    }

    /**
     * @param boolean $ValidateConnectivityLicenseResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Licensing_SSP\ValidateConnectivityLicenseResponse
     */
    public function setValidateConnectivityLicenseResult($ValidateConnectivityLicenseResult)
    {
      $this->ValidateConnectivityLicenseResult = $ValidateConnectivityLicenseResult;
      return $this;
    }

}
