<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP;

class GetDocumentsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDocumentsXMPTblDataSetResult
     */
    protected $GetDocumentsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDocumentsXMPTblDataSetResult
     */
    public function __construct($GetDocumentsXMPTblDataSetResult = null)
    {
      $this->GetDocumentsXMPTblDataSetResult = $GetDocumentsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDocumentsXMPTblDataSetResult()
    {
      return $this->GetDocumentsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDocumentsXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\GetDocumentsXMPTblDataSetResponse
     */
    public function setGetDocumentsXMPTblDataSetResult($GetDocumentsXMPTblDataSetResult)
    {
      $this->GetDocumentsXMPTblDataSetResult = $GetDocumentsXMPTblDataSetResult;
      return $this;
    }

}
