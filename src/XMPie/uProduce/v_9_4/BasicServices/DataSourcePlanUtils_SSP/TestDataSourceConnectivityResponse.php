<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\DataSourcePlanUtils_SSP;

class TestDataSourceConnectivityResponse
{

    /**
     * @var boolean $TestDataSourceConnectivityResult
     */
    protected $TestDataSourceConnectivityResult = null;

    /**
     * @param boolean $TestDataSourceConnectivityResult
     */
    public function __construct($TestDataSourceConnectivityResult = null)
    {
      $this->TestDataSourceConnectivityResult = $TestDataSourceConnectivityResult;
    }

    /**
     * @return boolean
     */
    public function getTestDataSourceConnectivityResult()
    {
      return $this->TestDataSourceConnectivityResult;
    }

    /**
     * @param boolean $TestDataSourceConnectivityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityResponse
     */
    public function setTestDataSourceConnectivityResult($TestDataSourceConnectivityResult)
    {
      $this->TestDataSourceConnectivityResult = $TestDataSourceConnectivityResult;
      return $this;
    }

}
