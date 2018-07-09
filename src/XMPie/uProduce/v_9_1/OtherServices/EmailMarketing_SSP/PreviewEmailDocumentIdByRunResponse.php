<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentIdByRunResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentIdByRunResult
     */
    protected $PreviewEmailDocumentIdByRunResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdByRunResult
     */
    public function __construct($PreviewEmailDocumentIdByRunResult = null)
    {
      $this->PreviewEmailDocumentIdByRunResult = $PreviewEmailDocumentIdByRunResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentIdByRunResult()
    {
      return $this->PreviewEmailDocumentIdByRunResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentIdByRunResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentIdByRunResponse
     */
    public function setPreviewEmailDocumentIdByRunResult($PreviewEmailDocumentIdByRunResult)
    {
      $this->PreviewEmailDocumentIdByRunResult = $PreviewEmailDocumentIdByRunResult;
      return $this;
    }

}
