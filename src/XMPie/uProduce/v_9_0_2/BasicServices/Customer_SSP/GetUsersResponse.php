<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class GetUsersResponse
{

    /**
     * @var ArrayOfString $GetUsersResult
     */
    protected $GetUsersResult = null;

    /**
     * @param ArrayOfString $GetUsersResult
     */
    public function __construct($GetUsersResult = null)
    {
      $this->GetUsersResult = $GetUsersResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetUsersResult()
    {
      return $this->GetUsersResult;
    }

    /**
     * @param ArrayOfString $GetUsersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetUsersResponse
     */
    public function setGetUsersResult($GetUsersResult)
    {
      $this->GetUsersResult = $GetUsersResult;
      return $this;
    }

}
