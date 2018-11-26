<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ApplicationServices\Destination_SSP;

class RefreshQueuesResponse
{

    /**
     * @var boolean $RefreshQueuesResult
     */
    protected $RefreshQueuesResult = null;

    /**
     * @param boolean $RefreshQueuesResult
     */
    public function __construct($RefreshQueuesResult = null)
    {
      $this->RefreshQueuesResult = $RefreshQueuesResult;
    }

    /**
     * @return boolean
     */
    public function getRefreshQueuesResult()
    {
      return $this->RefreshQueuesResult;
    }

    /**
     * @param boolean $RefreshQueuesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ApplicationServices\Destination_SSP\RefreshQueuesResponse
     */
    public function setRefreshQueuesResult($RefreshQueuesResult)
    {
      $this->RefreshQueuesResult = $RefreshQueuesResult;
      return $this;
    }

}
