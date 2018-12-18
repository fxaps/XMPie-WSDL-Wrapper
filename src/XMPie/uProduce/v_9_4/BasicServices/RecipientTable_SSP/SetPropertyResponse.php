<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP;

class SetPropertyResponse
{

    /**
     * @var boolean $SetPropertyResult
     */
    protected $SetPropertyResult = null;

    /**
     * @param boolean $SetPropertyResult
     */
    public function __construct($SetPropertyResult = null)
    {
      $this->SetPropertyResult = $SetPropertyResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertyResult()
    {
      return $this->SetPropertyResult;
    }

    /**
     * @param boolean $SetPropertyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\SetPropertyResponse
     */
    public function setSetPropertyResult($SetPropertyResult)
    {
      $this->SetPropertyResult = $SetPropertyResult;
      return $this;
    }

}
