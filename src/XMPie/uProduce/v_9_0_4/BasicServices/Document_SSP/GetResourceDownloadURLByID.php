<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetResourceDownloadURLByID
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inResourceID
     */
    protected $inResourceID = null;

    /**
     * @var boolean $inIsInline
     */
    protected $inIsInline = null;

    /**
     * @var boolean $inReturnInternalURL
     */
    protected $inReturnInternalURL = null;

    /**
     * @var boolean $inReturnFormatOnly
     */
    protected $inReturnFormatOnly = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param string $inResourceID
     * @param boolean $inIsInline
     * @param boolean $inReturnInternalURL
     * @param boolean $inReturnFormatOnly
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourceID = null, $inIsInline = null, $inReturnInternalURL = null, $inReturnFormatOnly = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourceID = $inResourceID;
      $this->inIsInline = $inIsInline;
      $this->inReturnInternalURL = $inReturnInternalURL;
      $this->inReturnFormatOnly = $inReturnFormatOnly;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceID()
    {
      return $this->inResourceID;
    }

    /**
     * @param string $inResourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInResourceID($inResourceID)
    {
      $this->inResourceID = $inResourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInIsInline($inIsInline)
    {
      $this->inIsInline = $inIsInline;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
      $this->inReturnInternalURL = $inReturnInternalURL;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInReturnFormatOnly()
    {
      return $this->inReturnFormatOnly;
    }

    /**
     * @param boolean $inReturnFormatOnly
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetResourceDownloadURLByID
     */
    public function setInReturnFormatOnly($inReturnFormatOnly)
    {
      $this->inReturnFormatOnly = $inReturnFormatOnly;
      return $this;
    }

}
