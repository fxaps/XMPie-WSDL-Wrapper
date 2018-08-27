<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\InteractiveCampaign_SSP;

class DeleteRecipientResponse
{

    /**
     * @var boolean $DeleteRecipientResult
     */
    protected $DeleteRecipientResult = null;

    /**
     * @param boolean $DeleteRecipientResult
     */
    public function __construct($DeleteRecipientResult = null)
    {
      $this->DeleteRecipientResult = $DeleteRecipientResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteRecipientResult()
    {
      return $this->DeleteRecipientResult;
    }

    /**
     * @param boolean $DeleteRecipientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\InteractiveCampaign_SSP\DeleteRecipientResponse
     */
    public function setDeleteRecipientResult($DeleteRecipientResult)
    {
      $this->DeleteRecipientResult = $DeleteRecipientResult;
      return $this;
    }

}
