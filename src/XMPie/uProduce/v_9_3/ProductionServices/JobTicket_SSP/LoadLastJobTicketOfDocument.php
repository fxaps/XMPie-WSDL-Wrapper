<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class LoadLastJobTicketOfDocument
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var boolean $inIncludeDeleted
     */
    protected $inIncludeDeleted = null;

    /**
     * @var boolean $inIncludeFailed
     */
    protected $inIncludeFailed = null;

    /**
     * @var string $inJobType
     */
    protected $inJobType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param boolean $inIncludeDeleted
     * @param boolean $inIncludeFailed
     * @param string $inJobType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inIncludeDeleted = null, $inIncludeFailed = null, $inJobType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inIncludeDeleted = $inIncludeDeleted;
      $this->inIncludeFailed = $inIncludeFailed;
      $this->inJobType = $inJobType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeDeleted()
    {
      return $this->inIncludeDeleted;
    }

    /**
     * @param boolean $inIncludeDeleted
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
     */
    public function setInIncludeDeleted($inIncludeDeleted)
    {
      $this->inIncludeDeleted = $inIncludeDeleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeFailed()
    {
      return $this->inIncludeFailed;
    }

    /**
     * @param boolean $inIncludeFailed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
     */
    public function setInIncludeFailed($inIncludeFailed)
    {
      $this->inIncludeFailed = $inIncludeFailed;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobType()
    {
      return $this->inJobType;
    }

    /**
     * @param string $inJobType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\LoadLastJobTicketOfDocument
     */
    public function setInJobType($inJobType)
    {
      $this->inJobType = $inJobType;
      return $this;
    }

}
