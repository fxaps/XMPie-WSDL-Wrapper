<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP;

class ProcessImageInAIE
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
     * @var string $inSourceImageURL
     */
    protected $inSourceImageURL = null;

    /**
     * @var string $inConfigFileName
     */
    protected $inConfigFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSourceImageURL
     * @param string $inConfigFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inSourceImageURL = null, $inConfigFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSourceImageURL = $inSourceImageURL;
      $this->inConfigFileName = $inConfigFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\ProcessImageInAIE
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\ProcessImageInAIE
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceImageURL()
    {
      return $this->inSourceImageURL;
    }

    /**
     * @param string $inSourceImageURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\ProcessImageInAIE
     */
    public function setInSourceImageURL($inSourceImageURL)
    {
      $this->inSourceImageURL = $inSourceImageURL;
      return $this;
    }

    /**
     * @return string
     */
    public function getInConfigFileName()
    {
      return $this->inConfigFileName;
    }

    /**
     * @param string $inConfigFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\OtherServices\GeneralUtils_SSP\ProcessImageInAIE
     */
    public function setInConfigFileName($inConfigFileName)
    {
      $this->inConfigFileName = $inConfigFileName;
      return $this;
    }

}
