<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP;

class MergeCSVXFiles
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
     * @var ArrayOfString $inCSVXFilePaths
     */
    protected $inCSVXFilePaths = null;

    /**
     * @var string $inOutputCSVXPath
     */
    protected $inOutputCSVXPath = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inCSVXFilePaths
     * @param string $inOutputCSVXPath
     */
    public function __construct($inUsername = null, $inPassword = null, $inCSVXFilePaths = null, $inOutputCSVXPath = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCSVXFilePaths = $inCSVXFilePaths;
      $this->inOutputCSVXPath = $inOutputCSVXPath;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\MergeCSVXFiles
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\MergeCSVXFiles
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInCSVXFilePaths()
    {
      return $this->inCSVXFilePaths;
    }

    /**
     * @param ArrayOfString $inCSVXFilePaths
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\MergeCSVXFiles
     */
    public function setInCSVXFilePaths($inCSVXFilePaths)
    {
      $this->inCSVXFilePaths = $inCSVXFilePaths;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOutputCSVXPath()
    {
      return $this->inOutputCSVXPath;
    }

    /**
     * @param string $inOutputCSVXPath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Production_SSP\MergeCSVXFiles
     */
    public function setInOutputCSVXPath($inOutputCSVXPath)
    {
      $this->inOutputCSVXPath = $inOutputCSVXPath;
      return $this;
    }

}
