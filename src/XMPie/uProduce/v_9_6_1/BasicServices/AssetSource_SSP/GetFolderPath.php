<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP;

class GetFolderPath
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetFolderPath
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetFolderPath
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_6_1\BasicServices\AssetSource_SSP\GetFolderPath
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

}
