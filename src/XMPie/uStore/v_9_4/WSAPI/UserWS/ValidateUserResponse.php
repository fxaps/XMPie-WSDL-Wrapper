<?php

namespace XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\UserWS;

class ValidateUserResponse
{

    /**
     * @var boolean $ValidateUserResult
     */
    protected $ValidateUserResult = null;

    /**
     * @param boolean $ValidateUserResult
     */
    public function __construct($ValidateUserResult = null)
    {
      $this->ValidateUserResult = $ValidateUserResult;
    }

    /**
     * @return boolean
     */
    public function getValidateUserResult()
    {
      return $this->ValidateUserResult;
    }

    /**
     * @param boolean $ValidateUserResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_9_4\WSAPI\UserWS\ValidateUserResponse
     */
    public function setValidateUserResult($ValidateUserResult)
    {
      $this->ValidateUserResult = $ValidateUserResult;
      return $this;
    }

}