<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP;

class GetTabularADORColumn
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
     * @var string $inTabularADORName
     */
    protected $inTabularADORName = null;

    /**
     * @var string $inColumnName
     */
    protected $inColumnName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param string $inTabularADORName
     * @param string $inColumnName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inTabularADORName = null, $inColumnName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inTabularADORName = $inTabularADORName;
      $this->inColumnName = $inColumnName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTabularADORName()
    {
      return $this->inTabularADORName;
    }

    /**
     * @param string $inTabularADORName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
     */
    public function setInTabularADORName($inTabularADORName)
    {
      $this->inTabularADORName = $inTabularADORName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInColumnName()
    {
      return $this->inColumnName;
    }

    /**
     * @param string $inColumnName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\OtherServices\InteractiveCampaign_SSP\GetTabularADORColumn
     */
    public function setInColumnName($inColumnName)
    {
      $this->inColumnName = $inColumnName;
      return $this;
    }

}
