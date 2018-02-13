<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP;

class SetPlan
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
     * @var string $inPlanFilePath
     */
    protected $inPlanFilePath = null;

    /**
     * @var boolean $inUseTrivial
     */
    protected $inUseTrivial = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inPlanFilePath
     * @param boolean $inUseTrivial
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inPlanFilePath = null, $inUseTrivial = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inPlanFilePath = $inPlanFilePath;
      $this->inUseTrivial = $inUseTrivial;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetPlan
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPlanFilePath()
    {
      return $this->inPlanFilePath;
    }

    /**
     * @param string $inPlanFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetPlan
     */
    public function setInPlanFilePath($inPlanFilePath)
    {
      $this->inPlanFilePath = $inPlanFilePath;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInUseTrivial()
    {
      return $this->inUseTrivial;
    }

    /**
     * @param boolean $inUseTrivial
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\ProductionServices\JobTicket_SSP\SetPlan
     */
    public function setInUseTrivial($inUseTrivial)
    {
      $this->inUseTrivial = $inUseTrivial;
      return $this;
    }

}
