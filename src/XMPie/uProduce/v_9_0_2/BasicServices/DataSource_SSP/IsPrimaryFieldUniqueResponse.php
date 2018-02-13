<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP;

class IsPrimaryFieldUniqueResponse
{

    /**
     * @var boolean $IsPrimaryFieldUniqueResult
     */
    protected $IsPrimaryFieldUniqueResult = null;

    /**
     * @param boolean $IsPrimaryFieldUniqueResult
     */
    public function __construct($IsPrimaryFieldUniqueResult = null)
    {
      $this->IsPrimaryFieldUniqueResult = $IsPrimaryFieldUniqueResult;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryFieldUniqueResult()
    {
      return $this->IsPrimaryFieldUniqueResult;
    }

    /**
     * @param boolean $IsPrimaryFieldUniqueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSource_SSP\IsPrimaryFieldUniqueResponse
     */
    public function setIsPrimaryFieldUniqueResult($IsPrimaryFieldUniqueResult)
    {
      $this->IsPrimaryFieldUniqueResult = $IsPrimaryFieldUniqueResult;
      return $this;
    }

}
