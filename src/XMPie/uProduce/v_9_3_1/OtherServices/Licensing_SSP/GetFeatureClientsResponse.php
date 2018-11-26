<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP;

class GetFeatureClientsResponse
{

    /**
     * @var GetFeatureClientsResult $GetFeatureClientsResult
     */
    protected $GetFeatureClientsResult = null;

    /**
     * @param GetFeatureClientsResult $GetFeatureClientsResult
     */
    public function __construct($GetFeatureClientsResult = null)
    {
      $this->GetFeatureClientsResult = $GetFeatureClientsResult;
    }

    /**
     * @return GetFeatureClientsResult
     */
    public function getGetFeatureClientsResult()
    {
      return $this->GetFeatureClientsResult;
    }

    /**
     * @param GetFeatureClientsResult $GetFeatureClientsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Licensing_SSP\GetFeatureClientsResponse
     */
    public function setGetFeatureClientsResult($GetFeatureClientsResult)
    {
      $this->GetFeatureClientsResult = $GetFeatureClientsResult;
      return $this;
    }

}
