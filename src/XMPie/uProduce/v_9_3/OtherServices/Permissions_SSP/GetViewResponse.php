<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP;

class GetViewResponse
{

    /**
     * @var GetViewResult $GetViewResult
     */
    protected $GetViewResult = null;

    /**
     * @param GetViewResult $GetViewResult
     */
    public function __construct($GetViewResult = null)
    {
      $this->GetViewResult = $GetViewResult;
    }

    /**
     * @return GetViewResult
     */
    public function getGetViewResult()
    {
      return $this->GetViewResult;
    }

    /**
     * @param GetViewResult $GetViewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Permissions_SSP\GetViewResponse
     */
    public function setGetViewResult($GetViewResult)
    {
      $this->GetViewResult = $GetViewResult;
      return $this;
    }

}
