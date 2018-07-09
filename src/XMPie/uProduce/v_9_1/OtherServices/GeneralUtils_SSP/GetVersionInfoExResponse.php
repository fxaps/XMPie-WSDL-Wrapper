<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class GetVersionInfoExResponse
{

    /**
     * @var VersionInfo $GetVersionInfoExResult
     */
    protected $GetVersionInfoExResult = null;

    /**
     * @param VersionInfo $GetVersionInfoExResult
     */
    public function __construct($GetVersionInfoExResult = null)
    {
      $this->GetVersionInfoExResult = $GetVersionInfoExResult;
    }

    /**
     * @return VersionInfo
     */
    public function getGetVersionInfoExResult()
    {
      return $this->GetVersionInfoExResult;
    }

    /**
     * @param VersionInfo $GetVersionInfoExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetVersionInfoExResponse
     */
    public function setGetVersionInfoExResult($GetVersionInfoExResult)
    {
      $this->GetVersionInfoExResult = $GetVersionInfoExResult;
      return $this;
    }

}
