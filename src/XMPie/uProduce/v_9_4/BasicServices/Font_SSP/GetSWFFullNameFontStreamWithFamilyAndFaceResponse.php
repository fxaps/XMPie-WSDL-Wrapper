<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP;

class GetSWFFullNameFontStreamWithFamilyAndFaceResponse
{

    /**
     * @var base64Binary $GetSWFFullNameFontStreamWithFamilyAndFaceResult
     */
    protected $GetSWFFullNameFontStreamWithFamilyAndFaceResult = null;

    /**
     * @var string $outFamilyName
     */
    protected $outFamilyName = null;

    /**
     * @var string $outFontFace
     */
    protected $outFontFace = null;

    /**
     * @param base64Binary $GetSWFFullNameFontStreamWithFamilyAndFaceResult
     * @param string $outFamilyName
     * @param string $outFontFace
     */
    public function __construct($GetSWFFullNameFontStreamWithFamilyAndFaceResult = null, $outFamilyName = null, $outFontFace = null)
    {
      $this->GetSWFFullNameFontStreamWithFamilyAndFaceResult = $GetSWFFullNameFontStreamWithFamilyAndFaceResult;
      $this->outFamilyName = $outFamilyName;
      $this->outFontFace = $outFontFace;
    }

    /**
     * @return base64Binary
     */
    public function getGetSWFFullNameFontStreamWithFamilyAndFaceResult()
    {
      return $this->GetSWFFullNameFontStreamWithFamilyAndFaceResult;
    }

    /**
     * @param base64Binary $GetSWFFullNameFontStreamWithFamilyAndFaceResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFaceResponse
     */
    public function setGetSWFFullNameFontStreamWithFamilyAndFaceResult($GetSWFFullNameFontStreamWithFamilyAndFaceResult)
    {
      $this->GetSWFFullNameFontStreamWithFamilyAndFaceResult = $GetSWFFullNameFontStreamWithFamilyAndFaceResult;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutFamilyName()
    {
      return $this->outFamilyName;
    }

    /**
     * @param string $outFamilyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFaceResponse
     */
    public function setOutFamilyName($outFamilyName)
    {
      $this->outFamilyName = $outFamilyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getOutFontFace()
    {
      return $this->outFontFace;
    }

    /**
     * @param string $outFontFace
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Font_SSP\GetSWFFullNameFontStreamWithFamilyAndFaceResponse
     */
    public function setOutFontFace($outFontFace)
    {
      $this->outFontFace = $outFontFace;
      return $this;
    }

}
