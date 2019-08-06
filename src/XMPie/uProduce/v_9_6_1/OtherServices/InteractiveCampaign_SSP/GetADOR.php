<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP;

class GetADOR
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

    /**
     * @var string $inADORName
     */
    protected $inADORName = null;

    /**
     * @var string $inIOType
     */
    protected $inIOType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param string $inADORName
     * @param string $inIOType
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inADORName = null, $inIOType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inADORName = $inADORName;
      $this->inIOType = $inIOType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
      return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
      return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInADORName()
    {
      return $this->inADORName;
    }

    /**
     * @param string $inADORName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInADORName($inADORName)
    {
      $this->inADORName = $inADORName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInIOType()
    {
      return $this->inIOType;
    }

    /**
     * @param string $inIOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\OtherServices\InteractiveCampaign_SSP\GetADOR
     */
    public function setInIOType($inIOType)
    {
      $this->inIOType = $inIOType;
      return $this;
    }

}
