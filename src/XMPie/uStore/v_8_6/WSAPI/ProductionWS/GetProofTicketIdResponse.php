<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductionWS;

class GetProofTicketIdResponse
{

    /**
     * @var int $GetProofTicketIdResult
     */
    protected $GetProofTicketIdResult = null;

    /**
     * @param int $GetProofTicketIdResult
     */
    public function __construct($GetProofTicketIdResult = null)
    {
      $this->GetProofTicketIdResult = $GetProofTicketIdResult;
    }

    /**
     * @return int
     */
    public function getGetProofTicketIdResult()
    {
      return $this->GetProofTicketIdResult;
    }

    /**
     * @param int $GetProofTicketIdResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\ProductionWS\GetProofTicketIdResponse
     */
    public function setGetProofTicketIdResult($GetProofTicketIdResult)
    {
      $this->GetProofTicketIdResult = $GetProofTicketIdResult;
      return $this;
    }

}
