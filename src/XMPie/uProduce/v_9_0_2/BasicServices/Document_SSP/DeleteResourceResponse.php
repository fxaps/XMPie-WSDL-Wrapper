<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class DeleteResourceResponse
{

    /**
     * @var boolean $DeleteResourceResult
     */
    protected $DeleteResourceResult = null;

    /**
     * @param boolean $DeleteResourceResult
     */
    public function __construct($DeleteResourceResult = null)
    {
      $this->DeleteResourceResult = $DeleteResourceResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteResourceResult()
    {
      return $this->DeleteResourceResult;
    }

    /**
     * @param boolean $DeleteResourceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\DeleteResourceResponse
     */
    public function setDeleteResourceResult($DeleteResourceResult)
    {
      $this->DeleteResourceResult = $DeleteResourceResult;
      return $this;
    }

}
