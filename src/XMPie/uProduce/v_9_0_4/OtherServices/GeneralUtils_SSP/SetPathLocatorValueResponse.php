<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class SetPathLocatorValueResponse
{

    /**
     * @var boolean $SetPathLocatorValueResult
     */
    protected $SetPathLocatorValueResult = null;

    /**
     * @param boolean $SetPathLocatorValueResult
     */
    public function __construct($SetPathLocatorValueResult = null)
    {
      $this->SetPathLocatorValueResult = $SetPathLocatorValueResult;
    }

    /**
     * @return boolean
     */
    public function getSetPathLocatorValueResult()
    {
      return $this->SetPathLocatorValueResult;
    }

    /**
     * @param boolean $SetPathLocatorValueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\SetPathLocatorValueResponse
     */
    public function setSetPathLocatorValueResult($SetPathLocatorValueResult)
    {
      $this->SetPathLocatorValueResult = $SetPathLocatorValueResult;
      return $this;
    }

}
