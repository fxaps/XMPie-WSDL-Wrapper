<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class GetADOR
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
     * @var string $inADORName
     */
    protected $inADORName = null;

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
     * @param string $inADORName
     * @param string $inIOType
     * @param boolean $inTrivialPlan
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inADORName = null, $inIOType = null, $inTrivialPlan = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inADORName = $inADORName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInADORName()
    {
      return $this->inADORName;
    }

    /**
     * @param string $inADORName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
     */
    public function setInADORName($inADORName)
    {
      $this->inADORName = $inADORName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetADOR
     */
    public function setInTrivialPlan($inTrivialPlan)
    {
      $this->inTrivialPlan = $inTrivialPlan;
      return $this;
    }

}
