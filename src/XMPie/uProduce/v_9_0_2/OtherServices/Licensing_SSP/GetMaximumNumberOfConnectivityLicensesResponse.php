<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP;

class GetMaximumNumberOfConnectivityLicensesResponse
{

    /**
     * @var int $GetMaximumNumberOfConnectivityLicensesResult
     */
    protected $GetMaximumNumberOfConnectivityLicensesResult = null;

    /**
     * @param int $GetMaximumNumberOfConnectivityLicensesResult
     */
    public function __construct($GetMaximumNumberOfConnectivityLicensesResult = null)
    {
      $this->GetMaximumNumberOfConnectivityLicensesResult = $GetMaximumNumberOfConnectivityLicensesResult;
    }

    /**
     * @return int
     */
    public function getGetMaximumNumberOfConnectivityLicensesResult()
    {
      return $this->GetMaximumNumberOfConnectivityLicensesResult;
    }

    /**
     * @param int $GetMaximumNumberOfConnectivityLicensesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\Licensing_SSP\GetMaximumNumberOfConnectivityLicensesResponse
     */
    public function setGetMaximumNumberOfConnectivityLicensesResult($GetMaximumNumberOfConnectivityLicensesResult)
    {
      $this->GetMaximumNumberOfConnectivityLicensesResult = $GetMaximumNumberOfConnectivityLicensesResult;
      return $this;
    }

}
