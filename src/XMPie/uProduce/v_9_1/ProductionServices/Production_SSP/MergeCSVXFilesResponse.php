<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP;

class MergeCSVXFilesResponse
{

    /**
     * @var boolean $MergeCSVXFilesResult
     */
    protected $MergeCSVXFilesResult = null;

    /**
     * @param boolean $MergeCSVXFilesResult
     */
    public function __construct($MergeCSVXFilesResult = null)
    {
      $this->MergeCSVXFilesResult = $MergeCSVXFilesResult;
    }

    /**
     * @return boolean
     */
    public function getMergeCSVXFilesResult()
    {
      return $this->MergeCSVXFilesResult;
    }

    /**
     * @param boolean $MergeCSVXFilesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\MergeCSVXFilesResponse
     */
    public function setMergeCSVXFilesResult($MergeCSVXFilesResult)
    {
      $this->MergeCSVXFilesResult = $MergeCSVXFilesResult;
      return $this;
    }

}
