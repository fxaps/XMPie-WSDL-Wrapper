<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class GetMetaDataSubGroupsResponse
{

    /**
     * @var ArrayOfString $GetMetaDataSubGroupsResult
     */
    protected $GetMetaDataSubGroupsResult = null;

    /**
     * @param ArrayOfString $GetMetaDataSubGroupsResult
     */
    public function __construct($GetMetaDataSubGroupsResult = null)
    {
      $this->GetMetaDataSubGroupsResult = $GetMetaDataSubGroupsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetMetaDataSubGroupsResult()
    {
      return $this->GetMetaDataSubGroupsResult;
    }

    /**
     * @param ArrayOfString $GetMetaDataSubGroupsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\GetMetaDataSubGroupsResponse
     */
    public function setGetMetaDataSubGroupsResult($GetMetaDataSubGroupsResult)
    {
      $this->GetMetaDataSubGroupsResult = $GetMetaDataSubGroupsResult;
      return $this;
    }

}
