<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetEmailHeader
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
     * @var EmailHeaderInfo $inEmailHeaderInfo
     */
    protected $inEmailHeaderInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param EmailHeaderInfo $inEmailHeaderInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inEmailHeaderInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inEmailHeaderInfo = $inEmailHeaderInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEmailHeader
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEmailHeader
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEmailHeader
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return EmailHeaderInfo
     */
    public function getInEmailHeaderInfo()
    {
      return $this->inEmailHeaderInfo;
    }

    /**
     * @param EmailHeaderInfo $inEmailHeaderInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetEmailHeader
     */
    public function setInEmailHeaderInfo($inEmailHeaderInfo)
    {
      $this->inEmailHeaderInfo = $inEmailHeaderInfo;
      return $this;
    }

}
