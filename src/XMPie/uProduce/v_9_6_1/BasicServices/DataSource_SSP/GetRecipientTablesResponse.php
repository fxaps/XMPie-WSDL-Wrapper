<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP;

class GetRecipientTablesResponse
{

    /**
     * @var ArrayOfString $GetRecipientTablesResult
     */
    protected $GetRecipientTablesResult = null;

    /**
     * @param ArrayOfString $GetRecipientTablesResult
     */
    public function __construct($GetRecipientTablesResult = null)
    {
      $this->GetRecipientTablesResult = $GetRecipientTablesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetRecipientTablesResult()
    {
      return $this->GetRecipientTablesResult;
    }

    /**
     * @param ArrayOfString $GetRecipientTablesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\DataSource_SSP\GetRecipientTablesResponse
     */
    public function setGetRecipientTablesResult($GetRecipientTablesResult)
    {
      $this->GetRecipientTablesResult = $GetRecipientTablesResult;
      return $this;
    }

}
