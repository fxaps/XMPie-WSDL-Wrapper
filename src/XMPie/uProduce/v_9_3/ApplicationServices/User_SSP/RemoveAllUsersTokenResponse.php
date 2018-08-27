<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP;

class RemoveAllUsersTokenResponse
{

    /**
     * @var boolean $RemoveAllUsersTokenResult
     */
    protected $RemoveAllUsersTokenResult = null;

    /**
     * @param boolean $RemoveAllUsersTokenResult
     */
    public function __construct($RemoveAllUsersTokenResult = null)
    {
      $this->RemoveAllUsersTokenResult = $RemoveAllUsersTokenResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllUsersTokenResult()
    {
      return $this->RemoveAllUsersTokenResult;
    }

    /**
     * @param boolean $RemoveAllUsersTokenResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ApplicationServices\User_SSP\RemoveAllUsersTokenResponse
     */
    public function setRemoveAllUsersTokenResult($RemoveAllUsersTokenResult)
    {
      $this->RemoveAllUsersTokenResult = $RemoveAllUsersTokenResult;
      return $this;
    }

}
