<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP;

class GetFilePath
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFileToken
     */
    public function __construct($inUsername = null, $inPassword = null, $inFileToken = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFileToken = $inFileToken;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\GetFilePath
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\GetFilePath
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\GetFilePath
     */
    public function setInFileToken($inFileToken)
    {
      $this->inFileToken = $inFileToken;
      return $this;
    }

}
