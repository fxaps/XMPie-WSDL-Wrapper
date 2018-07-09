<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class GetThumbnailsResponse
{

    /**
     * @var ArrayOfString $GetThumbnailsResult
     */
    protected $GetThumbnailsResult = null;

    /**
     * @param ArrayOfString $GetThumbnailsResult
     */
    public function __construct($GetThumbnailsResult = null)
    {
      $this->GetThumbnailsResult = $GetThumbnailsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetThumbnailsResult()
    {
      return $this->GetThumbnailsResult;
    }

    /**
     * @param ArrayOfString $GetThumbnailsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetThumbnailsResponse
     */
    public function setGetThumbnailsResult($GetThumbnailsResult)
    {
      $this->GetThumbnailsResult = $GetThumbnailsResult;
      return $this;
    }

}
