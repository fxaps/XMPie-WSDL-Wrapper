<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP;

class GetPreviewEmailResultResponse
{

    /**
     * @var PreviewEmailResult $GetPreviewEmailResultResult
     */
    protected $GetPreviewEmailResultResult = null;

    /**
     * @param PreviewEmailResult $GetPreviewEmailResultResult
     */
    public function __construct($GetPreviewEmailResultResult = null)
    {
      $this->GetPreviewEmailResultResult = $GetPreviewEmailResultResult;
    }

    /**
     * @return PreviewEmailResult
     */
    public function getGetPreviewEmailResultResult()
    {
      return $this->GetPreviewEmailResultResult;
    }

    /**
     * @param PreviewEmailResult $GetPreviewEmailResultResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\EmailMarketing_SSP\GetPreviewEmailResultResponse
     */
    public function setGetPreviewEmailResultResult($GetPreviewEmailResultResult)
    {
      $this->GetPreviewEmailResultResult = $GetPreviewEmailResultResult;
      return $this;
    }

}
