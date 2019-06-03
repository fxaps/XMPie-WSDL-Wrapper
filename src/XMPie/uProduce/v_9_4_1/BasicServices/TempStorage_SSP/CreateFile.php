<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP;

class CreateFile
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
     * @var string $inFileName
     */
    protected $inFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFileName = $inFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\CreateFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\CreateFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFileName()
    {
      return $this->inFileName;
    }

    /**
     * @param string $inFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\TempStorage_SSP\CreateFile
     */
    public function setInFileName($inFileName)
    {
      $this->inFileName = $inFileName;
      return $this;
    }

}
