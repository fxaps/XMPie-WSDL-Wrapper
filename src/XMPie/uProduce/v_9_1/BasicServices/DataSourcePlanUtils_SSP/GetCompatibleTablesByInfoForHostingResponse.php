<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP;

class GetCompatibleTablesByInfoForHostingResponse
{

    /**
     * @var ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     */
    protected $GetCompatibleTablesByInfoForHostingResult = null;

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     */
    public function __construct($GetCompatibleTablesByInfoForHostingResult = null)
    {
      $this->GetCompatibleTablesByInfoForHostingResult = $GetCompatibleTablesByInfoForHostingResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCompatibleTablesByInfoForHostingResult()
    {
      return $this->GetCompatibleTablesByInfoForHostingResult;
    }

    /**
     * @param ArrayOfString $GetCompatibleTablesByInfoForHostingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesByInfoForHostingResponse
     */
    public function setGetCompatibleTablesByInfoForHostingResult($GetCompatibleTablesByInfoForHostingResult)
    {
      $this->GetCompatibleTablesByInfoForHostingResult = $GetCompatibleTablesByInfoForHostingResult;
      return $this;
    }

}
