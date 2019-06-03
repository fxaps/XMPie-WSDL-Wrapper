<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP;

class GetRecipientFieldsResponse
{

    /**
     * @var ArrayOfPlanDataField $GetRecipientFieldsResult
     */
    protected $GetRecipientFieldsResult = null;

    /**
     * @param ArrayOfPlanDataField $GetRecipientFieldsResult
     */
    public function __construct($GetRecipientFieldsResult = null)
    {
      $this->GetRecipientFieldsResult = $GetRecipientFieldsResult;
    }

    /**
     * @return ArrayOfPlanDataField
     */
    public function getGetRecipientFieldsResult()
    {
      return $this->GetRecipientFieldsResult;
    }

    /**
     * @param ArrayOfPlanDataField $GetRecipientFieldsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\PlanUtils_SSP\GetRecipientFieldsResponse
     */
    public function setGetRecipientFieldsResult($GetRecipientFieldsResult)
    {
      $this->GetRecipientFieldsResult = $GetRecipientFieldsResult;
      return $this;
    }

}
