<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetOutputFolderResponse
{

    /**
     * @var boolean $SetOutputFolderResult
     */
    protected $SetOutputFolderResult = null;

    /**
     * @param boolean $SetOutputFolderResult
     */
    public function __construct($SetOutputFolderResult = null)
    {
      $this->SetOutputFolderResult = $SetOutputFolderResult;
    }

    /**
     * @return boolean
     */
    public function getSetOutputFolderResult()
    {
      return $this->SetOutputFolderResult;
    }

    /**
     * @param boolean $SetOutputFolderResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetOutputFolderResponse
     */
    public function setSetOutputFolderResult($SetOutputFolderResult)
    {
      $this->SetOutputFolderResult = $SetOutputFolderResult;
      return $this;
    }

}
