<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class CloneResponse
{

    /**
     * @var CampaignMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param CampaignMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
      $this->CloneResult = $CloneResult;
    }

    /**
     * @return CampaignMapping
     */
    public function getCloneResult()
    {
      return $this->CloneResult;
    }

    /**
     * @param CampaignMapping $CloneResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
      $this->CloneResult = $CloneResult;
      return $this;
    }

}
