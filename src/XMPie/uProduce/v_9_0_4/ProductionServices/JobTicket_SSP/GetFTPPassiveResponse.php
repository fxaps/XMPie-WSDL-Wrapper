<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class GetFTPPassiveResponse
{

    /**
     * @var boolean $GetFTPPassiveResult
     */
    protected $GetFTPPassiveResult = null;

    /**
     * @param boolean $GetFTPPassiveResult
     */
    public function __construct($GetFTPPassiveResult = null)
    {
      $this->GetFTPPassiveResult = $GetFTPPassiveResult;
    }

    /**
     * @return boolean
     */
    public function getGetFTPPassiveResult()
    {
      return $this->GetFTPPassiveResult;
    }

    /**
     * @param boolean $GetFTPPassiveResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\GetFTPPassiveResponse
     */
    public function setGetFTPPassiveResult($GetFTPPassiveResult)
    {
      $this->GetFTPPassiveResult = $GetFTPPassiveResult;
      return $this;
    }

}
