<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class AddDestinationByIDResponse
{

    /**
     * @var boolean $AddDestinationByIDResult
     */
    protected $AddDestinationByIDResult = null;

    /**
     * @param boolean $AddDestinationByIDResult
     */
    public function __construct($AddDestinationByIDResult = null)
    {
      $this->AddDestinationByIDResult = $AddDestinationByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddDestinationByIDResult()
    {
      return $this->AddDestinationByIDResult;
    }

    /**
     * @param boolean $AddDestinationByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\AddDestinationByIDResponse
     */
    public function setAddDestinationByIDResult($AddDestinationByIDResult)
    {
      $this->AddDestinationByIDResult = $AddDestinationByIDResult;
      return $this;
    }

}
