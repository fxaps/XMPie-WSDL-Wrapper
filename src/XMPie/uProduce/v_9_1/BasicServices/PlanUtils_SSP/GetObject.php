<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class GetObject
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
     * @var string $inObjectName
     */
    protected $inObjectName = null;

    /**
     * @var string $inObjectType
     */
    protected $inObjectType = null;

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
     * @param string $inObjectName
     * @param string $inObjectType
     * @param string $inIOType
     * @param boolean $inTrivialPlan
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inObjectName = null, $inObjectType = null, $inIOType = null, $inTrivialPlan = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inObjectName = $inObjectName;
      $this->inObjectType = $inObjectType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInObjectName()
    {
      return $this->inObjectName;
    }

    /**
     * @param string $inObjectName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
     */
    public function setInObjectName($inObjectName)
    {
      $this->inObjectName = $inObjectName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInObjectType()
    {
      return $this->inObjectType;
    }

    /**
     * @param string $inObjectType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
     */
    public function setInObjectType($inObjectType)
    {
      $this->inObjectType = $inObjectType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\GetObject
     */
    public function setInTrivialPlan($inTrivialPlan)
    {
      $this->inTrivialPlan = $inTrivialPlan;
      return $this;
    }

}
