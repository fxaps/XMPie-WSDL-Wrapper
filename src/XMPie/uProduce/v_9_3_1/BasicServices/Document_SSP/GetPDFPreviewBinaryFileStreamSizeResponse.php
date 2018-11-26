<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class GetPDFPreviewBinaryFileStreamSizeResponse
{

    /**
     * @var int $GetPDFPreviewBinaryFileStreamSizeResult
     */
    protected $GetPDFPreviewBinaryFileStreamSizeResult = null;

    /**
     * @param int $GetPDFPreviewBinaryFileStreamSizeResult
     */
    public function __construct($GetPDFPreviewBinaryFileStreamSizeResult = null)
    {
      $this->GetPDFPreviewBinaryFileStreamSizeResult = $GetPDFPreviewBinaryFileStreamSizeResult;
    }

    /**
     * @return int
     */
    public function getGetPDFPreviewBinaryFileStreamSizeResult()
    {
      return $this->GetPDFPreviewBinaryFileStreamSizeResult;
    }

    /**
     * @param int $GetPDFPreviewBinaryFileStreamSizeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetPDFPreviewBinaryFileStreamSizeResponse
     */
    public function setGetPDFPreviewBinaryFileStreamSizeResult($GetPDFPreviewBinaryFileStreamSizeResult)
    {
      $this->GetPDFPreviewBinaryFileStreamSizeResult = $GetPDFPreviewBinaryFileStreamSizeResult;
      return $this;
    }

}
