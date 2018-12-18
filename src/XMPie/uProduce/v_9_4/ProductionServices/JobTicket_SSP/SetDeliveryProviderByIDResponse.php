<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetDeliveryProviderByIDResponse
{

    /**
     * @var boolean $SetDeliveryProviderByIDResult
     */
    protected $SetDeliveryProviderByIDResult = null;

    /**
     * @param boolean $SetDeliveryProviderByIDResult
     */
    public function __construct($SetDeliveryProviderByIDResult = null)
    {
      $this->SetDeliveryProviderByIDResult = $SetDeliveryProviderByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDeliveryProviderByIDResult()
    {
      return $this->SetDeliveryProviderByIDResult;
    }

    /**
     * @param boolean $SetDeliveryProviderByIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDeliveryProviderByIDResponse
     */
    public function setSetDeliveryProviderByIDResult($SetDeliveryProviderByIDResult)
    {
      $this->SetDeliveryProviderByIDResult = $SetDeliveryProviderByIDResult;
      return $this;
    }

}
