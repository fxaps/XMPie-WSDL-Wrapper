<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP;

class UpdateADORsValuesForRecipientResponse
{

    /**
     * @var string $UpdateADORsValuesForRecipientResult
     */
    protected $UpdateADORsValuesForRecipientResult = null;

    /**
     * @param string $UpdateADORsValuesForRecipientResult
     */
    public function __construct($UpdateADORsValuesForRecipientResult = null)
    {
      $this->UpdateADORsValuesForRecipientResult = $UpdateADORsValuesForRecipientResult;
    }

    /**
     * @return string
     */
    public function getUpdateADORsValuesForRecipientResult()
    {
      return $this->UpdateADORsValuesForRecipientResult;
    }

    /**
     * @param string $UpdateADORsValuesForRecipientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\InteractiveCampaign_SSP\UpdateADORsValuesForRecipientResponse
     */
    public function setUpdateADORsValuesForRecipientResult($UpdateADORsValuesForRecipientResult)
    {
      $this->UpdateADORsValuesForRecipientResult = $UpdateADORsValuesForRecipientResult;
      return $this;
    }

}
