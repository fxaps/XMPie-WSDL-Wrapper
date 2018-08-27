<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetRIs
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
     * @var ArrayOfRecipientsInfo $inRIInfos
     */
    protected $inRIInfos = null;

    /**
     * @var ArrayOfConnection $inConnections
     */
    protected $inConnections = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfRecipientsInfo $inRIInfos
     * @param ArrayOfConnection $inConnections
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRIInfos = null, $inConnections = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inRIInfos = $inRIInfos;
      $this->inConnections = $inConnections;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIs
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfRecipientsInfo
     */
    public function getInRIInfos()
    {
      return $this->inRIInfos;
    }

    /**
     * @param ArrayOfRecipientsInfo $inRIInfos
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIs
     */
    public function setInRIInfos($inRIInfos)
    {
      $this->inRIInfos = $inRIInfos;
      return $this;
    }

    /**
     * @return ArrayOfConnection
     */
    public function getInConnections()
    {
      return $this->inConnections;
    }

    /**
     * @param ArrayOfConnection $inConnections
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIs
     */
    public function setInConnections($inConnections)
    {
      $this->inConnections = $inConnections;
      return $this;
    }

}
