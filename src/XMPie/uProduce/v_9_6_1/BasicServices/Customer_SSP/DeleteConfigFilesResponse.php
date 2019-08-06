<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP;

class DeleteConfigFilesResponse
{

    /**
     * @var boolean $DeleteConfigFilesResult
     */
    protected $DeleteConfigFilesResult = null;

    /**
     * @param boolean $DeleteConfigFilesResult
     */
    public function __construct($DeleteConfigFilesResult = null)
    {
      $this->DeleteConfigFilesResult = $DeleteConfigFilesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteConfigFilesResult()
    {
      return $this->DeleteConfigFilesResult;
    }

    /**
     * @param boolean $DeleteConfigFilesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Customer_SSP\DeleteConfigFilesResponse
     */
    public function setDeleteConfigFilesResult($DeleteConfigFilesResult)
    {
      $this->DeleteConfigFilesResult = $DeleteConfigFilesResult;
      return $this;
    }

}
