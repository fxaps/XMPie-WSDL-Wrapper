<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP;

class GetOutputResultDownloadURLResponse
{

    /**
     * @var string $GetOutputResultDownloadURLResult
     */
    protected $GetOutputResultDownloadURLResult = null;

    /**
     * @param string $GetOutputResultDownloadURLResult
     */
    public function __construct($GetOutputResultDownloadURLResult = null)
    {
      $this->GetOutputResultDownloadURLResult = $GetOutputResultDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetOutputResultDownloadURLResult()
    {
      return $this->GetOutputResultDownloadURLResult;
    }

    /**
     * @param string $GetOutputResultDownloadURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Job_SSP\GetOutputResultDownloadURLResponse
     */
    public function setGetOutputResultDownloadURLResult($GetOutputResultDownloadURLResult)
    {
      $this->GetOutputResultDownloadURLResult = $GetOutputResultDownloadURLResult;
      return $this;
    }

}
