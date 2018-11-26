<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class SetEmbedEmailBody
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
     * @var boolean $inEmbed
     */
    protected $inEmbed = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param boolean $inEmbed
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inEmbed = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inEmbed = $inEmbed;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetEmbedEmailBody
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetEmbedEmailBody
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetEmbedEmailBody
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInEmbed()
    {
      return $this->inEmbed;
    }

    /**
     * @param boolean $inEmbed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\SetEmbedEmailBody
     */
    public function setInEmbed($inEmbed)
    {
      $this->inEmbed = $inEmbed;
      return $this;
    }

}
