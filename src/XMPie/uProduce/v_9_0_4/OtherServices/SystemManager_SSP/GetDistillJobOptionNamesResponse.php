<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP;

class GetDistillJobOptionNamesResponse
{

    /**
     * @var ArrayOfString $GetDistillJobOptionNamesResult
     */
    protected $GetDistillJobOptionNamesResult = null;

    /**
     * @param ArrayOfString $GetDistillJobOptionNamesResult
     */
    public function __construct($GetDistillJobOptionNamesResult = null)
    {
      $this->GetDistillJobOptionNamesResult = $GetDistillJobOptionNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetDistillJobOptionNamesResult()
    {
      return $this->GetDistillJobOptionNamesResult;
    }

    /**
     * @param ArrayOfString $GetDistillJobOptionNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\SystemManager_SSP\GetDistillJobOptionNamesResponse
     */
    public function setGetDistillJobOptionNamesResult($GetDistillJobOptionNamesResult)
    {
      $this->GetDistillJobOptionNamesResult = $GetDistillJobOptionNamesResult;
      return $this;
    }

}
