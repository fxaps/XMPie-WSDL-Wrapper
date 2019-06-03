<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetAssetsPrefixResponse
{

    /**
     * @var boolean $SetAssetsPrefixResult
     */
    protected $SetAssetsPrefixResult = null;

    /**
     * @param boolean $SetAssetsPrefixResult
     */
    public function __construct($SetAssetsPrefixResult = null)
    {
      $this->SetAssetsPrefixResult = $SetAssetsPrefixResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetsPrefixResult()
    {
      return $this->SetAssetsPrefixResult;
    }

    /**
     * @param boolean $SetAssetsPrefixResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetAssetsPrefixResponse
     */
    public function setSetAssetsPrefixResult($SetAssetsPrefixResult)
    {
      $this->SetAssetsPrefixResult = $SetAssetsPrefixResult;
      return $this;
    }

}
