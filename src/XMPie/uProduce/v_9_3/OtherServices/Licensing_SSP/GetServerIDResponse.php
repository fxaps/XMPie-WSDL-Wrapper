<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP;

class GetServerIDResponse
{

    /**
     * @var string $GetServerIDResult
     */
    protected $GetServerIDResult = null;

    /**
     * @param string $GetServerIDResult
     */
    public function __construct($GetServerIDResult = null)
    {
      $this->GetServerIDResult = $GetServerIDResult;
    }

    /**
     * @return string
     */
    public function getGetServerIDResult()
    {
      return $this->GetServerIDResult;
    }

    /**
     * @param string $GetServerIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\Licensing_SSP\GetServerIDResponse
     */
    public function setGetServerIDResult($GetServerIDResult)
    {
      $this->GetServerIDResult = $GetServerIDResult;
      return $this;
    }

}
