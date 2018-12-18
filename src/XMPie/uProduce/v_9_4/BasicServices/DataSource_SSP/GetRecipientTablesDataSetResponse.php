<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\DataSource_SSP;

class GetRecipientTablesDataSetResponse
{

    /**
     * @var GetRecipientTablesDataSetResult $GetRecipientTablesDataSetResult
     */
    protected $GetRecipientTablesDataSetResult = null;

    /**
     * @param GetRecipientTablesDataSetResult $GetRecipientTablesDataSetResult
     */
    public function __construct($GetRecipientTablesDataSetResult = null)
    {
      $this->GetRecipientTablesDataSetResult = $GetRecipientTablesDataSetResult;
    }

    /**
     * @return GetRecipientTablesDataSetResult
     */
    public function getGetRecipientTablesDataSetResult()
    {
      return $this->GetRecipientTablesDataSetResult;
    }

    /**
     * @param GetRecipientTablesDataSetResult $GetRecipientTablesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\DataSource_SSP\GetRecipientTablesDataSetResponse
     */
    public function setGetRecipientTablesDataSetResult($GetRecipientTablesDataSetResult)
    {
      $this->GetRecipientTablesDataSetResult = $GetRecipientTablesDataSetResult;
      return $this;
    }

}
