<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP;

class SetFriendlinessResponse
{

    /**
     * @var boolean $SetFriendlinessResult
     */
    protected $SetFriendlinessResult = null;

    /**
     * @param boolean $SetFriendlinessResult
     */
    public function __construct($SetFriendlinessResult = null)
    {
      $this->SetFriendlinessResult = $SetFriendlinessResult;
    }

    /**
     * @return boolean
     */
    public function getSetFriendlinessResult()
    {
      return $this->SetFriendlinessResult;
    }

    /**
     * @param boolean $SetFriendlinessResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\JobTicket_SSP\SetFriendlinessResponse
     */
    public function setSetFriendlinessResult($SetFriendlinessResult)
    {
      $this->SetFriendlinessResult = $SetFriendlinessResult;
      return $this;
    }

}
