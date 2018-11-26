<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class GetThumbnailDownloadURLResponse
{

    /**
     * @var string $GetThumbnailDownloadURLResult
     */
    protected $GetThumbnailDownloadURLResult = null;

    /**
     * @param string $GetThumbnailDownloadURLResult
     */
    public function __construct($GetThumbnailDownloadURLResult = null)
    {
      $this->GetThumbnailDownloadURLResult = $GetThumbnailDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetThumbnailDownloadURLResult()
    {
      return $this->GetThumbnailDownloadURLResult;
    }

    /**
     * @param string $GetThumbnailDownloadURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetThumbnailDownloadURLResponse
     */
    public function setGetThumbnailDownloadURLResult($GetThumbnailDownloadURLResult)
    {
      $this->GetThumbnailDownloadURLResult = $GetThumbnailDownloadURLResult;
      return $this;
    }

}
