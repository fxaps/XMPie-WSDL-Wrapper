<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class GetResourceThumbnailDownloadURLResponse
{

    /**
     * @var string $GetResourceThumbnailDownloadURLResult
     */
    protected $GetResourceThumbnailDownloadURLResult = null;

    /**
     * @param string $GetResourceThumbnailDownloadURLResult
     */
    public function __construct($GetResourceThumbnailDownloadURLResult = null)
    {
      $this->GetResourceThumbnailDownloadURLResult = $GetResourceThumbnailDownloadURLResult;
    }

    /**
     * @return string
     */
    public function getGetResourceThumbnailDownloadURLResult()
    {
      return $this->GetResourceThumbnailDownloadURLResult;
    }

    /**
     * @param string $GetResourceThumbnailDownloadURLResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\GetResourceThumbnailDownloadURLResponse
     */
    public function setGetResourceThumbnailDownloadURLResult($GetResourceThumbnailDownloadURLResult)
    {
      $this->GetResourceThumbnailDownloadURLResult = $GetResourceThumbnailDownloadURLResult;
      return $this;
    }

}
