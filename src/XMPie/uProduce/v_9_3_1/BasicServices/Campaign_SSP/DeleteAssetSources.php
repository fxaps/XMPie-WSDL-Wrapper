<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP;

class DeleteAssetSources
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
     * @var ArrayOfString $inAssetSourceIDArray
     */
    protected $inAssetSourceIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inAssetSourceIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inAssetSourceIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inAssetSourceIDArray = $inAssetSourceIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\DeleteAssetSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\DeleteAssetSources
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\DeleteAssetSources
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAssetSourceIDArray()
    {
      return $this->inAssetSourceIDArray;
    }

    /**
     * @param ArrayOfString $inAssetSourceIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_3_1\BasicServices\Campaign_SSP\DeleteAssetSources
     */
    public function setInAssetSourceIDArray($inAssetSourceIDArray)
    {
      $this->inAssetSourceIDArray = $inAssetSourceIDArray;
      return $this;
    }

}
