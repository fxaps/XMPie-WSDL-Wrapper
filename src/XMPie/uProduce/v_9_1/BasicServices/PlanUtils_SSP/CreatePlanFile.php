<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class CreatePlanFile
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
     * @var PlanStructure $inPlanStructure
     */
    protected $inPlanStructure = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param PlanStructure $inPlanStructure
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanStructure = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanStructure = $inPlanStructure;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\CreatePlanFile
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\CreatePlanFile
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return PlanStructure
     */
    public function getInPlanStructure()
    {
      return $this->inPlanStructure;
    }

    /**
     * @param PlanStructure $inPlanStructure
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\CreatePlanFile
     */
    public function setInPlanStructure($inPlanStructure)
    {
      $this->inPlanStructure = $inPlanStructure;
      return $this;
    }

}
