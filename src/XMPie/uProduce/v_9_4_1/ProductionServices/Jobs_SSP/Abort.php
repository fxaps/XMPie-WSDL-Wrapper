<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP;

class Abort
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
     * @var ArrayOfString $inJobIDArray
     */
    protected $inJobIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inJobIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobIDArray = $inJobIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Abort
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Abort
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInJobIDArray()
    {
      return $this->inJobIDArray;
    }

    /**
     * @param ArrayOfString $inJobIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\Jobs_SSP\Abort
     */
    public function setInJobIDArray($inJobIDArray)
    {
      $this->inJobIDArray = $inJobIDArray;
      return $this;
    }

}
