<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP;

class CalluProduceAPIViaXmlFile
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
     * @var string $inPath
     */
    protected $inPath = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPath
     */
    public function __construct($inUsername = null, $inPassword = null, $inPath = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPath = $inPath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPath()
    {
      return $this->inPath;
    }

    /**
     * @param string $inPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\GeneralUtils_SSP\CalluProduceAPIViaXmlFile
     */
    public function setInPath($inPath)
    {
      $this->inPath = $inPath;
      return $this;
    }

}
