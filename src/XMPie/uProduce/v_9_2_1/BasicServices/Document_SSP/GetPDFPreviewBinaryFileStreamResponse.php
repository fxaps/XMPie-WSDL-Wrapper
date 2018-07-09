<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class GetPDFPreviewBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetPDFPreviewBinaryFileStreamResult
     */
    protected $GetPDFPreviewBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetPDFPreviewBinaryFileStreamResult
     */
    public function __construct($GetPDFPreviewBinaryFileStreamResult = null)
    {
      $this->GetPDFPreviewBinaryFileStreamResult = $GetPDFPreviewBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetPDFPreviewBinaryFileStreamResult()
    {
      return $this->GetPDFPreviewBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetPDFPreviewBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamResponse
     */
    public function setGetPDFPreviewBinaryFileStreamResult($GetPDFPreviewBinaryFileStreamResult)
    {
      $this->GetPDFPreviewBinaryFileStreamResult = $GetPDFPreviewBinaryFileStreamResult;
      return $this;
    }

}
