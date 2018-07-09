<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP;

class SetTouchPoint
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
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param string $inTouchPointID
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inTouchPointID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
      $this->inTouchPointID = $inTouchPointID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP\SetTouchPoint
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP\SetTouchPoint
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP\SetTouchPoint
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointID()
    {
      return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\ProductionServices\Job_SSP\SetTouchPoint
     */
    public function setInTouchPointID($inTouchPointID)
    {
      $this->inTouchPointID = $inTouchPointID;
      return $this;
    }

}
