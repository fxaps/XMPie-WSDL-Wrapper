<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP;

class CreateNewFromFile
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inDocumentPath
     */
    protected $inDocumentPath = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @var boolean $inDeleteEmptySourceFolder
     */
    protected $inDeleteEmptySourceFolder = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inDocumentPath
     * @param string $inName
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inDocumentPath = null, $inName = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inDocumentPath = $inDocumentPath;
      $this->inName = $inName;
      $this->inDeleteSource = $inDeleteSource;
      $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentPath()
    {
      return $this->inDocumentPath;
    }

    /**
     * @param string $inDocumentPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInDocumentPath($inDocumentPath)
    {
      $this->inDocumentPath = $inDocumentPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
      return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteEmptySourceFolder()
    {
      return $this->inDeleteEmptySourceFolder;
    }

    /**
     * @param boolean $inDeleteEmptySourceFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInDeleteEmptySourceFolder($inDeleteEmptySourceFolder)
    {
      $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Document_SSP\CreateNewFromFile
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
