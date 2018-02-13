<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP;

class DeleteAllPortsResponse
{

    /**
     * @var boolean $DeleteAllPortsResult
     */
    protected $DeleteAllPortsResult = null;

    /**
     * @param boolean $DeleteAllPortsResult
     */
    public function __construct($DeleteAllPortsResult = null)
    {
      $this->DeleteAllPortsResult = $DeleteAllPortsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllPortsResult()
    {
      return $this->DeleteAllPortsResult;
    }

    /**
     * @param boolean $DeleteAllPortsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\DeleteAllPortsResponse
     */
    public function setDeleteAllPortsResult($DeleteAllPortsResult)
    {
      $this->DeleteAllPortsResult = $DeleteAllPortsResult;
      return $this;
    }

}
