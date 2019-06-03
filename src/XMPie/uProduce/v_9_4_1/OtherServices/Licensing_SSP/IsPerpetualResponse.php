<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP;

class IsPerpetualResponse
{

    /**
     * @var boolean $IsPerpetualResult
     */
    protected $IsPerpetualResult = null;

    /**
     * @param boolean $IsPerpetualResult
     */
    public function __construct($IsPerpetualResult = null)
    {
      $this->IsPerpetualResult = $IsPerpetualResult;
    }

    /**
     * @return boolean
     */
    public function getIsPerpetualResult()
    {
      return $this->IsPerpetualResult;
    }

    /**
     * @param boolean $IsPerpetualResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Licensing_SSP\IsPerpetualResponse
     */
    public function setIsPerpetualResult($IsPerpetualResult)
    {
      $this->IsPerpetualResult = $IsPerpetualResult;
      return $this;
    }

}
