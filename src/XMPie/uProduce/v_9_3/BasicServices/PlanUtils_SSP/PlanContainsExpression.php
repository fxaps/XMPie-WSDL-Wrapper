<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP;

class PlanContainsExpression
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
     * @var ArrayOfString $inExpressionTypes
     */
    protected $inExpressionTypes = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param ArrayOfString $inExpressionTypes
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inExpressionTypes = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inExpressionTypes = $inExpressionTypes;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\PlanContainsExpression
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\PlanContainsExpression
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\PlanContainsExpression
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInExpressionTypes()
    {
      return $this->inExpressionTypes;
    }

    /**
     * @param ArrayOfString $inExpressionTypes
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\BasicServices\PlanUtils_SSP\PlanContainsExpression
     */
    public function setInExpressionTypes($inExpressionTypes)
    {
      $this->inExpressionTypes = $inExpressionTypes;
      return $this;
    }

}
