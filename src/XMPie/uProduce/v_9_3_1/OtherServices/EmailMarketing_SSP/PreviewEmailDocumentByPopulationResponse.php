<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocumentByPopulationResponse
{

    /**
     * @var PreviewEmailResult $PreviewEmailDocumentByPopulationResult
     */
    protected $PreviewEmailDocumentByPopulationResult = null;

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentByPopulationResult
     */
    public function __construct($PreviewEmailDocumentByPopulationResult = null)
    {
      $this->PreviewEmailDocumentByPopulationResult = $PreviewEmailDocumentByPopulationResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getPreviewEmailDocumentByPopulationResult()
    {
      return $this->PreviewEmailDocumentByPopulationResult;
    }

    /**
     * @param PreviewEmailResult $PreviewEmailDocumentByPopulationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\EmailMarketing_SSP\PreviewEmailDocumentByPopulationResponse
     */
    public function setPreviewEmailDocumentByPopulationResult($PreviewEmailDocumentByPopulationResult)
    {
      $this->PreviewEmailDocumentByPopulationResult = $PreviewEmailDocumentByPopulationResult;
      return $this;
    }

}
