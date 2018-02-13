<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP;

class IsMappingCompatibleResponse
{

    /**
     * @var EMappingCompatibleStatus $IsMappingCompatibleResult
     */
    protected $IsMappingCompatibleResult = null;

    /**
     * @param EMappingCompatibleStatus $IsMappingCompatibleResult
     */
    public function __construct($IsMappingCompatibleResult = null)
    {
      $this->IsMappingCompatibleResult = $IsMappingCompatibleResult;
    }

    /**
     * @return EMappingCompatibleStatus
     */
    public function getIsMappingCompatibleResult()
    {
      return $this->IsMappingCompatibleResult;
    }

    /**
     * @param EMappingCompatibleStatus $IsMappingCompatibleResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\RecipientTable_SSP\IsMappingCompatibleResponse
     */
    public function setIsMappingCompatibleResult($IsMappingCompatibleResult)
    {
      $this->IsMappingCompatibleResult = $IsMappingCompatibleResult;
      return $this;
    }

}
