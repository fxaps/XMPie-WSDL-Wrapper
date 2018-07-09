<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetRIToResponse
{

    /**
     * @var int $GetRIToResult
     */
    protected $GetRIToResult = null;

    /**
     * @param int $GetRIToResult
     */
    public function __construct($GetRIToResult = null)
    {
      $this->GetRIToResult = $GetRIToResult;
    }

    /**
     * @return int
     */
    public function getGetRIToResult()
    {
      return $this->GetRIToResult;
    }

    /**
     * @param int $GetRIToResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetRIToResponse
     */
    public function setGetRIToResult($GetRIToResult)
    {
      $this->GetRIToResult = $GetRIToResult;
      return $this;
    }

}
