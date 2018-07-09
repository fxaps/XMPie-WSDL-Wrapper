<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSourceUtils_SSP;

class GetAssetSourceTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAssetSourceTypesXMPTblDataSetResult
     */
    protected $GetAssetSourceTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAssetSourceTypesXMPTblDataSetResult
     */
    public function __construct($GetAssetSourceTypesXMPTblDataSetResult = null)
    {
      $this->GetAssetSourceTypesXMPTblDataSetResult = $GetAssetSourceTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAssetSourceTypesXMPTblDataSetResult()
    {
      return $this->GetAssetSourceTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAssetSourceTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSourceUtils_SSP\GetAssetSourceTypesXMPTblDataSetResponse
     */
    public function setGetAssetSourceTypesXMPTblDataSetResult($GetAssetSourceTypesXMPTblDataSetResult)
    {
      $this->GetAssetSourceTypesXMPTblDataSetResult = $GetAssetSourceTypesXMPTblDataSetResult;
      return $this;
    }

}
