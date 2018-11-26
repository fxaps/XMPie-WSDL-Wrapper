<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class GetPDFPreviewResponse
{

    /**
     * @var string $GetPDFPreviewResult
     */
    protected $GetPDFPreviewResult = null;

    /**
     * @param string $GetPDFPreviewResult
     */
    public function __construct($GetPDFPreviewResult = null)
    {
      $this->GetPDFPreviewResult = $GetPDFPreviewResult;
    }

    /**
     * @return string
     */
    public function getGetPDFPreviewResult()
    {
      return $this->GetPDFPreviewResult;
    }

    /**
     * @param string $GetPDFPreviewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\GetPDFPreviewResponse
     */
    public function setGetPDFPreviewResult($GetPDFPreviewResult)
    {
      $this->GetPDFPreviewResult = $GetPDFPreviewResult;
      return $this;
    }

}
