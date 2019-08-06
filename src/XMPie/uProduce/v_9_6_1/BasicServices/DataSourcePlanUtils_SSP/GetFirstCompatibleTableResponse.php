<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP;

class GetFirstCompatibleTableResponse
{

    /**
     * @var string $GetFirstCompatibleTableResult
     */
    protected $GetFirstCompatibleTableResult = null;

    /**
     * @param string $GetFirstCompatibleTableResult
     */
    public function __construct($GetFirstCompatibleTableResult = null)
    {
      $this->GetFirstCompatibleTableResult = $GetFirstCompatibleTableResult;
    }

    /**
     * @return string
     */
    public function getGetFirstCompatibleTableResult()
    {
      return $this->GetFirstCompatibleTableResult;
    }

    /**
     * @param string $GetFirstCompatibleTableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSourcePlanUtils_SSP\GetFirstCompatibleTableResponse
     */
    public function setGetFirstCompatibleTableResult($GetFirstCompatibleTableResult)
    {
      $this->GetFirstCompatibleTableResult = $GetFirstCompatibleTableResult;
      return $this;
    }

}
