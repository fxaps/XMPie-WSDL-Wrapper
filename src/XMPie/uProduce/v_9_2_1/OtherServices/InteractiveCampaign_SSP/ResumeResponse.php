<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class ResumeResponse
{

    /**
     * @var boolean $ResumeResult
     */
    protected $ResumeResult = null;

    /**
     * @param boolean $ResumeResult
     */
    public function __construct($ResumeResult = null)
    {
      $this->ResumeResult = $ResumeResult;
    }

    /**
     * @return boolean
     */
    public function getResumeResult()
    {
      return $this->ResumeResult;
    }

    /**
     * @param boolean $ResumeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\ResumeResponse
     */
    public function setResumeResult($ResumeResult)
    {
      $this->ResumeResult = $ResumeResult;
      return $this;
    }

}
