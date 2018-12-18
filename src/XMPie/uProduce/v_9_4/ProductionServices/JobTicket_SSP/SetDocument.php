<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetDocument
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
     * @var string $inDocumentFolder
     */
    protected $inDocumentFolder = null;

    /**
     * @var string $inDocumentName
     */
    protected $inDocumentName = null;

    /**
     * @var string $inDocumentType
     */
    protected $inDocumentType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDocumentFolder
     * @param string $inDocumentName
     * @param string $inDocumentType
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDocumentFolder = null, $inDocumentName = null, $inDocumentType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inDocumentFolder = $inDocumentFolder;
      $this->inDocumentName = $inDocumentName;
      $this->inDocumentType = $inDocumentType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentFolder()
    {
      return $this->inDocumentFolder;
    }

    /**
     * @param string $inDocumentFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
     */
    public function setInDocumentFolder($inDocumentFolder)
    {
      $this->inDocumentFolder = $inDocumentFolder;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentName()
    {
      return $this->inDocumentName;
    }

    /**
     * @param string $inDocumentName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
     */
    public function setInDocumentName($inDocumentName)
    {
      $this->inDocumentName = $inDocumentName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentType()
    {
      return $this->inDocumentType;
    }

    /**
     * @param string $inDocumentType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetDocument
     */
    public function setInDocumentType($inDocumentType)
    {
      $this->inDocumentType = $inDocumentType;
      return $this;
    }

}
