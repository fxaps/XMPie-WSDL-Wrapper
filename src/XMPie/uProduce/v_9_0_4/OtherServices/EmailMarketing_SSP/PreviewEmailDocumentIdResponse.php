<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentIdResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentIdResult
     */
    protected $PreviewEmailDocumentIdResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdResult
     */
    public function __construct($PreviewEmailDocumentIdResult = null)
    {
      $this->PreviewEmailDocumentIdResult = $PreviewEmailDocumentIdResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentIdResult()
    {
      return $this->PreviewEmailDocumentIdResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdResponse
     */
    public function setPreviewEmailDocumentIdResult($PreviewEmailDocumentIdResult)
    {
      $this->PreviewEmailDocumentIdResult = $PreviewEmailDocumentIdResult;
      return $this;
    }

}
