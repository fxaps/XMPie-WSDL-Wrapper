<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetEmbedEmailBodyResponse
{

    /**
     * @var boolean $SetEmbedEmailBodyResult
     */
    protected $SetEmbedEmailBodyResult = null;

    /**
     * @param boolean $SetEmbedEmailBodyResult
     */
    public function __construct($SetEmbedEmailBodyResult = null)
    {
      $this->SetEmbedEmailBodyResult = $SetEmbedEmailBodyResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmbedEmailBodyResult()
    {
      return $this->SetEmbedEmailBodyResult;
    }

    /**
     * @param boolean $SetEmbedEmailBodyResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetEmbedEmailBodyResponse
     */
    public function setSetEmbedEmailBodyResult($SetEmbedEmailBodyResult)
    {
      $this->SetEmbedEmailBodyResult = $SetEmbedEmailBodyResult;
      return $this;
    }

}
