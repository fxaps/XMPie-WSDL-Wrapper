<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\RecipientTable_SSP;

class ExportRecpientTableResponse
{

    /**
     * @var string $ExportRecpientTableResult
     */
    protected $ExportRecpientTableResult = null;

    /**
     * @param string $ExportRecpientTableResult
     */
    public function __construct($ExportRecpientTableResult = null)
    {
      $this->ExportRecpientTableResult = $ExportRecpientTableResult;
    }

    /**
     * @return string
     */
    public function getExportRecpientTableResult()
    {
      return $this->ExportRecpientTableResult;
    }

    /**
     * @param string $ExportRecpientTableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\RecipientTable_SSP\ExportRecpientTableResponse
     */
    public function setExportRecpientTableResult($ExportRecpientTableResult)
    {
      $this->ExportRecpientTableResult = $ExportRecpientTableResult;
      return $this;
    }

}
