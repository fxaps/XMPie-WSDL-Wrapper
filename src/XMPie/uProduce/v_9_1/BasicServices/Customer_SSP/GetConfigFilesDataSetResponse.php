<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class GetConfigFilesDataSetResponse
{

    /**
     * @var GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     */
    protected $GetConfigFilesDataSetResult = null;

    /**
     * @param GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     */
    public function __construct($GetConfigFilesDataSetResult = null)
    {
      $this->GetConfigFilesDataSetResult = $GetConfigFilesDataSetResult;
    }

    /**
     * @return GetConfigFilesDataSetResult
     */
    public function getGetConfigFilesDataSetResult()
    {
      return $this->GetConfigFilesDataSetResult;
    }

    /**
     * @param GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\GetConfigFilesDataSetResponse
     */
    public function setGetConfigFilesDataSetResult($GetConfigFilesDataSetResult)
    {
      $this->GetConfigFilesDataSetResult = $GetConfigFilesDataSetResult;
      return $this;
    }

}
