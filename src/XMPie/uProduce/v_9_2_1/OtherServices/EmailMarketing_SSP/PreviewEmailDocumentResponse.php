<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentResult
     */
    protected $PreviewEmailDocumentResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentResult
     */
    public function __construct($PreviewEmailDocumentResult = null)
    {
      $this->PreviewEmailDocumentResult = $PreviewEmailDocumentResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentResult()
    {
      return $this->PreviewEmailDocumentResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentResponse
     */
    public function setPreviewEmailDocumentResult($PreviewEmailDocumentResult)
    {
      $this->PreviewEmailDocumentResult = $PreviewEmailDocumentResult;
      return $this;
    }

}
