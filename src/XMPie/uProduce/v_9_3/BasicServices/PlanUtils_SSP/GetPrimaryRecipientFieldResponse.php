<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class GetPrimaryRecipientFieldResponse
{

    /**
     * @var RecipientField $GetPrimaryRecipientFieldResult
     */
    protected $GetPrimaryRecipientFieldResult = null;

    /**
     * @param RecipientField $GetPrimaryRecipientFieldResult
     */
    public function __construct($GetPrimaryRecipientFieldResult = null)
    {
      $this->GetPrimaryRecipientFieldResult = $GetPrimaryRecipientFieldResult;
    }

    /**
     * @return RecipientField
     */
    public function getGetPrimaryRecipientFieldResult()
    {
      return $this->GetPrimaryRecipientFieldResult;
    }

    /**
     * @param RecipientField $GetPrimaryRecipientFieldResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\GetPrimaryRecipientFieldResponse
     */
    public function setGetPrimaryRecipientFieldResult($GetPrimaryRecipientFieldResult)
    {
      $this->GetPrimaryRecipientFieldResult = $GetPrimaryRecipientFieldResult;
      return $this;
    }

}
