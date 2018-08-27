<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class RemoveMetaDataGroupResponse
{

    /**
     * @var boolean $RemoveMetaDataGroupResult
     */
    protected $RemoveMetaDataGroupResult = null;

    /**
     * @param boolean $RemoveMetaDataGroupResult
     */
    public function __construct($RemoveMetaDataGroupResult = null)
    {
      $this->RemoveMetaDataGroupResult = $RemoveMetaDataGroupResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveMetaDataGroupResult()
    {
      return $this->RemoveMetaDataGroupResult;
    }

    /**
     * @param boolean $RemoveMetaDataGroupResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\RemoveMetaDataGroupResponse
     */
    public function setRemoveMetaDataGroupResult($RemoveMetaDataGroupResult)
    {
      $this->RemoveMetaDataGroupResult = $RemoveMetaDataGroupResult;
      return $this;
    }

}
