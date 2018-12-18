<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP;

class ConvertToWebReady
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
     * @var string $inInsertExpression
     */
    protected $inInsertExpression = null;

    /**
     * @var boolean $inOverrideInsertExpression
     */
    protected $inOverrideInsertExpression = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inInsertExpression
     * @param boolean $inOverrideInsertExpression
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inInsertExpression = null, $inOverrideInsertExpression = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inInsertExpression = $inInsertExpression;
      $this->inOverrideInsertExpression = $inOverrideInsertExpression;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP\ConvertToWebReady
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP\ConvertToWebReady
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP\ConvertToWebReady
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInInsertExpression()
    {
      return $this->inInsertExpression;
    }

    /**
     * @param string $inInsertExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP\ConvertToWebReady
     */
    public function setInInsertExpression($inInsertExpression)
    {
      $this->inInsertExpression = $inInsertExpression;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInOverrideInsertExpression()
    {
      return $this->inOverrideInsertExpression;
    }

    /**
     * @param boolean $inOverrideInsertExpression
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Plan_SSP\ConvertToWebReady
     */
    public function setInOverrideInsertExpression($inOverrideInsertExpression)
    {
      $this->inOverrideInsertExpression = $inOverrideInsertExpression;
      return $this;
    }

}
