<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetAssetsPrefix
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
     * @var string $inPrefixType
     */
    protected $inPrefixType = null;

    /**
     * @var string $inFiexedPrefix
     */
    protected $inFiexedPrefix = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inPrefixType
     * @param string $inFiexedPrefix
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inPrefixType = null, $inFiexedPrefix = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inPrefixType = $inPrefixType;
      $this->inFiexedPrefix = $inFiexedPrefix;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetsPrefix
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetsPrefix
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetsPrefix
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPrefixType()
    {
      return $this->inPrefixType;
    }

    /**
     * @param string $inPrefixType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetsPrefix
     */
    public function setInPrefixType($inPrefixType)
    {
      $this->inPrefixType = $inPrefixType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFiexedPrefix()
    {
      return $this->inFiexedPrefix;
    }

    /**
     * @param string $inFiexedPrefix
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetAssetsPrefix
     */
    public function setInFiexedPrefix($inFiexedPrefix)
    {
      $this->inFiexedPrefix = $inFiexedPrefix;
      return $this;
    }

}
