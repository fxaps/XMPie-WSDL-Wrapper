<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP;

class ValidateFriendlyURL
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
     * @var string $inFriendlyDomain
     */
    protected $inFriendlyDomain = null;

    /**
     * @var string $inFriendlyFolder
     */
    protected $inFriendlyFolder = null;

    /**
     * @var string $inLandingPage
     */
    protected $inLandingPage = null;

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
     * @param string $inFriendlyDomain
     * @param string $inFriendlyFolder
     * @param string $inLandingPage
     * @param boolean $inFriendlyRedirectMode
     * @param boolean $inFriendlyRIDPrefix
     */
    public function __construct($inUsername = null, $inPassword = null, $inFriendlyDomain = null, $inFriendlyFolder = null, $inLandingPage = null, $inFriendlyRedirectMode = null, $inFriendlyRIDPrefix = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFriendlyDomain = $inFriendlyDomain;
      $this->inFriendlyFolder = $inFriendlyFolder;
      $this->inLandingPage = $inLandingPage;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
     */
    public function setInFriendlyFolder($inFriendlyFolder)
    {
      $this->inFriendlyFolder = $inFriendlyFolder;
      return $this;
    }

    /**
     * @return string
     */
    public function getInLandingPage()
    {
      return $this->inLandingPage;
    }

    /**
     * @param string $inLandingPage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
     */
    public function setInLandingPage($inLandingPage)
    {
      $this->inLandingPage = $inLandingPage;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\GeneralUtils_SSP\ValidateFriendlyURL
     */
    public function setInFriendlyRIDPrefix($inFriendlyRIDPrefix)
    {
      $this->inFriendlyRIDPrefix = $inFriendlyRIDPrefix;
      return $this;
    }

}
