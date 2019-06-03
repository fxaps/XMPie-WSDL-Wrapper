<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetFriendlyFolderResponse
{

    /**
     * @var string $GetFriendlyFolderResult
     */
    protected $GetFriendlyFolderResult = null;

    /**
     * @param string $GetFriendlyFolderResult
     */
    public function __construct($GetFriendlyFolderResult = null)
    {
      $this->GetFriendlyFolderResult = $GetFriendlyFolderResult;
    }

    /**
     * @return string
     */
    public function getGetFriendlyFolderResult()
    {
      return $this->GetFriendlyFolderResult;
    }

    /**
     * @param string $GetFriendlyFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetFriendlyFolderResponse
     */
    public function setGetFriendlyFolderResult($GetFriendlyFolderResult)
    {
      $this->GetFriendlyFolderResult = $GetFriendlyFolderResult;
      return $this;
    }

}
