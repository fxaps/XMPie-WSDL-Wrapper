<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRecipientsXMPDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetADORsValuesForRecipientsXMPDataSetResult
     */
    protected $GetADORsValuesForRecipientsXMPDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetADORsValuesForRecipientsXMPDataSetResult
     */
    public function __construct($GetADORsValuesForRecipientsXMPDataSetResult = null)
    {
      $this->GetADORsValuesForRecipientsXMPDataSetResult = $GetADORsValuesForRecipientsXMPDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetADORsValuesForRecipientsXMPDataSetResult()
    {
      return $this->GetADORsValuesForRecipientsXMPDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetADORsValuesForRecipientsXMPDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\GetADORsValuesForRecipientsXMPDataSetResponse
     */
    public function setGetADORsValuesForRecipientsXMPDataSetResult($GetADORsValuesForRecipientsXMPDataSetResult)
    {
      $this->GetADORsValuesForRecipientsXMPDataSetResult = $GetADORsValuesForRecipientsXMPDataSetResult;
      return $this;
    }

}
