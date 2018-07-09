<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP;

class GetTabularADORColumn
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
     * @var string $inTabularADORName
     */
    protected $inTabularADORName = null;

    /**
     * @var string $inColumnName
     */
    protected $inColumnName = null;

    /**
     * @var boolean $inTrivialPlan
     */
    protected $inTrivialPlan = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inTabularADORName
     * @param string $inColumnName
     * @param boolean $inTrivialPlan
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inTabularADORName = null, $inColumnName = null, $inTrivialPlan = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inTabularADORName = $inTabularADORName;
      $this->inColumnName = $inColumnName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTabularADORName()
    {
      return $this->inTabularADORName;
    }

    /**
     * @param string $inTabularADORName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
     */
    public function setInTabularADORName($inTabularADORName)
    {
      $this->inTabularADORName = $inTabularADORName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInColumnName()
    {
      return $this->inColumnName;
    }

    /**
     * @param string $inColumnName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
     */
    public function setInColumnName($inColumnName)
    {
      $this->inColumnName = $inColumnName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\PlanUtils_SSP\GetTabularADORColumn
     */
    public function setInTrivialPlan($inTrivialPlan)
    {
      $this->inTrivialPlan = $inTrivialPlan;
      return $this;
    }

}
