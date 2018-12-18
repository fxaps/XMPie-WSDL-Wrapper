<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP;

class IsMatchingToPlan
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
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @var string $inRecipientTableID
     */
    protected $inRecipientTableID = null;

    /**
     * @var boolean $inUseMapping
     */
    protected $inUseMapping = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inDataSourceID
     * @param string $inRecipientTableID
     * @param boolean $inUseMapping
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inDataSourceID = null, $inRecipientTableID = null, $inUseMapping = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inDataSourceID = $inDataSourceID;
      $this->inRecipientTableID = $inRecipientTableID;
      $this->inUseMapping = $inUseMapping;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceID()
    {
      return $this->inDataSourceID;
    }

    /**
     * @param string $inDataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientTableID()
    {
      return $this->inRecipientTableID;
    }

    /**
     * @param string $inRecipientTableID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
     */
    public function setInRecipientTableID($inRecipientTableID)
    {
      $this->inRecipientTableID = $inRecipientTableID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInUseMapping()
    {
      return $this->inUseMapping;
    }

    /**
     * @param boolean $inUseMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\RecipientTable_SSP\IsMatchingToPlan
     */
    public function setInUseMapping($inUseMapping)
    {
      $this->inUseMapping = $inUseMapping;
      return $this;
    }

}
