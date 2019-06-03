<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP;

class GetSettings
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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

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
     * @param string $inAssetSourceID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inIncludeInheritable
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inSettingsNames = null, $inIncludeInheritable = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetSettings
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
      return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetSettings
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\GetSettings
     */
    public function setInIncludeInheritable($inIncludeInheritable)
    {
      $this->inIncludeInheritable = $inIncludeInheritable;
      return $this;
    }

}
