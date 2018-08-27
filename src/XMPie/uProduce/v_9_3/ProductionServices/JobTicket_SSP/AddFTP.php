<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class AddFTP
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
     * @var string $inAddress
     */
    protected $inAddress = null;

    /**
     * @var int $inPort
     */
    protected $inPort = null;

    /**
     * @var string $inUser
     */
    protected $inUser = null;

    /**
     * @var string $inPassWord
     */
    protected $inPassWord = null;

    /**
     * @var boolean $inPassive
     */
    protected $inPassive = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inAddress
     * @param int $inPort
     * @param string $inUser
     * @param string $inPassWord
     * @param boolean $inPassive
     * @param boolean $inDeleteSource
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inAddress = null, $inPort = null, $inUser = null, $inPassWord = null, $inPassive = null, $inDeleteSource = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inAddress = $inAddress;
      $this->inPort = $inPort;
      $this->inUser = $inUser;
      $this->inPassWord = $inPassWord;
      $this->inPassive = $inPassive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAddress()
    {
      return $this->inAddress;
    }

    /**
     * @param string $inAddress
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInAddress($inAddress)
    {
      $this->inAddress = $inAddress;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPort()
    {
      return $this->inPort;
    }

    /**
     * @param int $inPort
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInPort($inPort)
    {
      $this->inPort = $inPort;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUser()
    {
      return $this->inUser;
    }

    /**
     * @param string $inUser
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInUser($inUser)
    {
      $this->inUser = $inUser;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassWord()
    {
      return $this->inPassWord;
    }

    /**
     * @param string $inPassWord
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInPassWord($inPassWord)
    {
      $this->inPassWord = $inPassWord;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInPassive()
    {
      return $this->inPassive;
    }

    /**
     * @param boolean $inPassive
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInPassive($inPassive)
    {
      $this->inPassive = $inPassive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\AddFTP
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
      return $this;
    }

}
