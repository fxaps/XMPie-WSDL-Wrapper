<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP;

class SetRI
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
     * @var RecipientsInfo $inRIInfo
     */
    protected $inRIInfo = null;

    /**
     * @var Connection $inConnection
     */
    protected $inConnection = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param RecipientsInfo $inRIInfo
     * @param Connection $inConnection
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRIInfo = null, $inConnection = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inRIInfo = $inRIInfo;
      $this->inConnection = $inConnection;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetRI
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetRI
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetRI
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return RecipientsInfo
     */
    public function getInRIInfo()
    {
      return $this->inRIInfo;
    }

    /**
     * @param RecipientsInfo $inRIInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetRI
     */
    public function setInRIInfo($inRIInfo)
    {
      $this->inRIInfo = $inRIInfo;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnection()
    {
      return $this->inConnection;
    }

    /**
     * @param Connection $inConnection
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\ProductionServices\JobTicket_SSP\SetRI
     */
    public function setInConnection($inConnection)
    {
      $this->inConnection = $inConnection;
      return $this;
    }

}
