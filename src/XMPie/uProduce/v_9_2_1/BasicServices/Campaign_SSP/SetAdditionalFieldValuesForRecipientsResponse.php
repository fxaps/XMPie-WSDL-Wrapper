<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class SetAdditionalFieldValuesForRecipientsResponse
{

    /**
     * @var boolean $SetAdditionalFieldValuesForRecipientsResult
     */
    protected $SetAdditionalFieldValuesForRecipientsResult = null;

    /**
     * @param boolean $SetAdditionalFieldValuesForRecipientsResult
     */
    public function __construct($SetAdditionalFieldValuesForRecipientsResult = null)
    {
      $this->SetAdditionalFieldValuesForRecipientsResult = $SetAdditionalFieldValuesForRecipientsResult;
    }

    /**
     * @return boolean
     */
    public function getSetAdditionalFieldValuesForRecipientsResult()
    {
      return $this->SetAdditionalFieldValuesForRecipientsResult;
    }

    /**
     * @param boolean $SetAdditionalFieldValuesForRecipientsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\SetAdditionalFieldValuesForRecipientsResponse
     */
    public function setSetAdditionalFieldValuesForRecipientsResult($SetAdditionalFieldValuesForRecipientsResult)
    {
      $this->SetAdditionalFieldValuesForRecipientsResult = $SetAdditionalFieldValuesForRecipientsResult;
      return $this;
    }

}
