<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP;

class SetProgressStatusResponse
{

    /**
     * @var boolean $SetProgressStatusResult
     */
    protected $SetProgressStatusResult = null;

    /**
     * @param boolean $SetProgressStatusResult
     */
    public function __construct($SetProgressStatusResult = null)
    {
      $this->SetProgressStatusResult = $SetProgressStatusResult;
    }

    /**
     * @return boolean
     */
    public function getSetProgressStatusResult()
    {
      return $this->SetProgressStatusResult;
    }

    /**
     * @param boolean $SetProgressStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\SetProgressStatusResponse
     */
    public function setSetProgressStatusResult($SetProgressStatusResult)
    {
      $this->SetProgressStatusResult = $SetProgressStatusResult;
      return $this;
    }

}
