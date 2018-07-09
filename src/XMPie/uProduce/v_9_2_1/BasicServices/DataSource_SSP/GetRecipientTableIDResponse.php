<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSource_SSP;

class GetRecipientTableIDResponse
{

    /**
     * @var string $GetRecipientTableIDResult
     */
    protected $GetRecipientTableIDResult = null;

    /**
     * @param string $GetRecipientTableIDResult
     */
    public function __construct($GetRecipientTableIDResult = null)
    {
      $this->GetRecipientTableIDResult = $GetRecipientTableIDResult;
    }

    /**
     * @return string
     */
    public function getGetRecipientTableIDResult()
    {
      return $this->GetRecipientTableIDResult;
    }

    /**
     * @param string $GetRecipientTableIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\DataSource_SSP\GetRecipientTableIDResponse
     */
    public function setGetRecipientTableIDResult($GetRecipientTableIDResult)
    {
      $this->GetRecipientTableIDResult = $GetRecipientTableIDResult;
      return $this;
    }

}
