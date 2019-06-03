<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP;

class FontInfo
{

    /**
     * @var int $m_FaceIndex
     */
    protected $m_FaceIndex = null;

    /**
     * @var int $m_FaceCount
     */
    protected $m_FaceCount = null;

    /**
     * @var string $m_Family
     */
    protected $m_Family = null;

    /**
     * @var string $m_Style
     */
    protected $m_Style = null;

    /**
     * @var string $m_WinFamily
     */
    protected $m_WinFamily = null;

    /**
     * @var string $m_WinStyle
     */
    protected $m_WinStyle = null;

    /**
     * @var string $m_MacFamily
     */
    protected $m_MacFamily = null;

    /**
     * @var string $m_MacStyle
     */
    protected $m_MacStyle = null;

    /**
     * @var int $m_StyleFlag
     */
    protected $m_StyleFlag = null;

    /**
     * @var int $m_Format
     */
    protected $m_Format = null;

    /**
     * @var string $m_PSName
     */
    protected $m_PSName = null;

    /**
     * @var string $m_WinPlatformName
     */
    protected $m_WinPlatformName = null;

    /**
     * @var string $m_MacPlatformName
     */
    protected $m_MacPlatformName = null;

    /**
     * @param int $m_FaceIndex
     * @param int $m_FaceCount
     * @param int $m_StyleFlag
     * @param int $m_Format
     */
    public function __construct($m_FaceIndex = null, $m_FaceCount = null, $m_StyleFlag = null, $m_Format = null)
    {
      $this->m_FaceIndex = $m_FaceIndex;
      $this->m_FaceCount = $m_FaceCount;
      $this->m_StyleFlag = $m_StyleFlag;
      $this->m_Format = $m_Format;
    }

    /**
     * @return int
     */
    public function getM_FaceIndex()
    {
      return $this->m_FaceIndex;
    }

    /**
     * @param int $m_FaceIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_FaceIndex($m_FaceIndex)
    {
      $this->m_FaceIndex = $m_FaceIndex;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_FaceCount()
    {
      return $this->m_FaceCount;
    }

    /**
     * @param int $m_FaceCount
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_FaceCount($m_FaceCount)
    {
      $this->m_FaceCount = $m_FaceCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Family()
    {
      return $this->m_Family;
    }

    /**
     * @param string $m_Family
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_Family($m_Family)
    {
      $this->m_Family = $m_Family;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_Style()
    {
      return $this->m_Style;
    }

    /**
     * @param string $m_Style
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_Style($m_Style)
    {
      $this->m_Style = $m_Style;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_WinFamily()
    {
      return $this->m_WinFamily;
    }

    /**
     * @param string $m_WinFamily
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_WinFamily($m_WinFamily)
    {
      $this->m_WinFamily = $m_WinFamily;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_WinStyle()
    {
      return $this->m_WinStyle;
    }

    /**
     * @param string $m_WinStyle
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_WinStyle($m_WinStyle)
    {
      $this->m_WinStyle = $m_WinStyle;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_MacFamily()
    {
      return $this->m_MacFamily;
    }

    /**
     * @param string $m_MacFamily
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_MacFamily($m_MacFamily)
    {
      $this->m_MacFamily = $m_MacFamily;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_MacStyle()
    {
      return $this->m_MacStyle;
    }

    /**
     * @param string $m_MacStyle
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_MacStyle($m_MacStyle)
    {
      $this->m_MacStyle = $m_MacStyle;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_StyleFlag()
    {
      return $this->m_StyleFlag;
    }

    /**
     * @param int $m_StyleFlag
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_StyleFlag($m_StyleFlag)
    {
      $this->m_StyleFlag = $m_StyleFlag;
      return $this;
    }

    /**
     * @return int
     */
    public function getM_Format()
    {
      return $this->m_Format;
    }

    /**
     * @param int $m_Format
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_Format($m_Format)
    {
      $this->m_Format = $m_Format;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_PSName()
    {
      return $this->m_PSName;
    }

    /**
     * @param string $m_PSName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_PSName($m_PSName)
    {
      $this->m_PSName = $m_PSName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_WinPlatformName()
    {
      return $this->m_WinPlatformName;
    }

    /**
     * @param string $m_WinPlatformName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_WinPlatformName($m_WinPlatformName)
    {
      $this->m_WinPlatformName = $m_WinPlatformName;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_MacPlatformName()
    {
      return $this->m_MacPlatformName;
    }

    /**
     * @param string $m_MacPlatformName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Font_SSP\FontInfo
     */
    public function setM_MacPlatformName($m_MacPlatformName)
    {
      $this->m_MacPlatformName = $m_MacPlatformName;
      return $this;
    }

}
