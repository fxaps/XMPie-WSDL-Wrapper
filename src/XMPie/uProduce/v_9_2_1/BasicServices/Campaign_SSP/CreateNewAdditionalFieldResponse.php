<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class CreateNewAdditionalFieldResponse
{

    /**
     * @var boolean $CreateNewAdditionalFieldResult
     */
    protected $CreateNewAdditionalFieldResult = null;

    /**
     * @param boolean $CreateNewAdditionalFieldResult
     */
    public function __construct($CreateNewAdditionalFieldResult = null)
    {
      $this->CreateNewAdditionalFieldResult = $CreateNewAdditionalFieldResult;
    }

    /**
     * @return boolean
     */
    public function getCreateNewAdditionalFieldResult()
    {
      return $this->CreateNewAdditionalFieldResult;
    }

    /**
     * @param boolean $CreateNewAdditionalFieldResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CreateNewAdditionalFieldResponse
     */
    public function setCreateNewAdditionalFieldResult($CreateNewAdditionalFieldResult)
    {
      $this->CreateNewAdditionalFieldResult = $CreateNewAdditionalFieldResult;
      return $this;
    }

}
