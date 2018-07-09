<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSource_SSP;

class ExportHostedTablesResponse
{

    /**
     * @var boolean $ExportHostedTablesResult
     */
    protected $ExportHostedTablesResult = null;

    /**
     * @param boolean $ExportHostedTablesResult
     */
    public function __construct($ExportHostedTablesResult = null)
    {
      $this->ExportHostedTablesResult = $ExportHostedTablesResult;
    }

    /**
     * @return boolean
     */
    public function getExportHostedTablesResult()
    {
      return $this->ExportHostedTablesResult;
    }

    /**
     * @param boolean $ExportHostedTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSource_SSP\ExportHostedTablesResponse
     */
    public function setExportHostedTablesResult($ExportHostedTablesResult)
    {
      $this->ExportHostedTablesResult = $ExportHostedTablesResult;
      return $this;
    }

}
