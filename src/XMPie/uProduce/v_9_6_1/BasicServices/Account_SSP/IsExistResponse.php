<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP;

class IsExistResponse
{

    /**
     * @var boolean $IsExistResult
     */
    protected $IsExistResult = null;

    /**
     * @param boolean $IsExistResult
     */
    public function __construct($IsExistResult = null)
    {
      $this->IsExistResult = $IsExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsExistResult()
    {
      return $this->IsExistResult;
    }

    /**
     * @param boolean $IsExistResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Account_SSP\IsExistResponse
     */
    public function setIsExistResult($IsExistResult)
    {
      $this->IsExistResult = $IsExistResult;
      return $this;
    }

}
