<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP;

class SetFriendliness
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
     * @var string $inFriendlyDomain
     */
    protected $inFriendlyDomain = null;

    /**
     * @var string $inFriendlyFolder
     */
    protected $inFriendlyFolder = null;

    /**
     * @var string $inFriendlyLandingPage
     */
    protected $inFriendlyLandingPage = null;

    /**
     * @var boolean $inFriendlyRedirectMode
     */
    protected $inFriendlyRedirectMode = null;

    /**
     * @var boolean $inFriendlyRIDPrefix
     */
    protected $inFriendlyRIDPrefix = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inFriendlyDomain
     * @param string $inFriendlyFolder
     * @param string $inFriendlyLandingPage
     * @param boolean $inFriendlyRedirectMode
     * @param boolean $inFriendlyRIDPrefix
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inFriendlyDomain = null, $inFriendlyFolder = null, $inFriendlyLandingPage = null, $inFriendlyRedirectMode = null, $inFriendlyRIDPrefix = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inFriendlyDomain = $inFriendlyDomain;
      $this->inFriendlyFolder = $inFriendlyFolder;
      $this->inFriendlyLandingPage = $inFriendlyLandingPage;
      $this->inFriendlyRedirectMode = $inFriendlyRedirectMode;
      $this->inFriendlyRIDPrefix = $inFriendlyRIDPrefix;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFriendlyDomain()
    {
      return $this->inFriendlyDomain;
    }

    /**
     * @param string $inFriendlyDomain
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInFriendlyDomain($inFriendlyDomain)
    {
      $this->inFriendlyDomain = $inFriendlyDomain;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFriendlyFolder()
    {
      return $this->inFriendlyFolder;
    }

    /**
     * @param string $inFriendlyFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInFriendlyFolder($inFriendlyFolder)
    {
      $this->inFriendlyFolder = $inFriendlyFolder;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFriendlyLandingPage()
    {
      return $this->inFriendlyLandingPage;
    }

    /**
     * @param string $inFriendlyLandingPage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInFriendlyLandingPage($inFriendlyLandingPage)
    {
      $this->inFriendlyLandingPage = $inFriendlyLandingPage;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFriendlyRedirectMode()
    {
      return $this->inFriendlyRedirectMode;
    }

    /**
     * @param boolean $inFriendlyRedirectMode
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInFriendlyRedirectMode($inFriendlyRedirectMode)
    {
      $this->inFriendlyRedirectMode = $inFriendlyRedirectMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInFriendlyRIDPrefix()
    {
      return $this->inFriendlyRIDPrefix;
    }

    /**
     * @param boolean $inFriendlyRIDPrefix
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\ProductionServices\JobTicket_SSP\SetFriendliness
     */
    public function setInFriendlyRIDPrefix($inFriendlyRIDPrefix)
    {
      $this->inFriendlyRIDPrefix = $inFriendlyRIDPrefix;
      return $this;
    }

}
