<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class GetUMailPCThick
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
     * @var string $inPCWT
     */
    protected $inPCWT = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPCWT
     */
    public function __construct($inUsername = null, $inPassword = null, $inPCWT = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPCWT = $inPCWT;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetUMailPCThick
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetUMailPCThick
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPCWT()
    {
      return $this->inPCWT;
    }

    /**
     * @param string $inPCWT
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\GetUMailPCThick
     */
    public function setInPCWT($inPCWT)
    {
      $this->inPCWT = $inPCWT;
      return $this;
    }

}
