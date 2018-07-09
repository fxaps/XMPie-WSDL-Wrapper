<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP;

class FontSizeInfo
{

    /**
     * @var float $size
     */
    protected $size = null;

    /**
     * @var float $ascender
     */
    protected $ascender = null;

    /**
     * @var float $descender
     */
    protected $descender = null;

    /**
     * @var float $winAscender
     */
    protected $winAscender = null;

    /**
     * @var float $winDescender
     */
    protected $winDescender = null;

    /**
     * @var float $gap
     */
    protected $gap = null;

    /**
     * @var float $height
     */
    protected $height = null;

    /**
     * @var float $underline_position
     */
    protected $underline_position = null;

    /**
     * @var float $underline_thickness
     */
    protected $underline_thickness = null;

    /**
     * @var float $strikeout_position
     */
    protected $strikeout_position = null;

    /**
     * @var float $strikeout_thickness
     */
    protected $strikeout_thickness = null;

    /**
     * @param float $size
     * @param float $ascender
     * @param float $descender
     * @param float $winAscender
     * @param float $winDescender
     * @param float $gap
     * @param float $height
     * @param float $underline_position
     * @param float $underline_thickness
     * @param float $strikeout_position
     * @param float $strikeout_thickness
     */
    public function __construct($size = null, $ascender = null, $descender = null, $winAscender = null, $winDescender = null, $gap = null, $height = null, $underline_position = null, $underline_thickness = null, $strikeout_position = null, $strikeout_thickness = null)
    {
      $this->size = $size;
      $this->ascender = $ascender;
      $this->descender = $descender;
      $this->winAscender = $winAscender;
      $this->winDescender = $winDescender;
      $this->gap = $gap;
      $this->height = $height;
      $this->underline_position = $underline_position;
      $this->underline_thickness = $underline_thickness;
      $this->strikeout_position = $strikeout_position;
      $this->strikeout_thickness = $strikeout_thickness;
    }

    /**
     * @return float
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param float $size
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return float
     */
    public function getAscender()
    {
      return $this->ascender;
    }

    /**
     * @param float $ascender
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setAscender($ascender)
    {
      $this->ascender = $ascender;
      return $this;
    }

    /**
     * @return float
     */
    public function getDescender()
    {
      return $this->descender;
    }

    /**
     * @param float $descender
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setDescender($descender)
    {
      $this->descender = $descender;
      return $this;
    }

    /**
     * @return float
     */
    public function getWinAscender()
    {
      return $this->winAscender;
    }

    /**
     * @param float $winAscender
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setWinAscender($winAscender)
    {
      $this->winAscender = $winAscender;
      return $this;
    }

    /**
     * @return float
     */
    public function getWinDescender()
    {
      return $this->winDescender;
    }

    /**
     * @param float $winDescender
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setWinDescender($winDescender)
    {
      $this->winDescender = $winDescender;
      return $this;
    }

    /**
     * @return float
     */
    public function getGap()
    {
      return $this->gap;
    }

    /**
     * @param float $gap
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setGap($gap)
    {
      $this->gap = $gap;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param float $height
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnderline_position()
    {
      return $this->underline_position;
    }

    /**
     * @param float $underline_position
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setUnderline_position($underline_position)
    {
      $this->underline_position = $underline_position;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnderline_thickness()
    {
      return $this->underline_thickness;
    }

    /**
     * @param float $underline_thickness
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setUnderline_thickness($underline_thickness)
    {
      $this->underline_thickness = $underline_thickness;
      return $this;
    }

    /**
     * @return float
     */
    public function getStrikeout_position()
    {
      return $this->strikeout_position;
    }

    /**
     * @param float $strikeout_position
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setStrikeout_position($strikeout_position)
    {
      $this->strikeout_position = $strikeout_position;
      return $this;
    }

    /**
     * @return float
     */
    public function getStrikeout_thickness()
    {
      return $this->strikeout_thickness;
    }

    /**
     * @param float $strikeout_thickness
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Font_SSP\FontSizeInfo
     */
    public function setStrikeout_thickness($strikeout_thickness)
    {
      $this->strikeout_thickness = $strikeout_thickness;
      return $this;
    }

}
