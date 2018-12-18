<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP;

class SetTrackAllTextADORs
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var boolean $inStatus
     */
    protected $inStatus = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param boolean $inStatus
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inStatus = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inStatus = $inStatus;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\SetTrackAllTextADORs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\SetTrackAllTextADORs
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
      return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\SetTrackAllTextADORs
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInStatus()
    {
      return $this->inStatus;
    }

    /**
     * @param boolean $inStatus
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\Campaign_SSP\SetTrackAllTextADORs
     */
    public function setInStatus($inStatus)
    {
      $this->inStatus = $inStatus;
      return $this;
    }

}
