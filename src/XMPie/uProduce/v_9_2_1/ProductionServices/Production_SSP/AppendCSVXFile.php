<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP;

class AppendCSVXFile
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
     * @var string $inMainCSVXFilePath
     */
    protected $inMainCSVXFilePath = null;

    /**
     * @var string $inSecondaryCSVXFilePath
     */
    protected $inSecondaryCSVXFilePath = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMainCSVXFilePath
     * @param string $inSecondaryCSVXFilePath
     */
    public function __construct($inUsername = null, $inPassword = null, $inMainCSVXFilePath = null, $inSecondaryCSVXFilePath = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMainCSVXFilePath = $inMainCSVXFilePath;
      $this->inSecondaryCSVXFilePath = $inSecondaryCSVXFilePath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMainCSVXFilePath()
    {
      return $this->inMainCSVXFilePath;
    }

    /**
     * @param string $inMainCSVXFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile
     */
    public function setInMainCSVXFilePath($inMainCSVXFilePath)
    {
      $this->inMainCSVXFilePath = $inMainCSVXFilePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSecondaryCSVXFilePath()
    {
      return $this->inSecondaryCSVXFilePath;
    }

    /**
     * @param string $inSecondaryCSVXFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\Production_SSP\AppendCSVXFile
     */
    public function setInSecondaryCSVXFilePath($inSecondaryCSVXFilePath)
    {
      $this->inSecondaryCSVXFilePath = $inSecondaryCSVXFilePath;
      return $this;
    }

}
