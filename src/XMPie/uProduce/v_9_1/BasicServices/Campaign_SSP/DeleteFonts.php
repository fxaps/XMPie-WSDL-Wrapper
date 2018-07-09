<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP;

class DeleteFonts
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
     * @var ArrayOfString $inFontIDArray
     */
    protected $inFontIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inFontIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inFontIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inFontIDArray = $inFontIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteFonts
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteFonts
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteFonts
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInFontIDArray()
    {
      return $this->inFontIDArray;
    }

    /**
     * @param ArrayOfString $inFontIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_1\BasicServices\Campaign_SSP\DeleteFonts
     */
    public function setInFontIDArray($inFontIDArray)
    {
      $this->inFontIDArray = $inFontIDArray;
      return $this;
    }

}
