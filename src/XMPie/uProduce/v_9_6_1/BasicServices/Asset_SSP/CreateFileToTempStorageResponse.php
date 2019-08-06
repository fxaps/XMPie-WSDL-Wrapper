<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP;

class CreateFileToTempStorageResponse
{

    /**
     * @var string $CreateFileToTempStorageResult
     */
    protected $CreateFileToTempStorageResult = null;

    /**
     * @param string $CreateFileToTempStorageResult
     */
    public function __construct($CreateFileToTempStorageResult = null)
    {
      $this->CreateFileToTempStorageResult = $CreateFileToTempStorageResult;
    }

    /**
     * @return string
     */
    public function getCreateFileToTempStorageResult()
    {
      return $this->CreateFileToTempStorageResult;
    }

    /**
     * @param string $CreateFileToTempStorageResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\Asset_SSP\CreateFileToTempStorageResponse
     */
    public function setCreateFileToTempStorageResult($CreateFileToTempStorageResult)
    {
      $this->CreateFileToTempStorageResult = $CreateFileToTempStorageResult;
      return $this;
    }

}
