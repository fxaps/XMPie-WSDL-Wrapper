<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP;

class CreateNewFromVPCResponse
{

    /**
     * @var string $CreateNewFromVPCResult
     */
    protected $CreateNewFromVPCResult = null;

    /**
     * @param string $CreateNewFromVPCResult
     */
    public function __construct($CreateNewFromVPCResult = null)
    {
      $this->CreateNewFromVPCResult = $CreateNewFromVPCResult;
    }

    /**
     * @return string
     */
    public function getCreateNewFromVPCResult()
    {
      return $this->CreateNewFromVPCResult;
    }

    /**
     * @param string $CreateNewFromVPCResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Campaign_SSP\CreateNewFromVPCResponse
     */
    public function setCreateNewFromVPCResult($CreateNewFromVPCResult)
    {
      $this->CreateNewFromVPCResult = $CreateNewFromVPCResult;
      return $this;
    }

}
