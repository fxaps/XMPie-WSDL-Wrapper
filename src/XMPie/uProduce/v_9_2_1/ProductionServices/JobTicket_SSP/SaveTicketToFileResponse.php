<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SaveTicketToFileResponse
{

    /**
     * @var boolean $SaveTicketToFileResult
     */
    protected $SaveTicketToFileResult = null;

    /**
     * @param boolean $SaveTicketToFileResult
     */
    public function __construct($SaveTicketToFileResult = null)
    {
      $this->SaveTicketToFileResult = $SaveTicketToFileResult;
    }

    /**
     * @return boolean
     */
    public function getSaveTicketToFileResult()
    {
      return $this->SaveTicketToFileResult;
    }

    /**
     * @param boolean $SaveTicketToFileResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SaveTicketToFileResponse
     */
    public function setSaveTicketToFileResult($SaveTicketToFileResult)
    {
      $this->SaveTicketToFileResult = $SaveTicketToFileResult;
      return $this;
    }

}
