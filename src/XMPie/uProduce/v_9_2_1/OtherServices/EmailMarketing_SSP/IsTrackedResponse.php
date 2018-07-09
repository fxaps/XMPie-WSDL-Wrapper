<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class IsTrackedResponse
{

    /**
     * @var boolean $IsTrackedResult
     */
    protected $IsTrackedResult = null;

    /**
     * @param boolean $IsTrackedResult
     */
    public function __construct($IsTrackedResult = null)
    {
      $this->IsTrackedResult = $IsTrackedResult;
    }

    /**
     * @return boolean
     */
    public function getIsTrackedResult()
    {
      return $this->IsTrackedResult;
    }

    /**
     * @param boolean $IsTrackedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\IsTrackedResponse
     */
    public function setIsTrackedResult($IsTrackedResult)
    {
      $this->IsTrackedResult = $IsTrackedResult;
      return $this;
    }

}
