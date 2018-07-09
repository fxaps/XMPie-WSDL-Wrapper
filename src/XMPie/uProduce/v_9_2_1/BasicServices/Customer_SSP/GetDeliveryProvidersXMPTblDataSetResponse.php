<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP;

class GetDeliveryProvidersXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDeliveryProvidersXMPTblDataSetResult
     */
    protected $GetDeliveryProvidersXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDeliveryProvidersXMPTblDataSetResult
     */
    public function __construct($GetDeliveryProvidersXMPTblDataSetResult = null)
    {
      $this->GetDeliveryProvidersXMPTblDataSetResult = $GetDeliveryProvidersXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDeliveryProvidersXMPTblDataSetResult()
    {
      return $this->GetDeliveryProvidersXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDeliveryProvidersXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Customer_SSP\GetDeliveryProvidersXMPTblDataSetResponse
     */
    public function setGetDeliveryProvidersXMPTblDataSetResult($GetDeliveryProvidersXMPTblDataSetResult)
    {
      $this->GetDeliveryProvidersXMPTblDataSetResult = $GetDeliveryProvidersXMPTblDataSetResult;
      return $this;
    }

}
