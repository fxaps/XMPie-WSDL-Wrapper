<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP;

class DeleteFile
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
     * @var string $inFileToken
     */
    protected $inFileToken = null;

    /**
     * @var boolean $inDeleteEmptyFolder
     */
    protected $inDeleteEmptyFolder = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFileToken
     * @param boolean $inDeleteEmptyFolder
     */
    public function __construct($inUsername = null, $inPassword = null, $inFileToken = null, $inDeleteEmptyFolder = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFileToken = $inFileToken;
      $this->inDeleteEmptyFolder = $inDeleteEmptyFolder;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFileToken()
    {
      return $this->inFileToken;
    }

    /**
     * @param string $inFileToken
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFile
     */
    public function setInFileToken($inFileToken)
    {
      $this->inFileToken = $inFileToken;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteEmptyFolder()
    {
      return $this->inDeleteEmptyFolder;
    }

    /**
     * @param boolean $inDeleteEmptyFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\TempStorage_SSP\DeleteFile
     */
    public function setInDeleteEmptyFolder($inDeleteEmptyFolder)
    {
      $this->inDeleteEmptyFolder = $inDeleteEmptyFolder;
      return $this;
    }

}
