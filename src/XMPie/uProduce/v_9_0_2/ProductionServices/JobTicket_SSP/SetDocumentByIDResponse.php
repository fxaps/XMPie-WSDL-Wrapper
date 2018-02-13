<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetDocumentByIDResponse
{

    /**
     * @var boolean $SetDocumentByIDResult
     */
    protected $SetDocumentByIDResult = null;

    /**
     * @param boolean $SetDocumentByIDResult
     */
    public function __construct($SetDocumentByIDResult = null)
    {
      $this->SetDocumentByIDResult = $SetDocumentByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDocumentByIDResult()
    {
      return $this->SetDocumentByIDResult;
    }

    /**
     * @param boolean $SetDocumentByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetDocumentByIDResponse
     */
    public function setSetDocumentByIDResult($SetDocumentByIDResult)
    {
      $this->SetDocumentByIDResult = $SetDocumentByIDResult;
      return $this;
    }

}
