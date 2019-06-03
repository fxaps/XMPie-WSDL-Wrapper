<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP;

class DeleteAssets
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
     * @var ArrayOfString $inAssetIDArray
     */
    protected $inAssetIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param ArrayOfString $inAssetIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inAssetIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inAssetIDArray = $inAssetIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\DeleteAssets
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\DeleteAssets
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\DeleteAssets
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAssetIDArray()
    {
      return $this->inAssetIDArray;
    }

    /**
     * @param ArrayOfString $inAssetIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4_1\BasicServices\AssetSource_SSP\DeleteAssets
     */
    public function setInAssetIDArray($inAssetIDArray)
    {
      $this->inAssetIDArray = $inAssetIDArray;
      return $this;
    }

}
