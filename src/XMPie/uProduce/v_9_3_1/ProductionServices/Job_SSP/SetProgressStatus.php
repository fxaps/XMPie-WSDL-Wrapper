<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP;

class SetProgressStatus
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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var string $inProgressMethod
     */
    protected $inProgressMethod = null;

    /**
     * @var ArrayOfProperty $inProgressProps
     */
    protected $inProgressProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param string $inProgressMethod
     * @param ArrayOfProperty $inProgressProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inProgressMethod = null, $inProgressProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
      $this->inProgressMethod = $inProgressMethod;
      $this->inProgressProps = $inProgressProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\SetProgressStatus
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\SetProgressStatus
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
      return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\SetProgressStatus
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInProgressMethod()
    {
      return $this->inProgressMethod;
    }

    /**
     * @param string $inProgressMethod
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\SetProgressStatus
     */
    public function setInProgressMethod($inProgressMethod)
    {
      $this->inProgressMethod = $inProgressMethod;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProgressProps()
    {
      return $this->inProgressProps;
    }

    /**
     * @param ArrayOfProperty $inProgressProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\ProductionServices\Job_SSP\SetProgressStatus
     */
    public function setInProgressProps($inProgressProps)
    {
      $this->inProgressProps = $inProgressProps;
      return $this;
    }

}
