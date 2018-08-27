<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP;

class Preflight
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param string $inJobTicket
     * @param string $inJobName
     * @param string $inPriority
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inJobTicket = null, $inJobName = null, $inPriority = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inEmailMarketingID = $inEmailMarketingID;
      $this->inJobTicket = $inJobTicket;
      $this->inJobName = $inJobName;
      $this->inPriority = $inPriority;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3\OtherServices\EmailMarketing_SSP\Preflight
     */
    public function setInPriority($inPriority)
    {
      $this->inPriority = $inPriority;
      return $this;
    }

}
