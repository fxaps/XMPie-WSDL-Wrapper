<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class CreateThumbnailToTempStorageResponse
{

    /**
     * @var string $CreateThumbnailToTempStorageResult
     */
    protected $CreateThumbnailToTempStorageResult = null;

    /**
     * @param string $CreateThumbnailToTempStorageResult
     */
    public function __construct($CreateThumbnailToTempStorageResult = null)
    {
      $this->CreateThumbnailToTempStorageResult = $CreateThumbnailToTempStorageResult;
    }

    /**
     * @return string
     */
    public function getCreateThumbnailToTempStorageResult()
    {
      return $this->CreateThumbnailToTempStorageResult;
    }

    /**
     * @param string $CreateThumbnailToTempStorageResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\CreateThumbnailToTempStorageResponse
     */
    public function setCreateThumbnailToTempStorageResult($CreateThumbnailToTempStorageResult)
    {
      $this->CreateThumbnailToTempStorageResult = $CreateThumbnailToTempStorageResult;
      return $this;
    }

}
