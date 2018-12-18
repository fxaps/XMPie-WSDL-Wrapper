<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP;

class SetCustomizations
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
     * @var ArrayOfCustomization $inCustomizations
     */
    protected $inCustomizations = null;

    /**
     * @var boolean $expressionAsValue
     */
    protected $expressionAsValue = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfCustomization $inCustomizations
     * @param boolean $expressionAsValue
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inCustomizations = null, $expressionAsValue = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inCustomizations = $inCustomizations;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomizations
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomizations
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomizations
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfCustomization
     */
    public function getInCustomizations()
    {
      return $this->inCustomizations;
    }

    /**
     * @param ArrayOfCustomization $inCustomizations
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomizations
     */
    public function setInCustomizations($inCustomizations)
    {
      $this->inCustomizations = $inCustomizations;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\ProductionServices\JobTicket_SSP\SetCustomizations
     */
    public function setExpressionAsValue($expressionAsValue)
    {
      $this->expressionAsValue = $expressionAsValue;
      return $this;
    }

}
