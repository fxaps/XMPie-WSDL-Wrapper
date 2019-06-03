<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class AddFTPResponse
{

    /**
     * @var boolean $AddFTPResult
     */
    protected $AddFTPResult = null;

    /**
     * @param boolean $AddFTPResult
     */
    public function __construct($AddFTPResult = null)
    {
      $this->AddFTPResult = $AddFTPResult;
    }

    /**
     * @return boolean
     */
    public function getAddFTPResult()
    {
      return $this->AddFTPResult;
    }

    /**
     * @param boolean $AddFTPResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\AddFTPResponse
     */
    public function setAddFTPResult($AddFTPResult)
    {
      $this->AddFTPResult = $AddFTPResult;
      return $this;
    }

}
