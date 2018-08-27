<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP;

class GetOutputResultDownloadURL
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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var int $inResultIndex
     */
    protected $inResultIndex = null;

    /**
     * @var string $inMimeType
     */
    protected $inMimeType = null;

    /**
     * @var boolean $inIsInline
     */
    protected $inIsInline = null;

    /**
     * @var string $inMacTypeHex
     */
    protected $inMacTypeHex = null;

    /**
     * @var string $inMacCreatorHex
     */
    protected $inMacCreatorHex = null;

    /**
     * @var boolean $inReturnInternalURL
     */
    protected $inReturnInternalURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param int $inResultIndex
     * @param string $inMimeType
     * @param boolean $inIsInline
     * @param string $inMacTypeHex
     * @param string $inMacCreatorHex
     * @param boolean $inReturnInternalURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inResultIndex = null, $inMimeType = null, $inIsInline = null, $inMacTypeHex = null, $inMacCreatorHex = null, $inReturnInternalURL = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
      $this->inResultIndex = $inResultIndex;
      $this->inMimeType = $inMimeType;
      $this->inIsInline = $inIsInline;
      $this->inMacTypeHex = $inMacTypeHex;
      $this->inMacCreatorHex = $inMacCreatorHex;
      $this->inReturnInternalURL = $inReturnInternalURL;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
      return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInResultIndex()
    {
      return $this->inResultIndex;
    }

    /**
     * @param int $inResultIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInResultIndex($inResultIndex)
    {
      $this->inResultIndex = $inResultIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMimeType()
    {
      return $this->inMimeType;
    }

    /**
     * @param string $inMimeType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInMimeType($inMimeType)
    {
      $this->inMimeType = $inMimeType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsInline()
    {
      return $this->inIsInline;
    }

    /**
     * @param boolean $inIsInline
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInIsInline($inIsInline)
    {
      $this->inIsInline = $inIsInline;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMacTypeHex()
    {
      return $this->inMacTypeHex;
    }

    /**
     * @param string $inMacTypeHex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInMacTypeHex($inMacTypeHex)
    {
      $this->inMacTypeHex = $inMacTypeHex;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMacCreatorHex()
    {
      return $this->inMacCreatorHex;
    }

    /**
     * @param string $inMacCreatorHex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInMacCreatorHex($inMacCreatorHex)
    {
      $this->inMacCreatorHex = $inMacCreatorHex;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInReturnInternalURL()
    {
      return $this->inReturnInternalURL;
    }

    /**
     * @param boolean $inReturnInternalURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\Job_SSP\GetOutputResultDownloadURL
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
      $this->inReturnInternalURL = $inReturnInternalURL;
      return $this;
    }

}
