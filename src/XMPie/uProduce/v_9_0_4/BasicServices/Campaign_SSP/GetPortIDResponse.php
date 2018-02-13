<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetPortIDResponse
{

    /**
     * @var string $GetPortIDResult
     */
    protected $GetPortIDResult = null;

    /**
     * @param string $GetPortIDResult
     */
    public function __construct($GetPortIDResult = null)
    {
      $this->GetPortIDResult = $GetPortIDResult;
    }

    /**
     * @return string
     */
    public function getGetPortIDResult()
    {
      return $this->GetPortIDResult;
    }

    /**
     * @param string $GetPortIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPortIDResponse
     */
    public function setGetPortIDResult($GetPortIDResult)
    {
      $this->GetPortIDResult = $GetPortIDResult;
      return $this;
    }

}
