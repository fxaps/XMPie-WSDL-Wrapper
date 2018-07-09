<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP;

class GetPermittedUsersViewResponse
{

    /**
     * @var GetPermittedUsersViewResult $GetPermittedUsersViewResult
     */
    protected $GetPermittedUsersViewResult = null;

    /**
     * @param GetPermittedUsersViewResult $GetPermittedUsersViewResult
     */
    public function __construct($GetPermittedUsersViewResult = null)
    {
      $this->GetPermittedUsersViewResult = $GetPermittedUsersViewResult;
    }

    /**
     * @return GetPermittedUsersViewResult
     */
    public function getGetPermittedUsersViewResult()
    {
      return $this->GetPermittedUsersViewResult;
    }

    /**
     * @param GetPermittedUsersViewResult $GetPermittedUsersViewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP\GetPermittedUsersViewResponse
     */
    public function setGetPermittedUsersViewResult($GetPermittedUsersViewResult)
    {
      $this->GetPermittedUsersViewResult = $GetPermittedUsersViewResult;
      return $this;
    }

}
