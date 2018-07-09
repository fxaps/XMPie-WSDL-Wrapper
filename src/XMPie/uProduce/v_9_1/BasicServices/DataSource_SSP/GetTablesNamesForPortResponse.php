<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSource_SSP;

class GetTablesNamesForPortResponse
{

    /**
     * @var ArrayOfString $GetTablesNamesForPortResult
     */
    protected $GetTablesNamesForPortResult = null;

    /**
     * @param ArrayOfString $GetTablesNamesForPortResult
     */
    public function __construct($GetTablesNamesForPortResult = null)
    {
      $this->GetTablesNamesForPortResult = $GetTablesNamesForPortResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetTablesNamesForPortResult()
    {
      return $this->GetTablesNamesForPortResult;
    }

    /**
     * @param ArrayOfString $GetTablesNamesForPortResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSource_SSP\GetTablesNamesForPortResponse
     */
    public function setGetTablesNamesForPortResult($GetTablesNamesForPortResult)
    {
      $this->GetTablesNamesForPortResult = $GetTablesNamesForPortResult;
      return $this;
    }

}
