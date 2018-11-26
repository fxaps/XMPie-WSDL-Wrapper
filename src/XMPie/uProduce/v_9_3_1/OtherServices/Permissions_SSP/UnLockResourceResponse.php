<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Permissions_SSP;

class UnLockResourceResponse
{

    /**
     * @var boolean $UnLockResourceResult
     */
    protected $UnLockResourceResult = null;

    /**
     * @param boolean $UnLockResourceResult
     */
    public function __construct($UnLockResourceResult = null)
    {
      $this->UnLockResourceResult = $UnLockResourceResult;
    }

    /**
     * @return boolean
     */
    public function getUnLockResourceResult()
    {
      return $this->UnLockResourceResult;
    }

    /**
     * @param boolean $UnLockResourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\OtherServices\Permissions_SSP\UnLockResourceResponse
     */
    public function setUnLockResourceResult($UnLockResourceResult)
    {
      $this->UnLockResourceResult = $UnLockResourceResult;
      return $this;
    }

}
