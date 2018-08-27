<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP;

class SetActivenessResponse
{

    /**
     * @var boolean $SetActivenessResult
     */
    protected $SetActivenessResult = null;

    /**
     * @param boolean $SetActivenessResult
     */
    public function __construct($SetActivenessResult = null)
    {
      $this->SetActivenessResult = $SetActivenessResult;
    }

    /**
     * @return boolean
     */
    public function getSetActivenessResult()
    {
      return $this->SetActivenessResult;
    }

    /**
     * @param boolean $SetActivenessResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\AssetSource_SSP\SetActivenessResponse
     */
    public function setSetActivenessResult($SetActivenessResult)
    {
      $this->SetActivenessResult = $SetActivenessResult;
      return $this;
    }

}
