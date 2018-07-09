<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSource_SSP;

class SetPriority
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
     * @var int $inPriority
     */
    protected $inPriority = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param int $inPriority
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inPriority = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inPriority = $inPriority;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSource_SSP\SetPriority
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSource_SSP\SetPriority
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSource_SSP\SetPriority
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPriority()
    {
      return $this->inPriority;
    }

    /**
     * @param int $inPriority
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_2_1\BasicServices\AssetSource_SSP\SetPriority
     */
    public function setInPriority($inPriority)
    {
      $this->inPriority = $inPriority;
      return $this;
    }

}
