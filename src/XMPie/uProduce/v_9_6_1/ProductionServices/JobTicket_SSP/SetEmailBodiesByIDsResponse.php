<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetEmailBodiesByIDsResponse
{

    /**
     * @var boolean $SetEmailBodiesByIDsResult
     */
    protected $SetEmailBodiesByIDsResult = null;

    /**
     * @param boolean $SetEmailBodiesByIDsResult
     */
    public function __construct($SetEmailBodiesByIDsResult = null)
    {
      $this->SetEmailBodiesByIDsResult = $SetEmailBodiesByIDsResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailBodiesByIDsResult()
    {
      return $this->SetEmailBodiesByIDsResult;
    }

    /**
     * @param boolean $SetEmailBodiesByIDsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDsResponse
     */
    public function setSetEmailBodiesByIDsResult($SetEmailBodiesByIDsResult)
    {
      $this->SetEmailBodiesByIDsResult = $SetEmailBodiesByIDsResult;
      return $this;
    }

}
