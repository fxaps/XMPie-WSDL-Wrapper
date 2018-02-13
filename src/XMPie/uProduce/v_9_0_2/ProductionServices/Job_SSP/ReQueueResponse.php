<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Job_SSP;

class ReQueueResponse
{

    /**
     * @var boolean $ReQueueResult
     */
    protected $ReQueueResult = null;

    /**
     * @param boolean $ReQueueResult
     */
    public function __construct($ReQueueResult = null)
    {
      $this->ReQueueResult = $ReQueueResult;
    }

    /**
     * @return boolean
     */
    public function getReQueueResult()
    {
      return $this->ReQueueResult;
    }

    /**
     * @param boolean $ReQueueResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\Job_SSP\ReQueueResponse
     */
    public function setReQueueResult($ReQueueResult)
    {
      $this->ReQueueResult = $ReQueueResult;
      return $this;
    }

}
