<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP;

class TestDataSourceConnectivityByInfoResponse
{

    /**
     * @var boolean $TestDataSourceConnectivityByInfoResult
     */
    protected $TestDataSourceConnectivityByInfoResult = null;

    /**
     * @param boolean $TestDataSourceConnectivityByInfoResult
     */
    public function __construct($TestDataSourceConnectivityByInfoResult = null)
    {
      $this->TestDataSourceConnectivityByInfoResult = $TestDataSourceConnectivityByInfoResult;
    }

    /**
     * @return boolean
     */
    public function getTestDataSourceConnectivityByInfoResult()
    {
      return $this->TestDataSourceConnectivityByInfoResult;
    }

    /**
     * @param boolean $TestDataSourceConnectivityByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfoResponse
     */
    public function setTestDataSourceConnectivityByInfoResult($TestDataSourceConnectivityByInfoResult)
    {
      $this->TestDataSourceConnectivityByInfoResult = $TestDataSourceConnectivityByInfoResult;
      return $this;
    }

}
