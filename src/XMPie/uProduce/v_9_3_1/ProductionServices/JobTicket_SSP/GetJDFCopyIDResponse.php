<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class GetJDFCopyIDResponse
{

    /**
     * @var string $GetJDFCopyIDResult
     */
    protected $GetJDFCopyIDResult = null;

    /**
     * @param string $GetJDFCopyIDResult
     */
    public function __construct($GetJDFCopyIDResult = null)
    {
      $this->GetJDFCopyIDResult = $GetJDFCopyIDResult;
    }

    /**
     * @return string
     */
    public function getGetJDFCopyIDResult()
    {
      return $this->GetJDFCopyIDResult;
    }

    /**
     * @param string $GetJDFCopyIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\GetJDFCopyIDResponse
     */
    public function setGetJDFCopyIDResult($GetJDFCopyIDResult)
    {
      $this->GetJDFCopyIDResult = $GetJDFCopyIDResult;
      return $this;
    }

}
