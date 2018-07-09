<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP;

class IsEmptyExpression
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
     * @var string $inExpression
     */
    protected $inExpression = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inExpression
     */
    public function __construct($inUsername = null, $inPassword = null, $inExpression = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inExpression = $inExpression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\IsEmptyExpression
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\IsEmptyExpression
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInExpression()
    {
      return $this->inExpression;
    }

    /**
     * @param string $inExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\PlanUtils_SSP\IsEmptyExpression
     */
    public function setInExpression($inExpression)
    {
      $this->inExpression = $inExpression;
      return $this;
    }

}
