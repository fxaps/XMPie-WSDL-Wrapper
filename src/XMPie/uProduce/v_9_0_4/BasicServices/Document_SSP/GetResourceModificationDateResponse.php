<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetResourceModificationDateResponse
{

    /**
     * @var float $GetResourceModificationDateResult
     */
    protected $GetResourceModificationDateResult = null;

    /**
     * @param float $GetResourceModificationDateResult
     */
    public function __construct($GetResourceModificationDateResult = null)
    {
      $this->GetResourceModificationDateResult = $GetResourceModificationDateResult;
    }

    /**
     * @return float
     */
    public function getGetResourceModificationDateResult()
    {
      return $this->GetResourceModificationDateResult;
    }

    /**
     * @param float $GetResourceModificationDateResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceModificationDateResponse
     */
    public function setGetResourceModificationDateResult($GetResourceModificationDateResult)
    {
      $this->GetResourceModificationDateResult = $GetResourceModificationDateResult;
      return $this;
    }

}
