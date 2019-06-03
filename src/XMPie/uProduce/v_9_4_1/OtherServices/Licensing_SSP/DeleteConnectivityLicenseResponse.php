<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP;

class DeleteConnectivityLicenseResponse
{

    /**
     * @var boolean $DeleteConnectivityLicenseResult
     */
    protected $DeleteConnectivityLicenseResult = null;

    /**
     * @param boolean $DeleteConnectivityLicenseResult
     */
    public function __construct($DeleteConnectivityLicenseResult = null)
    {
      $this->DeleteConnectivityLicenseResult = $DeleteConnectivityLicenseResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteConnectivityLicenseResult()
    {
      return $this->DeleteConnectivityLicenseResult;
    }

    /**
     * @param boolean $DeleteConnectivityLicenseResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\DeleteConnectivityLicenseResponse
     */
    public function setDeleteConnectivityLicenseResult($DeleteConnectivityLicenseResult)
    {
      $this->DeleteConnectivityLicenseResult = $DeleteConnectivityLicenseResult;
      return $this;
    }

}
