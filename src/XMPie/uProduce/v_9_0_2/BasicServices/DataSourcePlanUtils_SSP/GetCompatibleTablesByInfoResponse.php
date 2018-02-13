<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP;

class GetCompatibleTablesByInfoResponse
{

    /**
     * @var ArrayOfString $GetCompatibleTablesByInfoResult
     */
    protected $GetCompatibleTablesByInfoResult = null;

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoResult
     */
    public function __construct($GetCompatibleTablesByInfoResult = null)
    {
      $this->GetCompatibleTablesByInfoResult = $GetCompatibleTablesByInfoResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCompatibleTablesByInfoResult()
    {
      return $this->GetCompatibleTablesByInfoResult;
    }

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfoResponse
     */
    public function setGetCompatibleTablesByInfoResult($GetCompatibleTablesByInfoResult)
    {
      $this->GetCompatibleTablesByInfoResult = $GetCompatibleTablesByInfoResult;
      return $this;
    }

}
