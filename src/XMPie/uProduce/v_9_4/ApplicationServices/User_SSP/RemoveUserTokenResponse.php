<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ApplicationServices\User_SSP;

class RemoveUserTokenResponse
{

    /**
     * @var boolean $RemoveUserTokenResult
     */
    protected $RemoveUserTokenResult = null;

    /**
     * @param boolean $RemoveUserTokenResult
     */
    public function __construct($RemoveUserTokenResult = null)
    {
      $this->RemoveUserTokenResult = $RemoveUserTokenResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveUserTokenResult()
    {
      return $this->RemoveUserTokenResult;
    }

    /**
     * @param boolean $RemoveUserTokenResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ApplicationServices\User_SSP\RemoveUserTokenResponse
     */
    public function setRemoveUserTokenResult($RemoveUserTokenResult)
    {
      $this->RemoveUserTokenResult = $RemoveUserTokenResult;
      return $this;
    }

}
