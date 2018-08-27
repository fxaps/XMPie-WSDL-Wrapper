<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP;

class Test
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
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var string $inJobTicket
     */
    protected $inJobTicket = null;

    /**
     * @var string $inJobName
     */
    protected $inJobName = null;

    /**
     * @var string $inPriority
     */
    protected $inPriority = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param string $inJobTicket
     * @param string $inJobName
     * @param string $inPriority
     * @param string $inTouchPointID
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inJobTicket = null, $inJobName = null, $inPriority = null, $inTouchPointID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inJobTicket = $inJobTicket;
      $this->inJobName = $inJobName;
      $this->inPriority = $inPriority;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
      return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
      $this->inEmailMarketingID = $inEmailMarketingID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
     */
    public function setInJobTicket($inJobTicket)
    {
      $this->inJobTicket = $inJobTicket;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobName()
    {
      return $this->inJobName;
    }

    /**
     * @param string $inJobName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
     */
    public function setInJobName($inJobName)
    {
      $this->inJobName = $inJobName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Test
     */
    public function setInTouchPointID($inTouchPointID)
    {
      $this->inTouchPointID = $inTouchPointID;
      return $this;
    }

}
