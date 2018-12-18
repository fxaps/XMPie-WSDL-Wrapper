<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP;

class GetVariable
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
     * @var string $inVariableName
     */
    protected $inVariableName = null;

    /**
     * @var string $inIOType
     */
    protected $inIOType = null;

    /**
     * @var boolean $inTrivialPlan
     */
    protected $inTrivialPlan = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inVariableName
     * @param string $inIOType
     * @param boolean $inTrivialPlan
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inVariableName = null, $inIOType = null, $inTrivialPlan = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inVariableName = $inVariableName;
      $this->inIOType = $inIOType;
      $this->inTrivialPlan = $inTrivialPlan;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInVariableName()
    {
      return $this->inVariableName;
    }

    /**
     * @param string $inVariableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
     */
    public function setInVariableName($inVariableName)
    {
      $this->inVariableName = $inVariableName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInIOType()
    {
      return $this->inIOType;
    }

    /**
     * @param string $inIOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
     */
    public function setInIOType($inIOType)
    {
      $this->inIOType = $inIOType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInTrivialPlan()
    {
      return $this->inTrivialPlan;
    }

    /**
     * @param boolean $inTrivialPlan
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\PlanUtils_SSP\GetVariable
     */
    public function setInTrivialPlan($inTrivialPlan)
    {
      $this->inTrivialPlan = $inTrivialPlan;
      return $this;
    }

}
