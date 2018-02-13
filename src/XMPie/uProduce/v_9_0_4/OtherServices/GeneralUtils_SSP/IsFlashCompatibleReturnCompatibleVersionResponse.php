<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class IsFlashCompatibleReturnCompatibleVersionResponse
{

    /**
     * @var boolean $IsFlashCompatibleReturnCompatibleVersionResult
     */
    protected $IsFlashCompatibleReturnCompatibleVersionResult = null;

    /**
     * @var base64Binary $outCompatibleImage
     */
    protected $outCompatibleImage = null;

    /**
     * @param boolean $IsFlashCompatibleReturnCompatibleVersionResult
     * @param base64Binary $outCompatibleImage
     */
    public function __construct($IsFlashCompatibleReturnCompatibleVersionResult = null, $outCompatibleImage = null)
    {
      $this->IsFlashCompatibleReturnCompatibleVersionResult = $IsFlashCompatibleReturnCompatibleVersionResult;
      $this->outCompatibleImage = $outCompatibleImage;
    }

    /**
     * @return boolean
     */
    public function getIsFlashCompatibleReturnCompatibleVersionResult()
    {
      return $this->IsFlashCompatibleReturnCompatibleVersionResult;
    }

    /**
     * @param boolean $IsFlashCompatibleReturnCompatibleVersionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatibleReturnCompatibleVersionResponse
     */
    public function setIsFlashCompatibleReturnCompatibleVersionResult($IsFlashCompatibleReturnCompatibleVersionResult)
    {
      $this->IsFlashCompatibleReturnCompatibleVersionResult = $IsFlashCompatibleReturnCompatibleVersionResult;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getOutCompatibleImage()
    {
      return $this->outCompatibleImage;
    }

    /**
     * @param base64Binary $outCompatibleImage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\IsFlashCompatibleReturnCompatibleVersionResponse
     */
    public function setOutCompatibleImage($outCompatibleImage)
    {
      $this->outCompatibleImage = $outCompatibleImage;
      return $this;
    }

}
