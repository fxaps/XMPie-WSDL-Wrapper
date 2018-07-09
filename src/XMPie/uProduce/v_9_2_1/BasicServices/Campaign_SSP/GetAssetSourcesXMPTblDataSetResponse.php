<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class GetAssetSourcesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetAssetSourcesXMPTblDataSetResult
     */
    protected $GetAssetSourcesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetAssetSourcesXMPTblDataSetResult
     */
    public function __construct($GetAssetSourcesXMPTblDataSetResult = null)
    {
      $this->GetAssetSourcesXMPTblDataSetResult = $GetAssetSourcesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetAssetSourcesXMPTblDataSetResult()
    {
      return $this->GetAssetSourcesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetAssetSourcesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetAssetSourcesXMPTblDataSetResponse
     */
    public function setGetAssetSourcesXMPTblDataSetResult($GetAssetSourcesXMPTblDataSetResult)
    {
      $this->GetAssetSourcesXMPTblDataSetResult = $GetAssetSourcesXMPTblDataSetResult;
      return $this;
    }

}
