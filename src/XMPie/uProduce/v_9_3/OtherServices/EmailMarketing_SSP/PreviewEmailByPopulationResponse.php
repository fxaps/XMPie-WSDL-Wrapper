<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP;

class PreviewEmailByPopulationResponse
{

    /**
     * @var string $PreviewEmailByPopulationResult
     */
    protected $PreviewEmailByPopulationResult = null;

    /**
     * @param string $PreviewEmailByPopulationResult
     */
    public function __construct($PreviewEmailByPopulationResult = null)
    {
      $this->PreviewEmailByPopulationResult = $PreviewEmailByPopulationResult;
    }

    /**
     * @return string
     */
    public function getPreviewEmailByPopulationResult()
    {
      return $this->PreviewEmailByPopulationResult;
    }

    /**
     * @param string $PreviewEmailByPopulationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\PreviewEmailByPopulationResponse
     */
    public function setPreviewEmailByPopulationResult($PreviewEmailByPopulationResult)
    {
      $this->PreviewEmailByPopulationResult = $PreviewEmailByPopulationResult;
      return $this;
    }

}
