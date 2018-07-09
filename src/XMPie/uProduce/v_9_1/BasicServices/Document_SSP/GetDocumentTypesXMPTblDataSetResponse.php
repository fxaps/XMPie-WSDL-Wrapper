<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP;

class GetDocumentTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDocumentTypesXMPTblDataSetResult
     */
    protected $GetDocumentTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDocumentTypesXMPTblDataSetResult
     */
    public function __construct($GetDocumentTypesXMPTblDataSetResult = null)
    {
      $this->GetDocumentTypesXMPTblDataSetResult = $GetDocumentTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDocumentTypesXMPTblDataSetResult()
    {
      return $this->GetDocumentTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDocumentTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Document_SSP\GetDocumentTypesXMPTblDataSetResponse
     */
    public function setGetDocumentTypesXMPTblDataSetResult($GetDocumentTypesXMPTblDataSetResult)
    {
      $this->GetDocumentTypesXMPTblDataSetResult = $GetDocumentTypesXMPTblDataSetResult;
      return $this;
    }

}
