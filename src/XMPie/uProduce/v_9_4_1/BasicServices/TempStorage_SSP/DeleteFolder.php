<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP;

class DeleteFolder
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
     * @var string $inFolderToken
     */
    protected $inFolderToken = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFolderToken
     */
    public function __construct($inUsername = null, $inPassword = null, $inFolderToken = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFolderToken = $inFolderToken;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\DeleteFolder
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\DeleteFolder
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFolderToken()
    {
      return $this->inFolderToken;
    }

    /**
     * @param string $inFolderToken
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\DeleteFolder
     */
    public function setInFolderToken($inFolderToken)
    {
      $this->inFolderToken = $inFolderToken;
      return $this;
    }

}
