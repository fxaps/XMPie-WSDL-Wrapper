<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP;

class DeleteEmailMarketingsResponse
{

    /**
     * @var boolean $DeleteEmailMarketingsResult
     */
    protected $DeleteEmailMarketingsResult = null;

    /**
     * @param boolean $DeleteEmailMarketingsResult
     */
    public function __construct($DeleteEmailMarketingsResult = null)
    {
      $this->DeleteEmailMarketingsResult = $DeleteEmailMarketingsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteEmailMarketingsResult()
    {
      return $this->DeleteEmailMarketingsResult;
    }

    /**
     * @param boolean $DeleteEmailMarketingsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Campaign_SSP\DeleteEmailMarketingsResponse
     */
    public function setDeleteEmailMarketingsResult($DeleteEmailMarketingsResult)
    {
      $this->DeleteEmailMarketingsResult = $DeleteEmailMarketingsResult;
      return $this;
    }

}
