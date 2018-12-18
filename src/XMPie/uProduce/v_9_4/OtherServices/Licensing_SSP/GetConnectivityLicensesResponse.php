<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP;

class GetConnectivityLicensesResponse
{

    /**
     * @var GetConnectivityLicensesResult $GetConnectivityLicensesResult
     */
    protected $GetConnectivityLicensesResult = null;

    /**
     * @param GetConnectivityLicensesResult $GetConnectivityLicensesResult
     */
    public function __construct($GetConnectivityLicensesResult = null)
    {
      $this->GetConnectivityLicensesResult = $GetConnectivityLicensesResult;
    }

    /**
     * @return GetConnectivityLicensesResult
     */
    public function getGetConnectivityLicensesResult()
    {
      return $this->GetConnectivityLicensesResult;
    }

    /**
     * @param GetConnectivityLicensesResult $GetConnectivityLicensesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Licensing_SSP\GetConnectivityLicensesResponse
     */
    public function setGetConnectivityLicensesResult($GetConnectivityLicensesResult)
    {
      $this->GetConnectivityLicensesResult = $GetConnectivityLicensesResult;
      return $this;
    }

}
