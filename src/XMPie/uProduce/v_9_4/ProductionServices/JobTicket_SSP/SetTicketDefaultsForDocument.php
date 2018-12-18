<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForDocument
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inRITableName
     */
    protected $inRITableName = null;

    /**
     * @var boolean $inFlatOriented
     */
    protected $inFlatOriented = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDocumentID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDocumentID = null, $inRITableName = null, $inFlatOriented = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inDocumentID = $inDocumentID;
      $this->inRITableName = $inRITableName;
      $this->inFlatOriented = $inFlatOriented;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRITableName()
    {
      return $this->inRITableName;
    }

    /**
     * @param string $inRITableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
     */
    public function setInRITableName($inRITableName)
    {
      $this->inRITableName = $inRITableName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFlatOriented()
    {
      return $this->inFlatOriented;
    }

    /**
     * @param boolean $inFlatOriented
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetTicketDefaultsForDocument
     */
    public function setInFlatOriented($inFlatOriented)
    {
      $this->inFlatOriented = $inFlatOriented;
      return $this;
    }

}
