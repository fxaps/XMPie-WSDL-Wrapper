<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetSubjectAdorNameResponse
{

    /**
     * @var boolean $SetSubjectAdorNameResult
     */
    protected $SetSubjectAdorNameResult = null;

    /**
     * @param boolean $SetSubjectAdorNameResult
     */
    public function __construct($SetSubjectAdorNameResult = null)
    {
      $this->SetSubjectAdorNameResult = $SetSubjectAdorNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetSubjectAdorNameResult()
    {
      return $this->SetSubjectAdorNameResult;
    }

    /**
     * @param boolean $SetSubjectAdorNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetSubjectAdorNameResponse
     */
    public function setSetSubjectAdorNameResult($SetSubjectAdorNameResult)
    {
      $this->SetSubjectAdorNameResult = $SetSubjectAdorNameResult;
      return $this;
    }

}
