<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP;

class SuspendOnDemandJobResponse
{

    /**
     * @var boolean $SuspendOnDemandJobResult
     */
    protected $SuspendOnDemandJobResult = null;

    /**
     * @param boolean $SuspendOnDemandJobResult
     */
    public function __construct($SuspendOnDemandJobResult = null)
    {
      $this->SuspendOnDemandJobResult = $SuspendOnDemandJobResult;
    }

    /**
     * @return boolean
     */
    public function getSuspendOnDemandJobResult()
    {
      return $this->SuspendOnDemandJobResult;
    }

    /**
     * @param boolean $SuspendOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Document_SSP\SuspendOnDemandJobResponse
     */
    public function setSuspendOnDemandJobResult($SuspendOnDemandJobResult)
    {
      $this->SuspendOnDemandJobResult = $SuspendOnDemandJobResult;
      return $this;
    }

}
