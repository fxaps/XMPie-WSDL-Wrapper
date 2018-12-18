<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetCustomization
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
     * @var Customization $inCustomization
     */
    protected $inCustomization = null;

    /**
     * @var boolean $expressionAsValue
     */
    protected $expressionAsValue = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param Customization $inCustomization
     * @param boolean $expressionAsValue
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inCustomization = null, $expressionAsValue = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inCustomization = $inCustomization;
      $this->expressionAsValue = $expressionAsValue;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomization
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomization
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomization
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return Customization
     */
    public function getInCustomization()
    {
      return $this->inCustomization;
    }

    /**
     * @param Customization $inCustomization
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomization
     */
    public function setInCustomization($inCustomization)
    {
      $this->inCustomization = $inCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getExpressionAsValue()
    {
      return $this->expressionAsValue;
    }

    /**
     * @param boolean $expressionAsValue
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomization
     */
    public function setExpressionAsValue($expressionAsValue)
    {
      $this->expressionAsValue = $expressionAsValue;
      return $this;
    }

}
