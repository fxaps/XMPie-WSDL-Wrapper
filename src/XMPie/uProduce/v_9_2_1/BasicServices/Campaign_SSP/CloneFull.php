<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class CloneFull
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
     * @var string $inTargetAccountID
     */
    protected $inTargetAccountID = null;

    /**
     * @var string $inTargetName
     */
    protected $inTargetName = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inTargetAccountID
     * @param string $inTargetName
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inTargetAccountID = null, $inTargetName = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inTargetAccountID = $inTargetAccountID;
      $this->inTargetName = $inTargetName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetAccountID()
    {
      return $this->inTargetAccountID;
    }

    /**
     * @param string $inTargetAccountID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
     */
    public function setInTargetAccountID($inTargetAccountID)
    {
      $this->inTargetAccountID = $inTargetAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetName()
    {
      return $this->inTargetName;
    }

    /**
     * @param string $inTargetName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
     */
    public function setInTargetName($inTargetName)
    {
      $this->inTargetName = $inTargetName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\CloneFull
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
