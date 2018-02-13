<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class DeletePortsResponse
{

    /**
     * @var boolean $DeletePortsResult
     */
    protected $DeletePortsResult = null;

    /**
     * @param boolean $DeletePortsResult
     */
    public function __construct($DeletePortsResult = null)
    {
      $this->DeletePortsResult = $DeletePortsResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePortsResult()
    {
      return $this->DeletePortsResult;
    }

    /**
     * @param boolean $DeletePortsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\DeletePortsResponse
     */
    public function setDeletePortsResult($DeletePortsResult)
    {
      $this->DeletePortsResult = $DeletePortsResult;
      return $this;
    }

}
