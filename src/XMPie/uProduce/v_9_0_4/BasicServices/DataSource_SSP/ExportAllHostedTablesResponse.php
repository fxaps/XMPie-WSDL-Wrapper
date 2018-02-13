<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP;

class ExportAllHostedTablesResponse
{

    /**
     * @var boolean $ExportAllHostedTablesResult
     */
    protected $ExportAllHostedTablesResult = null;

    /**
     * @param boolean $ExportAllHostedTablesResult
     */
    public function __construct($ExportAllHostedTablesResult = null)
    {
      $this->ExportAllHostedTablesResult = $ExportAllHostedTablesResult;
    }

    /**
     * @return boolean
     */
    public function getExportAllHostedTablesResult()
    {
      return $this->ExportAllHostedTablesResult;
    }

    /**
     * @param boolean $ExportAllHostedTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP\ExportAllHostedTablesResponse
     */
    public function setExportAllHostedTablesResult($ExportAllHostedTablesResult)
    {
      $this->ExportAllHostedTablesResult = $ExportAllHostedTablesResult;
      return $this;
    }

}
