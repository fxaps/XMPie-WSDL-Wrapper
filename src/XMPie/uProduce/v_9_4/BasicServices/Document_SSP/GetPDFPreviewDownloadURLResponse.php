<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP;

class GetPDFPreviewDownloadURLResponse
{

    /**
     * @var string $GetPDFPreviewDownloadURLResult
     */
    protected $GetPDFPreviewDownloadURLResult = null;

    /**
     * @param string $GetPDFPreviewDownloadURLResult
     */
    public function __construct($GetPDFPreviewDownloadURLResult = null)
    {
      $this->GetPDFPreviewDownloadURLResult = $GetPDFPreviewDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetPDFPreviewDownloadURLResult()
    {
      return $this->GetPDFPreviewDownloadURLResult;
    }

    /**
     * @param string $GetPDFPreviewDownloadURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Document_SSP\GetPDFPreviewDownloadURLResponse
     */
    public function setGetPDFPreviewDownloadURLResult($GetPDFPreviewDownloadURLResult)
    {
      $this->GetPDFPreviewDownloadURLResult = $GetPDFPreviewDownloadURLResult;
      return $this;
    }

}
