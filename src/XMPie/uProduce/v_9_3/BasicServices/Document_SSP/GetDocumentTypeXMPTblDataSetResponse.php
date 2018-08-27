<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP;

class GetDocumentTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDocumentTypeXMPTblDataSetResult
     */
    protected $GetDocumentTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDocumentTypeXMPTblDataSetResult
     */
    public function __construct($GetDocumentTypeXMPTblDataSetResult = null)
    {
      $this->GetDocumentTypeXMPTblDataSetResult = $GetDocumentTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDocumentTypeXMPTblDataSetResult()
    {
      return $this->GetDocumentTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDocumentTypeXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSetResponse
     */
    public function setGetDocumentTypeXMPTblDataSetResult($GetDocumentTypeXMPTblDataSetResult)
    {
      $this->GetDocumentTypeXMPTblDataSetResult = $GetDocumentTypeXMPTblDataSetResult;
      return $this;
    }

}
