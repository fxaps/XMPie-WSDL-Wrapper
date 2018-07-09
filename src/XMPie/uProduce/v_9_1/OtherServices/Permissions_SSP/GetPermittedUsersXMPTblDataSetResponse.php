<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP;

class GetPermittedUsersXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetPermittedUsersXMPTblDataSetResult
     */
    protected $GetPermittedUsersXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetPermittedUsersXMPTblDataSetResult
     */
    public function __construct($GetPermittedUsersXMPTblDataSetResult = null)
    {
      $this->GetPermittedUsersXMPTblDataSetResult = $GetPermittedUsersXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetPermittedUsersXMPTblDataSetResult()
    {
      return $this->GetPermittedUsersXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetPermittedUsersXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\Permissions_SSP\GetPermittedUsersXMPTblDataSetResponse
     */
    public function setGetPermittedUsersXMPTblDataSetResult($GetPermittedUsersXMPTblDataSetResult)
    {
      $this->GetPermittedUsersXMPTblDataSetResult = $GetPermittedUsersXMPTblDataSetResult;
      return $this;
    }

}
