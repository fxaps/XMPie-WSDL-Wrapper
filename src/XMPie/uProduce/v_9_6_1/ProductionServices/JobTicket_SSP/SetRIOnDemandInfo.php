<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetRIOnDemandInfo
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
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @var string $inRecipientInfo
     */
    protected $inRecipientInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inRecipientID
     * @param string $inRecipientInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRecipientID = null, $inRecipientInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inRecipientID = $inRecipientID;
      $this->inRecipientInfo = $inRecipientInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfo
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfo
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientInfo()
    {
      return $this->inRecipientInfo;
    }

    /**
     * @param string $inRecipientInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetRIOnDemandInfo
     */
    public function setInRecipientInfo($inRecipientInfo)
    {
      $this->inRecipientInfo = $inRecipientInfo;
      return $this;
    }

}
