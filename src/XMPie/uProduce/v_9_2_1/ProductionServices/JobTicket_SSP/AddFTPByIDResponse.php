<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class AddFTPByIDResponse
{

    /**
     * @var boolean $AddFTPByIDResult
     */
    protected $AddFTPByIDResult = null;

    /**
     * @param boolean $AddFTPByIDResult
     */
    public function __construct($AddFTPByIDResult = null)
    {
      $this->AddFTPByIDResult = $AddFTPByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddFTPByIDResult()
    {
      return $this->AddFTPByIDResult;
    }

    /**
     * @param boolean $AddFTPByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\AddFTPByIDResponse
     */
    public function setAddFTPByIDResult($AddFTPByIDResult)
    {
      $this->AddFTPByIDResult = $AddFTPByIDResult;
      return $this;
    }

}
