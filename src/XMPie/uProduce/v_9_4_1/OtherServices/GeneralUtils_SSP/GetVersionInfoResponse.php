<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP;

class GetVersionInfoResponse
{

    /**
     * @var VersionInfo $GetVersionInfoResult
     */
    protected $GetVersionInfoResult = null;

    /**
     * @param VersionInfo $GetVersionInfoResult
     */
    public function __construct($GetVersionInfoResult = null)
    {
      $this->GetVersionInfoResult = $GetVersionInfoResult;
    }

    /**
     * @return VersionInfo
     */
    public function getGetVersionInfoResult()
    {
      return $this->GetVersionInfoResult;
    }

    /**
     * @param VersionInfo $GetVersionInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\GetVersionInfoResponse
     */
    public function setGetVersionInfoResult($GetVersionInfoResult)
    {
      $this->GetVersionInfoResult = $GetVersionInfoResult;
      return $this;
    }

}
