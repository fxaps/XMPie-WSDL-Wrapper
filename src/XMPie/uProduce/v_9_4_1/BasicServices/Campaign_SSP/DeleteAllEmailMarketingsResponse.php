<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class DeleteAllEmailMarketingsResponse
{

    /**
     * @var boolean $DeleteAllEmailMarketingsResult
     */
    protected $DeleteAllEmailMarketingsResult = null;

    /**
     * @param boolean $DeleteAllEmailMarketingsResult
     */
    public function __construct($DeleteAllEmailMarketingsResult = null)
    {
      $this->DeleteAllEmailMarketingsResult = $DeleteAllEmailMarketingsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllEmailMarketingsResult()
    {
      return $this->DeleteAllEmailMarketingsResult;
    }

    /**
     * @param boolean $DeleteAllEmailMarketingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteAllEmailMarketingsResponse
     */
    public function setDeleteAllEmailMarketingsResult($DeleteAllEmailMarketingsResult)
    {
      $this->DeleteAllEmailMarketingsResult = $DeleteAllEmailMarketingsResult;
      return $this;
    }

}
