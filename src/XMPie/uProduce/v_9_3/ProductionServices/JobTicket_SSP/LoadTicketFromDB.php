<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class LoadTicketFromDB
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
     * @var string $inTicketGuid
     */
    protected $inTicketGuid = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketGuid
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketGuid = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketGuid = $inTicketGuid;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadTicketFromDB
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadTicketFromDB
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketGuid()
    {
      return $this->inTicketGuid;
    }

    /**
     * @param string $inTicketGuid
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadTicketFromDB
     */
    public function setInTicketGuid($inTicketGuid)
    {
      $this->inTicketGuid = $inTicketGuid;
      return $this;
    }

}
