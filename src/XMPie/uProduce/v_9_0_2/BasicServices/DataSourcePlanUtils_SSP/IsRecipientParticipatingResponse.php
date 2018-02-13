<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP;

class IsRecipientParticipatingResponse
{

    /**
     * @var boolean $IsRecipientParticipatingResult
     */
    protected $IsRecipientParticipatingResult = null;

    /**
     * @param boolean $IsRecipientParticipatingResult
     */
    public function __construct($IsRecipientParticipatingResult = null)
    {
      $this->IsRecipientParticipatingResult = $IsRecipientParticipatingResult;
    }

    /**
     * @return boolean
     */
    public function getIsRecipientParticipatingResult()
    {
      return $this->IsRecipientParticipatingResult;
    }

    /**
     * @param boolean $IsRecipientParticipatingResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipatingResponse
     */
    public function setIsRecipientParticipatingResult($IsRecipientParticipatingResult)
    {
      $this->IsRecipientParticipatingResult = $IsRecipientParticipatingResult;
      return $this;
    }

}
