<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP;

class GetDocumentStorageTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDocumentStorageTypesXMPTblDataSetResult
     */
    protected $GetDocumentStorageTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDocumentStorageTypesXMPTblDataSetResult
     */
    public function __construct($GetDocumentStorageTypesXMPTblDataSetResult = null)
    {
      $this->GetDocumentStorageTypesXMPTblDataSetResult = $GetDocumentStorageTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDocumentStorageTypesXMPTblDataSetResult()
    {
      return $this->GetDocumentStorageTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDocumentStorageTypesXMPTblDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Document_SSP\GetDocumentStorageTypesXMPTblDataSetResponse
     */
    public function setGetDocumentStorageTypesXMPTblDataSetResult($GetDocumentStorageTypesXMPTblDataSetResult)
    {
      $this->GetDocumentStorageTypesXMPTblDataSetResult = $GetDocumentStorageTypesXMPTblDataSetResult;
      return $this;
    }

}
