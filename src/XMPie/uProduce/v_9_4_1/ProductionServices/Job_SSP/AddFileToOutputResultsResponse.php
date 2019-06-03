<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP;

class AddFileToOutputResultsResponse
{

    /**
     * @var boolean $AddFileToOutputResultsResult
     */
    protected $AddFileToOutputResultsResult = null;

    /**
     * @param boolean $AddFileToOutputResultsResult
     */
    public function __construct($AddFileToOutputResultsResult = null)
    {
      $this->AddFileToOutputResultsResult = $AddFileToOutputResultsResult;
    }

    /**
     * @return boolean
     */
    public function getAddFileToOutputResultsResult()
    {
      return $this->AddFileToOutputResultsResult;
    }

    /**
     * @param boolean $AddFileToOutputResultsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Job_SSP\AddFileToOutputResultsResponse
     */
    public function setAddFileToOutputResultsResult($AddFileToOutputResultsResult)
    {
      $this->AddFileToOutputResultsResult = $AddFileToOutputResultsResult;
      return $this;
    }

}
