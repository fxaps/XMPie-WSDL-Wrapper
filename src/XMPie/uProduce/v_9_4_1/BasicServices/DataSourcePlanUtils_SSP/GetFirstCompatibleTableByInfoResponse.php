<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSourcePlanUtils_SSP;

class GetFirstCompatibleTableByInfoResponse
{

    /**
     * @var string $GetFirstCompatibleTableByInfoResult
     */
    protected $GetFirstCompatibleTableByInfoResult = null;

    /**
     * @param string $GetFirstCompatibleTableByInfoResult
     */
    public function __construct($GetFirstCompatibleTableByInfoResult = null)
    {
      $this->GetFirstCompatibleTableByInfoResult = $GetFirstCompatibleTableByInfoResult;
    }

    /**
     * @return string
     */
    public function getGetFirstCompatibleTableByInfoResult()
    {
      return $this->GetFirstCompatibleTableByInfoResult;
    }

    /**
     * @param string $GetFirstCompatibleTableByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTableByInfoResponse
     */
    public function setGetFirstCompatibleTableByInfoResult($GetFirstCompatibleTableByInfoResult)
    {
      $this->GetFirstCompatibleTableByInfoResult = $GetFirstCompatibleTableByInfoResult;
      return $this;
    }

}
