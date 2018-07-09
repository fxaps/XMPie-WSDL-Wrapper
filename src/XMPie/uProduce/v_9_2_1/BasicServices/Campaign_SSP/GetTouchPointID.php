<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP;

class GetTouchPointID
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
     * @var string $inTouchPointName
     */
    protected $inTouchPointName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inTouchPointName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inTouchPointName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inTouchPointName = $inTouchPointName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetTouchPointID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetTouchPointID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetTouchPointID
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointName()
    {
      return $this->inTouchPointName;
    }

    /**
     * @param string $inTouchPointName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\Campaign_SSP\GetTouchPointID
     */
    public function setInTouchPointName($inTouchPointName)
    {
      $this->inTouchPointName = $inTouchPointName;
      return $this;
    }

}
