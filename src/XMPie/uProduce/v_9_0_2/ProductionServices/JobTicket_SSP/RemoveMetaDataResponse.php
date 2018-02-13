<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class RemoveMetaDataResponse
{

    /**
     * @var boolean $RemoveMetaDataResult
     */
    protected $RemoveMetaDataResult = null;

    /**
     * @param boolean $RemoveMetaDataResult
     */
    public function __construct($RemoveMetaDataResult = null)
    {
      $this->RemoveMetaDataResult = $RemoveMetaDataResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveMetaDataResult()
    {
      return $this->RemoveMetaDataResult;
    }

    /**
     * @param boolean $RemoveMetaDataResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\RemoveMetaDataResponse
     */
    public function setRemoveMetaDataResult($RemoveMetaDataResult)
    {
      $this->RemoveMetaDataResult = $RemoveMetaDataResult;
      return $this;
    }

}
