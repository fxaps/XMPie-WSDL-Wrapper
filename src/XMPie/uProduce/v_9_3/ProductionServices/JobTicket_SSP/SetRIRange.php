<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP;

class SetRIRange
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
     * @var int $inRangeFrom
     */
    protected $inRangeFrom = null;

    /**
     * @var int $inRangeTo
     */
    protected $inRangeTo = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inRangeFrom
     * @param int $inRangeTo
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRangeFrom = null, $inRangeTo = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inRangeFrom = $inRangeFrom;
      $this->inRangeTo = $inRangeTo;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIRange
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIRange
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIRange
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInRangeFrom()
    {
      return $this->inRangeFrom;
    }

    /**
     * @param int $inRangeFrom
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIRange
     */
    public function setInRangeFrom($inRangeFrom)
    {
      $this->inRangeFrom = $inRangeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getInRangeTo()
    {
      return $this->inRangeTo;
    }

    /**
     * @param int $inRangeTo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\ProductionServices\JobTicket_SSP\SetRIRange
     */
    public function setInRangeTo($inRangeTo)
    {
      $this->inRangeTo = $inRangeTo;
      return $this;
    }

}
