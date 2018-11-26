<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP;

class GetActivenessResponse
{

    /**
     * @var boolean $GetActivenessResult
     */
    protected $GetActivenessResult = null;

    /**
     * @param boolean $GetActivenessResult
     */
    public function __construct($GetActivenessResult = null)
    {
      $this->GetActivenessResult = $GetActivenessResult;
    }

    /**
     * @return boolean
     */
    public function getGetActivenessResult()
    {
      return $this->GetActivenessResult;
    }

    /**
     * @param boolean $GetActivenessResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetActivenessResponse
     */
    public function setGetActivenessResult($GetActivenessResult)
    {
      $this->GetActivenessResult = $GetActivenessResult;
      return $this;
    }

}
