<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Account_SSP;

class GetAccountDataSourceIDResponse
{

    /**
     * @var string $GetAccountDataSourceIDResult
     */
    protected $GetAccountDataSourceIDResult = null;

    /**
     * @param string $GetAccountDataSourceIDResult
     */
    public function __construct($GetAccountDataSourceIDResult = null)
    {
      $this->GetAccountDataSourceIDResult = $GetAccountDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetAccountDataSourceIDResult()
    {
      return $this->GetAccountDataSourceIDResult;
    }

    /**
     * @param string $GetAccountDataSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Account_SSP\GetAccountDataSourceIDResponse
     */
    public function setGetAccountDataSourceIDResult($GetAccountDataSourceIDResult)
    {
      $this->GetAccountDataSourceIDResult = $GetAccountDataSourceIDResult;
      return $this;
    }

}
