<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP;

class IsMatchingToPlanResponse
{

    /**
     * @var boolean $IsMatchingToPlanResult
     */
    protected $IsMatchingToPlanResult = null;

    /**
     * @param boolean $IsMatchingToPlanResult
     */
    public function __construct($IsMatchingToPlanResult = null)
    {
      $this->IsMatchingToPlanResult = $IsMatchingToPlanResult;
    }

    /**
     * @return boolean
     */
    public function getIsMatchingToPlanResult()
    {
      return $this->IsMatchingToPlanResult;
    }

    /**
     * @param boolean $IsMatchingToPlanResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP\IsMatchingToPlanResponse
     */
    public function setIsMatchingToPlanResult($IsMatchingToPlanResult)
    {
      $this->IsMatchingToPlanResult = $IsMatchingToPlanResult;
      return $this;
    }

}
