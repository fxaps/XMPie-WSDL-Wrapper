<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP;

class CloneCustom
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
     * @var string $inTargetCampaignID
     */
    protected $inTargetCampaignID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param string $inTargetCampaignID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inTargetCampaignID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inTargetCampaignID = $inTargetCampaignID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\CloneCustom
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\CloneCustom
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\CloneCustom
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetCampaignID()
    {
      return $this->inTargetCampaignID;
    }

    /**
     * @param string $inTargetCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\CloneCustom
     */
    public function setInTargetCampaignID($inTargetCampaignID)
    {
      $this->inTargetCampaignID = $inTargetCampaignID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\CloneCustom
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}
