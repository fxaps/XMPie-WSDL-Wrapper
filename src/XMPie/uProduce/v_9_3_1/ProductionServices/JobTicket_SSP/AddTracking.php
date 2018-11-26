<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP;

class AddTracking
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
     * @var boolean $inTrackADORValues
     */
    protected $inTrackADORValues = null;

    /**
     * @var ArrayOfParameter $inParams
     */
    protected $inParams = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param boolean $inTrackADORValues
     * @param ArrayOfParameter $inParams
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inTrackADORValues = null, $inParams = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inTrackADORValues = $inTrackADORValues;
      $this->inParams = $inParams;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddTracking
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddTracking
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddTracking
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInTrackADORValues()
    {
      return $this->inTrackADORValues;
    }

    /**
     * @param boolean $inTrackADORValues
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddTracking
     */
    public function setInTrackADORValues($inTrackADORValues)
    {
      $this->inTrackADORValues = $inTrackADORValues;
      return $this;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getInParams()
    {
      return $this->inParams;
    }

    /**
     * @param ArrayOfParameter $inParams
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\JobTicket_SSP\AddTracking
     */
    public function setInParams($inParams)
    {
      $this->inParams = $inParams;
      return $this;
    }

}
