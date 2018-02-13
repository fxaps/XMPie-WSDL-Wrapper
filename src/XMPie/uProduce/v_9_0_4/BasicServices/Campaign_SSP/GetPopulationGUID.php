<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP;

class GetPopulationGUID
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
     * @var string $inPopulationName
     */
    protected $inPopulationName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inPopulationName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inPopulationName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inPopulationName = $inPopulationName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPopulationGUID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPopulationGUID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPopulationGUID
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationName()
    {
      return $this->inPopulationName;
    }

    /**
     * @param string $inPopulationName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_4\BasicServices\Campaign_SSP\GetPopulationGUID
     */
    public function setInPopulationName($inPopulationName)
    {
      $this->inPopulationName = $inPopulationName;
      return $this;
    }

}
