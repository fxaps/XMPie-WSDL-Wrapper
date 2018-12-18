<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class GetResourceDownloadURLResponse
{

    /**
     * @var string $GetResourceDownloadURLResult
     */
    protected $GetResourceDownloadURLResult = null;

    /**
     * @param string $GetResourceDownloadURLResult
     */
    public function __construct($GetResourceDownloadURLResult = null)
    {
      $this->GetResourceDownloadURLResult = $GetResourceDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetResourceDownloadURLResult()
    {
      return $this->GetResourceDownloadURLResult;
    }

    /**
     * @param string $GetResourceDownloadURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetResourceDownloadURLResponse
     */
    public function setGetResourceDownloadURLResult($GetResourceDownloadURLResult)
    {
      $this->GetResourceDownloadURLResult = $GetResourceDownloadURLResult;
      return $this;
    }

}
