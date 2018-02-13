<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP;

class GetSettings
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
     * @var ArrayOfString $inSettingsNames
     */
    protected $inSettingsNames = null;

    /**
     * @var boolean $inIncludeInheritable
     */
    protected $inIncludeInheritable = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inIncludeInheritable
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inSettingsNames = null, $inIncludeInheritable = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inSettingsNames = $inSettingsNames;
      $this->inIncludeInheritable = $inIncludeInheritable;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetSettings
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSettingsNames()
    {
      return $this->inSettingsNames;
    }

    /**
     * @param ArrayOfString $inSettingsNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetSettings
     */
    public function setInSettingsNames($inSettingsNames)
    {
      $this->inSettingsNames = $inSettingsNames;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeInheritable()
    {
      return $this->inIncludeInheritable;
    }

    /**
     * @param boolean $inIncludeInheritable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Document_SSP\GetSettings
     */
    public function setInIncludeInheritable($inIncludeInheritable)
    {
      $this->inIncludeInheritable = $inIncludeInheritable;
      return $this;
    }

}
