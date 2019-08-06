<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP;

class DeleteAdditionalFieldsResponse
{

    /**
     * @var boolean $DeleteAdditionalFieldsResult
     */
    protected $DeleteAdditionalFieldsResult = null;

    /**
     * @param boolean $DeleteAdditionalFieldsResult
     */
    public function __construct($DeleteAdditionalFieldsResult = null)
    {
      $this->DeleteAdditionalFieldsResult = $DeleteAdditionalFieldsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAdditionalFieldsResult()
    {
      return $this->DeleteAdditionalFieldsResult;
    }

    /**
     * @param boolean $DeleteAdditionalFieldsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Campaign_SSP\DeleteAdditionalFieldsResponse
     */
    public function setDeleteAdditionalFieldsResult($DeleteAdditionalFieldsResult)
    {
      $this->DeleteAdditionalFieldsResult = $DeleteAdditionalFieldsResult;
      return $this;
    }

}
