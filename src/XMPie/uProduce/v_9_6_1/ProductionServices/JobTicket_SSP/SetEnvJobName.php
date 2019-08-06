<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetEnvJobName
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inEnvJobName
     */
    protected $inEnvJobName = null;

    /**
     * @var boolean $inIsDefaultCacheEnv
     */
    protected $inIsDefaultCacheEnv = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inEnvJobName
     * @param boolean $inIsDefaultCacheEnv
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inEnvJobName = null, $inIsDefaultCacheEnv = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inEnvJobName = $inEnvJobName;
      $this->inIsDefaultCacheEnv = $inIsDefaultCacheEnv;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEnvJobName
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEnvJobName
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
      return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEnvJobName
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEnvJobName()
    {
      return $this->inEnvJobName;
    }

    /**
     * @param string $inEnvJobName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEnvJobName
     */
    public function setInEnvJobName($inEnvJobName)
    {
      $this->inEnvJobName = $inEnvJobName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsDefaultCacheEnv()
    {
      return $this->inIsDefaultCacheEnv;
    }

    /**
     * @param boolean $inIsDefaultCacheEnv
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEnvJobName
     */
    public function setInIsDefaultCacheEnv($inIsDefaultCacheEnv)
    {
      $this->inIsDefaultCacheEnv = $inIsDefaultCacheEnv;
      return $this;
    }

}
