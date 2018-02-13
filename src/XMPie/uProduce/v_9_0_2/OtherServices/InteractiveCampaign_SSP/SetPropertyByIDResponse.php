<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP;

class SetPropertyByIDResponse
{

    /**
     * @var boolean $SetPropertyByIDResult
     */
    protected $SetPropertyByIDResult = null;

    /**
     * @param boolean $SetPropertyByIDResult
     */
    public function __construct($SetPropertyByIDResult = null)
    {
      $this->SetPropertyByIDResult = $SetPropertyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertyByIDResult()
    {
      return $this->SetPropertyByIDResult;
    }

    /**
     * @param boolean $SetPropertyByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\OtherServices\InteractiveCampaign_SSP\SetPropertyByIDResponse
     */
    public function setSetPropertyByIDResult($SetPropertyByIDResult)
    {
      $this->SetPropertyByIDResult = $SetPropertyByIDResult;
      return $this;
    }

}
