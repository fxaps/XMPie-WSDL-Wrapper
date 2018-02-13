<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP;

class GetUserResponse
{

    /**
     * @var string $GetUserResult
     */
    protected $GetUserResult = null;

    /**
     * @param string $GetUserResult
     */
    public function __construct($GetUserResult = null)
    {
      $this->GetUserResult = $GetUserResult;
    }

    /**
     * @return string
     */
    public function getGetUserResult()
    {
      return $this->GetUserResult;
    }

    /**
     * @param string $GetUserResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Customer_SSP\GetUserResponse
     */
    public function setGetUserResult($GetUserResult)
    {
      $this->GetUserResult = $GetUserResult;
      return $this;
    }

}
