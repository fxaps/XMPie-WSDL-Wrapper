<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSourcePlanUtils_SSP;

class IsRecipientParticipatingByInfoResponse
{

    /**
     * @var boolean $IsRecipientParticipatingByInfoResult
     */
    protected $IsRecipientParticipatingByInfoResult = null;

    /**
     * @param boolean $IsRecipientParticipatingByInfoResult
     */
    public function __construct($IsRecipientParticipatingByInfoResult = null)
    {
      $this->IsRecipientParticipatingByInfoResult = $IsRecipientParticipatingByInfoResult;
    }

    /**
     * @return boolean
     */
    public function getIsRecipientParticipatingByInfoResult()
    {
      return $this->IsRecipientParticipatingByInfoResult;
    }

    /**
     * @param boolean $IsRecipientParticipatingByInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\DataSourcePlanUtils_SSP\IsRecipientParticipatingByInfoResponse
     */
    public function setIsRecipientParticipatingByInfoResult($IsRecipientParticipatingByInfoResult)
    {
      $this->IsRecipientParticipatingByInfoResult = $IsRecipientParticipatingByInfoResult;
      return $this;
    }

}
