<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP;

class IsAllowedResponse
{

    /**
     * @var boolean $IsAllowedResult
     */
    protected $IsAllowedResult = null;

    /**
     * @param boolean $IsAllowedResult
     */
    public function __construct($IsAllowedResult = null)
    {
      $this->IsAllowedResult = $IsAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getIsAllowedResult()
    {
      return $this->IsAllowedResult;
    }

    /**
     * @param boolean $IsAllowedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\Permissions_SSP\IsAllowedResponse
     */
    public function setIsAllowedResult($IsAllowedResult)
    {
      $this->IsAllowedResult = $IsAllowedResult;
      return $this;
    }

}
