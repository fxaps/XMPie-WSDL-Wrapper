<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP;

class IsDataSourceCompatibleWithSchemaByInfoResponse
{

    /**
     * @var boolean $IsDataSourceCompatibleWithSchemaByInfoResult
     */
    protected $IsDataSourceCompatibleWithSchemaByInfoResult = null;

    /**
     * @param boolean $IsDataSourceCompatibleWithSchemaByInfoResult
     */
    public function __construct($IsDataSourceCompatibleWithSchemaByInfoResult = null)
    {
      $this->IsDataSourceCompatibleWithSchemaByInfoResult = $IsDataSourceCompatibleWithSchemaByInfoResult;
    }

    /**
     * @return boolean
     */
    public function getIsDataSourceCompatibleWithSchemaByInfoResult()
    {
      return $this->IsDataSourceCompatibleWithSchemaByInfoResult;
    }

    /**
     * @param boolean $IsDataSourceCompatibleWithSchemaByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSourcePlanUtils_SSP\IsDataSourceCompatibleWithSchemaByInfoResponse
     */
    public function setIsDataSourceCompatibleWithSchemaByInfoResult($IsDataSourceCompatibleWithSchemaByInfoResult)
    {
      $this->IsDataSourceCompatibleWithSchemaByInfoResult = $IsDataSourceCompatibleWithSchemaByInfoResult;
      return $this;
    }

}
