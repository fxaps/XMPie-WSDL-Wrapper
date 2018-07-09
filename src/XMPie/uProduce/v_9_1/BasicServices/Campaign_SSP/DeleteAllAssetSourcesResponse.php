<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class DeleteAllAssetSourcesResponse
{

    /**
     * @var boolean $DeleteAllAssetSourcesResult
     */
    protected $DeleteAllAssetSourcesResult = null;

    /**
     * @param boolean $DeleteAllAssetSourcesResult
     */
    public function __construct($DeleteAllAssetSourcesResult = null)
    {
      $this->DeleteAllAssetSourcesResult = $DeleteAllAssetSourcesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllAssetSourcesResult()
    {
      return $this->DeleteAllAssetSourcesResult;
    }

    /**
     * @param boolean $DeleteAllAssetSourcesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteAllAssetSourcesResponse
     */
    public function setDeleteAllAssetSourcesResult($DeleteAllAssetSourcesResult)
    {
      $this->DeleteAllAssetSourcesResult = $DeleteAllAssetSourcesResult;
      return $this;
    }

}
