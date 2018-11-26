<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP;

class GetID
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
     * @var string $inAssetSourceName
     */
    protected $inAssetSourceName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inAssetSourceName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inAssetSourceName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inAssetSourceName = $inAssetSourceName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetID
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceName()
    {
      return $this->inAssetSourceName;
    }

    /**
     * @param string $inAssetSourceName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\AssetSource_SSP\GetID
     */
    public function setInAssetSourceName($inAssetSourceName)
    {
      $this->inAssetSourceName = $inAssetSourceName;
      return $this;
    }

}
