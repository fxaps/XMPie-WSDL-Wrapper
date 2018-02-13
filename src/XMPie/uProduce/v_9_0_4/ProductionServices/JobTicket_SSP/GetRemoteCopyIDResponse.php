<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetRemoteCopyIDResponse
{

    /**
     * @var string $GetRemoteCopyIDResult
     */
    protected $GetRemoteCopyIDResult = null;

    /**
     * @param string $GetRemoteCopyIDResult
     */
    public function __construct($GetRemoteCopyIDResult = null)
    {
      $this->GetRemoteCopyIDResult = $GetRemoteCopyIDResult;
    }

    /**
     * @return string
     */
    public function getGetRemoteCopyIDResult()
    {
      return $this->GetRemoteCopyIDResult;
    }

    /**
     * @param string $GetRemoteCopyIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetRemoteCopyIDResponse
     */
    public function setGetRemoteCopyIDResult($GetRemoteCopyIDResult)
    {
      $this->GetRemoteCopyIDResult = $GetRemoteCopyIDResult;
      return $this;
    }

}
