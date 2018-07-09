<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRecipientsResponse
{

    /**
     * @var GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     */
    protected $GetADORsValuesForRecipientsResult = null;

    /**
     * @param GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     */
    public function __construct($GetADORsValuesForRecipientsResult = null)
    {
      $this->GetADORsValuesForRecipientsResult = $GetADORsValuesForRecipientsResult;
    }

    /**
     * @return GetADORsValuesForRecipientsResult
     */
    public function getGetADORsValuesForRecipientsResult()
    {
      return $this->GetADORsValuesForRecipientsResult;
    }

    /**
     * @param GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsResponse
     */
    public function setGetADORsValuesForRecipientsResult($GetADORsValuesForRecipientsResult)
    {
      $this->GetADORsValuesForRecipientsResult = $GetADORsValuesForRecipientsResult;
      return $this;
    }

}
