<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP;

class GetDataSourceIDResponse
{

    /**
     * @var string $GetDataSourceIDResult
     */
    protected $GetDataSourceIDResult = null;

    /**
     * @param string $GetDataSourceIDResult
     */
    public function __construct($GetDataSourceIDResult = null)
    {
      $this->GetDataSourceIDResult = $GetDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetDataSourceIDResult()
    {
      return $this->GetDataSourceIDResult;
    }

    /**
     * @param string $GetDataSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\RecipientTable_SSP\GetDataSourceIDResponse
     */
    public function setGetDataSourceIDResult($GetDataSourceIDResult)
    {
      $this->GetDataSourceIDResult = $GetDataSourceIDResult;
      return $this;
    }

}
