<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class AddJDFCopyByIDResponse
{

    /**
     * @var boolean $AddJDFCopyByIDResult
     */
    protected $AddJDFCopyByIDResult = null;

    /**
     * @param boolean $AddJDFCopyByIDResult
     */
    public function __construct($AddJDFCopyByIDResult = null)
    {
      $this->AddJDFCopyByIDResult = $AddJDFCopyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddJDFCopyByIDResult()
    {
      return $this->AddJDFCopyByIDResult;
    }

    /**
     * @param boolean $AddJDFCopyByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\AddJDFCopyByIDResponse
     */
    public function setAddJDFCopyByIDResult($AddJDFCopyByIDResult)
    {
      $this->AddJDFCopyByIDResult = $AddJDFCopyByIDResult;
      return $this;
    }

}
