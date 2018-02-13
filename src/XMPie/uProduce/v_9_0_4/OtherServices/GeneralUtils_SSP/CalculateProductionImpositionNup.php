<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class CalculateProductionImpositionNup
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var float $inPageWidth
     */
    protected $inPageWidth = null;

    /**
     * @var float $inPageHeight
     */
    protected $inPageHeight = null;

    /**
     * @var float $inSheetWidth
     */
    protected $inSheetWidth = null;

    /**
     * @var float $inSheetHeight
     */
    protected $inSheetHeight = null;

    /**
     * @var float $inMarginWidth
     */
    protected $inMarginWidth = null;

    /**
     * @var float $inMarginHeight
     */
    protected $inMarginHeight = null;

    /**
     * @var float $inGapX
     */
    protected $inGapX = null;

    /**
     * @var float $inGapY
     */
    protected $inGapY = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param float $inPageWidth
     * @param float $inPageHeight
     * @param float $inSheetWidth
     * @param float $inSheetHeight
     * @param float $inMarginWidth
     * @param float $inMarginHeight
     * @param float $inGapX
     * @param float $inGapY
     */
    public function __construct($inUsername = null, $inPassword = null, $inPageWidth = null, $inPageHeight = null, $inSheetWidth = null, $inSheetHeight = null, $inMarginWidth = null, $inMarginHeight = null, $inGapX = null, $inGapY = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPageWidth = $inPageWidth;
      $this->inPageHeight = $inPageHeight;
      $this->inSheetWidth = $inSheetWidth;
      $this->inSheetHeight = $inSheetHeight;
      $this->inMarginWidth = $inMarginWidth;
      $this->inMarginHeight = $inMarginHeight;
      $this->inGapX = $inGapX;
      $this->inGapY = $inGapY;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return float
     */
    public function getInPageWidth()
    {
      return $this->inPageWidth;
    }

    /**
     * @param float $inPageWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInPageWidth($inPageWidth)
    {
      $this->inPageWidth = $inPageWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getInPageHeight()
    {
      return $this->inPageHeight;
    }

    /**
     * @param float $inPageHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInPageHeight($inPageHeight)
    {
      $this->inPageHeight = $inPageHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getInSheetWidth()
    {
      return $this->inSheetWidth;
    }

    /**
     * @param float $inSheetWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInSheetWidth($inSheetWidth)
    {
      $this->inSheetWidth = $inSheetWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getInSheetHeight()
    {
      return $this->inSheetHeight;
    }

    /**
     * @param float $inSheetHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInSheetHeight($inSheetHeight)
    {
      $this->inSheetHeight = $inSheetHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getInMarginWidth()
    {
      return $this->inMarginWidth;
    }

    /**
     * @param float $inMarginWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInMarginWidth($inMarginWidth)
    {
      $this->inMarginWidth = $inMarginWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getInMarginHeight()
    {
      return $this->inMarginHeight;
    }

    /**
     * @param float $inMarginHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInMarginHeight($inMarginHeight)
    {
      $this->inMarginHeight = $inMarginHeight;
      return $this;
    }

    /**
     * @return float
     */
    public function getInGapX()
    {
      return $this->inGapX;
    }

    /**
     * @param float $inGapX
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInGapX($inGapX)
    {
      $this->inGapX = $inGapX;
      return $this;
    }

    /**
     * @return float
     */
    public function getInGapY()
    {
      return $this->inGapY;
    }

    /**
     * @param float $inGapY
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\CalculateProductionImpositionNup
     */
    public function setInGapY($inGapY)
    {
      $this->inGapY = $inGapY;
      return $this;
    }

}
