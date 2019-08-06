<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP;

class GetFirstRecipientFieldsResponse
{

    /**
     * @var ArrayOfProperty $GetFirstRecipientFieldsResult
     */
    protected $GetFirstRecipientFieldsResult = null;

    /**
     * @param ArrayOfProperty $GetFirstRecipientFieldsResult
     */
    public function __construct($GetFirstRecipientFieldsResult = null)
    {
      $this->GetFirstRecipientFieldsResult = $GetFirstRecipientFieldsResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetFirstRecipientFieldsResult()
    {
      return $this->GetFirstRecipientFieldsResult;
    }

    /**
     * @param ArrayOfProperty $GetFirstRecipientFieldsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\GetFirstRecipientFieldsResponse
     */
    public function setGetFirstRecipientFieldsResult($GetFirstRecipientFieldsResult)
    {
      $this->GetFirstRecipientFieldsResult = $GetFirstRecipientFieldsResult;
      return $this;
    }

}
