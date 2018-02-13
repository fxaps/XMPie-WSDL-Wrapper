<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP;

class CloneResponse
{

    /**
     * @var DataSourceMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param DataSourceMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
      $this->CloneResult = $CloneResult;
    }

    /**
     * @return DataSourceMapping
     */
    public function getCloneResult()
    {
      return $this->CloneResult;
    }

    /**
     * @param DataSourceMapping $CloneResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSource_SSP\CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
      $this->CloneResult = $CloneResult;
      return $this;
    }

}
