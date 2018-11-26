<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class IsJobTrackedResponse
{

    /**
     * @var boolean $IsJobTrackedResult
     */
    protected $IsJobTrackedResult = null;

    /**
     * @param boolean $IsJobTrackedResult
     */
    public function __construct($IsJobTrackedResult = null)
    {
      $this->IsJobTrackedResult = $IsJobTrackedResult;
    }

    /**
     * @return boolean
     */
    public function getIsJobTrackedResult()
    {
      return $this->IsJobTrackedResult;
    }

    /**
     * @param boolean $IsJobTrackedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\IsJobTrackedResponse
     */
    public function setIsJobTrackedResult($IsJobTrackedResult)
    {
      $this->IsJobTrackedResult = $IsJobTrackedResult;
      return $this;
    }

}
