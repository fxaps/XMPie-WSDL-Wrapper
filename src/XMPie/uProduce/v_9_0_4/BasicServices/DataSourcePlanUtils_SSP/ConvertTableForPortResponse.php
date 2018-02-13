<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP;

class ConvertTableForPortResponse
{

    /**
     * @var boolean $ConvertTableForPortResult
     */
    protected $ConvertTableForPortResult = null;

    /**
     * @param boolean $ConvertTableForPortResult
     */
    public function __construct($ConvertTableForPortResult = null)
    {
      $this->ConvertTableForPortResult = $ConvertTableForPortResult;
    }

    /**
     * @return boolean
     */
    public function getConvertTableForPortResult()
    {
      return $this->ConvertTableForPortResult;
    }

    /**
     * @param boolean $ConvertTableForPortResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\ConvertTableForPortResponse
     */
    public function setConvertTableForPortResult($ConvertTableForPortResult)
    {
      $this->ConvertTableForPortResult = $ConvertTableForPortResult;
      return $this;
    }

}
