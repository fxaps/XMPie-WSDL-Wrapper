<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class GetAppendJobIDResponse
{

    /**
     * @var boolean $GetAppendJobIDResult
     */
    protected $GetAppendJobIDResult = null;

    /**
     * @param boolean $GetAppendJobIDResult
     */
    public function __construct($GetAppendJobIDResult = null)
    {
      $this->GetAppendJobIDResult = $GetAppendJobIDResult;
    }

    /**
     * @return boolean
     */
    public function getGetAppendJobIDResult()
    {
      return $this->GetAppendJobIDResult;
    }

    /**
     * @param boolean $GetAppendJobIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\GetAppendJobIDResponse
     */
    public function setGetAppendJobIDResult($GetAppendJobIDResult)
    {
      $this->GetAppendJobIDResult = $GetAppendJobIDResult;
      return $this;
    }

}
