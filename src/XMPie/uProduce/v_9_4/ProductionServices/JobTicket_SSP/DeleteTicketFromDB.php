<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class DeleteTicketFromDB
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
     * @var string $inTicketGUID
     */
    protected $inTicketGUID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketGUID
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketGUID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketGUID = $inTicketGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\DeleteTicketFromDB
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\DeleteTicketFromDB
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketGUID()
    {
      return $this->inTicketGUID;
    }

    /**
     * @param string $inTicketGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\DeleteTicketFromDB
     */
    public function setInTicketGUID($inTicketGUID)
    {
      $this->inTicketGUID = $inTicketGUID;
      return $this;
    }

}
