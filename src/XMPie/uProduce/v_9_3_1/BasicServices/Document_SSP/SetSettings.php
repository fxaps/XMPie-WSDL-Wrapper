<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP;

class SetSettings
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
     * @var ArrayOfSetting $inSettings
     */
    protected $inSettings = null;

    /**
     * @var boolean $inSharedForAllUsers
     */
    protected $inSharedForAllUsers = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param ArrayOfSetting $inSettings
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inSettings = null, $inSharedForAllUsers = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inSettings = $inSettings;
      $this->inSharedForAllUsers = $inSharedForAllUsers;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\SetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\SetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\SetSettings
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return ArrayOfSetting
     */
    public function getInSettings()
    {
      return $this->inSettings;
    }

    /**
     * @param ArrayOfSetting $inSettings
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\SetSettings
     */
    public function setInSettings($inSettings)
    {
      $this->inSettings = $inSettings;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInSharedForAllUsers()
    {
      return $this->inSharedForAllUsers;
    }

    /**
     * @param boolean $inSharedForAllUsers
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Document_SSP\SetSettings
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
      $this->inSharedForAllUsers = $inSharedForAllUsers;
      return $this;
    }

}
