<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetDefaultAssetSourcesResponse
{

    /**
     * @var boolean $SetDefaultAssetSourcesResult
     */
    protected $SetDefaultAssetSourcesResult = null;

    /**
     * @param boolean $SetDefaultAssetSourcesResult
     */
    public function __construct($SetDefaultAssetSourcesResult = null)
    {
      $this->SetDefaultAssetSourcesResult = $SetDefaultAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getSetDefaultAssetSourcesResult()
    {
      return $this->SetDefaultAssetSourcesResult;
    }

    /**
     * @param boolean $SetDefaultAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetDefaultAssetSourcesResponse
     */
    public function setSetDefaultAssetSourcesResult($SetDefaultAssetSourcesResult)
    {
      $this->SetDefaultAssetSourcesResult = $SetDefaultAssetSourcesResult;
      return $this;
    }

}
