<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class AddSecondaryRemoteCopyResponse
{

    /**
     * @var boolean $AddSecondaryRemoteCopyResult
     */
    protected $AddSecondaryRemoteCopyResult = null;

    /**
     * @param boolean $AddSecondaryRemoteCopyResult
     */
    public function __construct($AddSecondaryRemoteCopyResult = null)
    {
      $this->AddSecondaryRemoteCopyResult = $AddSecondaryRemoteCopyResult;
    }

    /**
     * @return boolean
     */
    public function getAddSecondaryRemoteCopyResult()
    {
      return $this->AddSecondaryRemoteCopyResult;
    }

    /**
     * @param boolean $AddSecondaryRemoteCopyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\AddSecondaryRemoteCopyResponse
     */
    public function setAddSecondaryRemoteCopyResult($AddSecondaryRemoteCopyResult)
    {
      $this->AddSecondaryRemoteCopyResult = $AddSecondaryRemoteCopyResult;
      return $this;
    }

}
