<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Jobs_SSP;

class DeleteAllResponse
{

    /**
     * @var boolean $DeleteAllResult
     */
    protected $DeleteAllResult = null;

    /**
     * @param boolean $DeleteAllResult
     */
    public function __construct($DeleteAllResult = null)
    {
      $this->DeleteAllResult = $DeleteAllResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllResult()
    {
      return $this->DeleteAllResult;
    }

    /**
     * @param boolean $DeleteAllResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Jobs_SSP\DeleteAllResponse
     */
    public function setDeleteAllResult($DeleteAllResult)
    {
      $this->DeleteAllResult = $DeleteAllResult;
      return $this;
    }

}
