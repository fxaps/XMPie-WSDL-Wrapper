<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP;

class IsTableReadyForPortResponse
{

    /**
     * @var boolean $IsTableReadyForPortResult
     */
    protected $IsTableReadyForPortResult = null;

    /**
     * @param boolean $IsTableReadyForPortResult
     */
    public function __construct($IsTableReadyForPortResult = null)
    {
      $this->IsTableReadyForPortResult = $IsTableReadyForPortResult;
    }

    /**
     * @return boolean
     */
    public function getIsTableReadyForPortResult()
    {
      return $this->IsTableReadyForPortResult;
    }

    /**
     * @param boolean $IsTableReadyForPortResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\IsTableReadyForPortResponse
     */
    public function setIsTableReadyForPortResult($IsTableReadyForPortResult)
    {
      $this->IsTableReadyForPortResult = $IsTableReadyForPortResult;
      return $this;
    }

}
