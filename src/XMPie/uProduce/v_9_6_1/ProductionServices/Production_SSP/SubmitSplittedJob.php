<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP;

class SubmitSplittedJob
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
     * @var string $inJobTicket
     */
    protected $inJobTicket = null;

    /**
     * @var string $inSplittingType
     */
    protected $inSplittingType = null;

    /**
     * @var string $inSplittingInfo
     */
    protected $inSplittingInfo = null;

    /**
     * @var string $inPriority
     */
    protected $inPriority = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobTicket
     * @param string $inSplittingType
     * @param string $inSplittingInfo
     * @param string $inPriority
     * @param string $inTouchPointID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobTicket = null, $inSplittingType = null, $inSplittingInfo = null, $inPriority = null, $inTouchPointID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobTicket = $inJobTicket;
      $this->inSplittingType = $inSplittingType;
      $this->inSplittingInfo = $inSplittingInfo;
      $this->inPriority = $inPriority;
      $this->inTouchPointID = $inTouchPointID;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobTicket()
    {
      return $this->inJobTicket;
    }

    /**
     * @param string $inJobTicket
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInJobTicket($inJobTicket)
    {
      $this->inJobTicket = $inJobTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSplittingType()
    {
      return $this->inSplittingType;
    }

    /**
     * @param string $inSplittingType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInSplittingType($inSplittingType)
    {
      $this->inSplittingType = $inSplittingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSplittingInfo()
    {
      return $this->inSplittingInfo;
    }

    /**
     * @param string $inSplittingInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInSplittingInfo($inSplittingInfo)
    {
      $this->inSplittingInfo = $inSplittingInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPriority()
    {
      return $this->inPriority;
    }

    /**
     * @param string $inPriority
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInPriority($inPriority)
    {
      $this->inPriority = $inPriority;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInTouchPointID($inTouchPointID)
    {
      $this->inTouchPointID = $inTouchPointID;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\ProductionServices\Production_SSP\SubmitSplittedJob
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
