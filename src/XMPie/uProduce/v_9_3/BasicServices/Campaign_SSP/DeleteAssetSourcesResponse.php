<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class DeleteAssetSourcesResponse
{

    /**
     * @var boolean $DeleteAssetSourcesResult
     */
    protected $DeleteAssetSourcesResult = null;

    /**
     * @param boolean $DeleteAssetSourcesResult
     */
    public function __construct($DeleteAssetSourcesResult = null)
    {
      $this->DeleteAssetSourcesResult = $DeleteAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAssetSourcesResult()
    {
      return $this->DeleteAssetSourcesResult;
    }

    /**
     * @param boolean $DeleteAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\DeleteAssetSourcesResponse
     */
    public function setDeleteAssetSourcesResult($DeleteAssetSourcesResult)
    {
      $this->DeleteAssetSourcesResult = $DeleteAssetSourcesResult;
      return $this;
    }

}
