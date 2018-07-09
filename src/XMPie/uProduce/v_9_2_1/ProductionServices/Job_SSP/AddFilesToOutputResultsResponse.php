<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP;

class AddFilesToOutputResultsResponse
{

    /**
     * @var boolean $AddFilesToOutputResultsResult
     */
    protected $AddFilesToOutputResultsResult = null;

    /**
     * @param boolean $AddFilesToOutputResultsResult
     */
    public function __construct($AddFilesToOutputResultsResult = null)
    {
      $this->AddFilesToOutputResultsResult = $AddFilesToOutputResultsResult;
    }

    /**
     * @return boolean
     */
    public function getAddFilesToOutputResultsResult()
    {
      return $this->AddFilesToOutputResultsResult;
    }

    /**
     * @param boolean $AddFilesToOutputResultsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Job_SSP\AddFilesToOutputResultsResponse
     */
    public function setAddFilesToOutputResultsResult($AddFilesToOutputResultsResult)
    {
      $this->AddFilesToOutputResultsResult = $AddFilesToOutputResultsResult;
      return $this;
    }

}
