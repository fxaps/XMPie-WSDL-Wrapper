<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP;

class AddFilesToOutputResults
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
     * @var string $inSourceFolder
     */
    protected $inSourceFolder = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param string $inSourceFolder
     * @param boolean $inDeleteSource
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inSourceFolder = null, $inDeleteSource = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
      $this->inSourceFolder = $inSourceFolder;
      $this->inDeleteSource = $inDeleteSource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceFolder()
    {
      return $this->inSourceFolder;
    }

    /**
     * @param string $inSourceFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
     */
    public function setInSourceFolder($inSourceFolder)
    {
      $this->inSourceFolder = $inSourceFolder;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\Job_SSP\AddFilesToOutputResults
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
