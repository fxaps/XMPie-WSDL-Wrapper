<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetSplittedJobInfo
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var int $inSplitNum
     */
    protected $inSplitNum = null;

    /**
     * @var int $inSplitType
     */
    protected $inSplitType = null;

    /**
     * @var int $inOrigFrom
     */
    protected $inOrigFrom = null;

    /**
     * @var int $inOrigTo
     */
    protected $inOrigTo = null;

    /**
     * @var boolean $inMergeOutput
     */
    protected $inMergeOutput = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inSplitNum
     * @param int $inSplitType
     * @param int $inOrigFrom
     * @param int $inOrigTo
     * @param boolean $inMergeOutput
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSplitNum = null, $inSplitType = null, $inOrigFrom = null, $inOrigTo = null, $inMergeOutput = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inSplitNum = $inSplitNum;
      $this->inSplitType = $inSplitType;
      $this->inOrigFrom = $inOrigFrom;
      $this->inOrigTo = $inOrigTo;
      $this->inMergeOutput = $inMergeOutput;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
      return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInSplitNum()
    {
      return $this->inSplitNum;
    }

    /**
     * @param int $inSplitNum
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInSplitNum($inSplitNum)
    {
      $this->inSplitNum = $inSplitNum;
      return $this;
    }

    /**
     * @return int
     */
    public function getInSplitType()
    {
      return $this->inSplitType;
    }

    /**
     * @param int $inSplitType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInSplitType($inSplitType)
    {
      $this->inSplitType = $inSplitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrigFrom()
    {
      return $this->inOrigFrom;
    }

    /**
     * @param int $inOrigFrom
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInOrigFrom($inOrigFrom)
    {
      $this->inOrigFrom = $inOrigFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getInOrigTo()
    {
      return $this->inOrigTo;
    }

    /**
     * @param int $inOrigTo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInOrigTo($inOrigTo)
    {
      $this->inOrigTo = $inOrigTo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInMergeOutput()
    {
      return $this->inMergeOutput;
    }

    /**
     * @param boolean $inMergeOutput
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetSplittedJobInfo
     */
    public function setInMergeOutput($inMergeOutput)
    {
      $this->inMergeOutput = $inMergeOutput;
      return $this;
    }

}
