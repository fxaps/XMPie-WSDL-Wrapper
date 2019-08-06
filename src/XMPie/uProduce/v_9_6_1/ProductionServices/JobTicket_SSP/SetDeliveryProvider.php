<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP;

class SetDeliveryProvider
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
     * @var EmailProviderInfo $inDeliveryProviderInfo
     */
    protected $inDeliveryProviderInfo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param EmailProviderInfo $inDeliveryProviderInfo
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDeliveryProviderInfo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetDeliveryProvider
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetDeliveryProvider
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetDeliveryProvider
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return EmailProviderInfo
     */
    public function getInDeliveryProviderInfo()
    {
      return $this->inDeliveryProviderInfo;
    }

    /**
     * @param EmailProviderInfo $inDeliveryProviderInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\JobTicket_SSP\SetDeliveryProvider
     */
    public function setInDeliveryProviderInfo($inDeliveryProviderInfo)
    {
      $this->inDeliveryProviderInfo = $inDeliveryProviderInfo;
      return $this;
    }

}
