<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP;

class GetThumbnailResponse
{

    /**
     * @var base64Binary $GetThumbnailResult
     */
    protected $GetThumbnailResult = null;

    /**
     * @param base64Binary $GetThumbnailResult
     */
    public function __construct($GetThumbnailResult = null)
    {
      $this->GetThumbnailResult = $GetThumbnailResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetThumbnailResult()
    {
      return $this->GetThumbnailResult;
    }

    /**
     * @param base64Binary $GetThumbnailResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Asset_SSP\GetThumbnailResponse
     */
    public function setGetThumbnailResult($GetThumbnailResult)
    {
      $this->GetThumbnailResult = $GetThumbnailResult;
      return $this;
    }

}
