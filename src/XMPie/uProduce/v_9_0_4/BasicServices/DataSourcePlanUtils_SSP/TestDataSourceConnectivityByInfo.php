<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP;

class TestDataSourceConnectivityByInfo
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var Connection $inConnectionInfo
     */
    protected $inConnectionInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param Connection $inConnectionInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inConnectionInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConnectionInfo = $inConnectionInfo;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfo
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnectionInfo()
    {
      return $this->inConnectionInfo;
    }

    /**
     * @param Connection $inConnectionInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\TestDataSourceConnectivityByInfo
     */
    public function setInConnectionInfo($inConnectionInfo)
    {
      $this->inConnectionInfo = $inConnectionInfo;
      return $this;
    }

}
