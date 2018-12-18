<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class AddDestinationByID
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
     * @var string $inDestinationID
     */
    protected $inDestinationID = null;

    /**
     * @var string $inDestinationParam
     */
    protected $inDestinationParam = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDestinationID
     * @param string $inDestinationParam
     * @param boolean $inDeleteSource
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDestinationID = null, $inDestinationParam = null, $inDeleteSource = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inDestinationID = $inDestinationID;
      $this->inDestinationParam = $inDestinationParam;
      $this->inDeleteSource = $inDeleteSource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationID()
    {
      return $this->inDestinationID;
    }

    /**
     * @param string $inDestinationID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
     */
    public function setInDestinationID($inDestinationID)
    {
      $this->inDestinationID = $inDestinationID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationParam()
    {
      return $this->inDestinationParam;
    }

    /**
     * @param string $inDestinationParam
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
     */
    public function setInDestinationParam($inDestinationParam)
    {
      $this->inDestinationParam = $inDestinationParam;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
      return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\AddDestinationByID
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
      return $this;
    }

}
