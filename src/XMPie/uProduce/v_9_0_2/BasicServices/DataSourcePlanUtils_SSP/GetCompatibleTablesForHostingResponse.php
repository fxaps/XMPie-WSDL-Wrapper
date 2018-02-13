<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP;

class GetCompatibleTablesForHostingResponse
{

    /**
     * @var ArrayOfString $GetCompatibleTablesForHostingResult
     */
    protected $GetCompatibleTablesForHostingResult = null;

    /**
     * @param ArrayOfString $GetCompatibleTablesForHostingResult
     */
    public function __construct($GetCompatibleTablesForHostingResult = null)
    {
      $this->GetCompatibleTablesForHostingResult = $GetCompatibleTablesForHostingResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCompatibleTablesForHostingResult()
    {
      return $this->GetCompatibleTablesForHostingResult;
    }

    /**
     * @param ArrayOfString $GetCompatibleTablesForHostingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesForHostingResponse
     */
    public function setGetCompatibleTablesForHostingResult($GetCompatibleTablesForHostingResult)
    {
      $this->GetCompatibleTablesForHostingResult = $GetCompatibleTablesForHostingResult;
      return $this;
    }

}
