<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP;

class LockResourceResponse
{

    /**
     * @var boolean $LockResourceResult
     */
    protected $LockResourceResult = null;

    /**
     * @param boolean $LockResourceResult
     */
    public function __construct($LockResourceResult = null)
    {
      $this->LockResourceResult = $LockResourceResult;
    }

    /**
     * @return boolean
     */
    public function getLockResourceResult()
    {
      return $this->LockResourceResult;
    }

    /**
     * @param boolean $LockResourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP\LockResourceResponse
     */
    public function setLockResourceResult($LockResourceResult)
    {
      $this->LockResourceResult = $LockResourceResult;
      return $this;
    }

}
