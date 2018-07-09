<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class DeleteAllPopulationsResponse
{

    /**
     * @var boolean $DeleteAllPopulationsResult
     */
    protected $DeleteAllPopulationsResult = null;

    /**
     * @param boolean $DeleteAllPopulationsResult
     */
    public function __construct($DeleteAllPopulationsResult = null)
    {
      $this->DeleteAllPopulationsResult = $DeleteAllPopulationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllPopulationsResult()
    {
      return $this->DeleteAllPopulationsResult;
    }

    /**
     * @param boolean $DeleteAllPopulationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteAllPopulationsResponse
     */
    public function setDeleteAllPopulationsResult($DeleteAllPopulationsResult)
    {
      $this->DeleteAllPopulationsResult = $DeleteAllPopulationsResult;
      return $this;
    }

}
