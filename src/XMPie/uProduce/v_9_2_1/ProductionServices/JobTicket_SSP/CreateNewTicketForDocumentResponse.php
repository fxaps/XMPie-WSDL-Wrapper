<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class CreateNewTicketForDocumentResponse
{

    /**
     * @var string $CreateNewTicketForDocumentResult
     */
    protected $CreateNewTicketForDocumentResult = null;

    /**
     * @param string $CreateNewTicketForDocumentResult
     */
    public function __construct($CreateNewTicketForDocumentResult = null)
    {
      $this->CreateNewTicketForDocumentResult = $CreateNewTicketForDocumentResult;
    }

    /**
     * @return string
     */
    public function getCreateNewTicketForDocumentResult()
    {
      return $this->CreateNewTicketForDocumentResult;
    }

    /**
     * @param string $CreateNewTicketForDocumentResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\CreateNewTicketForDocumentResponse
     */
    public function setCreateNewTicketForDocumentResult($CreateNewTicketForDocumentResult)
    {
      $this->CreateNewTicketForDocumentResult = $CreateNewTicketForDocumentResult;
      return $this;
    }

}
