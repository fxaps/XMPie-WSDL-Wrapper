<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP;

class GetModificationDateResponse
{

    /**
     * @var float $GetModificationDateResult
     */
    protected $GetModificationDateResult = null;

    /**
     * @param float $GetModificationDateResult
     */
    public function __construct($GetModificationDateResult = null)
    {
      $this->GetModificationDateResult = $GetModificationDateResult;
    }

    /**
     * @return float
     */
    public function getGetModificationDateResult()
    {
      return $this->GetModificationDateResult;
    }

    /**
     * @param float $GetModificationDateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetModificationDateResponse
     */
    public function setGetModificationDateResult($GetModificationDateResult)
    {
      $this->GetModificationDateResult = $GetModificationDateResult;
      return $this;
    }

}
