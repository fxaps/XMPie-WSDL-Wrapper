<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class RemoveMetaDataGroup
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
     * @var ArrayOfString $inGroupName
     */
    protected $inGroupName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inGroupName
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inGroupName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inGroupName = $inGroupName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveMetaDataGroup
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveMetaDataGroup
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveMetaDataGroup
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInGroupName()
    {
      return $this->inGroupName;
    }

    /**
     * @param ArrayOfString $inGroupName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\RemoveMetaDataGroup
     */
    public function setInGroupName($inGroupName)
    {
      $this->inGroupName = $inGroupName;
      return $this;
    }

}
