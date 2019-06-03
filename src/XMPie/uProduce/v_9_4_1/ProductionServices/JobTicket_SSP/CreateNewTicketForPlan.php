<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class CreateNewTicketForPlan
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

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
     * @param string $inPlanID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inRITableName = null, $inFlatOriented = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\CreateNewTicketForPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\CreateNewTicketForPlan
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
      return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\CreateNewTicketForPlan
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\CreateNewTicketForPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\CreateNewTicketForPlan
     */
    public function setInFlatOriented($inFlatOriented)
    {
      $this->inFlatOriented = $inFlatOriented;
      return $this;
    }

}
