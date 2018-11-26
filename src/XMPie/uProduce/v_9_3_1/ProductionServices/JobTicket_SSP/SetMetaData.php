<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetMetaData
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
     * @var ArrayOfProperty $inProperties
     */
    protected $inProperties = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inGroupName
     * @param ArrayOfProperty $inProperties
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inGroupName = null, $inProperties = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inGroupName = $inGroupName;
      $this->inProperties = $inProperties;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetMetaData
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetMetaData
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetMetaData
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetMetaData
     */
    public function setInGroupName($inGroupName)
    {
      $this->inGroupName = $inGroupName;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProperties()
    {
      return $this->inProperties;
    }

    /**
     * @param ArrayOfProperty $inProperties
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetMetaData
     */
    public function setInProperties($inProperties)
    {
      $this->inProperties = $inProperties;
      return $this;
    }

}
