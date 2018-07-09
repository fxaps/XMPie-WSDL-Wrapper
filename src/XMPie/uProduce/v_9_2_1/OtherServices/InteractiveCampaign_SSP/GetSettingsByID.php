<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP;

class GetSettingsByID
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
     * @var string $inPortID
     */
    protected $inPortID = null;

    /**
     * @var ArrayOfString $inSettingsNames
     */
    protected $inSettingsNames = null;

    /**
     * @var boolean $inIncludeInheritable
     */
    protected $inIncludeInheritable = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPortID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inIncludeInheritable
     */
    public function __construct($inUsername = null, $inPassword = null, $inPortID = null, $inSettingsNames = null, $inIncludeInheritable = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPortID = $inPortID;
      $this->inSettingsNames = $inSettingsNames;
      $this->inIncludeInheritable = $inIncludeInheritable;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPortID()
    {
      return $this->inPortID;
    }

    /**
     * @param string $inPortID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByID
     */
    public function setInPortID($inPortID)
    {
      $this->inPortID = $inPortID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSettingsNames()
    {
      return $this->inSettingsNames;
    }

    /**
     * @param ArrayOfString $inSettingsNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByID
     */
    public function setInSettingsNames($inSettingsNames)
    {
      $this->inSettingsNames = $inSettingsNames;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeInheritable()
    {
      return $this->inIncludeInheritable;
    }

    /**
     * @param boolean $inIncludeInheritable
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\OtherServices\InteractiveCampaign_SSP\GetSettingsByID
     */
    public function setInIncludeInheritable($inIncludeInheritable)
    {
      $this->inIncludeInheritable = $inIncludeInheritable;
      return $this;
    }

}
