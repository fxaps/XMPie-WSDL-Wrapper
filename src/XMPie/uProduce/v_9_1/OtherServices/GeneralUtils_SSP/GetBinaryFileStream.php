<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP;

class GetBinaryFileStream
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
     * @var string $inFilePath
     */
    protected $inFilePath = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFilePath
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilePath = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFilePath = $inFilePath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetBinaryFileStream
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetBinaryFileStream
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFilePath()
    {
      return $this->inFilePath;
    }

    /**
     * @param string $inFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\OtherServices\GeneralUtils_SSP\GetBinaryFileStream
     */
    public function setInFilePath($inFilePath)
    {
      $this->inFilePath = $inFilePath;
      return $this;
    }

}
