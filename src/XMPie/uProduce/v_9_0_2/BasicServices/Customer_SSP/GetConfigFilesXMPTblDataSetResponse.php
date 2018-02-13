<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP;

class GetConfigFilesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetConfigFilesXMPTblDataSetResult
     */
    protected $GetConfigFilesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetConfigFilesXMPTblDataSetResult
     */
    public function __construct($GetConfigFilesXMPTblDataSetResult = null)
    {
      $this->GetConfigFilesXMPTblDataSetResult = $GetConfigFilesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetConfigFilesXMPTblDataSetResult()
    {
      return $this->GetConfigFilesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetConfigFilesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Customer_SSP\GetConfigFilesXMPTblDataSetResponse
     */
    public function setGetConfigFilesXMPTblDataSetResult($GetConfigFilesXMPTblDataSetResult)
    {
      $this->GetConfigFilesXMPTblDataSetResult = $GetConfigFilesXMPTblDataSetResult;
      return $this;
    }

}
