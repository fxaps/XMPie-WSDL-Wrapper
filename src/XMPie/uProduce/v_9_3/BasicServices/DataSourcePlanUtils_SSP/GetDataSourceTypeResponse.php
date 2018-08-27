<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypeResponse
{

    /**
     * @var GetDataSourceTypeResult $GetDataSourceTypeResult
     */
    protected $GetDataSourceTypeResult = null;

    /**
     * @param GetDataSourceTypeResult $GetDataSourceTypeResult
     */
    public function __construct($GetDataSourceTypeResult = null)
    {
      $this->GetDataSourceTypeResult = $GetDataSourceTypeResult;
    }

    /**
     * @return GetDataSourceTypeResult
     */
    public function getGetDataSourceTypeResult()
    {
      return $this->GetDataSourceTypeResult;
    }

    /**
     * @param GetDataSourceTypeResult $GetDataSourceTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypeResponse
     */
    public function setGetDataSourceTypeResult($GetDataSourceTypeResult)
    {
      $this->GetDataSourceTypeResult = $GetDataSourceTypeResult;
      return $this;
    }

}
