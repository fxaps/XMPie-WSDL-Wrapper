<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class DeletePopulationsResponse
{

    /**
     * @var boolean $DeletePopulationsResult
     */
    protected $DeletePopulationsResult = null;

    /**
     * @param boolean $DeletePopulationsResult
     */
    public function __construct($DeletePopulationsResult = null)
    {
      $this->DeletePopulationsResult = $DeletePopulationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePopulationsResult()
    {
      return $this->DeletePopulationsResult;
    }

    /**
     * @param boolean $DeletePopulationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeletePopulationsResponse
     */
    public function setDeletePopulationsResult($DeletePopulationsResult)
    {
      $this->DeletePopulationsResult = $DeletePopulationsResult;
      return $this;
    }

}
