<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Jobs_SSP;

class GetJobType
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
     * @var string $inJobType
     */
    protected $inJobType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobType
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobType = $inJobType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Jobs_SSP\GetJobType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Jobs_SSP\GetJobType
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobType()
    {
      return $this->inJobType;
    }

    /**
     * @param string $inJobType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\Jobs_SSP\GetJobType
     */
    public function setInJobType($inJobType)
    {
      $this->inJobType = $inJobType;
      return $this;
    }

}
