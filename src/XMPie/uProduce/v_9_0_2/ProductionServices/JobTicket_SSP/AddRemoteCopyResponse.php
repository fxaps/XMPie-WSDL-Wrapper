<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class AddRemoteCopyResponse
{

    /**
     * @var boolean $AddRemoteCopyResult
     */
    protected $AddRemoteCopyResult = null;

    /**
     * @param boolean $AddRemoteCopyResult
     */
    public function __construct($AddRemoteCopyResult = null)
    {
      $this->AddRemoteCopyResult = $AddRemoteCopyResult;
    }

    /**
     * @return boolean
     */
    public function getAddRemoteCopyResult()
    {
      return $this->AddRemoteCopyResult;
    }

    /**
     * @param boolean $AddRemoteCopyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\AddRemoteCopyResponse
     */
    public function setAddRemoteCopyResult($AddRemoteCopyResult)
    {
      $this->AddRemoteCopyResult = $AddRemoteCopyResult;
      return $this;
    }

}
