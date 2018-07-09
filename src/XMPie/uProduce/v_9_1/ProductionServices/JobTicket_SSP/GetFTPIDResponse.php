<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class GetFTPIDResponse
{

    /**
     * @var string $GetFTPIDResult
     */
    protected $GetFTPIDResult = null;

    /**
     * @param string $GetFTPIDResult
     */
    public function __construct($GetFTPIDResult = null)
    {
      $this->GetFTPIDResult = $GetFTPIDResult;
    }

    /**
     * @return string
     */
    public function getGetFTPIDResult()
    {
      return $this->GetFTPIDResult;
    }

    /**
     * @param string $GetFTPIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\GetFTPIDResponse
     */
    public function setGetFTPIDResult($GetFTPIDResult)
    {
      $this->GetFTPIDResult = $GetFTPIDResult;
      return $this;
    }

}
