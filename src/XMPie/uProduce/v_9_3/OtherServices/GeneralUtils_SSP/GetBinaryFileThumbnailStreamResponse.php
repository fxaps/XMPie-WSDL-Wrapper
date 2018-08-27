<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\GeneralUtils_SSP;

class GetBinaryFileThumbnailStreamResponse
{

    /**
     * @var base64Binary $GetBinaryFileThumbnailStreamResult
     */
    protected $GetBinaryFileThumbnailStreamResult = null;

    /**
     * @param base64Binary $GetBinaryFileThumbnailStreamResult
     */
    public function __construct($GetBinaryFileThumbnailStreamResult = null)
    {
      $this->GetBinaryFileThumbnailStreamResult = $GetBinaryFileThumbnailStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileThumbnailStreamResult()
    {
      return $this->GetBinaryFileThumbnailStreamResult;
    }

    /**
     * @param base64Binary $GetBinaryFileThumbnailStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\GeneralUtils_SSP\GetBinaryFileThumbnailStreamResponse
     */
    public function setGetBinaryFileThumbnailStreamResult($GetBinaryFileThumbnailStreamResult)
    {
      $this->GetBinaryFileThumbnailStreamResult = $GetBinaryFileThumbnailStreamResult;
      return $this;
    }

}
