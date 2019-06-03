<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetOutputFolderResponse
{

    /**
     * @var string $GetOutputFolderResult
     */
    protected $GetOutputFolderResult = null;

    /**
     * @param string $GetOutputFolderResult
     */
    public function __construct($GetOutputFolderResult = null)
    {
      $this->GetOutputFolderResult = $GetOutputFolderResult;
    }

    /**
     * @return string
     */
    public function getGetOutputFolderResult()
    {
      return $this->GetOutputFolderResult;
    }

    /**
     * @param string $GetOutputFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetOutputFolderResponse
     */
    public function setGetOutputFolderResult($GetOutputFolderResult)
    {
      $this->GetOutputFolderResult = $GetOutputFolderResult;
      return $this;
    }

}
