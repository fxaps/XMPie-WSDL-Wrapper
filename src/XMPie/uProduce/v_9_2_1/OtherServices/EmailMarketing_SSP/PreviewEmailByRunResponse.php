<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class PreviewEmailByRunResponse
{

    /**
     * @var string $PreviewEmailByRunResult
     */
    protected $PreviewEmailByRunResult = null;

    /**
     * @param string $PreviewEmailByRunResult
     */
    public function __construct($PreviewEmailByRunResult = null)
    {
      $this->PreviewEmailByRunResult = $PreviewEmailByRunResult;
    }

    /**
     * @return string
     */
    public function getPreviewEmailByRunResult()
    {
      return $this->PreviewEmailByRunResult;
    }

    /**
     * @param string $PreviewEmailByRunResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\PreviewEmailByRunResponse
     */
    public function setPreviewEmailByRunResult($PreviewEmailByRunResult)
    {
      $this->PreviewEmailByRunResult = $PreviewEmailByRunResult;
      return $this;
    }

}
