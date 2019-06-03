<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP;

class AddUserTokenResponse
{

    /**
     * @var boolean $AddUserTokenResult
     */
    protected $AddUserTokenResult = null;

    /**
     * @param boolean $AddUserTokenResult
     */
    public function __construct($AddUserTokenResult = null)
    {
      $this->AddUserTokenResult = $AddUserTokenResult;
    }

    /**
     * @return boolean
     */
    public function getAddUserTokenResult()
    {
      return $this->AddUserTokenResult;
    }

    /**
     * @param boolean $AddUserTokenResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ApplicationServices\User_SSP\AddUserTokenResponse
     */
    public function setAddUserTokenResult($AddUserTokenResult)
    {
      $this->AddUserTokenResult = $AddUserTokenResult;
      return $this;
    }

}
