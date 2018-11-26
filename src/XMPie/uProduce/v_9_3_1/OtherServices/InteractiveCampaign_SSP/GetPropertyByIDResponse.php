<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP;

class GetPropertyByIDResponse
{

    /**
     * @var Property $GetPropertyByIDResult
     */
    protected $GetPropertyByIDResult = null;

    /**
     * @param Property $GetPropertyByIDResult
     */
    public function __construct($GetPropertyByIDResult = null)
    {
      $this->GetPropertyByIDResult = $GetPropertyByIDResult;
    }

    /**
     * @return Property
     */
    public function getGetPropertyByIDResult()
    {
      return $this->GetPropertyByIDResult;
    }

    /**
     * @param Property $GetPropertyByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\InteractiveCampaign_SSP\GetPropertyByIDResponse
     */
    public function setGetPropertyByIDResult($GetPropertyByIDResult)
    {
      $this->GetPropertyByIDResult = $GetPropertyByIDResult;
      return $this;
    }

}
