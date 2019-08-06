<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\Permissions_SSP;

class GetPermittedUsersResponse
{

    /**
     * @var ArrayOfString $GetPermittedUsersResult
     */
    protected $GetPermittedUsersResult = null;

    /**
     * @param ArrayOfString $GetPermittedUsersResult
     */
    public function __construct($GetPermittedUsersResult = null)
    {
      $this->GetPermittedUsersResult = $GetPermittedUsersResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetPermittedUsersResult()
    {
      return $this->GetPermittedUsersResult;
    }

    /**
     * @param ArrayOfString $GetPermittedUsersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\Permissions_SSP\GetPermittedUsersResponse
     */
    public function setGetPermittedUsersResult($GetPermittedUsersResult)
    {
      $this->GetPermittedUsersResult = $GetPermittedUsersResult;
      return $this;
    }

}
