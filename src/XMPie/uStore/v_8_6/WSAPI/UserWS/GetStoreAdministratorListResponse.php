<?php

namespace XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserWS;

class GetStoreAdministratorListResponse
{

    /**
     * @var ArrayOfUser $GetStoreAdministratorListResult
     */
    protected $GetStoreAdministratorListResult = null;

    /**
     * @param ArrayOfUser $GetStoreAdministratorListResult
     */
    public function __construct($GetStoreAdministratorListResult = null)
    {
      $this->GetStoreAdministratorListResult = $GetStoreAdministratorListResult;
    }

    /**
     * @return ArrayOfUser
     */
    public function getGetStoreAdministratorListResult()
    {
      return $this->GetStoreAdministratorListResult;
    }

    /**
     * @param ArrayOfUser $GetStoreAdministratorListResult
     * @return \XMPieWsdlClient\XMPie\uStore\v_8_6\WSAPI\UserWS\GetStoreAdministratorListResponse
     */
    public function setGetStoreAdministratorListResult($GetStoreAdministratorListResult)
    {
      $this->GetStoreAdministratorListResult = $GetStoreAdministratorListResult;
      return $this;
    }

}
