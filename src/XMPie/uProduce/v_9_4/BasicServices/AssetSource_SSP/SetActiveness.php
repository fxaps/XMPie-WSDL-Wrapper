<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSource_SSP;

class SetActiveness
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
     * @var boolean $isActive
     */
    protected $isActive = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param boolean $isActive
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $isActive = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->isActive = $isActive;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSource_SSP\SetActiveness
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSource_SSP\SetActiveness
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSource_SSP\SetActiveness
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_4\BasicServices\AssetSource_SSP\SetActiveness
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

}
