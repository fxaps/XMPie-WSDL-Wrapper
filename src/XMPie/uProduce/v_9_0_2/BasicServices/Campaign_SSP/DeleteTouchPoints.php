<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP;

class DeleteTouchPoints
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
     * @var ArrayOfString $inTouchPointIDArray
     */
    protected $inTouchPointIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inTouchPointIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inTouchPointIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inTouchPointIDArray = $inTouchPointIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\DeleteTouchPoints
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\DeleteTouchPoints
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\DeleteTouchPoints
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInTouchPointIDArray()
    {
      return $this->inTouchPointIDArray;
    }

    /**
     * @param ArrayOfString $inTouchPointIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_0_2\BasicServices\Campaign_SSP\DeleteTouchPoints
     */
    public function setInTouchPointIDArray($inTouchPointIDArray)
    {
      $this->inTouchPointIDArray = $inTouchPointIDArray;
      return $this;
    }

}
