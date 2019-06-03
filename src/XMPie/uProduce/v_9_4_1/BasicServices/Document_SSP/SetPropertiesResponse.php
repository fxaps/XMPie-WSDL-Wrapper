<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP;

class SetPropertiesResponse
{

    /**
     * @var boolean $SetPropertiesResult
     */
    protected $SetPropertiesResult = null;

    /**
     * @param boolean $SetPropertiesResult
     */
    public function __construct($SetPropertiesResult = null)
    {
      $this->SetPropertiesResult = $SetPropertiesResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertiesResult()
    {
      return $this->SetPropertiesResult;
    }

    /**
     * @param boolean $SetPropertiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\SetPropertiesResponse
     */
    public function setSetPropertiesResult($SetPropertiesResult)
    {
      $this->SetPropertiesResult = $SetPropertiesResult;
      return $this;
    }

}
