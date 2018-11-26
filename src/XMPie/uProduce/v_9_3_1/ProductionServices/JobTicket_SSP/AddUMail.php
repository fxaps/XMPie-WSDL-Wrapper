<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class AddUMail
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
     * @var string $inTemplate
     */
    protected $inTemplate = null;

    /**
     * @var string $inPCWT
     */
    protected $inPCWT = null;

    /**
     * @var string $inPCThick
     */
    protected $inPCThick = null;

    /**
     * @var string $inOrigZip
     */
    protected $inOrigZip = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inTemplate
     * @param string $inPCWT
     * @param string $inPCThick
     * @param string $inOrigZip
     * @param boolean $inDeleteSource
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inTemplate = null, $inPCWT = null, $inPCThick = null, $inOrigZip = null, $inDeleteSource = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inTemplate = $inTemplate;
      $this->inPCWT = $inPCWT;
      $this->inPCThick = $inPCThick;
      $this->inOrigZip = $inOrigZip;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTemplate()
    {
      return $this->inTemplate;
    }

    /**
     * @param string $inTemplate
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInTemplate($inTemplate)
    {
      $this->inTemplate = $inTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPCWT()
    {
      return $this->inPCWT;
    }

    /**
     * @param string $inPCWT
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInPCWT($inPCWT)
    {
      $this->inPCWT = $inPCWT;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPCThick()
    {
      return $this->inPCThick;
    }

    /**
     * @param string $inPCThick
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInPCThick($inPCThick)
    {
      $this->inPCThick = $inPCThick;
      return $this;
    }

    /**
     * @return string
     */
    public function getInOrigZip()
    {
      return $this->inOrigZip;
    }

    /**
     * @param string $inOrigZip
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInOrigZip($inOrigZip)
    {
      $this->inOrigZip = $inOrigZip;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddUMail
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
      return $this;
    }

}
