<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP;

class GetConfigFilesResponse
{

    /**
     * @var ArrayOfString $GetConfigFilesResult
     */
    protected $GetConfigFilesResult = null;

    /**
     * @param ArrayOfString $GetConfigFilesResult
     */
    public function __construct($GetConfigFilesResult = null)
    {
      $this->GetConfigFilesResult = $GetConfigFilesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetConfigFilesResult()
    {
      return $this->GetConfigFilesResult;
    }

    /**
     * @param ArrayOfString $GetConfigFilesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Customer_SSP\GetConfigFilesResponse
     */
    public function setGetConfigFilesResult($GetConfigFilesResult)
    {
      $this->GetConfigFilesResult = $GetConfigFilesResult;
      return $this;
    }

}
