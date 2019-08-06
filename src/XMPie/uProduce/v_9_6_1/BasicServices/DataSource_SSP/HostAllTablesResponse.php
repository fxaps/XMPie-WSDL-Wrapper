<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP;

class HostAllTablesResponse
{

    /**
     * @var string $HostAllTablesResult
     */
    protected $HostAllTablesResult = null;

    /**
     * @param string $HostAllTablesResult
     */
    public function __construct($HostAllTablesResult = null)
    {
      $this->HostAllTablesResult = $HostAllTablesResult;
    }

    /**
     * @return string
     */
    public function getHostAllTablesResult()
    {
      return $this->HostAllTablesResult;
    }

    /**
     * @param string $HostAllTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\HostAllTablesResponse
     */
    public function setHostAllTablesResult($HostAllTablesResult)
    {
      $this->HostAllTablesResult = $HostAllTablesResult;
      return $this;
    }

}
