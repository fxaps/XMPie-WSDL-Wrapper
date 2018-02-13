<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP;

class GetCompatibleTablesResponse
{

    /**
     * @var ArrayOfString $GetCompatibleTablesResult
     */
    protected $GetCompatibleTablesResult = null;

    /**
     * @param ArrayOfString $GetCompatibleTablesResult
     */
    public function __construct($GetCompatibleTablesResult = null)
    {
      $this->GetCompatibleTablesResult = $GetCompatibleTablesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetCompatibleTablesResult()
    {
      return $this->GetCompatibleTablesResult;
    }

    /**
     * @param ArrayOfString $GetCompatibleTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\DataSourcePlanUtils_SSP\GetCompatibleTablesResponse
     */
    public function setGetCompatibleTablesResult($GetCompatibleTablesResult)
    {
      $this->GetCompatibleTablesResult = $GetCompatibleTablesResult;
      return $this;
    }

}
