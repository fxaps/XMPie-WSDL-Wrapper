<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP;

class GetLastJob
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
     * @var boolean $inIncludeDeleted
     */
    protected $inIncludeDeleted = null;

    /**
     * @var boolean $inIncludeFailed
     */
    protected $inIncludeFailed = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param boolean $inIncludeDeleted
     * @param boolean $inIncludeFailed
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inIncludeDeleted = null, $inIncludeFailed = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inIncludeDeleted = $inIncludeDeleted;
      $this->inIncludeFailed = $inIncludeFailed;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetLastJob
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetLastJob
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetLastJob
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeDeleted()
    {
      return $this->inIncludeDeleted;
    }

    /**
     * @param boolean $inIncludeDeleted
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetLastJob
     */
    public function setInIncludeDeleted($inIncludeDeleted)
    {
      $this->inIncludeDeleted = $inIncludeDeleted;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeFailed()
    {
      return $this->inIncludeFailed;
    }

    /**
     * @param boolean $inIncludeFailed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Plan_SSP\GetLastJob
     */
    public function setInIncludeFailed($inIncludeFailed)
    {
      $this->inIncludeFailed = $inIncludeFailed;
      return $this;
    }

}
