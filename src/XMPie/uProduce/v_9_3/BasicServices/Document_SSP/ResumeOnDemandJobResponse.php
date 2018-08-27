<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class ResumeOnDemandJobResponse
{

    /**
     * @var boolean $ResumeOnDemandJobResult
     */
    protected $ResumeOnDemandJobResult = null;

    /**
     * @param boolean $ResumeOnDemandJobResult
     */
    public function __construct($ResumeOnDemandJobResult = null)
    {
      $this->ResumeOnDemandJobResult = $ResumeOnDemandJobResult;
    }

    /**
     * @return boolean
     */
    public function getResumeOnDemandJobResult()
    {
      return $this->ResumeOnDemandJobResult;
    }

    /**
     * @param boolean $ResumeOnDemandJobResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\ResumeOnDemandJobResponse
     */
    public function setResumeOnDemandJobResult($ResumeOnDemandJobResult)
    {
      $this->ResumeOnDemandJobResult = $ResumeOnDemandJobResult;
      return $this;
    }

}
