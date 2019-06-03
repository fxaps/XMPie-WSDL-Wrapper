<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class GetUMailOrigZip
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
     * @var string $inOrigZip
     */
    protected $inOrigZip = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inOrigZip
     */
    public function __construct($inUsername = null, $inPassword = null, $inOrigZip = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inOrigZip = $inOrigZip;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetUMailOrigZip
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetUMailOrigZip
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrigZip()
    {
      return $this->inOrigZip;
    }

    /**
     * @param string $inOrigZip
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\GetUMailOrigZip
     */
    public function setInOrigZip($inOrigZip)
    {
      $this->inOrigZip = $inOrigZip;
      return $this;
    }

}
