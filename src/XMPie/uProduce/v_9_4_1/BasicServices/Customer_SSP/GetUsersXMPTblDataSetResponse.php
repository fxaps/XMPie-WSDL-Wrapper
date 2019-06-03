<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP;

class GetUsersXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetUsersXMPTblDataSetResult
     */
    protected $GetUsersXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetUsersXMPTblDataSetResult
     */
    public function __construct($GetUsersXMPTblDataSetResult = null)
    {
      $this->GetUsersXMPTblDataSetResult = $GetUsersXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetUsersXMPTblDataSetResult()
    {
      return $this->GetUsersXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetUsersXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Customer_SSP\GetUsersXMPTblDataSetResponse
     */
    public function setGetUsersXMPTblDataSetResult($GetUsersXMPTblDataSetResult)
    {
      $this->GetUsersXMPTblDataSetResult = $GetUsersXMPTblDataSetResult;
      return $this;
    }

}
