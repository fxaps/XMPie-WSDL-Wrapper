<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP;

class HostTablesResponse
{

    /**
     * @var string $HostTablesResult
     */
    protected $HostTablesResult = null;

    /**
     * @param string $HostTablesResult
     */
    public function __construct($HostTablesResult = null)
    {
      $this->HostTablesResult = $HostTablesResult;
    }

    /**
     * @return string
     */
    public function getHostTablesResult()
    {
      return $this->HostTablesResult;
    }

    /**
     * @param string $HostTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP\HostTablesResponse
     */
    public function setHostTablesResult($HostTablesResult)
    {
      $this->HostTablesResult = $HostTablesResult;
      return $this;
    }

}
