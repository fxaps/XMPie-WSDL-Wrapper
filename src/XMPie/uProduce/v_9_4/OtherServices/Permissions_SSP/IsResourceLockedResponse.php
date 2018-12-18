<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP;

class IsResourceLockedResponse
{

    /**
     * @var boolean $IsResourceLockedResult
     */
    protected $IsResourceLockedResult = null;

    /**
     * @param boolean $IsResourceLockedResult
     */
    public function __construct($IsResourceLockedResult = null)
    {
      $this->IsResourceLockedResult = $IsResourceLockedResult;
    }

    /**
     * @return boolean
     */
    public function getIsResourceLockedResult()
    {
      return $this->IsResourceLockedResult;
    }

    /**
     * @param boolean $IsResourceLockedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\OtherServices\Permissions_SSP\IsResourceLockedResponse
     */
    public function setIsResourceLockedResult($IsResourceLockedResult)
    {
      $this->IsResourceLockedResult = $IsResourceLockedResult;
      return $this;
    }

}
