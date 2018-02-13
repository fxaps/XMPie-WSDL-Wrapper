<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP;

class SetEmailBodiesByIDs
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
     * @var ArrayOfString $inDocumentIDs
     */
    protected $inDocumentIDs = null;

    /**
     * @var ArrayOfEmailBodyOptions $inBodyOptionsArray
     */
    protected $inBodyOptionsArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inDocumentIDs
     * @param ArrayOfEmailBodyOptions $inBodyOptionsArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDocumentIDs = null, $inBodyOptionsArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inDocumentIDs = $inDocumentIDs;
      $this->inBodyOptionsArray = $inBodyOptionsArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDs
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInDocumentIDs()
    {
      return $this->inDocumentIDs;
    }

    /**
     * @param ArrayOfString $inDocumentIDs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDs
     */
    public function setInDocumentIDs($inDocumentIDs)
    {
      $this->inDocumentIDs = $inDocumentIDs;
      return $this;
    }

    /**
     * @return ArrayOfEmailBodyOptions
     */
    public function getInBodyOptionsArray()
    {
      return $this->inBodyOptionsArray;
    }

    /**
     * @param ArrayOfEmailBodyOptions $inBodyOptionsArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\ProductionServices\JobTicket_SSP\SetEmailBodiesByIDs
     */
    public function setInBodyOptionsArray($inBodyOptionsArray)
    {
      $this->inBodyOptionsArray = $inBodyOptionsArray;
      return $this;
    }

}
