<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP;

class TestFTPConnectivityResponse
{

    /**
     * @var boolean $TestFTPConnectivityResult
     */
    protected $TestFTPConnectivityResult = null;

    /**
     * @param boolean $TestFTPConnectivityResult
     */
    public function __construct($TestFTPConnectivityResult = null)
    {
      $this->TestFTPConnectivityResult = $TestFTPConnectivityResult;
    }

    /**
     * @return boolean
     */
    public function getTestFTPConnectivityResult()
    {
      return $this->TestFTPConnectivityResult;
    }

    /**
     * @param boolean $TestFTPConnectivityResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ApplicationServices\Destination_SSP\TestFTPConnectivityResponse
     */
    public function setTestFTPConnectivityResult($TestFTPConnectivityResult)
    {
      $this->TestFTPConnectivityResult = $TestFTPConnectivityResult;
      return $this;
    }

}
