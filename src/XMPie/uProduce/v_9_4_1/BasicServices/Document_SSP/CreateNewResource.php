<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP;

class CreateNewResource
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
     * @var string $inResourcePath
     */
    protected $inResourcePath = null;

    /**
     * @var boolean $inOverwriteIfExist
     */
    protected $inOverwriteIfExist = null;

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
     * @param string $inDocumentID
     * @param string $inResourcePath
     * @param boolean $inOverwriteIfExist
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourcePath = null, $inOverwriteIfExist = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourcePath = $inResourcePath;
      $this->inOverwriteIfExist = $inOverwriteIfExist;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourcePath()
    {
      return $this->inResourcePath;
    }

    /**
     * @param string $inResourcePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
     */
    public function setInResourcePath($inResourcePath)
    {
      $this->inResourcePath = $inResourcePath;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInOverwriteIfExist()
    {
      return $this->inOverwriteIfExist;
    }

    /**
     * @param boolean $inOverwriteIfExist
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
     */
    public function setInOverwriteIfExist($inOverwriteIfExist)
    {
      $this->inOverwriteIfExist = $inOverwriteIfExist;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\Document_SSP\CreateNewResource
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
